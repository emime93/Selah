<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Selah Traveller, Tourist packages, Mountain Tourist Packages,  Carpatian Mountains,  Manole Monastery, Royal Church, Manole's Well,  Vidraru lake,  Vidraru Dam,  Bran Castle,  Saxons in Transylvania,  Calimanesti thermal baths,  Cozia Monastery,  Mircea the Ancient, Sighisoara Citadel,  Brasov Black Church,  Hapsburg invaders in Romania,  Fagaras Mountains,  Moldoveanu Peak,  Negoiu peak,  Transfagarasan Highway" />
<meta name="description" content="Selah Traveller offers you the opportunity to travel in different places in Romania. Check our tourist packages: 3 days package - Carpatian Mt. - Manole monastery - Royal Church - Manole's Well - Vidraru Dam - Bran Castle - Saxons in Transylvania <br />  5 days package: - Calimanesti - Cozia Monastery - Mircea the Ancient - Sighisoara Citadel - Brasov Black Church - Hapsburg invaders <br /> Mountain package 3 days - Fagaras Mountains - Moldoveanu Peak - Negoiu Peak -  Transfagarasan Highway" />
<meta name="author" content="EMi" />
<title>Selah Traveller</title>

<script type="text/javascript" src="jquerys/jquery.js"></script>
<script type="text/javascript" src="jquerys/jqueryTransit.js"></script>

   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
 
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

  

<script type="text/javascript" src="jquerys/bootstrap/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="jquerys/bootstrap/bootstrap-popover.js"></script>


  
<script type="text/javascript"  language="javascript">
	$(document).ready(function(){
		
	var contact_counter = 0;
	
		$('.simple-option').tooltip('hide');
		$('.all-inclusive-option').tooltip('hide');
		
		$('.show-contact-btn').click(function(){
			++contact_counter;
			if(contact_counter % 2==1)
			$('#contact-cover').transition({y:"170px"});	
			else 
			$('#contact-cover').transition({y:"0px"});
			$('#contact-cover').css("z-index","2000");	
		});
		$('.close-profile').click(function(){
			$('#profile').transition({width:"0"});
			$('#profile').transition({height:"0"});
		});
		$('.avatar').click(function(){
			$('#profile').transition({width:"902"});
			$('#profile').transition({height:"700"});
			
		});
		
		
		
		$(function() {
 		   $( "#first-pack-datepicker" ).datepicker();
  		});
		
		$(window).scroll( function(){
			if(window.scrollY <690 || window.screenY <690) {$('#menu-top').attr('class','scroll-active');$('#menu-tourist').attr('class','');}
			if((window.scrollY >1300 || window.screenY > 1300) && (window.scrollY <4200 || window.screenY <4200)) {$('#menu-tourist').attr('class','scroll-active');$('#menu-top').attr('class','');$('#menu-contact').attr('class','');}
			if((window.scrollY >4200 || window.screenY > 4200) && (window.scrollY <4800 || window.screenY <4800)) {$('#menu-contact').attr('class','scroll-active');$('#menu-tourist').attr('class','');}
			
		});
		
		
		$('#one-pers').click(function(){
			if($('#one-pers').attr('class') != 'person-active') 
				{
					$('#one-pers').attr('class','person-active');	 
					$('#mult-pers').attr('class','person');	 
					document.getElementById("simple-price").innerHTML='&euro; 210 <br /> ($ 279)';
					document.getElementById('all-inclusive-price').innerHTML = '&euro; 475 <br /> ($ 630)';

				}
		});
		$('#mult-pers').click(function(){
			if($('#mult-pers').attr('class') != 'person-active') 
				{
					$('#one-pers').attr('class','person');	 
					$('#mult-pers').attr('class','person-active');	 
					document.getElementById("simple-price").innerHTML='&euro; 150 </br> ($ 199)';
					document.getElementById('all-inclusive-price').innerHTML = '&euro; 345 </br> ($ 459)';

				}
			
		});
		$('#one-pers-second-pack').click(function(){
			if($('#one-pers-second-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-second-pack').attr('class','person-active');	 
					$('#mult-pers-second-pack').attr('class','person');	 
					document.getElementById("simple-price-second-pack").innerHTML='&euro;350 <br /> ($ 465)';
					document.getElementById('all-inclusive-price-second-pack').innerHTML = '&euro; 699 <br /> ($ 929)';

				}
		});
		$('#mult-pers-second-pack').click(function(){
			if($('#mult-pers-second-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-second-pack').attr('class','person');	 
					$('#mult-pers-second-pack').attr('class','person-active');	 
					document.getElementById("simple-price-second-pack").innerHTML='&euro; 170 </br> ($ 227)';
					document.getElementById('all-inclusive-price-second-pack').innerHTML = '&euro; 480 </br> ($ 639)';

				}
			
		});
		$('#one-pers-third-pack').click(function(){
			if($('#one-pers-third-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-third-pack').attr('class','person-active');	 
					$('#mult-pers-third-pack').attr('class','person');	 
					document.getElementById("simple-price-third-pack").innerHTML='&euro;210 <br /> ($ 279)';
					document.getElementById('all-inclusive-price-third-pack').innerHTML = '&euro; 399 <br /> ($ 530)';

				}
		});
		$('#mult-pers-third-pack').click(function(){
			if($('#mult-pers-third-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-third-pack').attr('class','person');	 
					$('#mult-pers-third-pack').attr('class','person-active');	 
					document.getElementById("simple-price-third-pack").innerHTML='&euro; 150 </br> ($ 199)';
					document.getElementById('all-inclusive-price-third-pack').innerHTML = '&euro; 299 </br> ($ 398)';

				}
			
		});
		$('#one-pers-fourth-pack').click(function(){
			if($('#one-pers-fourth-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-fourth-pack').attr('class','person-active');	 
					$('#mult-pers-fourth-pack').attr('class','person');	 
					document.getElementById("simple-price-fourth-pack").innerHTML='&euro;350 <br /> ($ 465)';
					document.getElementById('all-inclusive-price-fourth-pack').innerHTML = '&euro; 600 <br /> ($ 800)';

				}
		});
		$('#mult-pers-fourth-pack').click(function(){
			if($('#mult-pers-fourth-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-fourth-pack').attr('class','person');	 
					$('#mult-pers-fourth-pack').attr('class','person-active');	 
					document.getElementById("simple-price-fourth-pack").innerHTML='&euro; 170 </br> ($ 229)';
					document.getElementById('all-inclusive-price-fourth-pack').innerHTML = '&euro; 365 </br> ($ 485)';

				}
			
		});
		$('#one-pers-fifth-pack').click(function(){
			if($('#one-pers-fifth-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-fifth-pack').attr('class','person-active');	 
					$('#mult-pers-fifth-pack').attr('class','person');	 
					document.getElementById("simple-price-fifth-pack").innerHTML='&euro;210 <br /> ($ 279)';
					document.getElementById('all-inclusive-price-fifth-pack').innerHTML = '&euro; 399 <br /> ($ 530)';

				}
		});
		$('#mult-pers-fifth-pack').click(function(){
			if($('#mult-pers-fifth-pack').attr('class') != 'person-active') 
				{
					$('#one-pers-fifth-pack').attr('class','person');	 
					$('#mult-pers-fifth-pack').attr('class','person-active');	 
					document.getElementById("simple-price-fifth-pack").innerHTML='&euro; 150 </br> ($ 199)';
					document.getElementById('all-inclusive-price-fifth-pack').innerHTML = '&euro; 299 </br> ($ 398)';

				}
			
		});
		
		$('#order-simple').click(function(){
			
		});
		$('#order-all').click(function(){
			
		});
		
		$('#cancel-order').click(function(){
				
		});
		$('#order-btn').click(function(){
			
                    
				
		});
		$('#mult-pers').trigger('click');
		$('#mult-pers-second-pack').trigger('click');
		$('#mult-pers-third-pack').trigger('click');
		$('#mult-pers-fourth-pack').trigger('click');
		$('#mult-pers-fifth-pack').trigger('click');
		
	});
