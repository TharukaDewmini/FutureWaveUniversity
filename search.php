<?php
$link=mysqli_connect("localhost","root","","privateuni");

$nic=$_REQUEST['nic'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$telphoneno=$_REQUEST['telphoneno'];
$course=$_REQUEST['course'];


$sql="insert into items values('$nic','$name','$address','$telphoneno','$course')";
if(mysqli_query($link,$sql))
{
echo("Data saved");
}
else
{
echo("Data not saved");
}

?>