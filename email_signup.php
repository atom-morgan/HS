<?php 
if(isset($_POST['submit'])){
    //$to = "hairstoryapp@gmail.com"; // this is your Email address
    $to = "noreply@hairstoryapp.com";
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "You have a new user!";
    $subject2 = "Thank you for your interest in HairStory!";
    $message = $from . " " . " has signed up for HairStory!";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $from . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>