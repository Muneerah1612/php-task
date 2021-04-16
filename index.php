<?php
    session_start();

    if(isset($_SESSION['username'])) {
        echo "You're already registered as ".$_SESSION['username'];
    }

    
     else if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $uname = trim($_POST['username']);
        $email = trim($_POST['email']);
           if(!empty($uname)  && !empty($email)) {
              // Store escaped $_POST values in variables 
              $username = htmlentities($_POST['username']);
              $email = htmlentities($_POST['email']);

              $_SESSION['username'] = $uname;
              echo "Thanks for registering! <br />",
              "Username: $username <br />",
              "Email: $email <br />";
          }

          
           else {
               echo "Please fill out both fields! <br />";
           }
     }

     // If the form was not submitted, dispalys the HTML form

     else {

?>

<?php } ?>