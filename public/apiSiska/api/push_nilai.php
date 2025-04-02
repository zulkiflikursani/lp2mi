<?php

header('Access-Control-Allow-Origin: http://localhost:8080,https://silaju.unifa.ac.id');
header('Access-Control-Allow-Methods: POST');
header("Content-Type:application/json");

$header = $_SERVER;
$key = $header['HTTP_KEY'];
if (!isset($key)) {
    echo  json_encode(array('result' => 'sadar sadarlah sadar'));
    die;
} else if ($key == '16f4d6ae06b2655897f7e8fe0e4df9b0') {

    include_once("../includes/con.php");
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
    } else {
        $data = '';
    }

    if ($data != '') {
        $data = json_decode($data, false);
        $tempquery = "";
        foreach ($data as $row) {

            $tempquery .= "(
           
            NULL,
            '$row->kode_prodi',
            '$row->kode_krs',
            NULL,
            'N',
            NULL,
            '$row->nim',
            NULL,
            '$row->kode_matakuliah',
            '$row->kode_mk_pindahan',
            '$row->nama_mk_pindahan',
            '$row->sks_mk_pindahan',
            NULL,
            '$row->periode_krs',
            NULL,
            NULL,
            'L',
            '$row->kode_nilai',
            '$row->nilai_angka',
            '$row->kode_nilai_pindahan',
            NULL,
            NULL,
            'Y',
            'N',
            '$row->penilaian',
            NULL,
            NULL
        ), ";
        }
        $tempquery = substr($tempquery, 0, -2);
        $query = "insert into krsnilaikhs values " . $tempquery;

        $result = mysqli_query($db, $query);
        if ($result) {
            echo "sukses";
        } else {
            echo mysqli_errno($db);;
        };
    }
} else {
    echo "sadar sadarlah sadar";
}