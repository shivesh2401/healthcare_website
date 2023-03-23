
function dropdown() {
    var x = document.getElementById("navbarResponsive");
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function openForm() 
           {
           document.getElementById("popupForm").style.display = "block";
           }

function closeForm() 
           {
            document.getElementById("popupForm").style. display = "none";
           }

function bookAppointment() {
      // Get the form data
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var date = document.getElementById("date").value;
      var time = document.getElementById("time").value;

      // Validate the form data
      if (name == "" || email == "" || date == "" || time == "") {
        alert("Please fill in all the fields");
        return;
      }

      // Send the appointment request to the server
      // Here you would need to use an AJAX call to submit the form data to the server
      // and handle the server response

      // Show a confirmation message
      alert("Appointment booked for " + name + " on " + date + " at " + time);
    }

