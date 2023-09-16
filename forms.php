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
    <form method="post" action="userAction.php" enctype="" >
        <fieldset>
            <legend>User Details!!</legend>
<!-- for text input -->
<label for="name">Enter your name:</label>
<input type="text" id="name" name="username" value="Mukund kumar" readonly >
<br>
<!-- for email -->
<label for="email">Enter your email:</label>
<input type="email" name="usermail" id="email" placeholder="a@example.com" >
<br>
<label for="password">Enter your password:</label>
<input type="password" name="userpass" id="password">
<br>
<!-- for address -->
<label for="address">Address:</label>
<textarea name="useraddress" id="address" cols="30" rows="1"></textarea>
<br>
<!-- for DOB -->
<label for="dob">DOB:</label>
<input type="date" name="userage" id="dob">
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

    <br> <br>
    <p>&copy; Belongs to <b>Mukund Kumar</b> </p>




















<!-- <?php
print_r($_POST);

function arr2stdr(){
    $arr = implode(",",$_POST['hobbies']) ;
    echo $arr;
}

echo "<h1>Result</h1>";



    if (isset($_POST)) {
        foreach($_POST as $k => $v){
            if ($k == 'hobbies') {
                echo $k.'=';    
                arr2str();
                echo "<br>";
            } else{
                echo $k."=" .$v;
                echo "<br>";
            }
            
        }
        
        
    }
    
    


// if (isset($_POST)) {
//     echo $_POST['username'];
// };
?> -->
</body>
</html>

