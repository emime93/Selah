<?php
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $datePicker = $_POST['datePicker'];
     
     $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><meta name='keywords' content='key_content' /><meta name='description' content='descriptione' /><meta name='author' content='EMi' /></head>";
     
     $message .="<link href='http://selahtraveller.com/style.css' type='text/css' rel='stylesheet' /><body><div class='mail-content'><div class='mail-header'><h1 align='center' style='color:#900;font-family:Georgia, 'Times New Roman', Times, serif;'>Reservation request</h1></div><div class='mail-table-container'><table cellpadding='5' cellspacing='0' class='mail-table'> ";
     
     				
				
     $message .="<td class='td'><h3 class='table-text'>First name</h3></td><td><h3 class='table-text'>Petricioiu Robert</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Last name</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>E-mail</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Phone</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Starting date</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Package type</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Number of persons</h3></td><td><h3 class='table-text'>8</h3></td></tr>";
     $message .="<td class='td'><h3 class='table-text'>Travelling type</h3></td><td><h3 class='table-text'>First name</h3></td></tr>";
     
     $message .="</table></div><div class='mail-footer'><h1 align='center' style='color:#900'>selahTraveller.com &copy;</h1></div></div></body></html>";
      

	echo $message;
	
      //mail('cpetricioiuster@gmail.com','reservation',$message,'<selahtraveller.com>','-f selahTraveller@selahTraveller.com');

?>