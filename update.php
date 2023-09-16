<?php
$conn = mysqli_connect('localhost','root','','registration');
$id = $_GET['id'];
$name = $_GET['username'];
$email = $_GET['usermail'];
$pass = $_GET['userpass'];
$add = $_GET['useraddress'];
$dob = $_GET['userage'];
// $gender = $_GET['gender'];
// $hobby = $_GET['hobbies'];
// $edu = $_GET['education'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get/Post</title>
</head>
<body>
    <!-- forms -->
    <!-- get & post method for form submission and url visibility -->
    <form method="get" action="" enctype="" >
        <fieldset>
            <legend>User Details!!</legend>
<!-- Update ID -->
<label for="update">Update ID:</label>
<input type="text" name="id" value="<?php echo $id ?>">
<br>
<!-- for text input -->
<label for="name">Enter your name:</label>
<input type="text" id="name" name="username" value="<?php echo $name ?>" readonly >
<br>
<!-- for email -->
<label for="email">Enter your email:</label>
<input type="email" name="usermail" id="email" value="<?php echo $email ?>" >
<br>
<label for="password">Enter your password:</label>
<input type="password" name="userpass" id="password" value="<?php echo $pass ?>">
<br>
<!-- for address -->
<label for="address">Address:</label>
<input name="useraddress" id="address" value="<?php echo $add ?>" cols="30" rows="1"></input>
<br>
<!-- for DOB -->
<label for="dob">DOB:</label>
<input type="date" name="userage" id="dob" value="<?php echo $dob ?>">
<br>
<!-- for Gender one selection -->
Select Gender: <br>
<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male">
<br>
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female">
<br>
<label for="other">Other</label>
<input type="radio" name="gender" id="other" value="other">
<br>
<!-- for multiple selection -->
Select your Hobbies:
<br>
<label for="reading">Reading</label>
<input type="checkbox" name="hobbies[0]" id="reading" value="reading">
<br>
<label for="writing">Writing</label>
<input type="checkbox" name="hobbies[1]" id="writing" value="writing">
<br>
<label for="cooking">Cooking</label>
<input type="checkbox" name="hobbies[2]" id="cooking" value="cooking">
<br>
<label for="drawing">Drawing</label>
<input type="checkbox" name="hobbies[3]" id="drawing" value="drawing">
<br>
<!-- for education -->
<label for="education">Education:</label>
<select id="education" name="education">
    <option value="" disabled>-- Select One --</option>
    <option value="no-edu">No formal education</option>
    <option value="primary">Primary education</option>
    <option value="secondary">Secondary education or high school</option>
    <option value="bachelor">Bachelor's degree</option>
    <option value="master">Master's degree</option>
    <option value="phd">Doctorate or higher</option>
</select>

<br>
<input type="submit" name="formSubmit" value="formSubmit">
        </fieldset>
        
    </form>


<?php
if(isset($_GET['formSubmit'])){
    $id = $_GET['id'];
    $name = $_GET["username"];
    $email = $_GET["usermail"];
    $pass = $_GET["userpass"];
    $add = $_GET["useraddress"];
    $age = $_GET["userage"];
    $gender = $_GET["gender"];
    $hobbies = isset($_GET['hobbies']) ? implode(",", $_GET['hobbies']) : '';
    $edu = $_GET["education"];

    $conn = mysqli_connect('localhost','root','','registration');
    $query = "update user_details set Name='$name',Email='$email',Password='$pass',Address='$add',DOB='$age',Gender='$gender',Hobby='$hobbies',Education='$edu' WHERE ID='$id' ";
    $result = mysqli_query($conn,$query);
    // echo "<pre>";
    // echo $result;

    if($result){
        echo "<script>alert ('Details Updated')</script>";
        header('location:userDetails.php');
    }else {
        echo "Error Occured";
    }
}
?>

    <br> <br>
    <p>&copy; Belongs to <b>Mukund Kumar</b> </p>