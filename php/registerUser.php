<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitRat</title>
</head>
<body>
    <?php
    // checking if all fields are filled out
    if (empty($_GET['fname'])||empty($_GET['lname'])||empty($_GET['email'])||empty($_GET['password'])||empty($_GET['username']))
        exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");
    
    //connecting to the database with PDO
    require_once("config.php");

    // getting values from user 
    $TableName = "users";

    $fname=$_GET['fname'];
    $lname = $_GET['lname'];
    $email=$_GET['email'];
    $password = $_GET['password'];
    $user = $_GET['username'];
    

    // check if already registered with the email
    $sql = "SELECT * FROM $TableName";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
        //the email match the field from the table
        if ($row['email']==$email)
        exit("<p>The email address you entered is already registered! Click your browser's Back button to return to the previous page.</p>");
    }

     // check if already registered with username
     $sql = "SELECT * FROM $TableName";
     $result = $pdo->query($sql);
     while ($row = $result->fetch()) {
         //the username match the field from the table
         if ($row['userName']==$user)
         exit("<p>The username you entered is already taken! Click your browser's Back button to return to the previous page.</p>");
     }
    
    //insert into new user data to the table
    //$sql = "INSERT INTO $TableName VALUES (NULL, '$Email','$Password',NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

    $sql = "INSERT INTO $TableName (firstName, lastName, email, password, userName) VALUES ('$fname','$lname', '$email', '$password' , '$user')";
    $pdo->exec($sql);

    //retrieve the username
    $sql = "SELECT * FROM $TableName WHERE userName = '$user'";
    $result= $pdo->query($sql);
    if($row = $result->fetch())
      $user = $row['userName'];

    // closes connection and frees the resources used by the PDO object
	$pdo = null;
    ?>

    <p>Welcome <strong><?=$user?></strong></p>
</body>
</html>