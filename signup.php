
<script language="javascript">
function check()
{
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;
		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  } 
</script>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css_signup.css">
    </head>
<body>
    <title>Infinity Painting,LLC</title>
    <div id="logo">
        <img src="ezgif.com-gif-maker.jpg">
    </div>
    <h6 id="company_name">Infinity Painting,LLC.</h6>
<form method="post" action="signupuser.php" onSubmit="return check();" >


<input type="text" id="name" name="name" placeholder="Name" required><br>
   <input type="text" id="email" name="email" placeholder="Email" required><br>
   <input type="password" id="pass" name="pass" placeholder="Password" required><br>
   <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required><br>
   <input type="submit" name="submit" id="signup" value="Signup">
  
   <center><p>Already Register  <a href=login.php>Click here To Login</a></p></center>
  



  </form>
    <div id="gradient"></div>
    </body>
</html>