function order_simple(offset,pack,order_number_persons){
	document.getElementById('first-pack-firstName').value='';
      	document.getElementById('first-pack-secondName').value='';
      	document.getElementById('first-pack-email').value='';
      	document.getElementById('first-pack-phone').value='';
      	document.getElementById('first-pack-datepicker').value='';
	
	document.getElementById('order').name = pack;
	$("#reservation-section-one").css({top:offset+"px"});
	
          	$('#reservation-section-one').css({height:"287px"});	
		$('#reservation-section-one').css("-webkit-transition","height 2s");
		$('#reservation-section-one').css("-moz-transition","height 2s");
		$('#reservation-section-one').css("-o-transition","height 2s");
		$('#reservation-section-one').css("-ms-transition","height 2s");
			var order_type_class = $(order_number_persons).attr('class');
			
			 if(order_type_class != 'person-active')
			 	document.getElementById('order-first-option').checked = true;
				else document.getElementById('order-second-option').checked = true;
			document.getElementById('order-second-option-one').checked = true;	
}
function order_all(offset,pack,order_number_persons){

	document.getElementById('first-pack-firstName').value='';
      	document.getElementById('first-pack-secondName').value='';
      	document.getElementById('first-pack-email').value='';
      	document.getElementById('first-pack-phone').value='';
      	document.getElementById('first-pack-datepicker').value='';
	document.getElementById('order').name = pack;
	
	$("#reservation-section-one").css({top:offset+"px"});
	
	$('#reservation-section-one').css({height:"287px"});	
			$('#reservation-section-one').css("-webkit-transition","height 2s");
			$('#reservation-section-one').css("-moz-transition","height 2s");
			$('#reservation-section-one').css("-ms-transition","height 2s");
			$('#reservation-section-one').css("-o-transition","height 2s");
			var order_type_class = $(order_number_persons).attr('class');
			
			 if(order_type_class != 'person-active')
			 	document.getElementById('order-first-option').checked = true;
				else document.getElementById('order-second-option').checked = true;
			document.getElementById('order-second-option-two').checked = true;	
}
function cancel_order(){
	$('#reservation-section-one').css({height:"0px"});	
			$('#reservation-section-one').css("-webkit-transition","height 1s");		
}
function submit_order(){
    if(send_email(document.getElementById('order').name))
                        {$('#reservation-section-one').css({height:"0px"});	
			$('#reservation-section-one').css("-webkit-transition","height 1s");	
                        $("#status-box").css("visibility","visible");
			$("#status-box").fadeTo("slow",0.7);
			document.getElementById("status-box-text").innerHTML="reservation sent successfully";
			}
	
}
function send_email(pack){

       var agree_with_terms = document.getElementById('first-pack-check');
      
       if(agree_with_terms.checked){

      var firstName=document.getElementById('first-pack-firstName').value;
      var lastName=document.getElementById('first-pack-secondName').value;
      var email=document.getElementById('first-pack-email').value;
      var phone=document.getElementById('first-pack-phone').value;
      var datePicker=document.getElementById('first-pack-datepicker').value;
      var group_or_single_elements = document.getElementsByName('order-first-option');
      var group_or_single;
      var number_of_people;
      var tour_type;
     
      
      var tour_type_elements = document.getElementsByName('order-second-option');
      

      if (group_or_single_elements[0].checked) {group_or_single = 'group'; number_of_people = document.getElementById('first-pack-number').value;}
      else group_or_single = 'single';

      if(tour_type_elements[0].checked) tour_type = 'simple';
      else tour_type='all-inclusive';

        
     if(firstName.trim() != '' && lastName.trim() != '' && email.trim() != '' && phone.trim() != '' && datePicker.trim() != '') 
     {
      if(group_or_single_elements[0].checked)
         {  $.post('send_email.php',{firstName:firstName,lastName:lastName,email:email,phone:phone,datePicker:datePicker,single:number_of_people,tour_type:tour_type,pack:pack},function (){
      }).error(function(){
       alert('err');
     });
      }
      else {
           $.post('send_email.php',{firstName:firstName,lastName:lastName,email:email,phone:phone,datePicker:datePicker,single:group_or_single,tour_type:tour_type,pack:pack},function (){
      }).error(function(){
       alert('err');
     });
     }
    return 1;
    } else {
    alert('please complete all the required fields');
   return 0;
   }
 }
 else {
    alert('you have to agree with our terms and condition');
    return 0;
 }
      
}
function change_picture(source){
	$('#home_pic').fadeTo("fast",0.0);
	$('#home_pic').fadeTo("slow",1.0);
	document.getElementById('home_pic').src = source;
}
function send_contact(){
	var message = document.getElementById('contact-message').value;
	var name  = document.getElementById('contact-name').value;
	var email  = document.getElementById('contact-email').value;
	
	if(message.trim() == '' || name.trim() == '' || email.trim() == '') { alert('please complete all the fields'); } 
	else {
	
	$.post('send_contact.php',{message:message,name:name,email:email},function(){
		$('#contact-cover').transition({y:"0px"});
		document.getElementById('contact-message').value = '';
		document.getElementById('contact-name').value = '';
		document.getElementById('contact-email').value = '';
	}).error(function(){
		alert('could not send the email');	
	});
	}
}
</script>



 <link rel='shortcut icon' href="small_icons/favicon.ico" />
