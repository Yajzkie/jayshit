<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Javascript Program to Check if a Number is Odd or Even</title>
</head>
<body oncontextmenu="return false">
	<center>
		<h2>Javascript Program to Check if a Number is Odd or Even</h2>
		<hr>
		<table border="0px">
			<tr>
				<td><label>Enter a Number</label></td>
			</tr>
			<tr>
				<td><input id="number" type="text"></td>
			</tr>
		</table>
		<br>
		<div>
			<button id="calculate">OK</button>
		</div>
		<div>
			<p id="result"></p>
		</div>
	</center>
	<script type="text/javascript">
		document.getElementById("calculate").addEventListener("click", function(){
		  	// program to check if the number is even or odd
			// take input from the user
			const number = document.getElementById("number").value;

			if(number % 2 == 0) {
			    document.getElementById("result").innerHTML = "The number is even.";
			} else {
			    document.getElementById("result").innerHTML = "The number is odd.";
			}
		});

		document.addEventListener('contextmenu', function(e) {
		  e.preventDefault();
		});
	</script>

</body>
</html>