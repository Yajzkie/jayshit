<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Calculator</title>
</head>
<body oncontextmenu="return false">
	<center>
		
		<p>Make a Simple Calculator to Add, Subtract, Multiply or Divide Using if statements</p>
		<hr>
		<h2>Simple Calculator</h2>
		<table border="0px">
			<tr>
				<td><label>Enter the first number:</label></td>
			</tr>
			<tr>
				<td><input type="text" id="first"></td>
			</tr>
			<tr>
				<td><label>Enter the second number:</label></td>
			</tr>
			<tr>
				<td><input type="text" id="second"></td>
			</tr>
			<tr>
				<td><label>Operands</label></td>
			</tr>
			<tr>
				<td>
					<select id="op">
						<option value="addition">Addition</option>
						<!-- <option value="multiplication">Multiplication</option>
						<option value="subtraction">Subtraction</option>
						<option value="division">Division</option> -->
					</select>
				</td>
			</tr>
		</table>
		<br>
		<div>
			<button id="calculate">CALCULATE</button>
		</div>
		<div>
			<p id="result"></p>
		</div>
	</center>
	<script type="text/javascript">
		document.getElementById("calculate").addEventListener("click", function(){
		  	let first = document.getElementById("first").value;
		  	let second = document.getElementById("second").value;
		  	let op = document.getElementById("op").value;
		  	
		  	if(op == "addition"){
		  		document.getElementById("result").innerHTML =`The sum of ${parseInt(first)} and ${parseInt(second)} is ` + (parseInt(first) + parseInt(second));
		  	} 
		  	// else if(op == "multiplication"){
		  	// 	document.getElementById("result").innerHTML = first * second;
		  	// } else if(op == "subtraction"){
		  	// 	document.getElementById("result").innerHTML = first - second;
		  	// } else if(op == "division"){
		  	// 	document.getElementById("result").innerHTML ="${``}" first / second;
		  	// }
		});


		document.addEventListener('contextmenu', function(e) {
		  e.preventDefault();
		});
	</script>

</body>
</html>