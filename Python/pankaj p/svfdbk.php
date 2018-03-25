<?php
	if(isset($_POST["submit1"]))
	{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"pankaj");
	$count=0;
	$res=mysqli_query($link,"select * from svfdbk where enrol='$_GET[enrol]' && subject='$_POST[subject]'");
	$count=mysqli_num_rows($res);
	echo $count;
	if($count>0)
	{
	?>
		<script type="text/javascript">
		alert("This Enrollment ID Is Already Submitted Feedback.");
	</script>
		<?php
	}
	else
	{
	mysqli_query($link,"insert into svfdbk values('','$_POST[enrol]','$_POST[subject]','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]')");
	?>
		<script type="text/javascript">
		alert("Registration Successful.");
	</script>
		<?php
	}
	}
	?>