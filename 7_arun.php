 
<?php
$con=mysqli_connect("localhost","root","","clg");
if($con){
    echo "Succesfully connected";
}
else{
    echo "failure";
}

$sqle= "insert into   medicaps(name, email, comment) values('$_POST[name]','$_POST[email]','$_POST[comment]')";

if(mysqli_query($con,$sqle)){
    echo "Inserted Successfully";
}
else{
    echo "Not Inserted";
}
header("location:  4_blog.html");
?>