<?php
function db_encode($s) {
    $s = stripslashes($s);
    return mysql_real_escape_string($s);
}
$path = "/var/www/";
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
// Connecting, selecting database
// $link = mysql_connect('localhost', 'root', '123')
$link = mysql_connect('localhost', 'user', '123')
    or die('Could not connect: ' . mysql_error());
// mysql_select_db('s2b') or die('Could not select database');
mysql_select_db('smb') or die('Could not select database');

$email = $_POST['email'];

// Performing SQL query
$query = 'INSERT INTO subscribers (subscriber_email) VALUES ("'.db_encode($email).'")';
$result = @mysql_query($query); /* or die('Query failed: ' . mysql_error());*/
require './lib/PHPMailerAutoload.php';

$mail = new PHPMailer;

/*$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jswan';                            // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted*/

$mail->From = 'teodor.p.nikolov@gmail.com';
$mail->FromName = 'Tonci';
$mail->addAddress($email);  // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

// echo 'Message has been sent';


header("Location: /s2b/?thanks=1");
// Printing results in HTML
/*echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";*/

// Free resultset
// mysql_free_result($result);

// Closing connection
mysql_close($link);
?>
