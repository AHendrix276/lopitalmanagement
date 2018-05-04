?php

$servername = "ec2-18-197-115-58.eu-central-1.compute.amazonaws.com";
$username = "group_4_user";
$password = "MJkdJqyrXwZGKUxT";
$dbname = "group_4_user_medical";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$age = $_POST['age'];
$pass = $_POST['psw'];
$
$sql = "INSERT INTO patients (fname, lname, email,gender,password,age) VALUES ('$fname', '$lname', '$email','$gender','$age','$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
