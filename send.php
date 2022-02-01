<?php
if (isset($_POST['submit']))
{
    $connection = mysqli_connect('localhost','root','portfolio');

    $a=$_POST['cname'];
    $b=$_POST['email'];
    $c=$_POST['phone'];
    $d=$_POST['enquiry'];
    $e=$_POST['isclient'];

    $sql_query="INSERT INTO form(cname,email,phone,enquiry,isclient) VALUES ('$a','$b','$c','$d','$e')";
    
    $execute_query=mysqli_query($connection,$sql_query);

    if($execute_query == TRUE)
    echo "<script> alert('Submitted')</script>";

    else
        echo "<script> alert('Try Again')</script>";

}
?>