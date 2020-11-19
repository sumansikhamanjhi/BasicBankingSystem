<html>
<head>
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
	<style>
	button{
		background-color:#8cbed6;
		
	}
	tr{
		text-align:center;
	}
	body
	{
		text-align:center;
	}
	body{
		background-image:url("images/6.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.header_container {
		padding: 30px;
		font-family: "Lusitana", serif;
		font-size: xx-large;
		font-weight: 100;
		color: #fcfbf7;
		text-shadow: 2px 2px black;
	}

	</style>
</head>
<body >

	<div id="header" class = "header_container">
    <h2> Basic Banking System </h2>
    </div>
    <div id="section">
        <table>
            <tr></tr>
            <tr><br>
			<a href="getdetail.php">
            <button class="btn" type="button" href="getdetail.php">View all Customers</button>
            </a>
            </tr>
			
			<tr>        
            <br> <br> <br>
			<a href="transaction.php">
			<button class="btn" type="button">All Transactions</button>
            </a>
            
            </tr>

        </table>
    </div>
</body>
</html>