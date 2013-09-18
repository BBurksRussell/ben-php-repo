//This is exercise 6 in Codecademy's PHP course, in the Control Flow:Switch section.
//I decided to include it because it shows a little fun I had by including some archaeology knowledge.
<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
    $point = "clovis";
    
    switch ($point){
        case "clovis":
            echo "it's a clovis!";
            break;
        case "narrow stem":
            echo "it's a narrow stem";
            break;
        case "levanna":
            echo"it's a levanna";
            break;
        default:
            echo"guess again";
    }
     
    ?>
	</body>
</html>
