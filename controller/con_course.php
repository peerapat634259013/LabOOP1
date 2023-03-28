<?php 
$cs_img="images/12.png";
$cs_name="อบรมเชิงปฏิบัติการ<br/>การผลิตปุ๋ยมูลไส้เดือนดินเพื่อกำจัดขยะอินทรีย์และเพื่อการค้า";
$cs_date="30-31 ก.ค. 65";
$cs_wallet="1,990 บ.";
?>

<?php
$course=array();
$course["id"]=$id;
$course["firstname"]=$firstname;
$course["lastname"]=$lastname;
$course["email"]=$email;
$course["password"]=$password;
print_r($course);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
include_once "../model/admin.php";
include_once "../model/signin_db.php";
include_once "../model/signup.php";
$obj_name=new Course();
echo $rs2= $obj_name->addCourse($course);
?>

<?php
include "../view/index.php";
include "../view/footer.php";
include "../view/header.php";
include "../view/logout.php";
include "../view/signin.php";
include "../view/user.php";
?>
