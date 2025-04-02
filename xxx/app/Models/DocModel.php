<?php

namespace App\Models;
use CodeIgniter\Model;


class DocModel extends Model{
    protected $table = "tb_file";
        protected $allowedFields = ['id','nama_doc','link_doc','leve','update_at','kat_doc'];
        protected $primerykey= 'id';
}