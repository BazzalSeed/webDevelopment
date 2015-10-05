<!DOCTYPE html>
<head><title>Seed's Calculator rocks</title></head>
<body>
<?php
$first = $_POST['first'];
$second = $_POST['second'];
$operation = $_POST['operation'];
$error = 0;

if(!is_numeric($first) ){

	echo"<p> The first number you enterted is not a valid number. Please give me a valid nubmer </p> ";
    $error ++;
}

if(!is_numeric($second) ){

	echo"<p> The second number you enterted is not a valid number. Please give me a valid nubmer </p> ";
    $error++;
}

if($operation =="div" && $second == 0 ){
	echo "<p> Dude, you cannot divide a number by zero </p> ";
	$error++;
}

if($error != 0){
	echo "<p> Bro, you did something wrong, fix it following the instructions given above </p> ";
}
else {

if($operation == "add"){
	$f = floatval($first);
	$s = floatval($second);
    $result = $f + $s;
    printf("<p>Obivously %.7f + %.7f = %.7f </p>" ,$f ,$s , $result);
	
}
else if ($operation == "sub"){
	$f = floatval($first);
	$s = floatval($second);
    $result = $f - $s;
    printf("<p>Obivously %.7f - %.7f = %.7f </p>" ,$f ,$s , $result);

}

else if ($operation == "mul"){
	$f = floatval($first);
	$s = floatval($second);
    $result = $f * $s;
    printf("<p>Obivously %.7f * %.7f = %.7f </p>" ,$f ,$s , $result);

}
else if ($operation == "div"){
	$f = floatval($first);
	$s = floatval($second);
    $result = $f / $s;
    printf("<p>Obivously %.7f / %.7f = %.7f </p>" ,$f ,$s , $result);

}

else{
	echo "<p> Unexpected error</p>";
}


}

?>
</body>
</html>