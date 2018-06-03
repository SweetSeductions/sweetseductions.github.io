<?

/** email Config **/

$to = "paige@sweetseductions.biz";
$subject = "New Website Contact Form";

/** End Config **/


$c = $_POST;
$msg = '';
foreach($c as $k=>$v) {
    $msg .= ucwords(str_replace('_',' ',$k)) . ': ' . stripslashes($v) . PHP_EOL;
}

$from_name = $c['name'];
$from_email = $c['email'];

mail($to, $subject, $msg, 'From: ' . $from_name . '<' . $from_email . '>');

header("Location: ./thanks.html");
