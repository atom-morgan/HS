<?php 
if(isset($_POST['submit'])){
    $from = "noreply@hairstoryapp.com"; // this is your Email address
    $to = $_POST['email']; // this is the sender's Email address
    $subject = "You have a new user!";
    $subject2 = "Thank you for your interest in HairStory!";
    $message = $to . " " . " has signed up for HairStory!";

    $headers = "From:" . $to;
    $headers2 = "From:" . $from;
    mail($from,$subject,$message,$headers);
    mail($to,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $to . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>