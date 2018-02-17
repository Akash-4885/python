#!C:\Python27\python.exe
print "Content-Type:text/html\n\n"
print "Register Here!"
print """
<html>
<head>
</head>
<body>
<form action="code.py" method="post">
Name
<input type="text" name="name"/>
<br/><br/>
F'name
<input type="text" name="fname"/>
<br/><br/>
Gender
<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
<br/><br/>
Email
<input type="email" name="email"/>
<br></br>
Password
<input type="password" name="password"/>
<br></br>
<input type="submit" value="register"/>
<input type="reset" value="reset"/>

</form>
</body>
</html>

"""