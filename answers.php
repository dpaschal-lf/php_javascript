<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
<script>
//E 1:

var variable1 = "hello"
var variable2 = 4;
var variable3 = ['foo','bar'];

//E 2:

var variable1 = 4;
variable1 = "hello";

//E 3:

var numbers = [3, 5, 16, 3, 4, 18];
var result = numbers[0];
for(var i = 1; i < numbers.length; i++)
{
    result += numbers[i];
}
console.log("Result = "+result);
document.write("Result = "+result);
    
//E 4:

document.write("This is a string" + "This is another string");
    
//E 5:

var my_float = 3.5;
var my_int = parseInt(my_float);
var my_float2 = 5.3;
var my_int2 = intval(my_float2);






//E 6:

var my_var1 = "Hello";
if(typeof(my_var2 != 'undefined'))
{
    document.write(my_var2);
}
else
{
    document.write(my_var1);
}
//E 7:

switch(check_var){
        case "hello":
            document.write("greetings");
            break;
        case "bye":
            document.write("good bye");
            break;
        default:
            document.write("Party time!");
            break;
}
            

//E 8:
    
var student = {name:'Skippy', class:'English', grade:75};

//E 9:
    
var student = {};
student.name = 'Skippy';
student.class = 'English';
student.grade = 75;


Convert the following from Javascript to PHP
//E 10

    
$num_array = [35, 2, 14, 56, 65, 52];
function find_greatest_num_and_index($direction)
{
    global $num_array;
    $greatest = null;
    $greatest_index = null;
    if($direction >= 0)
    {
        $i = 0;
        $increment = 1;
        $end_loop = count($num_array);
    }
    else
    {
        $i = $count($num_array);
        $increment = -1;
        $end_loop = 0;
    }
    while($i != $end_loop)
    {
        if($num_array[i] > $greatest)
        {
            $greatest = $num_array[i];
            $greatest_index = i;
        }
        $i+= $increment;
    }
    return ["greatest"=>$greatest, "greatest_index"=>$greatest_index];
}
    
find_greatest_num_and_index(1);
        
</script>
</head>
<body>



</body>
</html>