</head>

<link href="style.css" type="text/css" rel="stylesheet" />

<body>
<div class='reservation-section' id='reservation-section-one'>
			<div class='reservation-section-left'>
				<input type="text" id='first-pack-firstName'  class='input-text-types' placeholder='first name' style='margin:20px 0 0 60px;'/>
				<input type="text" id='first-pack-secondName' class='input-text-types' placeholder='last name' style='margin:20px 0 0 60px;'/>
				<input type="text" id='first-pack-email' class='input-text-types' placeholder='e-mail' style='margin:20px 0 0 60px;'/>
				<input type="text" id='first-pack-phone' class='input-text-types' placeholder='phone' style='margin:20px 0 0 60px;'/>
				<input type="text" id='first-pack-datepicker' class='input-text-types' placeholder='pick a date' style='margin:20px 0 0 60px;'/>
			</div>
			<div class='reservation-section-right'>
				<div class='group-order'>
				<input type='radio' name='order-first-option' id='order-first-option' style='position:absolute;top:0px;left:0px;'/>
				<h3 style='color:#666;position:absolute;top:0px;left:50%;margin:-5px 0 0 -120px;'>group</h3>
				<select style='position:absolute;top:0px;left:50%;' id='first-pack-number'>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
				</div>
				<div class='single-order'><input type='radio' name='order-first-option' id='order-second-option' style='position:absolute;top:0px;left:0px;' /><h3 style='color:#666;position:absolute;top:0px;left:50%;margin:-5px 0 0 -120px;'>single</h3></div>
				<div class='simple-order-choice'><input type='radio' name='order-second-option' id='order-second-option-one' style='position:absolute;top:0px;left:0px;'/><h3 style='color:#666;position:absolute;top:0px;left:50%;margin:-5px 0 0 -120px;'>services only</h3></div>
				<div class='all-order-choice'><input type='radio' name='order-second-option' id='order-second-option-two' style='position:absolute;top:0px;left:0px;'/><h3 style='color:#666;position:absolute;top:0px;left:50%;margin:-5px 0 0 -120px;'>all inclusive</h3></div>
				</form>
				<div class='agree-choice'><input type='checkbox' style='position:absolute;top:0px;left:0px;' id='first-pack-check'/><h5 style='color:#666;position:absolute;top:0px;left:50%;margin:0px 0 0 -120px;'>i agree with all terms and condition</h5></div>
				
				<div class='order-btn' onmousedown="submit_order('pack one',this.name);" id='order'>
					<div class='order-btn-border'>
					<h4 align='center' style='margin:3px 0 0 0px;color:#fff;'>send reservation</h>
					</div>
				</div>
				
				<div class='cancel-order-btn' onmousedown='cancel_order();'>
					<div class='cancel-btn-border'>
					<h4 align='center' style='margin:3px 0 0 0px;color:#fff;'>cancel</h>
					</div>
				</div>
				
			</div>		
		</div>

<div id="status-box">
	<a class='close' onmousedown="$('#status-box').css('visibility','hidden');$('#status-box').css('visibility','visible');$('#status-box').fadeTo('slow',0.0);">x</a>
	<div style="padding:20px 20px 20px 20px;"><h3 id="status-box-text" style='margin:0px 0 0 0px;color:#fff;'></h3></div>
