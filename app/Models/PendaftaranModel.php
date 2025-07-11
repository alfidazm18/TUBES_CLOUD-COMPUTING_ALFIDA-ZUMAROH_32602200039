<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran'; // nama tabel di database
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama', 'nik', 'asal_tk', 'jk', 'agama', 'ttl', 'alamat', 'telepon'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}
