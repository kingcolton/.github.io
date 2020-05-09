<?php
$con = mysql_connect('SignUpDB.sql', 'root', '');

if (!$con)
{
    echo 'Not connected to server';
}
if (!mysqli_select_db($con, 'eventsignup'))
{
    echo 'Database not selected';
}

$nm = $_POST['nm'];
$email = $_POST['email'];
$sql = "insert into participant(full_name,email) values('$nm', '$email')";

if (!mysqli_query($con, $sql))
{
    echo 'Not inserted';
}
else
{
    echo 'Inserted';
}

header("refresh:2; url=SigmaNu_Form.html");

?>