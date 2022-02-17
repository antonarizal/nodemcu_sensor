<?php

$con = mysqli_connect("localhost","root","","db_sensor");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if($_POST){

    $nama_sensor = $_POST["sensor"];
    $value = $_POST["value"];

    //fungsi input data ke database mysql   
    $sql = "INSERT INTO data_sensor (nama_sensor, value) VALUES ('$nama_sensor', '$value')";
    $query = mysqli_query($con, $sql);
    if($query){
        $data = [
            "status" => true,
            "message" => "Data berhasil diinput"
        ]; 
    }else{
        $data = [
            "status" => false,
            "message" => "Data gagal diinput"
        ];
    }
    echo json_encode($data);

}






