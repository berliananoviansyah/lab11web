<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Models
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judl', 'isi', 'status', 'slug', 'gambar'];
}