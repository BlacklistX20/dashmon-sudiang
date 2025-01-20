<?php

namespace App\Models;

use CodeIgniter\Model;

class LayoutModel extends Model
{
    protected $DBGroup = 'layout';
    protected $table = '';
    protected $primaryKey = 'id';

    public function changeTable(string $name)
    {
        $this->table = $name;
        return $this;
    }
}
