<?php
$con=mysqli_connect("localhost","root","","contact");
if($con){
    echo "Succesfully connected";
}
else{
    echo "failure";
}

$sql="insert into student (name, email, subject, message) values('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

if(mysqli_query($con,$sql)){
    echo "Inserted Successfully";
}
else{
    echo "Not Inserted";
}
header("location: 5_contact.html");
?>