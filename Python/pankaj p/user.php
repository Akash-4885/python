<?php
session_start();
$connect=mysql_connect("localhost","root","");
$select=mysql_select_db("pankaj",$connect);
if(isset($_POST["submit1"]))
{
	$name=$_POST['enrol'];
	$name2=$_POST['fname'];
	$name3=$_POST['lname'];
	$name4=$_POST['email'];
	$name5=$_POST['sem'];
	$name6=$_POST['branch'];
	$psw=$_POST['psw'];
	$select=mysql_query("select * from register");
	while($result=mysql_fetch_array($select))
	{
		$enrol=$result['enrol'];
		$fname=$result['fname'];
		$lname=$result['lname'];
		$email=$result['email'];
		$sem=$result['sem'];
		$branch=$result['branch'];
		$passwords=$result['psw'];
	if($passwords!=$psw || $enrol!=$name)
	{
	?>
			<script type="text/javascript">
			alert("incorrect username and password");
		window.location="LOGIN.html"
		</script>
			<?php
	}
	else
	{
		
		$_SESSION['enrol']=$enrol;
		$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
		$_SESSION['email']=$email;
		$_SESSION['sem']=$sem;
		$_SESSION['branch']=$branch;
		header("Location:feedback.php");	

	}
   }
	}
?>