</div>

	<div class='navbar'>
		<div class='navbar-content'>
			<h1 class='navbar-title'>SELAH B&B</h1> <h6 style='color:#fff;'>&copy;</h6>
			<div class='navbar-content-right'>
				<ul id='menu-scrollspy'>
					<li id='menu-top' class="scroll-active"><a href='#top'>home</a></li>
					<li id='menu-tourist'><a href='#second-splitter'>tourist <br /> packages</a></li>
					<li><a href='#second-splitter'>ministry packages</a></li>
					<li id='menu-contact'><a href='#contact-cover'>contact</a></li>
					<li><a href='http://blog.selahtraveller.com'>blog</a></li>
					
				</ul>
			</div>
		</div>
	</div>
	
	<div class='section-top'>
	<div class='profile' id='profile'>
		<div class='close-profile'><h2 style='color:#000; margin:3px 0 0 0px;' align='center'>x</h2></div>
		<div class='profile-avatar'>
			<img src="images/avatar.png" />
		</div>
		<div class='experience'>
			<h3 style='color:#900;'>20 years of working with foreign citizens (individuals or small groups) as driver, interpreter, guide, camp leader, consultant in Romanian culture and community development from biblical perspective.</h3>
		</div>
		<div class='facilities'>
			<h3 style='color:#900;'>Travel facilities: Wv Sharan (7 seats), laptop, mobile internet, radio, phone, GPS, air conditioning.</h3>
		</div>
		<div class='car-facility'>
			<img src='images/car.png' />
		</div>
	</div>
		
		<div class='section-top-content'>
			
			<br /><br />
			<br /><br />
			<br /><br />
			<img  src='images/panoramic.png' class='section-one-wallpaper'/>
			<div class='welcome-content'>
			<h1 class='welcome-text'> "Come discover Romania! Experience life at its simplicity in a country of legends, with no travel worries. Build a lifetime of memories in places where history was made. See wild but beautiful places in the Romanian Alps. Dine with shepherds at their sheepfold or have lunch from trout you catch.
Selah B&B - leave your travel worries to us. Just enjoy!"</h1>
			<div class="avatar">
				<div class='avatar-badge'>
					<h3 class='avatar-badge-text'>info</h3>
				</div>
				<img src="images/avatar.png" />
			</div>
			<div class='bookmark'>
					<h3 class='avatar-title' style='margin:10px 0 0 -30px;'>Cristi  & Mirela</h3>
					
					<div class='left-bookmark' style='margin:-76px 0 0 -50px;'></div>
					<div class='right-bookmark' style='margin:-76px 0 0 48px;'></div>
			</div>
			
				
			</div>
		
				<div class='follow-social'>
					<h3 style='color:#06F;padding-top:100px;'>Follow us on </h3>
					<a href='https://twitter.com/SelahTraveller'><div class='twitter'><img src="small_icons/twitter-small.png" /></div></a>
					<a href='https://www.facebook.com/Selahtraveller'><div class='facebook'><h2 style='color:#fff;margin:3px 0 0 13px;'>f</h2></div></a>
					<a href='https://plus.google.com/b/100940596135723771116/100940596135723771116/posts'><div class='google'></div></a>
				</div>
		</div>
	</div>
		<div class='inner-section-btn' >
			<a href='#top' class='inner-section-btn-inside' id='first-splitter'>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
		</div>
	<div class='section-one' style='overflow:hidden;'>
	  <div class='section-content' style='height:690px;'>
		<div class='section-one-content'>
			<div class='section-one-content-top'>
			
				<img src="images/home/pic1.png" id='home_pic'/>
				<div class='image-switch'>
					<img src='thumbs/pic1.png' class='image-switch-thumb' onmousedown="change_picture('images/home/pic1.png');"/>
					<img src='thumbs/pic2.png' class='image-switch-thumb' onmousedown="change_picture('images/home/pic2.png');"/>
					<img src='thumbs/pic3.png' class='image-switch-thumb' onmousedown="change_picture('images/home/pic3.png');"/>
					<img src='thumbs/pic4.png' class='image-switch-thumb' onmousedown="change_picture('images/home/pic4.png');"/>
					<img src='thumbs/pic5.png' class='image-switch-thumb' onmousedown="change_picture('images/home/pic5.png');"/>
				</div>
			</div>
			<div class='section-one-content-bottom'>
				<div class='section-one-content-bottom-left'>
					<h2 style='color:#900'>Selah Bed & Breakfast</h2>
					<h4 style='color:#06f;padding-left:15px;opacity:0.9;padding-right:5px;'> is meant to be a restful place for you to enjoy. Located in a small, touristic mountain city, with beautiful panorama from your rooms, with lot's of facilities for your convenience, SELAH will stick in your memory for life. We welcome you to experience the Romanian hospitality and the quality of our God-given blessings! Enjoy!</h4>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<h2 style='color:#900'>Check out our facility...</h2>
					<h4 style='color:#06f;padding-left:15px;opacity:0.9;padding-right:5px;'> SELAH - a family business: we treat you as family!
