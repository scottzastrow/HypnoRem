<?php
//======================================================================
// Copyright (c) All Rights Reserved, VERGOSOFT LLC
// Title: HypnoRem Website
// Author: Scott Zastrow
//======================================================================
?>
<div id="form">
				<?php 
				$action=$_REQUEST['action'];
				$emailErr ="";				
				if ($action=="")    /* display the contact form */ 
					{ 
						include("includes/contact-form.php"); 
					}  
				else                /* send the submitted data */ 
					{ 
					$name=$_REQUEST['name'];
					$name= htmlspecialchars($name);
					$email=$_REQUEST['email'];
					$email= htmlspecialchars($email);					
					$subject= $_REQUEST['subject'];
					$subject= htmlspecialchars($subject);
					$message= $_REQUEST['message'];
					$message= htmlspecialchars($message)."\r\n\n From: ".$name."\r\n\n Address: ".$email;
					if (($name=="")||($email=="")||($message=="")) 
						{
						include("includes/contact-form.php");
						echo "All fields are required."; 
						}
					else{         
						$from="From: $name<$email>\r\nReturn-path: $email"; 
						//$subject="Message sent using your contact form"; 
						mail('admin@vergosoft.com', $subject, $message, 'From: noreply@vergosoft.com');
						echo "Your message was sent!"; 
						} 
					}   
				?> 
</div><!--form-->