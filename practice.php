<?php 


//count 1 to 10
//


//solutuon 1

$sum = 1+2+4+5+6+7+8+9+10;

// echo $sum;


//solution 2
$var1 = 1;
$var2 = 2;
$var3 = 3;

$sum = $var1 + $var2 + $var3;

// solution 3


$num1 = 10;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;
$num1 += 1;

// echo $num1;

//loop & loop types
//Loop : Peforming a certain set of instructions , again and agian till a condition is reached
//
//simplest: for loop
//
//
//
// efficient most
 for($num = 1; $num <= 10; $num+=1){

  // echo $num;
  // echo "<br>";

 }


// while loop
 $num = 1;
 while($num <= 10){

  // echo $num;
  // echo "<br>";

  $num += 1;
 } 






 // //- Decision making
 // //
 // if(condition){
 //  //code
 // }
 // else{
 //  //code
 // } 



// Array: memory location, that ocuupires similar kind of values at consecutive space in meory,






// foreach($num as $key => $number){
//   echo $key;
//   echo "-";
//   echo $number;
//   echo "<br>";
// }

// exit;
$numLength = count($num);


/*
for($n = 0; $n < $numLength; $n+=1 ){

  if( $num[$n] % 2 == 0  ){
   echo "{$num[$n]} is even";
   echo "<br>";


  }
  else{
   echo "{$num[$n]} is odd";
   echo "<br>";
  }
}
*/

// iteration - a loop's one cycle
// 
// Please find a repeating number in the above sequence and return the position

$copiedArray = array();
$duplicatePosition = '';
echo "<pre>";
// foreach($num as $key => $value){

//   if($copiedArray[$value]){
//     $duplicatePosition = $key;
//     break;

//   }
//   else{
//     $copiedArray[$value] = $value;  
//   }

// }

$num = array(1,3,5,3,3,6,6,8,9,23,45,6,7,89,988,544,322,112,334,556);
$duplicateArray = array();
$duplicates = array();
$dupKey = '';
$dupNum = '';
foreach($num as $key => $number){

  if(!in_array($number, $duplicateArray)){
      array_push($duplicateArray,$number);
  }
  else{
    if($duplicates[$number]){
        $duplicates[$number] += 1; 
    }
    else{
      $duplicates[$number] = 1; 
    }
    
      $dupKey = $key;
      $dupNum = $number;
      
  }
}



$checkValue = '0';

switch ($checkValue) {
  case 'a':
    // code...
    print_r('Alphabets');
    break;


 case 3:
    // code...
    print_r('integer');
    break;   
  
  default:
    print_r('no matching found');
    break;
}


$liters = "99";
if($liters == '40'){
  echo "goto Faisalabad";
}
elseif($liters == '70'){
  echo "goto Pindi";
}
elseif($liters > '70'  || $liters < '101'){
  echo "goto Islamabad";
}
elseif ($liters > '40' ||  $liters < '60') {
  echo "goto Sialkot";
}
else{
  echo "Get Petrol First";
}










echo "<pre>";
print_r($dupKey);
echo '-';
echo $dupNum;

print_r($duplicates);
exit;



 




