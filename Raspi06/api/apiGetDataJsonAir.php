<?php
        // header("Access-Control-Allow-Origin: *");
        // header("Content-Type: application/json");

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "db_lele";

        $con = mysqli_connect($server, $username, $password, $database);
        $sql = "SELECT * FROM perawatan_lele";
        $result = mysqli_query($con, $sql);
        $array = array();
        $subArray=array();

    while($row =mysqli_fetch_array($result))
    {
        $subArray['id'] = $row['id'];
        $subArray['jenis_perawatan']= $row['jenis_perawatan'];
        $subArray['temp']= $row['temp'];
        $subArray['pH']= $row['pH'];
        $subArray['amonia']= $row['amonia'];

        $array[] =  $subArray ;
    }
    // echo json_encode($array);
    echo'{"records":'.json_encode($array).'}';
    mysqli_close($con);
?>