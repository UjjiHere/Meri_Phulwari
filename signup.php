<?php
$db ='meriphulwari';
$conn = new mysqli('localhost','root','',$db);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error() .')'
    . mysqli_connect_error());
}
else{  
if(isset($_REQUEST["submit"]))
{
	$value = $_REQUEST["name"];
	$value1 = $_REQUEST["contact"];
	$value2 = $_REQUEST["email"];
	$value3 = $_REQUEST["password"];
    $sql ="INSERT INTO signup_users(name,contact,email,password) 
    values('$value','$value1','$value2','$value3')";
    if($conn->query($sql)){
       echo "<script>
alert('Registered Successfully');
window.location.href='http://localhost/meriphulwari/login.html';
</script>";
    }
    else{
        echo "Error :".$sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
?>
