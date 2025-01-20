<?php

namespace App\Models;

use CodeIgniter\Model;

class FuelModel extends Model
{
    protected $DBGroup = 'fuel';
    protected $table = '';
    protected $primaryKey = 'id';

    public function changeTable(string $name)
    {
        $this->table = $name;
        return $this;
    }
}
