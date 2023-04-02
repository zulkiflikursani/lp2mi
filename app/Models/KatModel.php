<?php

namespace App\Models;
use CodeIgniter\Model;


class KatModel extends Model{
    protected $table = "tb_kat";
        protected $allowedFields = ['id','categori'];
        protected $primerykey= 'id';
}