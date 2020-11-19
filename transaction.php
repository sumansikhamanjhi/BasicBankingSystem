<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
		<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			overflow: hidden;
			
			}

		.nav-li {
			float:left;
		}

		.nav-li a {
			
			display: block;
			color:#010114;
			text-align: center;
			padding: 8px 10px;
			text-decoration: none;
			text-transform:uppercase;
		}
		body{
			background-image:url("images/2.jpg");
			background-repeat: no-repeat;
			background-size:cover;
			
		}
		table{
			font-family: "Lusitana", serif;
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:2px solid black;
			border-collapse:collapse;
			}
		th{
			color:purple;
			font-size:22px;
			padding:12px;
		}
		
		td{
			font-size:18px;
			color: black;
			padding: 10px 30px 10px 32px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			/* padding:12px; */
			font-size:40px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn{
			cursor:pointer;
		}
	</style>
	</head>
	<body>
		<br>
		<h2><?php echo "All Transactions"?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons" >
				<button class="btn" type="submit" name="name">Home</button>
			</div>
		</form>
		
	</body>
</html>