<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
if(empty(($_POST)["your_name"]) == false){
echo " " .$_POST["your_name"];


}
else{
    echo "Name not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["user_name"]) == false){
echo "" .$_POST["user_name"];

}
else{
    echo "Username not provided!";
}


?>

<br>





<?php
if(empty(($_POST)["password"]) == false){
echo "" .$_POST["password"];

}
else{
    echo "Password not provided!";
}


?>

<br>


<?php
if(empty(($_POST)["address"]) == false){
echo "" .$_POST["address"];

}
else{
    echo "Address not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["country"]) == false){
echo "" .$_POST["country"];

}
else{
    echo "Country not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["zip_code"]) == false){
echo "" .$_POST["zip_code"];

}
else{
    echo "Zip not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["email"]) == false){
echo "" .$_POST["email"];

}
else{
    echo "Email not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["male"]) == false && empty(($_POST)["female"]) == false){
echo "Sex not provided!";

}
else if(empty(($_POST)["male"]) == false){
    echo "" .$_POST["male"];

}else if(empty(($_POST)["female"]) == false){
    echo "" .$_POST["female"];
}
else{
    echo "Sex not provided!";
}



?>
<br>
<?php
if(empty(($_POST)["English"]) == false){
echo "" .$_POST["English"];

}
else if(empty(($_POST)["Germany"]) == false){
    echo "" .$_POST["Germany"];

}else if(empty(($_POST)["French"]) == false){
    echo "" .$_POST["French"];
}
else{
    echo "Language not provided!";
}


?>
<br>
<?php
if(empty(($_POST)["about"]) == false){
echo "" .$_POST["about"];

}
else{
    echo "About not provided!";
}


?>
</body>
</html>