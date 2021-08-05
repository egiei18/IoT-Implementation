<?php
	// header("Access-Control-Allow-Origin: *");
	// header("Content-Type: application/json");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "raspi06data";
	
	$con = mysqli_connect($server, $username, $password, $database);
	$sql = "SELECT * FROM ms02_rataph";
	$result = mysqli_query($con, $sql);
    	$array = array();
	$subArray=array();
    $no =1;

    while($row =mysqli_fetch_array($result))
    {
        $subArray['rataph']= $row['rataph'];
        $subArray['tanggal']= $row['tanggal'];
        $subArray['no'] = $no;
        $no++;
        $array[] =  $subArray ;
    }
    echo'{"records":'.json_encode($array).'}';   
    mysqli_close($con);
?>
