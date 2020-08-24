<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	<h1>Contact Form</h1>
<form action="contactcode.php" method="post" name="myform" id="form" onsubmit="return validateform()">
	<p>
		<label>Name</label>
		<input type="text" name="name" required>
		<small></small>
	</p>
	<p>
		<label>Phone</label>
		<input type="number" id="phone" name="phone" required>
		<span id="numberText"></span>
	</p>
	<p>
		<label>Email</label>
		<input type="email"  name="email" required>
	</p>
	<p>
		<label>Message</label>
		<textarea name="message" required></textarea>
	</p>
	<input type="submit"  name="submit" value="submit">
</form>


<script> 
function validateform()                                    
{ 
    var name = document.forms["myform"]["name"];
	var phone = document.forms["myform"]["phone"];		
    var email = document.forms["myform"]["email"];       
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false;
		else if (isNaN(phone)) { 
                    document.getElementById( 
                      "numberText").innerHTML = 
                      "Please enter Numeric value"; 
                    return false; 
                } else { 
                    document.getElementById( 
                      "numberText").innerHTML =  
                      "Numeric value is: " + phone; 
                    return true; 
                } 
	} 
   
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
}
</script> 
</body>
</html>