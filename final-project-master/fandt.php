<!DOCTYPE html>
<html lang="en">
<head>
<!-- Theme Made By www.w3schools.com - No Copyright -->
<title>Testimonials</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
<style>
.body
{
    font: 400 15px/1.8 Lato, sans-serif;
    font-family: Montserrat, sans-serif;
    color: #ffffff;
    background: #2d2d30;
}
.continer {
          padding: 45px 89px;
          font-family: Montserrat, sans-serif
        }
        .continer  h2 ,h4{
          text-align:left;
          font-family: Montserrat, sans-serif;}
          .continer  p{
          text-align:left;
          font-size: 18px;
          font-family: Montserrat, sans-serif;}
        



.bkg
{
    background-color: #2d2d30;
    color:#ffffff;
}

.btn
{
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}
.btn:hover, .btn:focus 
{
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}
.nav-tabs li a 
{
    color: #777;
} 
        
.navbar 
{
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 12px !important;
    letter-spacing: 4px;
     opacity: 1.8;
}
.navbar li a, .navbar .navbar-brand
{ 
    color: #d5d5d5 !important;
}
.navbar-nav li a:hover 
{
    color: #fff !important;
}
.navbar-nav li.active a 
{
    color: #fff !important;
    background-color: #29292c !important;
}
.navbar-default .navbar-toggle {
          border-color: transparent;
}
        .open .dropdown-toggle {
          color: #fff;
          background-color: #555 !important;
        }
        .dropdown-menu li a {
          color: #000 !important;
        }
        .dropdown-menu li a:hover {
          background-color: rgb(53, 48, 48) !important;
        }

        footer {
          background-color: #2d2d30;
          color: #f5f5f5;
          padding: 32px;
        }
        footer a {
          color: #f5f5f5;
        }
footer a:hover
{
    color: #777;
    text-decoration: none;
} 
.submit{
	color: #2d2d30;
	border-radius:3px;
	background: #ffffff;
	padding:5px;
	margin-top:40px;
	border:none;
	width:15%; 
	height:30px;
	box-shadow:0px 0px 1px 2px #123456;
	font-size:18px;	   
}
.input{ 
	width:80%; 
	height:15%; 
	border-radius:2px;
	box-shadow:0px 0px 1px 2px #123456; 
	margin-top:10px;
	padding:7px;
    border:none;
    color:#2d2d30;
    margin-bottom:20px;
}
textarea{ 
	width:80%; 
	height:70%; 
	border-radius:1px;
	box-shadow:0px 0px 1px 2px #123456; 
	margin-top:10px;
	padding:7px;
    border:none;
    color:#2d2d30;
	}	

</style>
</head>
<body class="bkg">
<div id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./index.html">TRAFFICRULES.COM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./index.html">HOME</a></li>
        <li><a href="./rules.html">TRAFFIC RULES</a></li>
        <li><a href="./signs.html">TRAFFIC SIGNS</a></li>
        <li><a href="./videos.html">VIDEOS</a></li>
        <li><a href="./fines.html">INFORMATION</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./home.html">CONTACT US</a></li>
            <li><a href="./fandt.php">FEEDBACK</a></li>
            <li><a href="./test.html">TESTIMONIALS</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div> 
  </div>
</nav> 
</div>

<div id="rules" class="continer">
      <br>
      <br>
      <h2>FEEDBACK or CONTACT US </h2><br>
<h4><em>Enter your valuable feedback or message to contact us here:</em></h4>
        <br>
        <br>
        <div class="row">
    <div class="col-sm-6" >
      
    
            <form action="fandt.php" method="post">    <!-- method can be set POST for hiding values in URL-->
					
					<p>Name:</p>
					<p><input class="input" type="text" name="name" value="" /></p>
					<br />
					<p>Email:</p>       
					<p><input class="input" type="text" name="email" value="" /></p>
					<br />
					<p>Contact:</label>
					<p><input class="input" type="text" name="contact" value="" /></p>
					<br />
					<p>Comments:</label>
					<p><textarea rows="5" cols="25" name="address"></textarea></p>
					<br />
					<p><input class="submit" type="submit" name="submit" value="Insert" /></p>

<?php
	//Establishing Connection with Server
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	

	$con = new mysqli($servername, $username, $password );
	
	$db =mysqli_select_db( $con , "college");


	
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    if($name !=''||$email !=''){
	//Insert Query of SQL
    $query = mysqli_query($con, "insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
	echo "<br><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
 
	}
	//Closing Connection with Server
	mysqli_close($con);
?>					
</form>

    </div>
<div class="col-sm-6">
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQL8GyoEkI0z5TbFCSTE0iHNcxnN9IBxIx36iPDhspzh2nc75Ib">
    </div>
  </div>
</div>




<script>
    $(document).ready(function(){
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip(); 
      
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
    
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    })
</script>
    
</body>
</html>
    

        