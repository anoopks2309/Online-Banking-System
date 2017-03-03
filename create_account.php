<html>
<!DOCTYPE html>
<html>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$fatherName = $_POST['fatherName'];
$mothersName = $_POST['motherName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$uid = $_POST['uid'];

$add_perm = $_POST['add_perm'];
$distt_perm = $_POST['distt_perm'];
$state_perm = $_POST['state_perm'];
$contact_perm = $_POST['contact_perm'];
$email = $_POST['email'];
$add_perm = $add_perm."\n".$distt_perm."\n".$state_perm;


$add_corr = $_POST['add_corr'];
$distt_corr = $_POST['distt_corr'];
$state_corr = $_POST['state_corr'];
$contact_corr = $_POST['contact_corr'];
$add_corr = $add_corr."\n".$distt_corr."\n".$state_corr;

//$cond_acc = $_POST['cond_acc'];
//$submit = $_POST['submit'];

$dbc = mysqli_connect('localhost','root','','bank_db') or die("error 404 at Database Connection");
$query = "insert into customers values (NULL, '$fname','$lname','$fatherName','$mothersName','$dob','$gender','$nationality','$uid','$add_corr','$contact_corr','$email','$add_perm','$contact_perm')";

if (!mysqli_query($dbc,$query))
  {
  die('Error: ' . mysqli_error($dbc));
  }
 
mysqli_close($dbc);

?>
<head>
	<style type="text/css">
		h3 {background-color:#463409;
			height:25px;
			text-align:right;
			color:#fffff;
			padding-right:25px}
		#emblem {position:absolute;
			top:40px;
			right:20px;}
		#fb {position:absolute;
			top:50px;
			right:280px;}
		#tw {position:absolute;
			top:50px;
			right:240px;}
		#hindi {position:absolute;
				top:80px;
				right:205px;}
		#feedback{position:absolute;
				  background-color:#463409;
				  top:120px;
				  right:190px;
				  padding:2px;
				  padding-left:5px;
				  padding-right:5px;
		}
		#slider{
			position:absolute;
			top:200px;
			}
		#above{
			position:absolute;
			z-index:2;
			}

		#data{
			position:absolute;
			top:520px;
			height:100px;
			width:1100px;
		}
		#newsHead{
			position:absolute;
			width:270px;
			height:20px;
			top:200px;
			left:1070px;
			background-color:#0066b1;
			color:white;
			text-align:center;
			padding-top:3px;
		}
		#newsScroll{
			position:absolute;
			width:290px;
			height:200px;
			top:220px;
			left:1050px;
			overflow:hidden;
		}
		#newsBorder{
			position:absolute;
			width:266px;
			height:220px;
			top:200px;
			left:1070px;
			border: 2px solid black;
		}
		#tenderHead{
			position:absolute;
			width:270px;
			height:20px;
			top:450px;
			left:1070px;
			background-color:#0066b1;
			color:white;
			text-align:center;
			padding-top:3px;
		}
		#tenderScroll{
			position:absolute;
			width:266px;
			height:180px;
			top:470px;
			left:1090px;
			overflow:hidden;
		}
		#tenderBorder{
			position:absolute;
			width:266px;
			height:200px;
			top:450px;
			left:1070px;
			border: 2px solid black;
		}
		#test{
			background-color: #62afe5;
			height: 150px;
			width: 1332px;
		}
		#created {
				position: absolute;
				top : 250;
				left: 275px;
				color : green;
		}
		#logo{
			position: absolute;
			top: 9px;
			left: 25px;

		}
		#name{
			position: absolute;
			top: 16px;
			left: 140px;
		}
		#bg{
			position:absolute;
			top:180px;
			height: 500px;
			width: 1332px;
		}
		#details{
			position: relative;
			top:100px;
		}
		marquee ul li a{
			color:#463409;
		}
		th{
			position:relative;
			float:left;
		}
		th a{
				background-color:#0066b1;
				color:white;
				padding-left:44px;
				padding-right:44px;
				padding-top:3px;
			}
		a {
			text-decoration:none;
			color:white;
		}
		th ul{
			display:none;
			list-style:none;
		}
		th:hover a{
			background:#846211;}
		th:hover ul{
			display:block;
			postition:relative;
		}
		th li a 
		{
			width:100px;
			display: block;
			text-decoration: none;
			color: #ffffff;
			border-top: 1px solid #ffffff;
			padding: 5px 10px 5px 5px;
			margin-left: 0px;
			white-space: wrap;
			font-size:13px;
		}
		th:hover li a:hover{
			background-color:#b48820;
		}
		.form-style-9{
    max-width: 750px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #305A72;
}
.form-style-9 ul{
    padding:0;
    margin:0;
    list-style:none;
}
.form-style-9 ul li{
    display: block;
    margin-bottom: 10px;
    min-height: 35px;
}
.form-style-9 ul li  .field-style{
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    padding: 8px;
    outline: none;
    border: 1px solid #B0CFE0;
   

}.form-style-9 ul li  .field-style:focus{
    box-shadow: 0 0 5px #B0CFE0;
    border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
    width: 49%;
}
.form-style-9 ul li .field-full{
    width: 100%;
}
.form-style-9 ul li input.align-left{
    float:left;
}
.form-style-9 ul li input.align-right{
    float:right;
}
.form-style-9 ul li textarea{
    width: 100%;
    height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
    -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
    box-shadow: inset 0px 1px 0px 0px #3985B1;
    background-color: #216288;
    border: 1px solid #17445E;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 18px;
    text-decoration: none;
    font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
    background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
    background-color: #28739E;
}
	</style>
	<title>This is the first Page</title>
</head>


<body>



<div id="test">

</div>


<div id="logo">
	<img src="logo1.jpg" height="150" width="190">
</div>

<dir id="name">
	<img src="name.jpg" height="120" width="850">
</dir>

	<div id="above">
<table border='0'  cellspacing='0'>
	<tr>
		<th><a href="index.html">Home</a>
		</th>
		<th><a href="About Us.html">About US</a>
			<ul>
				<li><a href="">Vision</a></li>
				<li><a href="">Motto</a></li>
				<li><a href="">Mission</a></li>
			</ul>
		</th>
		<th><a href="RWWO.html">Personal Banking</a>
		    <ul>
				<li><a href="">User Login</a></li>
				<li><a href="">Admin Login</a></li>
			</ul>
		</th>
		<th><a href="Tenders.html">Services</a>
			<ul>
				<li><a href="">Loan Services</a></li>
				<li><a href="">Mobile</a></li>
				<li><a href="">DTH Services</a></li>
			</ul>
		</th>
		<th><a href="Vendor Interface.html">Create Account</a>
		</th>
		<th><a href="news.html">Feedback</a>
		</th>
		<th><a href="Contact Us.html">Contact Us</a></th>
		<th><a href="Contact Us.html">Deverlopers</a></th>
	</tr>	
</table></div>
	<div id = "created">
	 <h2>Congrats <?php echo "$fname  $lname "?> . Your Account Has Been Created .</h2>
		</div>
		<div id="details">
<form class="form-style-9">
	<ul>
		<li>
			<?php
			echo"Name: ".$fname."<br>";
			echo"DOB: ".$dob."<br>";
			echo"Gender: ".$gender."<br>";
			echo"Nationality: ".$nationality."<br>";
			echo"Permanent Address: ".$add_perm."<br>";

			?>
		</li>
	</ul>
</form>
</div>

</body>

</html>