<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fuel extends BaseController
{
    public function dataFuel()
    {
        $daily = new \App\Models\FuelModel();
        $daily->changeTable('daily');
        $data['daily'] = $daily->get()->getLastRow();

        $monthly = new \App\Models\FuelModel();
        $monthly->changeTable('monthly');
        $data['monthly'] = $monthly->get()->getLastRow();

        echo json_encode($data);
    }
}
