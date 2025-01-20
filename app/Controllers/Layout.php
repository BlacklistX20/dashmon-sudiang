<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Layout extends BaseController
{
    public function dataLayout(string $table = 'lantai2')
    {
        $layout = model('LayoutModel');
        $layout->changeTable($table);

        $data = $layout->get()->getLastRow();

        echo json_encode($data);
    }
}
