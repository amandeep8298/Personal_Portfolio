<?php
    if(isset($_POST['cname']) &&
       isset($_POST['email']) &&
       isset($_POST['phone']) &&
       isset($_POST['enquiry']) &&
       isset($_POST['isclient'])){
           include 'db_conn.php';

           function validate($data){
               $data=trim($data);
               $data=stripslashes($data);
               $data=htmlspecialchars($data);
               return $data;
           }

           $name=validate($_POST['cname']);
           $email=validate($_POST['email']);
           $phone=validate($_POST['phone']);
           $enquiry=validate($_POST['enquiry']);
           $isclient=validate($_POST['isclient']);

           if(empty($cname) || empty($email) || empty($phone) || empty($enquiry) || empty($isclient)){
               header("Location:index.html");
           }else{
               $sql="INSERT INTO portfolio(cname,email,phone,enquiry,isclient) VALUES('$cname','$email','$phone','$enquiry','$isclient')";
               $res=mysqli_query($con,$sql);
            if($res){
                if($res){
                    echo "Your Datails has been sent succcessfully...";
                }else{
                    echo "Your request failed";
                }
            }
        }

       }else{
           header("Location:index.html");
       }
?>