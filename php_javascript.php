<?php
//E 1:

$variable1 = “hello”;
$variable2 = 4;
$variable3 = [‘foo’, ‘bar’];

//E 2:

$variable1 = 4;
$variable1 = “hello”;

//E 3:

$numbers = [3, 5, 16, 3, 4, 18];
$result = $numbers[0];
for($i = 1; $i < count( $numbers); $i+)
{
    $result += $numbers[$i];
}
echo “Result = “.$result;

//E 4:

print(“This is a string” . “This is another string”);

//E 5:

$my_float = 3.5;
$my_int = (int)$my_float;
$my_float2 = 5.3;
$my_int2 = intval($my_float2);


//E 6:

$my_var1 = “Hello”;
if(isset($my_var2){
    echo $my_var2;
}
else
{
    echo $my_var1;
}

//E 7:

switch($check_var){
    case “hello”:
        print(“greetings”);
        break;
    case “bye”:
        print(“good bye”);
        break;
    default:
        print(“Party time!”);
        break;
}

//E 8:

$student = [‘name’=>’Skippy’, ‘class’=>’English’, ‘grade’=>75];

//E 9:

$student = new stdClass();
$student->name = “Skippy”;
$student->class = ‘English’;
$student->grade = 75;








//Convert the following from Javascript to PHP
//E 10

var num_array = [35, 2, 14, 56, 65, 52];

function find_greatest_num_and_index(direction)
{
    var greatest = null;
    var greatest_index = null;
    if(direction >= 0)
    {
        var i = 0;
        var increment = 1;
        var end_loop = num_array.length;
    }
    else
    {
        var i = num_array.length;
        var increment = -1;
        var end_loop = 0;
    }

    while( i != increment)
    {
        if( num_array[i] > greatest )
        {
            greatest = num_array[i];
            greatest_index = i;
        }
        i+= increment;
    }
    return {greatest : greatest, 
        greatest_index : greatest_index;
    };
}
?>