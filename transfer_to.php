<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
	<title>Transfer</title>
	<link rel="stylesheet" href="button2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
	<style>
	.btn{
			cursor:pointer;
		}
	.nav-ul {
		list-style-type: none;
		margin: 0;
		padding: 5px;
		verflow: hidden;
		
		}
	.nav-li {
		float:left;
	}
	.nav-li a {
		
		display: block;
		color:#010114;
		text-align: center;
		padding: 5px 5px;
		text-decoration: none;
		text-transform:uppercase;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.form{
		text-align:center;
		
	}
	.button{
		text-align:center;
		
	}

	.c {
color: #494949 !important;
text-transform: uppercase;
/* text-decoration: none; */
background: #ffffff;
padding: 10px 16px 10px 16px;
border: 4px solid #494949 !important;
display: inline-block;
transition: all 0.4s ease 0s;
}
.c:hover {
color: #ffffff !important;
background: #E0115F;
cursor:pointer;
border-color: #E0115F !important;
transition: all 0.4s ease 0s;
}
	table{
		background-color:#6695d1;
		padding:50px;
		border:2px ridge black;
		font-family: "Lusitana", serif;
	}
	.btn1 {
		background-color:RoyalBlue;
		border: none;
		border-radius:24px;
		color: white;
		padding: 12px 16px;
		font-size: 23px;
		cursor: pointer;
	}
	.view h2{
		font-size:40px;
		color:#f29100;
		text-shadow: 2px 2px black;
		font-family: "Lusitana", serif;"
	}
	.btn1:hover {
		background-color:  DodgerBlue;
	}
	</style>
</head>
<body>
	<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn1"><i class="fa fa-home"></i></button></li>
	</a>
	</ul>
	<center>
		<div class="view">
			<br><br><h2>Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" align="left">Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label> 
			&emsp; &emsp;  &ensp; &nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" min="0" required></td>
		</tr>
        <tr>
			<td>
				<div class="button">
				<br>&emsp;  <button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit" >Transfer</button>
				</div>
			</td>
        </tr>
    </table>
	</div>
    </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>