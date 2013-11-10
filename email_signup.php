<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hairstoryapp@gmail.com";
    $email_subject = "New user has signed up!";


    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['email']) || {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $email_message = "A new user has signed up!";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_from .= $_POST['email'];


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
echo (int) mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>