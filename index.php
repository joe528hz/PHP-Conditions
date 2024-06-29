<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bool = true;
        $a = 1;
        $b = 4;

        // match
        $result = match ($a) {
            1 => "Variable a is equal to one!",
            2 => "Variable a is equal to two",
            default => "None were match",
        };
        echo $result;

        // switch
        switch($a){
            case 1:
                echo "The first case is correct";
                break;
            case 2:
                echo: "The second case is correct";
                break;
            case 3:
                echo: "The third case is correct";
                break;
            default:
                echo "None were true.";
        }

        // if else
        if($a < $b && !$bool) {
            echo "First condition is true.";
        } else if ($a < $b && $bool) {
            echo "Second condition is true.";
        } else {
            echo "None were true.";
        }

    ?>
</body>
</html>