<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    #{
        margin : 0;
        padding : 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: yellow;
        margin: auto;
        padding : 25px;
    }

</style>
<body>
    <div class="container">
        <h1>
        Your party status is Here 
        </h1>
       
        <?php
        $age = 19;
        if($age > 18){
            echo "You can go to the party";
        }else if($age==17){
           echo "Your age is 17 year old";
        }
        
        else{
            echo "You can not go to the party";
        }
        echo "<br>";
        
        //array- colllection of values
        $languages = array("python ", "cpp", "node js");
        echo count($languages);
       // echo $languages[0];

       //Loops in php
       $a = 0;
       while($a <= 10){
        echo "<br>the value of a is :";
        echo $a;
        $a++;
       }

       //Iterating arrays in PHP using while loop
       $a = 0;
       while ($a < count($languages)){
        echo "<br> The language at value $a is :";  
        echo $languages[$a];
        $a++;
       }

       //Do while

       $a = 20;
       do{
        echo "<br> the value of a is :";
        echo $a;
        $a++;
       }while($a < 10);


       //for loops 
       for($a = 0;  $a < 10; $a++){
        echo "<br> The value of a is :";
        echo $a;
       }

       foreach($languages as $value){
        echo "<br> The value is:";
        echo $value;
       }

       //Functions 
       
       echo "<br>";
       function print5(){
        echo "five";
       }
       print5();
       echo "<br>";
       print5();
       echo "<br>";
       print5();
       echo "<br>";
       print5();
       echo "<br>";
       print5();
       echo "<br>";
       print5();
       echo "<br>";

       //anotehr way

       function print_number($number){
        echo "<br> your number is :";
        echo $number;
       }

       print_number(43);
       print_number(23);
       print_number(565);


       //Strings in PHP

       $str = "This  is my my my  zone ";
     echo $str;
     
     echo "<br>";
     
     //strlen is the keyword to find the lenght of any strings
     $length = strlen($str);
     echo "The lenght of this string is ". $length;
     // DOT(.) isko laga ke jodne ka kaam kiya jat hai  
   //  echo $length;

   //for word count
     
   echo "<br>";
   echo "The number is word in this string is " .str_word_count($str)."<br> Thankyou <br>";
   echo "The reversed string is " . strrev($str) . "<br> Thankyou <br>";
   echo "The search for my in the string is at position " . strpos($str, "my"). "<br>  Thankyou";

   echo "<br>The replaced string is " . str_replace("my", "your", $str);

   //for count length
   //for count words
   //for reversed the string 
   //for search  any word in the string
   //for repalce any word

        ?>

    </div>
    
</body>
</html>