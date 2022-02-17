<?php
//mysql get data from database  (sensor)
$con = mysqli_connect("localhost","root","","db_sensor");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//select data from database
$sql = "SELECT * FROM data_sensor";
$query = mysqli_query($con, $sql);
//mysql_fetch_array = mengambil data dari database
$data = array();
while ($row = mysqli_fetch_array($query)) {
  array_push($data, array(
    "id" => $row['id'],
    "nama_sensor" => $row['nama_sensor'],
    "value" => $row['value']
  ));
}
//menampilkan data dari database
$data_sensor =  ($data);
foreach($data as $row){
  echo $row['nama_sensor']." ".$row['value']."<br>";
}
?>

<html>
<script>
//refreash page after 5 second
function refreshPage() {
    window.location.reload();
}
setTimeout(refreshPage, 5000);
    
    </script>


