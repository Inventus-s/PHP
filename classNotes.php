<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conditional Statement</h1>

<?php

$a = 6;
$b = 8;
$c = 5;


if($a > $b && $a > $c) {
    echo "A is greater";
} else if($b > $c) {
    echo "B is greater";
} else {
    echo "C is greater";
}
?>
    
<h1>Arry</h1>
Index Array
<?php

$a = array(1,2,3,4,6,8,'vipin', 'php');

echo count($a);

for($i=0; $i < count($a); $i++ ) {
    echo "<br/>";
    echo $a[$i];
}


?>

<h4>Associate Array</h4>
<?php

$b = array("name"=>"vipin", "class"=>"php", "semester"=>"");


// echo $b['name'];

foreach ($b as $k => $v) {
   
    echo "<br/>".  $v;
}




?>

implode & explode it works only with index array
<br/>
Implode ==> Array to String
<br/>
Explode ==> String to Array
<?php
echo "<br/>";
$str = "vipin,taking,project,class";

$arr = explode(",",$str);
echo "<pre>";
print_r($arr);
echo $newstr = implode("#", $arr);




?>

<h2>Functions</h2>
<ul>
    <li><h1>Functions without paramerter and without return type</h1>
        <br/>
        <?php
            //defination 
            function printTable() {
                echo "<table>";
                for($i=1; $i<=10; $i++) {
                    echo "<tr>";
                    echo "<td>5</td>";
                    echo "<td>X</td>";
                    echo "<td>$i</td>";
                    echo "<td>=</td>";
                    echo "<td>". 5 * $i ."</td>";
                    echo "</tr>";
                }
            
                echo "</table>";
            }
            // calling
            printTable();
           

        ?>
    </li>
    <li><h1>Functions with paramerter and without return type</h1>
        <br/>
        <?php
            //defination 
            function printDynamicTable($a) {
                echo "<table>";
                for($i=1; $i<=10; $i++) {
                    echo "<tr>";
                    echo "<td>$a</td>";
                    echo "<td>X</td>";
                    echo "<td>$i</td>";
                    echo "<td>=</td>";
                    echo "<td>". $a * $i ."</td>";
                    echo "</tr>";
                }
            
                echo "</table>";
            }
            // calling
            for($b=1; $b <= 5; $b++) {
                printDynamicTable($b);
                echo "=========================================";
            }
        ?>
    </li>

    <?php
    
            $c = 5;

            
            // $c = $c + 6;
            $c += 6;

            echo $c;
            
            



    
    ?>
    <li><h1>Functions without paramerter and with return type</h1>
        <br/>
        <?php
            //defination 
            function printDynamicTableRW() {
                $a = 10;
                $table = "<table>";
                for($i=1; $i<=10; $i++) {
                    $table .= "<tr>";
                    $table .= "<td>$a</td>";
                    $table .= "<td>X</td>";
                    $table .= "<td>$i</td>";
                    $table .= "<td>=</td>";
                    $table .= "<td>". $a * $i ."</td>";
                    $table .= "</tr>";
                }
            
                $table .= "</table>";
                return $table;
            }
            // calling
           
            $storeResult = printDynamicTableRW();
                
        ?>


    </li>
    
    <li><h1>Functions with paramerter and with return type</h1>
    <br/>
        <?php
            //defination 
            function printDynamicTableR($a) {
                $table = "<table>";
                for($i=1; $i<=10; $i++) {
                    $table .= "<tr>";
                    $table .= "<td>$a</td>";
                    $table .= "<td>X</td>";
                    $table .= "<td>$i</td>";
                    $table .= "<td>=</td>";
                    $table .= "<td>". $a * $i ."</td>";
                    $table .= "</tr>";
                }
            
                $table .= "</table>";
                return $table;
            }
            // calling
           
            $storeResult = printDynamicTableR(15);
                
        ?>
    </li>
</ul>




<?php

// echo $result;
?>



</body>
</html>

<!-- Input Values (forms) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="" enctype="">
        <div>
            <label for="">Frist Value</label>
            <input type="number" name="first" id=""  class="input-class" placeholder="enter first value as number"/>    
        </div>
        <br/>
        <div>
            <label for="">Second Value</label>
            <input type="number" name="second" id="" class="input-class" placeholder="enter second value as number"/>    
        </div>
        <br/>
        <div>
            <button type="submit" id="" class="input-class">Add</button>    
        </div>
        
    </form>
    <h1>Result (Addition of 2 numbers)</h1>
    <?php
        // // print_r($_GET);
        if(isset($_GET['first']) && isset($_GET['second'])) {
            echo $_GET['first'] + $_GET['second'];
        }
        

        if(isset($_POST['first']) && isset($_POST['second'])) {
            echo $_POST['first'] + $_POST['second'];
        }
        // $_POST

       
        
    ?>
</body>
</html>

name===> text
address==>textarea
gender==> radio
hobbies==>checkbox
dob==>date
education==>dropdown/select
