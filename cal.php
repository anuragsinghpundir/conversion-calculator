<!--CONVERSION TABLE-->

<?php
error_reporting(0);
$m = $_POST["cel"];
$n = $_POST["fahr"];
$o = $_POST["ope"];
switch($o)
{
	case "C->F":
		$n=($m*(9/5))+32;
		break;
	case "F->C":
		$m=($n-32)*(5/9);
		break;
}

?>
<head>
<title>CONVERSION TABLE</title>
<body style='background-color:grey'>
<h1 align="center" style="color: white">CONVERSION TABLE</h1>
<table align='center'>
	<tr>
		<td>
			<p align='center' style= 'font-family:arial'>Conversion of values between celsius and fahrenheit and vice-versa.</p>
			<h3 align='center' style= 'font-family:courier'>(C->F) Celsius to Fahrenheit Conversion</h3>
			<h3 align='center' style= 'font-family:courier'>(F->C) Fahrenheit to Celsius Conversion</h3>
			<h4 align='center' style= 'font-family:arial'>Reset button to reset the values</h4>
		</td>
	</tr>
	<tr>
		<td>
			<form method=post>
			<label style= 'font-family:courier'>Value in Celsius</label> <br> <input type=text name=cel style='color:red' value="<?php echo $m; ?>"><br>
			<label style= 'font-family:courier'>Value in Fahrenheit</label> <br> <input type=text name=fahr style='color:blue' value="<?php echo $n; ?>"><br><br>
			<input type=submit name="ope" value='C->F'>
			&nbsp
			<input type=submit name="ope" value='F->C'>
			&nbsp
			<input type="reset">
			</form>
		</td>
	</tr>
</table>
</body>
</head>
