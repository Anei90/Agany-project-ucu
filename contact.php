<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

a{
    color: inherit;
    text-decoration: none;
    outline: none;
}
.main_container{
    max-width: 450px;
    margin: 0 auto;
    background-color: #F8FAFC;
    padding: 20px;
    border: 1px solid rgba(23,23,23, .1);
    border-radius: 3px;
}

.login_signup_container input[type='text'],
.login_signup_container input[type='email'],textarea,
.login_signup_container input[type='password']{
    width: 100%;
    padding: 10px;
    border: 0;
    border-bottom: 1px solid #8795A1;
    outline: none;
    margin-bottom: 10px;
    font-size: 14px;
    background: none;
    color: #232323;
    font-family: 'Open Sans', sans-serif;
}
.login_signup_container input[type='text']:focus,
.login_signup_container input[type='email']:focus,
.login_signup_container textarea:focus,input[type='password']:focus{
    border-color: #606F7B;
    
}
.login_signup_container label{
    font-weight: bold;
    color: #232323;
}
.login_signup_container input[type='submit']{
    color: #ffffff;
    padding: 10px 20px;
    font-size: 14px;
    text-transform: uppercase;
    cursor: pointer;
    border: 1px solid rgba(23,23,23, .1);
    outline: none;
    background-color: #1F9D55;
    
}
.form_link{
    float: right;
    font-size: 16px;
}
.site_link,.login_signup_container p{
    font-size: 14px;
    text-align: center;
    color: #3D4852;
    text-transform: uppercase;
    letter-spacing: 3px;
}
.site_link:hover,.form_link:hover,.login_signup_container p a:hover{
    text-decoration: underline;
    color: #1F9D55;
}

.login_signup_container .errorMsg{
    border: 2px solid #CC1F1A;
    color: #CC1F1A;
    letter-spacing: normal;
    font-size: 16px;
    padding: 10px;
}
.login_signup_container .successMsg{
    border: 2px solid #1F9D55;
    color: #1F9D55;
    letter-spacing: normal;
    font-size: 16px;
    padding: 10px;
}

</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body style="background-color:powderblue;">
  <div class="main_container login_signup_container">
    <h3>Contact the administration for more information</h3>
	<hr>
    <div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fullname" name="fullname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your Email..">
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="Your subject..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="message">Message</label>
      </div>
      <div class="col-75">
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="sub" value="Send Message">
    </div>
  </form>
</div>
    <?php
	include("config.php");
	if(isset($_POST["sub"])){
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$insert = "INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$fullname', '$email', '$subject', '$message')";
	$query = mysqli_query($con, $insert);
	if($query){
		echo "Success!";
	}
	else{
		echo "Failed!";
	}
	}
	?>
  </div>
</body>
</html>
