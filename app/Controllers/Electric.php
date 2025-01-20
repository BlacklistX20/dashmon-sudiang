<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Electric extends BaseController
{
    private function filterHourlyData($data)
    {
        $filteredData = [];
        $lastHour = null;

        foreach ($data as $record) {
            // Extract the hour from the updated_at timestamp
            $hour = date('Y-m-d H:00:00', strtotime($record['updated_at']));

            // If it's a new hour, add the record to the filtered data
            if ($hour !== $lastHour) {
                $filteredData[] = $record;
                $lastHour = $hour;
            }
        }

        return $filteredData;
    }

    public function value()
    {
        $electric = new \App\Models\ElectricModel();
        $electric->changeTable('per_second');

        $data = $electric->findAll();
        echo json_encode($data);
    }

    public function chartHour()
    {
        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $chart['pue'] = array_reverse($pue->select('id, updated_at, pue')->orderBy('id', 'DESC')->limit(12)->findAll());

        $lvmdp = new \App\Models\ElectricModel();
        $lvmdp->changeTable('lvmdp');
        $chart['lvmdp'] = array_reverse($lvmdp->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $it = new \App\Models\ElectricModel();
        $it->changeTable('it');
        $chart['it'] = array_reverse($it->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $recti = new \App\Models\ElectricModel();
        $recti->changeTable('recti');
        $chart['recti'] = array_reverse($recti->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups = new \App\Models\ElectricModel();
        $ups->changeTable('ups');
        $chart['ups'] = array_reverse($ups->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $p205 = new \App\Models\ElectricModel();
        $p205->changeTable('p205');
        $chart['p205'] = array_reverse($p205->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $p236 = new \App\Models\ElectricModel();
        $p236->changeTable('p236');
        $chart['p236'] = array_reverse($p236->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $p305 = new \App\Models\ElectricModel();
        $p305->changeTable('p305');
        $chart['p305'] = array_reverse($p305->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $p310 = new \App\Models\ElectricModel();
        $p310->changeTable('p310');
        $chart['p310'] = array_reverse($p310->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $p429 = new \App\Models\ElectricModel();
        $p429->changeTable('p429');
        $chart['p429'] = array_reverse($p429->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups202 = new \App\Models\ElectricModel();
        $ups202->changeTable('ups202');
        $chart['ups202'] = array_reverse($ups202->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups203 = new \App\Models\ElectricModel();
        $ups203->changeTable('ups203');
        $chart['ups203'] = array_reverse($ups203->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups301 = new \App\Models\ElectricModel();
        $ups301->changeTable('ups301');
        $chart['ups301'] = array_reverse($ups301->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups302 = new \App\Models\ElectricModel();
        $ups302->changeTable('ups302');
        $chart['ups302'] = array_reverse($ups302->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups501 = new \App\Models\ElectricModel();
        $ups501->changeTable('ups501');
        $chart['ups501'] = array_reverse($ups501->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        $ups502 = new \App\Models\ElectricModel();
        $ups502->changeTable('ups502');
        $chart['ups502'] = array_reverse($ups502->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(12)->findAll());

        echo json_encode($chart);
    }

    public function chartDay()
    {
        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $chart['pue'] = $this->filterHourlyData(array_reverse($pue->select('id, updated_at, pue')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $lvmdp = new \App\Models\ElectricModel();
        $lvmdp->changeTable('lvmdp');
        $chart['lvmdp'] = $this->filterHourlyData(array_reverse($lvmdp->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $it = new \App\Models\ElectricModel();
        $it->changeTable('it');
        $chart['it'] = $this->filterHourlyData(array_reverse($it->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $recti = new \App\Models\ElectricModel();
        $recti->changeTable('recti');
        $chart['recti'] = $this->filterHourlyData(array_reverse($recti->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups = new \App\Models\ElectricModel();
        $ups->changeTable('ups');
        $chart['ups'] = $this->filterHourlyData(array_reverse($ups->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $p205 = new \App\Models\ElectricModel();
        $p205->changeTable('p205');
        $chart['p205'] = $this->filterHourlyData(array_reverse($p205->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $p236 = new \App\Models\ElectricModel();
        $p236->changeTable('p236');
        $chart['p236'] = $this->filterHourlyData(array_reverse($p236->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $p305 = new \App\Models\ElectricModel();
        $p305->changeTable('p305');
        $chart['p305'] = $this->filterHourlyData(array_reverse($p305->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $p310 = new \App\Models\ElectricModel();
        $p310->changeTable('p310');
        $chart['p310'] = $this->filterHourlyData(array_reverse($p310->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $p429 = new \App\Models\ElectricModel();
        $p429->changeTable('p429');
        $chart['p429'] = $this->filterHourlyData(array_reverse($p429->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups202 = new \App\Models\ElectricModel();
        $ups202->changeTable('ups202');
        $chart['ups202'] = $this->filterHourlyData(array_reverse($ups202->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups203 = new \App\Models\ElectricModel();
        $ups203->changeTable('ups203');
        $chart['ups203'] = $this->filterHourlyData(array_reverse($ups203->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups301 = new \App\Models\ElectricModel();
        $ups301->changeTable('ups301');
        $chart['ups301'] = $this->filterHourlyData(array_reverse($ups301->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups302 = new \App\Models\ElectricModel();
        $ups302->changeTable('ups302');
        $chart['ups302'] = $this->filterHourlyData(array_reverse($ups302->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups501 = new \App\Models\ElectricModel();
        $ups501->changeTable('ups501');
        $chart['ups501'] = $this->filterHourlyData(array_reverse($ups501->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        $ups502 = new \App\Models\ElectricModel();
        $ups502->changeTable('ups502');
        $chart['ups502'] = $this->filterHourlyData(array_reverse($ups502->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(288)->findAll()));

        echo json_encode($chart);
    }

    public function chartWeek()
    {
        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $chart['pue'] = $this->filterHourlyData(array_reverse($pue->select('id, updated_at, pue')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $lvmdp = new \App\Models\ElectricModel();
        $lvmdp->changeTable('lvmdp');
        $chart['lvmdp'] = $this->filterHourlyData(array_reverse($lvmdp->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $it = new \App\Models\ElectricModel();
        $it->changeTable('it');
        $chart['it'] = $this->filterHourlyData(array_reverse($it->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $recti = new \App\Models\ElectricModel();
        $recti->changeTable('recti');
        $chart['recti'] = $this->filterHourlyData(array_reverse($recti->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups = new \App\Models\ElectricModel();
        $ups->changeTable('ups');
        $chart['ups'] = $this->filterHourlyData(array_reverse($ups->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $p205 = new \App\Models\ElectricModel();
        $p205->changeTable('p205');
        $chart['p205'] = $this->filterHourlyData(array_reverse($p205->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $p236 = new \App\Models\ElectricModel();
        $p236->changeTable('p236');
        $chart['p236'] = $this->filterHourlyData(array_reverse($p236->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $p305 = new \App\Models\ElectricModel();
        $p305->changeTable('p305');
        $chart['p305'] = $this->filterHourlyData(array_reverse($p305->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $p310 = new \App\Models\ElectricModel();
        $p310->changeTable('p310');
        $chart['p310'] = $this->filterHourlyData(array_reverse($p310->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $p429 = new \App\Models\ElectricModel();
        $p429->changeTable('p429');
        $chart['p429'] = $this->filterHourlyData(array_reverse($p429->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups202 = new \App\Models\ElectricModel();
        $ups202->changeTable('ups202');
        $chart['ups202'] = $this->filterHourlyData(array_reverse($ups202->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups203 = new \App\Models\ElectricModel();
        $ups203->changeTable('ups203');
        $chart['ups203'] = $this->filterHourlyData(array_reverse($ups203->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups301 = new \App\Models\ElectricModel();
        $ups301->changeTable('ups301');
        $chart['ups301'] = $this->filterHourlyData(array_reverse($ups301->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups302 = new \App\Models\ElectricModel();
        $ups302->changeTable('ups302');
        $chart['ups302'] = $this->filterHourlyData(array_reverse($ups302->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups501 = new \App\Models\ElectricModel();
        $ups501->changeTable('ups501');
        $chart['ups501'] = $this->filterHourlyData(array_reverse($ups501->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        $ups502 = new \App\Models\ElectricModel();
        $ups502->changeTable('ups502');
        $chart['ups502'] = $this->filterHourlyData(array_reverse($ups502->select('id, updated_at, loads')->orderBy('id', 'DESC')->limit(2016)->findAll()));

        echo json_encode($chart);
    }

    public function chartUpdate()
    {
        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $chart['pue'] = $pue->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, pue')->get()->getLastRow();

        $lvmdp = new \App\Models\ElectricModel();
        $lvmdp->changeTable('lvmdp');
        $chart['lvmdp'] = $lvmdp->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $it = new \App\Models\ElectricModel();
        $it->changeTable('it');
        $chart['it'] = $it->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $recti = new \App\Models\ElectricModel();
        $recti->changeTable('recti');
        $chart['recti'] = $recti->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();
        
        $ups = new \App\Models\ElectricModel();
        $ups->changeTable('ups');
        $chart['ups'] = $ups->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $p205 = new \App\Models\ElectricModel();
        $p205->changeTable('p205');
        $chart['p205'] = $p205->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $p236 = new \App\Models\ElectricModel();
        $p236->changeTable('p236');
        $chart['p236'] = $p236->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $p305 = new \App\Models\ElectricModel();
        $p305->changeTable('p305');
        $chart['p305'] = $p305->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $p310 = new \App\Models\ElectricModel();
        $p310->changeTable('p310');
        $chart['p310'] = $p310->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $p429 = new \App\Models\ElectricModel();
        $p429->changeTable('p429');
        $chart['p429'] = $p429->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups202 = new \App\Models\ElectricModel();
        $ups202->changeTable('ups202');
        $chart['ups202'] = $ups202->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups203 = new \App\Models\ElectricModel();
        $ups203->changeTable('ups203');
        $chart['ups203'] = $ups203->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups301 = new \App\Models\ElectricModel();
        $ups301->changeTable('ups301');
        $chart['ups301'] = $ups301->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups302 = new \App\Models\ElectricModel();
        $ups302->changeTable('ups302');
        $chart['ups302'] = $ups302->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups501 = new \App\Models\ElectricModel();
        $ups501->changeTable('ups501');
        $chart['ups501'] = $ups501->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        $ups502 = new \App\Models\ElectricModel();
        $ups502->changeTable('ups502');
        $chart['ups502'] = $ups502->select('id, DATE_FORMAT(updated_at, "%H:%i") AS time, loads')->get()->getLastRow();

        echo json_encode($chart);
    }

    public function downloadOpsi1()
    {
        // Get dates from the form submission
        $start = $this->request->getGet('startDate');
        $end = $this->request->getGet('endDate');

        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $data = $pue->select('DATE_FORMAT(updated_at, "%d-%m-%Y %I:%i:%s %p") AS timestamp, pue, it, facility')
                    ->where("DATE(updated_at) >=", $start)->where("DATE(updated_at) <=", $end)->findAll();

       // Create Excel file
       $spreadsheet = new Spreadsheet();
       $sheet = $spreadsheet->getActiveSheet();

       // Set the header row
       $headers = ['Timestamp', 'PUE', 'IT', 'Facility'];
       $sheet->fromArray($headers, null, 'A1');

       // Populate data rows
       $rowIndex = 2;
       foreach ($data as $row) {
           $sheet->fromArray(array_values($row), null, 'A' . $rowIndex);
           $rowIndex++;
       }

       // Create Excel writer and download file
       $filename = 'PUE_Data_' . $start . '_' . $end . '.xlsx';
       $writer = new Xlsx($spreadsheet);

       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
       header('Content-Disposition: attachment; filename="' . $filename . '"');
       header('Cache-Control: max-age=0');

       $writer->save('php://output');
       exit();
    }

    public function downloadOpsi2()
    {
        // Get dates from the form submission
        $start = $this->request->getGet('startDate');
        $end = $this->request->getGet('endDate');

        $pue = new \App\Models\ElectricModel();
        $pue->changeTable();
        $data = $pue->select('DATE_FORMAT(updated_at, "%d-%m-%Y %I:%i:%s %p") AS timestamp, pue, lvmdp, recti, ups')
                    ->where("DATE(updated_at) >=", $start)->where("DATE(updated_at) <=", $end)->findAll();

       // Create Excel file
       $spreadsheet = new Spreadsheet();
       $sheet = $spreadsheet->getActiveSheet();

       // Set the header row
       $headers = ['Timestamp', 'PUE', 'LVMDP', 'Recti', 'UPS'];
       $sheet->fromArray($headers, null, 'A1');

       // Populate data rows
       $rowIndex = 2;
       foreach ($data as $row) {
           $sheet->fromArray(array_values($row), null, 'A' . $rowIndex);
           $rowIndex++;
       }

       // Create Excel writer and download file
       $filename = 'PUE_Data_' . $start . '_' . $end . '.xlsx';
       $writer = new Xlsx($spreadsheet);

       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
       header('Content-Disposition: attachment; filename="' . $filename . '"');
       header('Cache-Control: max-age=0');

       $writer->save('php://output');
       exit();
    }
}
