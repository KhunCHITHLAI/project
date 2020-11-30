<?php
include_once('model/booking.php');
class BookingController extends Booking{
 public function addBooking($user, $patient,$doc,$medical){
 	
 	return $this->add($user, $patient,$doc,$medical);
 }
 public function showBooking($uid){
 	return $this->show($uid);
 }
 public function Patient($uid){
		return $this->showPat($uid);
	}
	
}
?>