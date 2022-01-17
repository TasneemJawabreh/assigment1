<?php 
if(isset($_POST['register'])){
echo '<pre>';
echo "your name is : ";
echo $_POST['first-name'];
echo '</pre>';

echo '<pre>';
echo "your last name is : ";
echo $_POST['last-name'];
echo '</pre>';

echo '<pre>';
echo "your email is : ";
echo $_POST['email-mobile'];
echo '</pre>';

echo '<pre>';
echo "your pass is : ";
echo $_POST['up-password'];
echo '</pre>';

echo '<pre>';
echo "your gender is : ";
if($_POST['gen']=='male')
echo "male";
elseif ($_POST['gen']=='female') {
    echo "female";   
}
echo '</pre>';

echo '<pre>';
echo "your birth-day is : ";
echo $_POST['birth-day'];
echo '</pre>';

echo '<pre>';
echo "your birth-month is : ";
echo $_POST['birth-month'];
echo '</pre>';

echo '<pre>';
echo "your birth-year is : ";
echo $_POST['birth-year'];
echo '</pre>';

}else {
    echo "error 404";
}
?>






