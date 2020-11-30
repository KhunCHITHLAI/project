<?php
include_once("controller/doctorcontroller.php");
include_once("controller/categorycontroller.php");
$sub=$_GET['sub'];
$categoryController=new CategoryController();
$doctorController=new DoctorController();
$presults=$categoryController->showspeciality($sub);
$results=$doctorController->showDocs($sub);
$output=null;
$output.="<div class='row'>";
foreach($results as $result){
$doctorid=$result['id']; 
foreach($presults as $presult)
{
    
    $output.="<div class='card' style='width:33%;'>";
    $output.="<center><img class='card-img-top mt-3' style='text-align:center;border-radius:100%;border:3px solid gray;width:200px;' src='backend/".$result['image']."'
    
    
    alt=''></center><div class='card-body'>";
    $output.="<h4 style='text-align:center;'>".$result['name']."</h4>";
    $output.="<br>";
    $output.=$presult['name']."(Speciality)";
    
    $output.="</div>";
    $output.="<div class='card-footer bg-white'>";
    $output.="<div class='row'>";
    $output.="<div class='col-md-6'>";
    $output.="<h6 style='text-align:left;'>".'View Profile'."</h6>";
$output.="<a href='profile.php?id=$doctorid'><img src='image/profile.png' id='profile' style='opacity:0.5;float:left; width:40px;height:40px;'></a>";
$output.="</div>";
$output.="<div class='col-md-6'>";
    $output.="<h6 style='text-align:right;'>".'Booking'."</h6>";
$output.="<a href='checkaccount1.php?id=$doctorid'><img src='image/booking.png' id='booking' style='opacity:0.5; float:right; width:40px;height:40px;'></a>";

$output.="</div>";
$output.="</div>";
$output.="</div>";
$output.="</div>";


   
}
}

$output.="</div>";
echo $output;


?>
