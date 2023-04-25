<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'mobile_db';
    $port = 3306;
    
    function query($sql)
    {
        global $hostname;
        global $username;
        global $password;
        global $dbname;
        global $port;
        $conn = new mysqli($hostname, $username, $password, $dbname, $port);
        if ($conn->connect_error) {
            echo "Connection failed <br>";
        die ($conn ->connect_error);
        } 
        $result = $conn ->query($sql);
        if (!$result) {
            echo "SQL exection failed <br>";
            die ($conn -> error);
        }
        $rows = $result -> fetch_all();
        $conn->close();
        return $rows;
    }
?>
