<?php

namespace App\Models;

use CodeIgniter\Model;

class ElectricModel extends Model
{
    protected $DBGroup = 'power';
    protected $table = '';
    protected $primaryKey = 'id';

    public function changeTable(string $name = 'pue')
    {
        $this->table = $name;
        return $this;
    }

    /**
     * Get PUE data for a specific time range.
     *
     * @param string $startTime Start time (e.g., '07:00:00')
     * @param string $endTime   End time (e.g., '08:00:00')
     * @param int $limit        Number of rows to fetch
     * @return array            Query result as an associative array
     */
    public function getPueByTime($startTime, $endTime, $limit = 7)
    {
        $query = "
            SELECT DATE(updated_at) as updated_at, pue
            FROM {$this->table} AS t1
            WHERE TIME(updated_at) BETWEEN ? AND ?
              AND t1.id = (
                  SELECT MIN(t2.id)
                  FROM {$this->table} AS t2
                  WHERE DATE(t2.updated_at) = DATE(t1.updated_at)
                    AND TIME(t2.updated_at) BETWEEN ? AND ?
              )
            ORDER BY t1.id DESC
            LIMIT ?
        ";

        return $this->db->query($query, [$startTime, $endTime, $startTime, $endTime, $limit])->getResultArray();
    }

    public function getPueByDate($startTime, $endTime) {
        $query = "
        SELECT
            updated_at,
            pue
        FROM
            {$this->table}
        WHERE
            DATE(updated_at) BETWEEN ? AND ? ";
        
        return $this->db->query($query, [$startTime, $endTime])->getResultArray();
    }
}