<html>
<head>
<style>
#top{width:800px;
height:600px;
margin-top:25%;
margin-left:23%;
//border:1px solid red;}
#butt {
    background-color: #007acc;
    color: white;
    padding: 14px 20px;
    cursor: pointer;
    width: 100%;
	opacity:0.4;
text-decoration:none;
border-radius:4px;
margin-left:23%;
margin-top:25%;
}
#butt:hover {
    opacity: 0.8;}
#login{width:400px;
height:300px;
margin:0px auto;
//border:1px solid black;}
</style>
</head>
<body bgcolor="#fff5cc">
<div id="top">
<?php
	if(isset($_POST["submit1"]))
	{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pankaj");
	$count=0;
	$res=mysqli_query($link,"select * from adregis where enrol='$_POST[enrol]'");
	$count=mysqli_num_rows($res);
	
	if($count>0)
	{
	?>
		<script type="text/javascript">
		alert("This Enrollment ID Is Already Registered.");
	</script>
		<?php
	}
	else
	{
	mysqli_query($link,"insert into adregis values('','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[enrol]','$_POST[psw]')");
	?>
		<script type="text/javascript">
		alert("Registration Successful.");
	</script>
		<?php
	}
	}
	?>
		<div id="login">
		<a id="butt" href="LOGIN.html">Click Here To Go On Login Page.</a></div>
		</div>
</body>
</html>