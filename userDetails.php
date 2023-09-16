<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
<!-- DB Connection -->
<?php
$conn = mysqli_connect('localhost','root','','registration');
$fetch_query = "select * from user_details";
$result = mysqli_query($conn,$fetch_query);
echo "<pre>";
print_r($result);
// $r = mysqli_fetch_assoc($result);
// print_r($r);
?>



<h1>Result</h1>
<!-- Table for Result -->
<table border="">
    <tr>
        <td>S. No.</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Address</td>
        <td>DOB</td>
        <td>Gender</td>
        <td>Hobbies</td>
        <td>Education</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $i = 1;
    while($r = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $r['ID']; ?></td>
        <td><?php echo $r["Name"]; ?></td>
        <td><?php echo $r["Email"]; ?></td>
        <td><?php echo $r["Password"]; ?></td>
        <td><?php echo $r["Address"]; ?></td>
        <td><?php echo $r["DOB"]; ?></td>
        <td><?php echo $r["Gender"]; ?></td>
        <td><?php echo $r['Hobby'] ;?></td>
        <td><?php echo $r["Education"]; ?></td>
        <td><a href="update.php?id=<?php echo $r['ID']?>&username=<?php echo $r["Name"]?>&usermail=<?php echo $r["Email"]?>&userpass=<?php echo $r["Password"]?>&useraddress=<?php echo $r["Address"]?>&userage=<?php echo $r["DOB"]?>">Edit</a></td>
        <td><a href="userAction.php?delete=<?php echo $r['ID'] ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    };
    ?>
</table>
</body>
</html>