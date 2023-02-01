<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Parameter Assignment</title>
</head>
<body>
    <?php 
    // 3 get parameters
    $firstname=filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname=filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    // conditional sentences
    echo "Hello, my name is $firstname $lastname <br/>";
    if($age >= 18) {
        echo "I am $age years old and I am old enough to vote in the United States.<br/>";
    }
    else {
        echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
    }
    // calculating the days based on the number given for age
    $number_of_days = $age * 365;
    echo "Number of days from the age is: $number_of_days <br/>";
    // displaying current date
    $date = date('Y-m-d h:i:s');
    echo $date; 
    ?>


</body>
</html>