Make sure you visit our packages offers for 2013...</h4>
				</div>
			</div>
		</div>
	     </div>
	</div>
		<div class='inner-section-btn' style='top:1357px; background-image:url(patterns/satinweave.png);'>
			<a href='#first-splitter' class='inner-section-btn-inside' id='second-splitter' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
		</div>
	<div class='section-two' >
	<div class='inner-section-btn' >
			<a href='#second-splitter' class='inner-section-btn-inside' id='third-splitter'>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
	</div>
	
	<a id='pack-one' style='position:absolute;top:0px;left:50%;margin:-100px 0 0 0px;'></a>
		<div class='timeline-btn'>
			<a href='pack_one_timeline.php' style='text-decoration:none;'><h3 style='color:#fff;margin:0px 0 0 0px;' align="center">details</h3></a>
		</div>
	
	<div class='bookmark-pack' style='margin:-350px 0 0 -600px;'>
					<hr class='split-bookmark'/>
					<hr class='split-bookmark-left'/>
					<hr class='split-bookmark-right'/>
					
					<h4 class='avatar-title' style='padding-left:17px;'>package 1</h4>
					<div class='left-bookmark' style='height:120px;'></div>
					<div class='right-bookmark' style='height:120px;'></div>
	</div>
	
		<div class='section-two-content'>
		
		  <div class='section-content'>
			<div class='section-one-content-top' >
			
			<div class='pack-title'>
				<div class='pack-title-border'>
					<h3 style='color:#fff;margin:3px 0 0 0px;' align="center">Tourist package for 3 days</h3>
				</div>
			</div>
			
			<div class='section-two-pic-one'><img src='images/pack_one/pic2.png'/></div>
			<div class='section-two-pic-two'><img src='images/pack_one/pic1.png' /></div>
			<div class='section-two-pic-three'><img src='images/pack_one/pic3.png' /></div>
			</div>
			<div class='section-one-content-bottom'>
				<div class='section-one-content-bottom-left' style='border-right:dashed 1px #030'>
					<h2 style='color:#900'>Description</h2>
					<h5 style='color:#06f;padding-left:10px;opacity:0.9;padding-right:5px;font-size:14px;width:400px;'> Curtea de Arges: One of the oldest towns in the Southern part of Romania was the capital of a small local state where the lands south of the Carpathians began to be unified into a nation. The oldest archeological evidence of it being the seat of such a ruler date from the 13th century. Here you will be able to see the Cathedral of Curtea de Argeș (early 16th century), the Royal Church and Manole's well. Up toward the mountains, you meet Vidraru Dam: a real gem of engineering, a double curved dam, its height is 166 meters and arch length 307 meters. Bran Castle: Initially, the Bran Castle was a stronghold, built by the Teutonic Knights in 1212, but conquered by the Saxons living in Transylvania towards the end of the 13th century.</h5>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<div class='choose-persons' align="center">
					<div class='person-active' id='one-pers'><img src='small_icons/glyphicons_003_user.png' style='padding-top:10px;'/></div>
					<div class='person' id='mult-pers'><img src='small_icons/glyphicons_043_group.png' style='padding-top:10px;'/></div>
					</div>
					
					<div class='simple-option' rel='tooltip' title="In this price, you will have at your service: car (minivan WV), driver, interpreter and touring guide, for 10 working hours daily.<br />
Fuel will be paid by customer at  Euro 0.15 ($0.19)/ km <br />
Leave your travel worries to us.">
						<div class='option-top'  ><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">services only</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='simple-price'>&euro; 210 <br /> ($ 279)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					
					<div class='all-inclusive-option' rel='tooltip' title="For all inclusive package, we included all services, fuel and the following: airport pick-up, room and board, entrance fees, airport (or hotel) delivery.
Note: If your choice will differ for a higher price for room and meals, the total price may be higher and will  change your costs. The price shown bellow was set for 2-3 *** range.
Leave your travel worries to us!">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">all inclusive</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='all-inclusive-price'>&euro; 475 <br /> ($ 630)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					<div class='simple-order' onmousedown="order_simple('1793','one','#one-pers');"><h2 class='order-title' >make reservation</h2></div>
					<div class='all-inclusive-order' onmousedown="order_all('1793','one','#one-pers');"><h2 class='order-title'>make reservation</h2></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class='section-three' style='background-image:url(patterns/kuji.png);'>
	<div class='inner-section-btn' >
			<a href='#third-splitter' class='inner-section-btn-inside' id='fourth-splitter'>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
	       </div>
	        
	<a id='pack-two' style='position:absolute;top:0px;left:50%;margin:-100px 0 0 0px;'></a>
	<div class='timeline-btn'>
			<a href='pack_two_timeline.php' style='text-decoration:none;'><h3 style='color:#fff;margin:0px 0 0 0px;' align="center">details</h3></a>
	</div>
	
	<div class='bookmark-pack' style='margin:-350px 0 0 -600px;'>
					<hr class='split-bookmark'/>
					<hr class='split-bookmark-left'/>
					<hr class='split-bookmark-right'/>
					
					<h4 class='avatar-title' style='padding-left:17px;'>package 2</h4>
					<div class='left-bookmark' style='height:120px;'></div>
					<div class='right-bookmark' style='height:120px;'></div>
	</div>
	
	        <div class='section-content'>
	        
		<div class='section-three-content-top' >
		
		<div class='pack-title'>
				<div class='pack-title-border'>
					<h3 style='color:#fff;margin:3px 0 0 0px;' align="center">Tourist package for 5 days</h3>
				</div>
		</div>
		
			<div class='section-three-pic-one'><img src='images/pack_two/pic1.png'/></div>
			<div class='section-three-pic-two'><img src='images/pack_two/pic2.png' /></div>
			<div class='section-three-pic-three'><img src='images/pack_two/pic3.png' /></div>
			<div class='section-three-pic-four'><img src='images/pack_two/pic4.png' /></div>
			
		</div>
		<div class='section-three-content-bottom' >
				<div class='section-one-content-bottom-left' style='border-right:dashed 1px #030'>
					<h2 style='color:#900'>Description</h2>
					<h4 style='color:#06f;padding-left:10px;opacity:0.9;padding-right:5px;font-size:14px;width:400px;'>Curtea de Arges: In addition to sites described under package 1, you will tour Călimănești with Cozia Monastery: Known as the oldest and most complex historical and art monuments from Romania, it was built between 1386-1388, being one of the most important foundations of the ruler Mircea cel Batran (Mircea the Ancient). Then, <b>Sighişoara</b> is considered to be the most beautiful and well preserved inhabited citadel in Europe, with an authentic medieval architecture.
<b>Brașov</b> with it's marvelous Black Church: with a turbulent history - built between 1385 and 1477 and then damaged by Turkish raids in 1421 and again, by fire, in 1689, when the 'Great Fire, set by Hapsburg invaders, leveled most of the town, heavily damaged the church, blackening its walls.</h4>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<div class='choose-persons' align="center">
					<div class='person-active' id='one-pers-second-pack'><img src='small_icons/glyphicons_003_user.png' style='padding-top:10px;'/></div>
					<div class='person' id='mult-pers-second-pack'><img src='small_icons/glyphicons_043_group.png' style='padding-top:10px;'/></div>
					</div>
					
					<div class='simple-option' rel='tooltip' title="In this price, you will have at your service: car (minivan WV), driver, interpreter and touring guide, for 10 working hours daily.<br />
