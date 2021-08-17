<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table      = 'tb_jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama_jabatan', 'nominal_gaji'];

    
}
