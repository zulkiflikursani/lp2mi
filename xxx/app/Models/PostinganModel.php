<?php

namespace App\Models;
use CodeIgniter\Model;


class PostinganModel extends Model{
    protected $table = "tb_postingan";
        protected $allowedFields = ['id','judul','desktipsi','tgl_posting',
            'penulis','create_at','view'];
        protected $primerykey= 'id';

        // protected $returnType =  'App\Entities\PostinganEntities';
        // protected $useTimestamp = false;
    
        //     public function __construct()
        // {
        //     $this->validation = \Config\Services::validation();
        //     $this->db      = \Config\Database::connect();
        //     header('Access-Control-Allow-Origin: *');
        //     header("Access-Control-Allow-Methods: GET, OPTIONS");

        // }
        // public function findById($id){
        //     $data = $this->find($id);
        //     if($data){
        //         return $data;
        //     }else{
        //         return false;  
        //     }

        // }

        // public function findAllberita(){
        //     $builder = $this->db->table('tb_postingan');
        //     $builder->orderBy('tgl_posting', 'DESC');
        //     $data = $builder->get()->getResult();

        //     if($data){
        //         return $data;
        //     }else{
        //         return false;  
        //     }

        // }


}