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
        <link REL = "STYLESHEET" TYPE = "text/css" HREF = "cont_res.css">
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
            <img src="https://content3.jdmagicbox.com/comp/bangalore/b4/080pxx80.xx80.170125001012.c8b4/catalogue/dr-suhasini-hospital-kengeri-satelite-town-bangalore-gynaecologist-and-obstetrician-doctors-ara8k.jpg" class = "image" alt="">
        </div>
         </center>
                
                <div class = "enjoy">
                    <p>For any help feel free to contact us..... </br>
            </br>        
                   <div class = "come"> Join Us!!! </div> 
                    </p>   
                </div>
                
                <div class = "help">
                  <br>
                   <div class = "now">
                       <p>Help and Support</p>
                   </div>
                   <br>
                        <ol class = "design">
                            <li>Helping patients find the right solution</li>
                            <li>Humanizing the customer service team</li>
                            <li>Adapting to the situation</li>
                        </ol>
                        <br>
                </div>
                <br><br>
                 <div class = "help">
                  <br>
                   <div class = "now">
                       <p>Staffing</p>
                   </div>
                   <br>
                        <ol class = "design">
                            <li>Nurse staffing is constantly provided for health care facilities.</li>
                            <li>Staffing management is our utmost priority</li>
                            <li>Contact us for more details about staff</li>
                        </ol>
                        <br>
                </div>
                
                 <div class = "main flext-notrev1">
    
     <div class = "left section part1">
  <p style = "text-align: center; font-size: 18px"><b>A HOSPITAL IS A NO PLACE TO BE SICK</b></p>
     </div>
     
     <div class = "right section">
         <img class = "img" src="https://media.designrush.com/articles/1403/conversions/_1530667899_390_yEZPsIaoTI3ZNDdB-croppedUundb-jpg-details.jpg" alt="img"/>
     </div>
        </div>
                
                <br><br>
            
      <h2 style = "margin-left: 10px">Contact us</h2>
    <p style = "font-size: 20px; margin-left: 10px">Click on the "Open" button to open the contact form</p>
    
    <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Open</strong></button>
    </div>
    
    <div class="loginPopup">
     
      <div class="formPopup" id="popupForm">
       
        <form class="formContainer" style = "margin-left: 5px; margin-right: 5px">
         
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
                       
                       <!-- Whatsapp Button -->
        <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91-9886028680", // WhatsApp number
            call_to_action: "Whatsapp us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
         </script>
<!-- /Whatsapp Button -->
        
        </div> 
        
       <!-- Footer -->
       
       <footer class="page-footer font-small blue" style = "background-color: cadetblue; text-shadow: 1px 1px #000000; font-family: sans-serif; font-size: 20px" >

  
       <div class="footer-copyright text-center py-3">Copyright @ Dr. Suhasini Hospital
       </div>

      </footer>
            <!--Footer-->
            
            </div>   <!--End #Main Content-->
        
    </div>     <!--End #Container-->
    
</body>
</html> 
