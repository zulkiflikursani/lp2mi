<?php
header('Access-Control-Allow-Origin: http://localhost:8080,https://silaju.unifa.ac.id');
header("Content-Type:application/json");
// $header = apache_request_headers();
$header = $_SERVER;
$key = $header['HTTP_KEY'];
if (!isset($key)) {
    echo  json_encode(array('result' => 'sadar sadarlah sadar'));
    die;
} else if ($key == '16f4d6ae06b2655897f7e8fe0e4df9b0') {
    include_once("../includes/con.php");
    if (isset($_GET['noregis'])) {
        $noregis = $_GET['noregis'];
    } else {
        $noregis = '';
    }
    $query = mysqli_query($db, "select * from mahasiswa where no_tes ='$noregis'");

    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($result, array(
            'id' => $row['id'],
            'no_tes' => $row['no_tes'],
            'nim' => $row['nim'],
            'nama' => $row['nama']
        ));
    }
    $num_row = mysqli_num_rows($query);
    if ($num_row > 0) {
        echo json_encode(array('result' => $result));
    } else {
        echo json_encode(array('result' => 'not found'));
    }
}