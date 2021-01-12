<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


function connect() {
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function insertData ($conn) {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    print_r($data);
    $email = trim($data['email']);
    $login = trim($data['login']);
    $password = md5(trim($data['password']));

    if(isset($email, $login, $password)) {
        
        $sql = "INSERT INTO users (email, login, password) VALUES ('" . $email . "', '" . $login . "', '" . $password . "')";

        if (mysqli_query($conn, $sql)) {
            echo 1;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    else {
        echo"No datas!";
    }   
}

function close($conn) {
    mysqli_close($conn);
}