<?php
$name_error=$mobile_error=$student_code_error=$student_id_error=$roll_no_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_post["name"])){
    $name_error="name is mandotary";
  }else{
    $name=test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-']*$/",$name)){
      $name_error="name is mandotary";
    }
  };
 

 /* $mobile_no = test_input($_POST["mobile_no"]);
  $student_code = test_input($_POST["student_code"]);
  $student_id = test_input($_POST["student_id"]);
  $roll_no = test_input($_POST["roll_no"]);*/
}

function test_input($data) {
  if(empty($_POST["name"])){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  


}
// print_r(htmlspecialchars($_POST));die;
$con = mysqli_connect('localhost', 'root', '', 'pandaa');
if ($con) {
    echo "connection successfull";
} else {
    echo "connection failed";
}
mysqli_select_db($con, 'pandaa');

$name = $_POST['name'];

$mobile_no = $_POST['mobile_no'];

$student_code = $_POST['student_code'];

$student_id = $_POST['student_id'];

$roll_no = $_POST['roll_no'];


$query = "insert into hanging (name,mobile,student_code,student_id,roll_no
) values ('$name','$mobile_no','$student_code','$student_id','$roll_no')";

mysqli_query($con, $query);

header('location:demo.php');
