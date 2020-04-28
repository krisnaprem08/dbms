<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <title>Donation Pickup</title>
</head>
<body>
 <img src="donation.jpg" alt="donation" width="150" height="150">
 <ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="donate.html">Donate</a></li>
  <li><a href="members.html">Members</a></li>
</ul>
<br>
<br>
<p4><center>Thank you for your donation</center></p4>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
</body>
</html>
