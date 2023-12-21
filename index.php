<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <table>
        <tbody>
            <tr>
                <td>
                    <?php
                    for ($i=1;$i<=24;$i++){
                        echo $multi_x;
                    ?>
                </td>
                <td>x</td>
                <td>
                    <?php
                    echo $i."=";
                    echo $multi_x*$i ." ";
                    echo "<br>";
                    ?>
                </td>
                <td>
                    <?php
                    }
                    
                    ?>
                    <br>
                </td>
            </tr>
        </tbody>
    </table>
    <style>
        table {
            width: 50px;
            height: 265px;
        }
    </style>
</body>

</html>