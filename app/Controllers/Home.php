<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dataPue()
    {
        $today = strtotime("today");
        $startdate = strtotime("-1 weeks", $today);
        $enddate = strtotime("yesterday");
        $first = date("Y-m-d", $startdate);
        $last = date("Y-m-d", $enddate);

        $pueMn = new \App\Models\ElectricModel();
        $pueMn->changeTable();

        $pue['min'] = $pueMn->selectMin('pue')->findAll();
        $pue['avg'] = $pueMn->selectAvg('pue')->findAll();
        $pue['max'] = $pueMn->selectMax('pue')->findAll();
        $pue['week'] = $pueMn->selectAvg('pue')->where("DATE(updated_at) >=", $first)
            ->where("DATE(updated_at) <=", $last)->findAll();

        $pueSc = new \App\Models\ElectricModel();
        $pueSc->changeTable('per_second');
        $pue['rt'] = $pueSc->select('id, last_update, loads AS pue')->where('id', 1)->findAll();

        echo json_encode($pue);
    }

    public function dataTemp()
    {
        $tempSc = new \App\Models\TempModel();
        $tempSc->changeTable();
        $temp = $tempSc->findAll();
        $data['Temp4'] = (((float)$temp[11]['temp']) + ((float)$temp[12]['temp']) + ((float)$temp[13]['temp']) + ((float)$temp[14]['temp']) + ((float)$temp[15]['temp'])/5);
        $data['Hum4'] = (((float)$temp[11]['hum']) + ((float)$temp[12]['hum']) + ((float)$temp[13]['hum']) + ((float)$temp[14]['hum']) + ((float)$temp[15]['hum'])/5);

        return $this->response->setJSON($data);
    }

    public function dataChart()
    {
        $today = strtotime("today");
        $startdate = strtotime("-1 weeks", $today);
        $enddate = strtotime("yesterday");
        $first = date("Y-m-d", $startdate);
        $last = date("Y-m-d", $enddate);
        $chart['date'] = [$first, $last];

        function getDailyPueAvg($data)
        {
            // Initialize an associative array to store sums and counts
            $dailyPue = [];
            // Iterate through the data
            foreach ($data as $entry) {
                // Extract the date part from the updated_at field
                $date = date('Y-m-d', strtotime($entry['updated_at']));
                // Initialize daily sum and count if not already set
                if (!isset($dailyPue[$date])) {
                    $dailyPue[$date] = ['sum' => 0, 'count' => 0];
                }
                // Add the pue value to the sum and increment the count
                $dailyPue[$date]['sum'] += $entry['pue'];
                $dailyPue[$date]['count']++;
            }
            // Calculate the average for each day and round to 2 decimal places
            $dailyAverages = [];
            foreach ($dailyPue as $date => $values) {
                $dailyAverages[] = [
                    'updated_at' => $date,
                    'pue' => round($values['sum'] / $values['count'], 2), // Round to 2 decimal places
                ];
            }
            // Sort the result by date
            usort($dailyAverages, function ($a, $b) {
                return strtotime($a['updated_at']) <=> strtotime($b['updated_at']);
            });
            return $dailyAverages;
        }

        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $week = $pue->getPueByDate($first, $last);
        $chart['week'] = getDailyPueAvg($week);

        $chart['morning'] = $pue->getPueByTime('07:00:00', '08:00:00');
        $chart['noon'] = $pue->getPueByTime('14:00:00', '15:00:00');
        $chart['night'] = $pue->getPueByTime('20:00:00', '21:00:00');

        $lvmdp = new \App\Models\ElectricModel();
        $lvmdp->changeTable('per_second');
        $chart['lvmdp'] = $lvmdp->select('loads')->where('id', 2)->findAll();

        function filterFirstDataOfEachDay($data)
        {
            // Create an associative array to store the first entry of each day
            $firstEntries = [];
            // Iterate through the data array
            foreach ($data as $entry) {
                // Extract the date part from the updated_at field
                $date = date('Y-m-d', strtotime($entry['updated_at']));
                // Check if this date is already in the array
                if (!isset($firstEntries[$date]) || strtotime($entry['updated_at']) < strtotime($firstEntries[$date]['updated_at'])) {
                    // Add or replace the entry for this date if it is earlier
                    $firstEntries[$date] = $entry;
                }
            }
            // Convert associative array to indexed array
            $result = array_values($firstEntries);
            // Sort the result array by time (updated_at field)
            usort($result, function ($a, $b) {
                return strtotime($a['updated_at']) <=> strtotime($b['updated_at']);
            });
            return $result;
        }

        $daily = new \App\Models\FuelModel();
        $daily->changeTable('daily');
        $fuelDaily = $daily->select('updated_at, tank1, tank2')->where("DATE(updated_at) >=", $first)
            ->where("DATE(updated_at) <=", $last)->findAll();
        $chart['daily'] = filterFirstDataOfEachDay($fuelDaily);

        $monthly = new \App\Models\FuelModel();
        $monthly->changeTable('monthly');
        $fuelMonthly = $monthly->select('updated_at, tank1, tank2, tank3')->where("DATE(updated_at) >=", $first)
            ->where("DATE(updated_at) <=", $last)->findAll();
        $chart['monthly'] = filterFirstDataOfEachDay($fuelMonthly);

        echo json_encode($chart);
    }
}
