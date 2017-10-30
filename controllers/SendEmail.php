<?php
/**
 * About us class function as controller to send users email to the company email
 */
class SendEmail extends Controller
{
    public function send()
    {
        $name = $_POST['name'];
        $email_address = $_POST['email'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $message = $_POST['message'];
        $myemail = 'eltabu@vrs.myweb.cs.uwindsor.ca';

        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Phone: $phone \n Company: $company \n".
        "Email: $email_address\n Message: \n $message";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email_address";
        mail($to,$email_subject,$email_body,$headers);

        header('location: '.URL.'Home'); //redirect to the 'thank you' page
    }

}
