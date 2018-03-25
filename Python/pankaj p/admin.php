<?php
	if(isset($_POST["submit1"]))
{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pankaj");
	$count=0;
	$res=mysqli_query($link,"select * from adregis where enrol='$_POST[enrol]' && psw='$_POST[psw]'");
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	?>
			<script type="text/javascript">
			window.location="afeedback.php";
		</script>
			<?php
	}
	else
	{
		?>
			<script type="text/javascript">
			alert("incorrect username and password");
		window.location="LOGIN.html"
		</script>
			<?php
	}
}
?>