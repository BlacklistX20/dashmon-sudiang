<?php

namespace App\Models;

use CodeIgniter\Model;

class PowerModel extends Model
{
    protected $DBGroup          = 'potency';
    protected $table            = 'power';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = ['sn', 'barcode', 'floor', 'room', 'category', 'name', 'vendor', 'brand', 'type', 'capacity', 'modul', 'modul_capacity', 'occupancy', 'aging', 'battery', 'source_a', 'source_b', 'condition', 'status', 'info', 'install', 'maintanance', 'updated_at'];

    /**
     * Get data from the database
     *
     * @param int|null $id Optional ID to get a specific record
     * @return array
     */
    public function getData($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    /**
     * Insert new data into the database
     *
     * @param array $data Data to be inserted
     * @return int|false ID of the inserted record or false on failure
     */
    public function insertData(array $data)
    {
        $data['updated_at'] = date('Y-m-d H:i:s');
        return $this->insert($data);
    }

    /**
     * Update existing data in the database
     *
     * @param int $id ID of the record to be updated
     * @param array $data Data to be updated
     * @return bool True on success, false on failure
     */
    public function updateData(int $id, array $data)
    {
        $data['updated_at'] = date('Y-m-d H:i:s');
        return $this->update($id, $data);
    }

    /**
     * Delete data from the database
     *
     * @param int $id ID of the record to be deleted
     * @return bool True on success, false on failure
     */
    public function deleteData(int $id)
    {
        return $this->delete($id);
    }

    public function getFilteredData($search, $start, $length)
    {
        $builder = $this->builder();

        if (!empty($search)) {
            $builder->groupStart()
                ->like('category', $search)
                ->orLike('name', $search)
                ->orLike('vendor', $search)
                ->orLike('brand', $search)
                ->groupEnd();
        }

        $builder->select('sn, barcode, floor, room, category, name, vendor, brand, type, capacity, modul, modul_capacity, occupancy, aging, battery, source_a, source_b, condition, status, info, install, maintanance, updated_at')
            ->limit($length, $start);

        return $builder->get()->getResultArray();
    }

    public function getTotalData()
    {
        return $this->countAll();
    }

    public function getTotalWhere($column, $value)
    {
        return $this->where($column, $value)->countAllResults();
    }

    public function getFilteredCount($search)
    {
        $builder = $this->builder();

        if (!empty($search)) {
            $builder->groupStart()
                ->like('category', $search)
                ->orLike('name', $search)
                ->orLike('vendor', $search)
                ->orLike('brand', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}
