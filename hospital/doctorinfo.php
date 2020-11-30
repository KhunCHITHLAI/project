
<?php

include_once("controller/doctorcontroller.php");
$info=$_GET['info'];

$doctorController=new DoctorController();
$results=$doctorController->info($info);
$output=null;


foreach($results as $result)
{
    $doctorid=$result['id'];
    $output.="<div class='row'>";
    $output.="<div class='col-md-6'>";
    $output.= "<img src='backend/".$result['image']."'>";
    $output.="</div>";
    $output.="<div class='col-md-6'>";
    $output.="<div>Name : &nbsp;&nbsp;".$result['name']."</div><br>";
    $output.="<div>Email : &nbsp;&nbsp;".$result['email']."</div><br>";
    $output.="<div>Phone Number : &nbsp;&nbsp;".$result['phone']."</div><br>";
    $output.="<div>Address : &nbsp;&nbsp;".$result['address']."</div><br>";
     $output.="<div>Degree : &nbsp;&nbsp;".$result['degree']."</div><br>";
    $output.="<div>Experience : &nbsp;&nbsp;".$result['experience']."</div><br>";
    $output.="<h6>".'Booking'."</h6>";
    $output.="<a href='checkaccount1.php?id=$doctorid'><img src='image/booking.png'  style='opacity:0.5; width:40px;height:40px;'></a>";
    $output.="</div></div>";
   
}


// $output="</div>";
echo $output;


?>
