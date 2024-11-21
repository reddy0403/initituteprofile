<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="ssct";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
echo "<style>
body{
	color:white;
	margin:0px;
	padding:0px;
	background:url('bg.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}</style>
<body></body>";
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $age = $_POST['age'];
	 $coursename = $_POST['coursename'];
	 $email = $_POST['email'];

	 $sql_query = "INSERT INTO  detail(name,age,coursename,email)
	 VALUES ('$name','$age','$coursename','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
     else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
};
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
	<link rel='stylesheet' href='styleses.css'>
</head>
<body>
<div class='container'>
        <button type='submit' class='btn2' onclick='openPopup()'>Submit</button>
    </div>
    <div class='popup' id='popup'>
        <img src='tick.png' alt=''>
        <h2>Thank You!</h2>
        <p>Your details has been successfully submitted.Thanks!</p>
        <a href='index2.html'><button type='button' onclick='closePopup()'>OK</button></a>
    </div>
    <script>
        let popup = document.getElementById('popup');
        function openPopup() {
            popup.classList.add('open-popup');
        }
        function closePopup() {
            popup.classList.remove('open-popup');
        }
    </script>
    
</body>
</html>";
?>