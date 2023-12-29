<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`name`, `email`) VALUES ('$name', '$email')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        echo "<script>alert('Your entry has been submitted successfully!');
        window.location.href='home.html';
        </script>";
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?> 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="signup.css">
  <script src="signup.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <title>UpBound.Signin</title>
</head>

<body>
  <!--header-->
  <header>
    <div class="navbar">
        <div class="logo"><a href="#">UpBound</a></div>
        
        <div class="heading">
            <ul>
                <li><a href="index.html" class="under border">HOME</a></li>
                <li><a href="shops.html" class="under border">SHOP</a></li>
                <li><a href="#footerr" class="under border">ABOUT US</a></li>
                
                <li><a href="signup.html" class="under border">SIGN UP</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="space">
  <br/>
</div>
<div class="class1">


<form action="signup.php" method="post">
  <div class="container">
    <label for="uname"><b>Create Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>
    <label for="psw"><b>Create Password</b></label><br>
    <input type="password" placeholder="Enter Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
      title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
      required>

    <br><br>

  </div>
  <div class="zabardasti">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>
  <button type="submit">Login</button>
</div>
</form>
</div>


  <div class="line"></div>
  <br><br>
  <button class="open-button" onclick="openForm()"><div class="text">HELP</div></button>
  <div class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <h2>Chat</h2>
      <br>
  
      <label for="msg"><b>Message</b></label><br>
      <textarea placeholder="Type message.." name="msg" required></textarea>
  
      <button type="submit" class="btn">Send</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <div class="space1">
    <br/>
  </div>
</body>


<footer>

  <div class="footer0" id="footerr">
      <h1>UpBound</h1>
  </div>

  <div class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.664905386682!2d77.03496737549993!3d28.609827925677095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d05dd375e5a13%3A0x108adaa3abe4bd07!2sNetaji%20Subhas%20University%20of%20Technology!5e0!3m2!1sen!2sin!4v1697364874080!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>  


  <div class="footer2">
      <div class="product">
          <div class="heading">Products</div>
          <div class="div">Shop</div>
          <div class="div">Discount</div>
          <div class="div">Pricing</div>

      </div>
      <div class="services">
          <div class="heading">Services</div>
          <div class="div">Return</div>
          <div class="div">Cash Back</div>
          <div class="div">Others</div>
      </div>
      <div class="Company">
        <div class="heading">Company</div>
        <div class="div">Complaint</div>
        <div class="div">Careers</div>
        <div class="div">Affiliate Marketing</div>
        
    </div>
  </div>

  <div class="contact">987654321   UpBound@gmail.com</div>

  
  
  <div class="footer3">Copyright © <h4>UpBound</h4> 2023</div>
</footer>
</html>

