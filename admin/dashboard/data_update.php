<?php

include 'connect_to_mysql.php';
include 'image_upload.php';
include 'logo_upload.php';

$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

// if (mysql_error()) {
// echo "<h2>Failure:</h2><em>" . mysql_error() . "</em>";
// } else {
// echo "<h1>Success in database connection.</h1>";
// }

$username = $_POST['username'];

$firstname_form = $_POST['first_name'];
$lastname_form = $_POST['last_name'];
$email_form = $_POST['email'];
$logo_form = $_POST['logo'];
$designation_form = $_POST['jobtitle'];
$mobile_form = $_POST['mobile'];
$office_form = $_POST['office'];
$image_form = $_POST['file'];
$facebook_form = $_POST['facebook'];
$twitter_form = $_POST['twitter'];
$youtube_form = $_POST['youtube'];
$google_form = $_POST['googleplus'];
$profile_form = $_POST['profile'];
$website_form = $_POST['website'];
$address_form = $_POST['address'];
$city_form = $_POST['city'];
$state_form = $_POST['state'];
$company_form = $_POST['company'];
$linked_form = $_POST['linked'];
$video_form = $_POST['video'];
$link_form = $_POST['link'];

$result = mysqli_query($con, "SELECT * FROM registeration
WHERE username='$username'");

$name = "";
$lastname = "";
$email = "";
$logo = "";
$designation = "";
$mobile = "";
$office = "";
$image = "";
$facebook = "";
$twitter = "";
$youtube = "";
$google = "";
$profile = "";
$website = "";
$profile = "";
$address = "";
$city = "";
$state = "";
$company = "";
$linked = "";
$video = "";
$link = "";

while ($row = mysqli_fetch_array($result)) {

    $name = $row['Name'];
    $lastname = $row['Lastname'];
    $email = $row['Email'];
    $logo = $row['Logo'];
    $designation = $row['Job'];
    $mobile = $row['Mobile'];
    $office = $row['Office'];
    $image = $row['Image'];
    $facebook = $row['Facebook'];
    $twitter = $row['Twitter'];
    $youtube = $row['Youtube'];
    $google = $row['Google'];
    $profile = $row['Profile'];
    $website = $row['Website'];
    $profile = $row['Profile'];
    $address = $row['Address'];
    $city = $row['City'];
    $state = $row['State'];
    $company = $row['Company'];
    $linked = $row['Linked'];
    

}

if (!empty($firstname_form)) {

    $name = $firstname_form;
}

if (!empty($lastname_form)) {

    $lastname = $lastname_form;
}

if (!empty($email_form)) {

    $email = $email_form;
}

if (!empty($logo_update)) {

    $logo = $logo_update;
}

if (!empty($designation_form)) {

    $designation = $designation_form;
}

if (!empty($mobile_form)) {

    $mobile = $mobile_form;
}

if (!empty($office_form)) {

    $office = $office_form;
}

if (!empty($profile_pic)) {
    $image = $profile_pic;

}

if (!empty($facebook_form)) {
    $facebook = $facebook_form;
}

if (!empty($twitter_form)) {
    $twitter = $twitter_form;
}

if (!empty($youtube_form)) {
    $youtube = $youtube_form;
}

if (!empty($google_form)) {
    $google = $google_form;
}

if (!empty($profile_form)) {
    $profile = $profile_form;
}

if (!empty($website_form)) {
    $website = $website_form;
}

if (!empty($profile_form)) {
    $profile = $profile_form;
}

if (!empty($address_form)) {
    $address = $address_form;
}

if (!empty($city_form)) {
    $city = $city_form;
}

if (!empty($state_form)) {
    $state = $state_form;
}
if (!empty($company_form)) {
    $company = $company_form;
}
if (!empty($linked_form)) {
    $linked = $linked_form;
}
if (!empty($video_form)) {
    $video = $video_form;
}
if (!empty($link_form)) {
    $link = $link_form;
}





echo $name;
echo $username;
echo $video; 
echo $link_form;

mysqli_query($con, "UPDATE registeration
SET Name='$name', Facebook='$facebook', Lastname = '$lastname', Youtube = '$youtube', Google = '$google', Company = '$company', Profile = '$profile', Address = '$address', City = '$city', State = '$state', Twitter = '$twitter', Linked = '$linked', Office = '$office', Mobile = '$mobile', Email = '$email', Website = '$website', Logo = '$logo', Job = '$designation', Image = '$image',Video='$video',Link = '$link'
WHERE username='$username';");
?>