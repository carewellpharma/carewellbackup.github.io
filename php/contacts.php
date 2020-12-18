<html>
    <body>
        <?php 

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['Email'];
$text = $_REQUEST['text'];


if (empty($name)  || empty($phone) || empty($email) || empty($text))
{
    echo "Please fill all the fields";
}
else
{
    mail("carewellpharma3678@gmail.com", "website message", $message , "from: $name <$email>");
    echo "<script type='text/javascript'>alert('Thanks, You message sent successfully')
    window.history.log(-1);
    </script>";
}
?> 
    </body>
</html>