Fuel will be paid by customer at  Euro 0.15 ($0.19)/ km <br />
Leave your travel worries to us.">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">services only</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='simple-price-second-pack'>&euro; 350 <br /> ($ 465)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					
					<div class='all-inclusive-option' rel='tooltip' title="For all inclusive package, we included all services, fuel and the following: airport pick-up, room and board, entrance fees, airport (or hotel) delivery.
Note: If your choice will differ for a higher price for room and meals, the total price may be higher and will  change your costs. The price shown bellow was set for 2-3 *** range.
Leave your travel worries to us!">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">all inclusive</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='all-inclusive-price-second-pack'>&euro; 699 <br /> ($ 929)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					<div class='simple-order' onmousedown="order_simple('2485','two','#one-pers-second-pack');" ><h2 class='order-title' >make reservation</h2></div>
					<div class='all-inclusive-order' onmousedown="order_all('2485','two','#one-pers-second-pack');"><h2 class='order-title'>make reservation</h2></div>
				</div>
			</div>
		</div>	
	     </div>
	     
	 <div class='section-three' style="top:2773px;background-image:url(patterns/greyfloral.png);" >
	 <div class='inner-section-btn' >
			<a href='#fourth-splitter' class='inner-section-btn-inside' id='fifth-splitter'>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
	</div>
	
	<a id='pack-three' style='position:absolute;top:0px;left:50%;margin:-100px 0 0 0px;'></a>
	<div class='timeline-btn'>
			<a href='pack_three_timeline.php' style='text-decoration:none;'><h3 style='color:#fff;margin:0px 0 0 0px;' align="center">details</h3></a>
	</div>
	
	<div class='bookmark-pack' style='margin:-350px 0 0 -600px;'>
					<hr class='split-bookmark'/>
					<hr class='split-bookmark-left'/>
					<hr class='split-bookmark-right'/>
					
					<h4 class='avatar-title' style='padding-left:17px;'>package 3</h4>
					<div class='left-bookmark' style='height:120px;'></div>
					<div class='right-bookmark' style='height:120px;'></div>
	</div>
	
	        <div class='section-content'>
		<div class='section-three-content-top' >
				
			<div class='pack-title' style='width:400px;'>
				<div class='pack-title-border' style='width:400px;'>
					<h4 style='color:#fff;margin:3px 0 0 0px;' align="center">Mountain package for 3 days: hike in Făgăras Mt.</h4>
				</div>
			</div>
			
			<div class='section-two-pic-one'><img src='images/pack_three/pic2.png'/></div>
			<div class='section-two-pic-two'><img src='images/pack_three/pic1.png' /></div>
			<div class='section-two-pic-three'><img src='images/pack_three/pic3.png' /></div>
			
		</div>
		<div class='section-three-content-bottom' >
				<div class='section-one-content-bottom-left' style='border-right:dashed 1px #030'>
					<h2 style='color:#900'>Description</h2>
					<h4 style='color:#06f;padding-left:10px;opacity:0.9;padding-right:5px;font-size:14px;width:400px;'>Făgăraș Mtns. are not extremely high nor dangerous but they are wild. Most visited mountain trails from Romania still look untouched by humans...The Făgăraş Mtns. belong to the South Carpathians and are one of the most impressive mountain ranges in Romania. The main crest never drops below 2000m over a distance of about 50 km. In the Făgăraş Mtns. sit eight of the 14 Romania's peaks rising above 2500m. The highest is called Moldoveanu and rises to 2544m and the second highest is Negoiu: rockier, at 2535m. In this package, you will be able to climb the second highest peak and have a great view over Transfagarasan highway. For more information click on the links included in <a href='http://www.welcometoromania.ro/Fagaras/Fagaras_Harta_e.htm' style='text-decoration:none;color:#900;'>description</a> and details, for suggested track.</h4>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<div class='choose-persons' align="center">
					<div class='person-active' id='one-pers-third-pack'><img src='small_icons/glyphicons_003_user.png' style='padding-top:10px;'/></div>
					<div class='person' id='mult-pers-third-pack'><img src='small_icons/glyphicons_043_group.png' style='padding-top:10px;'/></div>
					</div>
					
					<div class='simple-option' rel='tooltip' title="In this price, you will have at your service: car (minivan WV), driver, interpreter and touring guide, for 10 working hours daily.<br />
Fuel will be paid by customer at  Euro 0.15 ($0.19)/ km <br />
Leave your travel worries to us.">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">services only</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='simple-price-third-pack'>&euro; 210 <br /> ($ 279)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					
					<div class='all-inclusive-option' rel='tooltip' title="For all inclusive package, we included all services, fuel and the following: airport pick-up, room and board, entrance fees, airport (or hotel) delivery.
