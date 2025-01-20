<?php

namespace App\Models;

use CodeIgniter\Model;

class TempModel extends Model
{
    protected $table = '';
    protected $primaryKey = 'id';

    public function changeTable(string $name = 'per_second')
    {
        $this->table = $name;
        return $this;
    }
}
