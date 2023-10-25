<?php
$to = 'sanhamzagic@gmail.com'; // Replace with your email address
$subject = 'Vorstellungsgespräch ';
$message = 'Sehr geehrte/r Sanin Hamzagic,

nochmals herzlichen Dank für die Zusendung Ihrer Bewerbungsunterlagen und Ihr Interesse an einer Mitarbeit bei McDonald´s Österreich.  

Nach intensiver Sichtung und Bewertung der eingegangenen Bewerbungen haben wir eine Vorauswahl getroffen. Wir müssen Ihnen leider mitteilen, dass Ihr Profil nicht in die engere Auswahl gekommen ist und wir Sie im weiteren Bewerberprozess nicht mehr berücksichtigen können.
 
Wir bitten Sie, darin kein Werturteil zu sehen und bedanken uns ausdrücklich für die Mühe, die Sie sich bei Ihrer Bewerbung gemacht haben.

Mit freundlichen Grüßen
Ihr McDonald´s Recruiting Team

Hasan Marai Ash GmbH
Team';
$headers = 'From: hasan.marai@ash-gmbh.at' . "\r\n" .
           'Reply-To: hasan.marai@ash-gmbh.at' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo 'Test email sent successfully!';
} else {
    echo 'Failed to send the test email.';
}
?>





