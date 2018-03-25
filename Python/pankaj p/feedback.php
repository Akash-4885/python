<?php
session_start();
echo $_SESSION['enrol'];
echo $_SESSION['fname'];
echo $_SESSION['lname'];
echo $_SESSION['email'];
echo $_SESSION['branch'];
?>
<html>
<head>
<style>
table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
padding:10px;
	}
input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  border-radius: 50%;
  width: 16px;
  height: 16px;

  border: 2px solid #999;
  transition: 0.2s all linear;
  outline: none;
  margin-right: 5px;

  position: relative;
  top: 4px;
}

input:checked {
  border: 6px solid black;
}

button {
  color: white;
  background-color: black;
  padding: 5px 10px;
  border-radius: 0;
  border: 0;
  font-size: 14px;
}

button:hover,
button:focus {
  color: #999;
}

button:active {
  background-color: white;
  color: black;
  outline: 1px solid black;
}</style>
</head>
<body>

<h1>Feedback Form</h1>
<strong>Rate From 1 To 5</strong><br/><br/>
<p>Excellent(5) &nbsp;&nbsp;&nbsp;&nbsp;  Very Good(4) &nbsp;&nbsp;&nbsp;&nbsp; Good(3) &nbsp;&nbsp;&nbsp;&nbsp; Fair(2) &nbsp;&nbsp;&nbsp;&nbsp; Poor(1)</p>
<form action="svfdbk.php" method="post">
<!--<input type="text" name="enrol">Enrollment ID</input>-->
<strong>Select Subject Name</strong>
<select name="subject">
  <option value="math">Math</option>
  <option value="phy">Physics</option>
  <option value="chem">Chemistry</option>
  <option value="os">Operating System</option>
</select>
<br/><br/><br/>
<table>
<tr>
<th></th>
<th></th>
<th>Rating</th>
</tr>

<tr>
<td>1</td>
<td>Knowledge of the subject</td>
<td name="1">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td>
</tr>
<tr>
<td>2</td>
<td>Way of Teaching/Method of Expression</td>
<td name="2">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>3</td>
<td>Interaction with students in class/Clarification of doubts</td>
<td name="3">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>4</td>
<td>Use of Teaching Aids</td>
<td name="4">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>5</td>
<td>Clarity in voice</td>
<td name="5">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>6</td>
<td>Punctuality in class</td>
<td name="6">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>7</td>
<td>Control of class</td>
<td name="7">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>8</td>
<td>Motivation/Guidance</td>
<td name="8">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>9</td>
<td>Regularity in Evaluations and Return of Home Assignments</td>
<td name="9">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
<tr>
<td>10</td>
<td>Overall Rating</td>
<td name="10">
<input type="radio" name="rating">1</input>
<input type="radio" name="rating">2</input>
<input type="radio" name="rating">3</input>
<input type="radio" name="rating">4</input>
<input type="radio" name="rating" checked>5</input>
</td></tr>
</table>
<button type="submit" name="submit1">Submit</button>
</form>
</body>
</html>