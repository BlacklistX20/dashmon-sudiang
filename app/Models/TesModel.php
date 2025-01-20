<?php

namespace App\Models;

use CodeIgniter\Model;

class TesModel extends Model
{
    protected $DBGroup = 'power';
    protected $table = '';

    public function changeTable(string $name = 'pue')
    {
        $this->table = $name;
        return $this;
    }
}