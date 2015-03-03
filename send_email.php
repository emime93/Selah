<?php
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $datePicker = $_POST['datePicker'];
     $single = $_POST['single'];
     $tour_type=$_POST['tour_type'];
     $pack = $_POST['pack'];
     
    
     $headers = "MIME-Version: 1.0\n";
     $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

     
        $emailBody = readTemplateFile("email_template.html");
	$emailBody = str_replace("#firstname#",$firstName,$emailBody);
	$emailBody = str_replace("#lastname#",$lastName,$emailBody);
	$emailBody = str_replace("#email#",$email,$emailBody);
        $emailBody = str_replace("#phone#",$phone,$emailBody);
        $emailBody = str_replace("#single#",$single,$emailBody);
        $emailBody = str_replace("#date#",$datePicker,$emailBody);
        $emailBody = str_replace("#tourType#",$tour_type,$emailBody);
        $emailBody = str_replace("#pack#",$pack,$emailBody);

	
      mail('cpetricioiu@gmail.com','reservation',$emailBody,$headers,'-f selahTraveller@selahTraveller.com');
 

?>

<?php

function readTemplateFile($FileName) {
		$fp = fopen($FileName,"r") or exit("Unable to open File ".$FileName);
		$str = "";
		while(!feof($fp)) {
			$str .= fread($fp,1024);
		}	
		return $str;
}
?>
