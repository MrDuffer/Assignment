<?php



//<-------------- First Task ---------------->
//(1). Count the number 
$string = "aeiou";
$length = strlen($string);
echo "String number count is = " . $length . "\n";


//(2).reverse each string
echo "Reverse string is = ";
for ($i = $length - 1; $i >= 0; $i--) {
    print_r($string[$i]);
}
echo "\n";


//(3). Printing the original  string and the modified string along with their vowels counts.

//(a) Orignal string 
echo "Oringinal string is = ";
print_r($string);
echo "\n\n";


//(b) The modified string along with their vowels counts.

for ($i = $length - 1; $i >= 0; $i--) {
    echo " = Vowel Counts = " . print_r($string[$i]) . "\n";
}
echo "\n\n";




//<----------------Second Task----------------> 
/* You must use this array of strings:
 $strings = ["Hello", "World", "PHP", "Programming"];
  */

$string = array("Hello", "World", "PHP", "Programming");

//Orginal String -1
$strings = array_slice($string, 0);
$FirstString = $strings[0];
echo "Original String : " . $FirstString . "\n";

// Reverse strings-1
$hello = str_split($FirstString);
$helloLength = count($hello);

echo "Reversed String : ";
for ($i = $helloLength - 1; $i >= 0; $i--) {
    echo $hello[$i];
}
echo "\n";

//Vowels Count-1
$vowelCount = 0;
$vowel = "aeiouAEIOU";
for ($i = 0; $i < $helloLength; $i++) {
    if (strpos($vowel, $FirstString[$i]) == true) {
        $vowelCount++;
    }
}
echo "Vowel Counts : " . $vowelCount . "\n\n\n";




//Orginal String -2
$SecondString = $strings[1];
echo "Original String : " . $SecondString . "\n";


// Reverse strings-2
$World = str_split($SecondString);
$worldLength = count($World);

echo "Reversed String : ";
for ($i = $worldLength - 1; $i >= 0; $i--) {
    echo $World[$i];
}
echo "\n";

//Vowels Count-2
$vowelCount = 0;
$vowel = "aeiouAEIOU";
for ($i = 0; $i < $worldLength; $i++) {
    if (strpos($vowel, $SecondString[$i]) == true) {
        $vowelCount++;
    }
}
echo "Vowel Counts : " . $vowelCount . "\n\n\n";


//Orginal String -3
$ThirdString = $strings[2];
echo "Original String : " . $ThirdString . "\n";

// Reverse strings-3
$PHP = str_split($ThirdString);
$PHPLength = count($PHP);

echo "Reversed String : ";
for ($i = $PHPLength - 1; $i >= 0; $i--) {
    echo $PHP[$i];
}
echo "\n";


//Vowels Count-3
$vowelCount = 0;
$vowel = "aeiouAEIOU";
for ($i = 0; $i < $PHPLength; $i++) {
    if (strpos($vowel, $ThirdString[$i]) == true) {
        $vowelCount++;
    }
}
echo "Vowel Counts : " . $vowelCount . "\n\n\n";



//Orginal String -4
$FourthString = $strings[3];
echo "Original String : " . $FourthString . "\n";

// Reverse strings-4
$Programming = str_split($FourthString);
$ProgrammingLength = count($Programming);

echo "Reversed String : ";
for ($i = $ProgrammingLength - 1; $i >= 0; $i--) {
    echo $Programming[$i];
}
echo "\n";

//Vowels Count-4
$vowelCount = 0;
$vowel = "aeiouAEIOU";
for ($i = 0; $i < $ProgrammingLength; $i++) {
    if (strpos($vowel, $FourthString[$i]) == true) {
        $vowelCount++;
    }
}
echo "Vowel Counts : " . $vowelCount . "\n";
