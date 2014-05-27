<?php
define("MVC","./model/");
include MVC.'classNewsletter.php';
$NewsLetter = new newsLetter('newsletter');
?>

<!DOCTYPE html>
<html>
<head>
    <title>NewsLetter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body >
<?php
    if(!empty($NewsLetter->info)){
        echo $NewsLetter->info;
    }
?>
<br />
<?php

    echo $NewsLetter->form();

?>
</body>
</html>
