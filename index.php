<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This id PHP <?php echo 'Hello is me'?></h1>
    <?php echo 'Gay'?>
    <div>
        <p>1</p>
        <?php
        {
            echo " <h1>my Gay friend Bom</h1>";
        ?>
        <p>2</p>
        <?php
        }
        ?>
        <p>3</p>
    </div>
    <div>
        <?php
            $var_a=1;
            $var_a="1$var_a";
            print_r($var_a);
            echo "<br>";
            echo $var_a+$var_a;
            echo "<br>";
            $arry = arry();
            $arry[]=12;
            for($i=0;$i<sizeof($arry);$i++){

            }
        ?>
    </div>
</body>
</html>