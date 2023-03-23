<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Location = $_POST['location'];
    $Number = $_POST['number'];
    $Problem = $_POST['comment'];

    $Number = "Select * from Contact where Number = ?";
    
    $Number_stmt = $conn->prepare($Number);
    $Number_stmt->bind_param("i",$Number);
    $Number_stmt->execute();
    
    $sql = "INSERT INTO Contact(Name,Location,Number,Problem)VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $Name, $Location, $Number, $Problem);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
    <head>
       <meta lang="en">
       <meta name "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
       <script type="text/javascript" src="contact.js"></script>
       
        <title>
            Contact
        </title>
        
        <link REL = "STYLESHEET" TYPE = "text/css" HREF = "contact.css">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    </head>
    
    <body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll" style="background-color: cadetblue">
        <div class="container">
           
<!--            <a class="navbar-brand" href="#">HELP 24*7</a>-->
           
           <div class = "demoo">
            <p>Dr. Suhasini Hospital</p>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" onclick="dropdown()">
                </span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
               
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact</a>
                    </li>
                </ul>
                    
            </div>
        </div>
    </nav>
    
    
    <div id="container">
       
       <div id="mainContent">
	  
        <!-- Main Content -->
        
        <div class = "color">
        
        <h1 class = "example"></h1>
        
        <h4 class = "demo">Emergency</h4>
         
         <center>
        <div>
            <img src="https://naomihouse.info/wp-content/uploads/2019/08/contact_us_image_qbluir.png" class = "image" alt="">
        </div>
         </center>
                
                <div class = "enjoy">
                    <p>For any help feel free to contact us..... </br>
            </br>          Join Us!!!
                    </p>   
                </div>
            
      <h2>Contact us</h2>
    <p style = "font-size: 20px">Click on the "Open" button to open the contact form</p>
    
    <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Open</strong></button>
    </div>
    
    <div class="loginPopup">
     
      <div class="formPopup" id="popupForm">
       
        <form class="formContainer" action = "contact.php" method = "post">
         
          <h2 style = "color: darkcyan; margin-left: 5px; margin-right: 5px">Dr. Suhasini Hospital</h2>
            <hr>
             <h4>Enter your details</h4>
              
            <div class = "form-group">
               <label for = "name">Name</label>
               <input type = "text" class = "form-control" id = "name" placeholder = "Your Name">
               </div>
               
               <div class = "form-group">
               
               <label for = "location">Location</label>
               <input type = "text" class = "form-control" id = "location" placeholder = "Your Location">
               </div>
               
               <div class = "form-group">
               
               <label for = "contact no">Contact No.</label>
               <input type = "text" class = "form-control" id = "number" placeholder = "Your Number">
               </div>
               
               <div class = "form-group">
               
               <label for = "comment" id = "comment">Your problem</label>
                  <br>
                   <textarea> Write here... </textarea>
               </div>
               
               <button type = "submit" class = "btn btn-primary">Submit</button>  
               <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
           </form>
           
           </div>
       </div> 
        
        <p style = "text-align: center; font-size: 20px" >Thank you for reaching us.....</br>
                       Always there for you!!</p>
        
        </div> 
        
       <!-- Footer -->
       
       <footer class="page-footer font-small blue" style = "background-color: cadetblue; text-shadow: 1px 1px #000000; font-family: sans-serif; font-size: 20px" >

  
       <div class="footer-copyright text-center py-3">Copyright @ 2022
       </div>

      </footer>
            <!--Footer-->
            
            </div>   <!--End #Main Content-->
        
    </div>     <!--End #Container-->
    
</body>
</html>
