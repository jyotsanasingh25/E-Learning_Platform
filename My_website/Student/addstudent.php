<?php
include_once('../DBconnection.php');
if(isset($_POST['stuSingup']) && isset($_POST['stuName']) && isset($_POST['stuEmai']) && isset($_POST['stuPass']) && isset($_POST['stuC_Pass']) && isset($_POST['stuAddress'])){

    $stuname = $_POST['stuName'];
    $stuemail = $_POST['stuEmai'];
    $stuPass =$_POST['stuC_Pass'];
    $stuC_Pass = $_POST['stuC_Pass'];
    $stuAddress =$_POST['stuAddress'];

    $sql = "INSERT INTO student(stu_name,stu_email,stu_pass) VALUE('$stuname','$stuemail','$stuPass')";

if($conn->query($sql)==TRUE){
    echo json_encode("Ok");
} else{
    echo json_encode("Failed")
}






}
?>

