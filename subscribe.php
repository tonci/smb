<?php
function db_encode($s) {
    $s = stripslashes($s);
    return mysql_real_escape_string($s);
}
// Connecting, selecting database
$link = mysql_connect('localhost', 'root', '123')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('s2b') or die('Could not select database');

$email = $_POST['email'];

// Performing SQL query
$query = 'INSERT INTO subscribers (subscriber_email) VALUES ("'.db_encode($email).'")';
$result = @mysql_query($query); /* or die('Query failed: ' . mysql_error());*/
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
