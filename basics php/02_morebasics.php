<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max width: 80%;
            background-color:grey;
            margin: auto;
            padding:23px;
        }
    </style>
<body>
    <div class="container">
        <h1>lets learn about php</h1>
        <p>your paarty status is here :</p>
        <?php
        $age = 7;
        if($age>18){
            echo "you can go to party";
        }
        else if($age==7){
            echo"you are 7 years old ";
        }
        else{
             echo "you can not go to party";
            }   

            // arrays in php
          
            //    echo $languages[1];
            //    echo count($languages);
            
            //    loops in php 
//             $a = 0;
//             while ($a <= 10) {
//                 echo "the value of a is :";
//                 echo $a ;
//                 $a++;
//                 echo "<br>";
// } 
// iterating arrays in php using do while loop 
//             $a = 0;
//             do  {
//                 echo "the value of a is :";
//                 echo $languages[$a];
//                 $a++;
//                 echo "<br>";
// }while ($a < count($languages))

// iterating arrays in php using while loop 
//             $a = 0;
//             while ($a < count($languages)) {
//                 echo "the value of a is :";
//                 echo $languages[$a];
//                 $a++;
//                 echo "<br>";
// }

// for ($a=0; $a < 10; $a++) { 
//     echo "<br> the value of a is :";
//     echo $a;
// }

// foreach ($languages as $value ) {
//     echo "<br>the value is";
//     echo $languages;
// }

// functuin 

function print_number($number){
    echo "<br> your no is ";
    echo $number;
}
print_number(45);

echo "<br>";


function print5(){
    echo "ayan ";
}
print5();
print5();
print5();
    


     
        
        ?>
    </div>
</body>
</html>