<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class = "container">
        This is my first php website

        <?php
        define('PI', 3.14);
    echo "Hello world and this is printed using php";
    ?>

    <?php
    echo "Hello world again ";
    //this is single line comment 
    /*
    this is a multi line comment 
    */
   /*  $variable1  = 34;
    $variable2 = 343;
    echo $variable1;
    echo "<br>";
    echo $variable2;
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br";
    echo "djfdffd"; */

    //operators in php

    //arithmatic operatorss
    $variable1 = 33;
    $variable2 = 44;
    echo "arithmatic operators";
    echo "<br>";
    echo "this value of variable1 + variable2 is";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "this value of variable1 - variable2 is";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "this value of variable1 * variable2 is";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "this value of variable1 % variable2 is";
    echo $variable1 % $variable2;
    echo "<br>";

    //assignmeent operators

    $newVar = $variable1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";

    $newVar += 1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";

    $newVar -= 1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";



    //comparision operators

    echo "<h1> Comparision operators <h1>";

    echo "The value of 1==1 is ";
    echo var_dump(1==1);
    echo "<br>";
    echo "The value of 1!=1 is ";
    echo var_dump(1!=1);
    echo "<br>";
    echo "The value of 1>=1 is ";
    echo var_dump(1>=1);
    echo "<br>";
    echo "The value of 1<=1 is ";
    echo var_dump(1<=1);
    echo "<br>";
    //this is used at if else statement 

    //increment/decrement operators

    echo  $variable1++;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    //logical operators

    //and(&&)
    //or(||)
    //xor
    //!

   // $myVar1 = (false) and (true);
   // $myVar2 = (false) and (false);
   // $myVar =  (true) and (true);

   //$myVar = (true xor true);
   //$myVar = (true xor false);
   //$myVar = (false xor true);
   $myVar = (false xor false);

    echo "<br>";
    echo var_dump($myVar);


    //Data types in php
   // 1.String
    //2.Integer
    //3.Float
    //4.Boolean
    //5.Array
   // 6.Object
   echo "<br>";
   $var = "this is a string ";
   $var11 = "my name is kunal gaurav";
   echo var_dump($var);
   echo "<br>";
   $var22 = 33;
   echo var_dump($var11);
   echo "<br>";
   echo  var_dump($var22);
   $var33 = 4.5;
   echo "<br>";
   echo var_dump($var33);

   echo "<br>";
   echo PI;
    
    



    ?>
    </div>
    
</body>
</html>