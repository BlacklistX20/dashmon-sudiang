<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Temp extends BaseController
{
    public function dataTempSc()
    {
        $temp = model('TempModel');
        $temp->changeTable();

        $data = $temp->findAll();

        echo json_encode($data);
    }

    public function dataTempMn(string $table)
    {
        $temp = model('TempModel');
        $temp->changeTable($table);

        $data = $temp->get()->getLastRow();

        echo json_encode($data);
    }
}
