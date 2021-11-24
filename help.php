<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

        <script src="https://smtpjs.com/v3/smtp.js">
 
        </script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
		<meta charset="UTF-8">
		<title>ElectroWeb</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="help.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">ElectroWeb </a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
				<li><a href="help.php"><span class="glyphicon glyphicon-modal-"></span> Contact</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>

                            <div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

    <center><div class="containr" id="error_message" >
        <div class= "fb">


				<form id="myform" >

					<h1 style = "color:white;">Feedback</h1>
					<div class="id">
					<input type="text" placeholder="Name" name="Name"  id="Name" required 
					oninvalid="this.setCustomValidity('Please enter valid name!')" oninput="this.setCustomValidity('')">
					</div>
					
					<div class="id">
					<input type="email" placeholder="Email" name="Email" id="Mail" required 
					oninvalid="this.setCustomValidity('Please enter your email!')" oninput="this.setCustomValidity('')"> 
					</div>
					
					
					
					<div class="id">
					<textarea cols="15" rows="5" placeholder="Message" name="Message" id="Message" required 
					oninvalid="this.setCustomValidity('Please enter your message!')" oninput="this.setCustomValidity('')"></textarea>
					</div>
					
					<!--<div class="id">
						<ol class="horizontal">
							<li><a href="#" class="star1" onclick="stars1();"><span class="fas fa-star"></span></a></li>
							<li><a href="#" class="star2" onclick="stars2()"><span class="fas fa-star"></span></a></li>
							<li><a href="#" class="star3" onclick="stars3()"><span class="fas fa-star"></span></a></li>
							<li><a href="#" class="star4" onclick="stars4()"><span class="fas fa-star"></span></a></li>
							<li><a href="#" class="star5" onclick="stars5()"><span class="fas fa-star"></span></a></li>

						</ol>
					</div>

					
					<div>
					<img src="D:\MCA\SEM 3\WT PRAC\Craving24\Final\satisfaction-scale.png" style="width:100%; height:14%;"><br>
					<div class="form-check form-check-inline">-->
					
				<!--<div class="radio-containe" >
				<input type="radio" id="Great" name="os" />
				&nbsp;
				<input type="radio" id="Good" name="os" />
				&nbsp;
				<input type="radio" id="Bad" name="os" />
				&nbsp;
				</div>-->
					
				<div class="id">
					<input style = "color:White;" type="submit" value="SUBMIT" onclick="sendmail()"> 
				</div>
					
					</form>

    </div>

			</div></center>
			
		
			
			</section>

							
					<div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>

<script>
	function sendmail(){
     alert("Mail Sent");
        var name = $('#Name').val();
        var email = document.myForm.Mail.value;
        var message = $('#Message').val();
        
        var Main='Name:  '+name+'<br>Mail:  '+email+'<br>Message:  '+message;

        
    }

    
    Email.send({
        Host : "smtp.gmail.com",
        Username : "manasimhatre32@gmail.com",
        Password : "kpyktfqxnkimupkx",
        To : email,
        From : "manasimhatre32@gmail.com",
        Subject : "Feedback Form From:"+name,
        Body : Main
    }).then(
      message => {

        if(message=='OK'){
            alert('Thank You, Your Feedback has been recorded');
        }
        else{
            console.error(message);
            alert('error sending Feedback.')
        }

        }
      
    );
	</script>

</html>









































