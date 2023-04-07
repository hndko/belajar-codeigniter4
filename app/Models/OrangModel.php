<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table      = 'tb_orang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keyword)
    {
        // 1-1 Step
        // $builder = $this->table('tb_orang');
        // $builder->like('nama', $keyword);
        // return $builder;

        // simple step
        return $this->table('tb_orang')->like('nama', $keyword);
    }
}
