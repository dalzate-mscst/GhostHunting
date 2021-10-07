<html>
    <head>Ghost Submission Page</head>
<body>
    
<script>
    <?php
   if(isset($_POST['submit']) {
      if($_GET['lang'] == "english") {
         echo("First name: " . $_POST['firstname'] . "<br />\\n");
         echo("Last name: " . $_POST['lastname'] . "<br />\\n");
      } else if($_GET['lang'] == "spanish") {
         echo("Nombre: " . $_POST['firstname'] . "<br />\\n");
         echo("Apellido: " . $_POST['lastname'] . "<br />\\n");
   }
?>
<?php
         $to = "stiffparsely243@gmail.com";
         $subject = "Ghost Submission";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      </script>
    </body>
</html>