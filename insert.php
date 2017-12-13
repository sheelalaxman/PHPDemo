<?php
$uname = $pass = '';
$uname= $_POST['uname'];
$pass= $_POST['pass'];

$sql = "INSERT INTO demo (uname, pwd, userid) VALUES ('$uname','$pass', NULL)";

echo $uname.'<br>'.$pass;

try{
    $conn=mysqli_connect('localhost', "root", "", "test");
    if (!$conn) {
    die('Could not connect: ' . mysqli_error());
    }
    else{
        echo '</p>Connected successfully</p>';
        if ($conn->query($sql) === TRUE) 
            echo "New record created successfully";
        else 
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
catch(Exception $e) {//echo  mysqli->error_no;
}
finally{
mysqli_close($conn);
}
?>