Note: If your choice will differ for a higher price for room and meals, the total price may be higher and will  change your costs. The price shown bellow was set for 2-3 *** range.
Leave your travel worries to us!">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">all inclusive</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='all-inclusive-price-third-pack'>&euro; 399 <br /> ($ 530)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					<div class='simple-order' onmousedown="order_simple('3177','three','#one-pers-third-pack');" ><h2 class='order-title' >make reservation</h2></div>
					<div class='all-inclusive-order' onmousedown="order_all('3177','three','#one-pers-third-pack');"><h2 class='order-title' >make reservation</h2></div>
				</div>
			</div>
		</div>	
	     </div>
	     
	<div class='section-three' style="top:3460px;background-image:url(patterns/crisp_paper_ruffles.png);" >
	<div class='inner-section-btn' >
			<a href='#fifth-splitter' class='inner-section-btn-inside' id='sixth-splitter'>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 -10px;-webkit-transform:rotate(-10deg);color:#fff;'>u</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:-2px 0 0 2px;-webkit-transform:rotate(15deg);color:#fff;'>p</h4>
			</a>
			<a href='#top' class='inner-section-btn-inside-under' >
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:4px 0 0 -12px;-webkit-transform:rotate(28deg);color:#fff;'>t</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:5px 0 0 -4px;-webkit-transform:rotate(0deg);color:#fff;'>o</h4>
				<h4 style='position:absolute;z-index:2;top:0px;left:50%;margin:2px 0 0 5px;-webkit-transform:rotate(-30deg);color:#fff;'>p</h4>
			</a>
	</div>
	<a id='pack-four' style='position:absolute;top:0px;left:50%;margin:-100px 0 0 0px;'></a>
	<div class='timeline-btn'>
			<a href='pack_four_timeline.php' style='text-decoration:none;'><h3 style='color:#fff;margin:0px 0 0 0px;' align="center">details</h3></a>
	</div>
	
	<div class='bookmark-pack' style='margin:-350px 0 0 -600px;'>
					<hr class='split-bookmark'/>
					<hr class='split-bookmark-left'/>
					<hr class='split-bookmark-right'/>
					
					<h4 class='avatar-title' style='padding-left:17px;'>package 4</h4>
					<div class='left-bookmark' style='height:120px;'></div>
					<div class='right-bookmark' style='height:120px;'></div>
	</div>
	
	        <div class='section-content'>
		<div class='section-three-content-top' >
		
		<div class='pack-title' style='width:400px;'>
				<div class='pack-title-border' style='width:400px;'>
					<h4 style='color:#fff;margin:3px 0 0 0px;' align="center">Mountain package for 5-6 days: hike in Făgăras Mt.</h3>
				</div>
		</div>
		
			<div class='section-three-pic-one'><img src='images/pack_four/pic1.png'/></div>
			<div class='section-three-pic-two'><img src='images/pack_four/pic2.png' /></div>
			<div class='section-three-pic-three'><img src='images/pack_four/pic3.png' /></div>
			<div class='section-three-pic-four'><img src='images/pack_four/pic4.png' /></div>
			
		</div>
		<div class='section-three-content-bottom' >
				<div class='section-one-content-bottom-left' style='border-right:dashed 1px #030'>
					<h2 style='color:#900'>Description</h2>
					<h4 style='color:#06f;padding-left:10px;opacity:0.9;padding-right:5px;font-size:14px;width:400px;'>Făgăraș Mtns. are not extremely high nor dangerous but they are wild. Most visited mountain trails from Romania still look untouched by humans...The Făgăraş Mtns. belong to the South Carpathians and are one of the most impressive mountain ranges in Romania. The main crest never drops below 2000m over a distance of about 50 km. In the Făgăraş Mtns. sit eight of the 14 Romania's peaks which rise above 2500m. The highest is called Moldoveanu and rises to 2544m and the second highest is Negoiu: rockier, at 2535m.. In this package, you will be able to climb both the highest and the second highest peak, have a great view over Transfagarasan highway and see tens of small glacial lakes. For more information see the <a href='http://www.welcometoromania.ro/Fagaras/Fagaras_Harta_e.htm' style='text-decoration:none;color:#900;'>details</a> for suggested track. </h4>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<div class='choose-persons' align="center">
					<div class='person-active' id='one-pers-fourth-pack'><img src='small_icons/glyphicons_003_user.png' style='padding-top:10px;'/></div>
					<div class='person' id='mult-pers-fourth-pack'><img src='small_icons/glyphicons_043_group.png' style='padding-top:10px;'/></div>
					</div>
					
					<div class='simple-option' rel='tooltip' title="In this price, you will have at your service: car (minivan WV), driver, interpreter and touring guide, for 10 working hours daily.<br />
Fuel will be paid by customer at  Euro 0.15 ($0.19)/ km <br />
Leave your travel worries to us.">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">services only</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='simple-price-fourth-pack'>&euro; 350 <br /> ($ 465)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					
					<div class='all-inclusive-option' rel='tooltip' title="For all inclusive package, we included all services, fuel and the following: airport pick-up, room and board, entrance fees, airport (or hotel) delivery.
