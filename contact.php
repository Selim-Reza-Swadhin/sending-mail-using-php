<?php
/*send E-mail recipient*/
$toemail = "selimrezaswadhin@gmail.com"; //u can change this mail

/*Check all form inputs using check input function*/
$yourname = check_input($_POST['yourname'], "Enter your name");
$email = check_input($_POST['email']);
$subject = check_input($_POST['subject'], "Write u r subj");
$comments = check_input($_POST['comments']);

/*if (!preg_match(/[\w\-] + \@[\w\-]) + \[\w\-] + /, $email){
    show_error("email address not valid");
}*/

$message =  "Hello!,
your contact has been submitted by :
Name : $yourname
Email : $email
Subject : $subject
Comments : $comments
End of Message";

mail($toemail, $subject, $message);
header('location:thanks.html');

function check_input($data, $problem=''){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    if ($problem && strlen($data) == 0){
        show_error($problem);
    }
    return $data;
}

function show_error($myerror){?>
    <html>
    <body>
    <p>Please correct the following error</p>
    <?= $myerror; ?>
    </body>
    </html>
<?php } ?>