Note: If your choice will differ for a higher price for room and meals, the total price may be higher and will  change your costs. The price shown bellow was set for 2-3 *** range.
Leave your travel worries to us!">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">all inclusive</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='all-inclusive-price-fourth-pack'>&euro; 600 <br /> ($ 800)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					<div class='simple-order' onmousedown="order_simple('3862','four','#one-pers-fourth-pack');" ><h2 class='order-title' >make reservation</h2></div>
					<div class='all-inclusive-order' onmousedown="order_all('3862','four','#one-pers-fourth-pack');"><h2 class='order-title' >make reservation</h2></div>
				</div>
			</div>
		</div>	
	     </div>
	     
	     <div class='section-three' style="top:4150px;background-image:url(patterns/norwegian_rose.png);" >
	     
	<a id='pack-five' style='position:absolute;top:0px;left:50%;margin:-100px 0 0 0px;'></a>
	<div class='timeline-btn'>
			<a href='pack_five_timeline.php' style='text-decoration:none;'><h3 style='color:#fff;margin:0px 0 0 0px;' align="center">details</h3></a>
	</div>
	
	<div class='bookmark-pack' style='margin:-350px 0 0 -600px;'>
					<hr class='split-bookmark'/>
					<hr class='split-bookmark-left'/>
					<hr class='split-bookmark-right'/>
					
					<h4 class='avatar-title' style='padding-left:17px;'>package 5</h4>
					<div class='left-bookmark' style='height:120px;'></div>
					<div class='right-bookmark' style='height:120px;'></div>
	</div>
	
	        <div class='section-content'>
		<div class='section-three-content-top' >
				
			<div class='pack-title' style='width:400px;'>
				<div class='pack-title-border' style='width:400px;'>
					<h4 style='color:#fff;margin:3px 0 0 0px;' align="center">Rustic package for 3-4 days.</h4>
				</div>
			</div>
			
			<div class='section-three-pic-one'><img src='images/pack_five/pic1.png'/></div>
			<div class='section-three-pic-two'><img src='images/pack_five/pic2.png' /></div>
			<div class='section-three-pic-three'><img src='images/pack_five/pic4.png' /></div>
			<div class='section-three-pic-four'><img src='images/pack_five/pic3.png' /></div>
			
		</div>
		<div class='section-three-content-bottom' >
				<div class='section-one-content-bottom-left' style='border-right:dashed 1px #030'>
					<h2 style='color:#900'>Description</h2>
					<h4 style='color:#06f;padding-left:10px;opacity:0.9;padding-right:5px;font-size:14px;width:400px;'>Most of the time, visiting new places brings joy and excitement. Choosing this package will enable you to experience the life of Romanians at it's simplicity. Along with a couple of important tourist stops, you will experience the shepherd life at his sheepfold, walks through the virgin forests and alpine trails, Romanian traditional eco foods (cooked at home or at sheepfold) or see the folk art at it's birthplace. We welcome you to experience Romania but be prepare to go back in time and taste the past and its traditions.</h4>
				</div>
				
				<div class='section-one-content-bottom-right'>
					<div class='choose-persons' align="center">
					<div class='person-active' id='one-pers-fifth-pack'><img src='small_icons/glyphicons_003_user.png' style='padding-top:10px;'/></div>
					<div class='person' id='mult-pers-fifth-pack'><img src='small_icons/glyphicons_043_group.png' style='padding-top:10px;'/></div>
					</div>
					
					<div class='simple-option' rel='tooltip' title="In this price, you will have at your service: car (minivan WV), driver, interpreter and touring guide, for 10 working hours daily.<br />
Fuel will be paid by customer at  Euro 0.15 ($0.19)/ km <br />
Leave your travel worries to us.">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">services only</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='simple-price-fifth-pack'>&euro; 210 <br /> ($ 279)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					
					<div class='all-inclusive-option' rel='tooltip' title="For all inclusive package, we included all services, fuel and the following: airport pick-up, room and board, entrance fees, airport (or hotel) delivery.
Note: If your choice will differ for a higher price for room and meals, the total price may be higher and will  change your costs. The price shown bellow was set for 2-3 *** range.
Leave your travel worries to us!">
						<div class='option-top'><h3 align='center' style="font-family:Georgia, 'Times New Roman', Times, serif; color:#900">all inclusive</h3></div>
						<div class='option-bottom'>
							<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#B42218;" align='center' id='all-inclusive-price-fifth-pack'>&euro; 399 <br /> ($ 530)</h1>
							<h6 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#06f;width:100px;padding-top:40px;padding-left:20px;">* cost per person per package</h6>
						</div>
					</div>
					<div class='simple-order' onmousedown="order_simple('4554','five','#one-pers-fifth-pack');" ><h2 class='order-title' >make reservation</h2></div>
					<div class='all-inclusive-order' onmousedown="order_all('4554','five','#one-pers-fifth-pack');"><h2 class='order-title' >make reservation</h2></div>
				</div>
			</div>
		</div>	
	     </div>
	     <div class='section-three' style="top:4840px; height:200px;background-image:url(patterns/norwegian_rose.png);">
	     		<div class='contact'>
				<div class='contact-left'>
					<textarea id='contact-message' style="width:400px; margin:20px 0 0 20px; top:0px; left:0px;height:150px;max-width:400px;max-height:150px;background-color:transparent;border:dashed 1px #FFF;font:Georgia, 'Times New Roman', Times, serif; font-size:14px; color:#fff; outline:none;" placeholder='have something to share? :)'></textarea>
				</div>
				<div class='contact-right'>
					<input type='text' id='contact-name' class="input-text-types" placeholder='name' style='margin:20px 0 0 40px;border-color:#fff;color:#fff;'/>
					<input type='text' id='contact-email' class="input-text-types" placeholder='e-mail' style='margin:20px 0 0 40px;border-color:#fff;color:#fff;'/>
					
					<div class='order-btn'  id='contact-btn' style='margin:-100px 0 0 0px;' onmousedown="send_contact();">
					<div class='order-btn-border'>
					<h4 align='center' style='margin:3px 0 0 0px;color:#fff;'>send</h>
					</div>
				</div>
				</div>
			</div>
	     </div>
	     
	      <div class='section-three' style="top:4840px; height:200px;cursor:pointer;background-image:url(patterns/norwegian_rose.png);" id='contact-cover'>
	      		<div class='show-contact-btn'>
				<h3 style="color:#fff;font:Georgia, 'Times New Roman', Times, serif;margin: 10px 0 0 0px; cursor:pointer;" align="center">contact</h3>
			</div>
	     		<div class='contact'>
				<h1 style="color:#fff; font-family:Georgia, 'Times New Roman', Times, serif; top:50%;margin:100px 0 0 0px;" align="center">SelahTraveller &nbsp; &copy;</h1>
				<h5 style="color:#fff; font-family:Georgia, 'Times New Roman', Times, serif; top:50%;margin:20px 0 0 0px;" align="center"><a href='#top' style="text-decoration:none; color:#fff;">home</a>| <a href='#second-splitter' style="text-decoration:none; color:#fff;">tourist packages</a> | <a href='#top' style="text-decoration:none; color:#fff;">ministry packages</a> | <a href='#top' style="text-decoration:none; color:#fff;">terms and condition</a> </h5>	
				<div class='contact-left'>
					
				</div>
				<div class='contact-right'>
					
				</div>
				</div>
			</div>
	     </div>
	     
	</div>
</body>
</html>