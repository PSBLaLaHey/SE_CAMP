<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div class="main">
        <?php $multi_x = 8; ?>
        <h1 class="title">ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <br>
        <div class="box">
            <?php
            for ($i=1;$i<=24;$i++){
                echo $multi_x ." x ".$i ." = " .$multi_x*$i . "<br>";
            }
            ?>
        </div>
    </div>
    <style>
        *{
            padding:0;
            margin:0;
        }
        .title{
            color: rgb(255, 255, 255);
        }
        .main{
            background-color:rgb(206, 172, 223);
            width: 100%;
            height: 100vh;
            display:flex;
            flex-direction:column;
            align-items: center;
        }
        .box {
            
            width: 150px;
            height: 265px;
            overflow: scroll;
            overflow-x:hidden;
            font-size: 24px;
            padding: 10px;
            animation: colorChange 5s linear infinite;
            border-radius: 5px;
            display: inline-block;
        }
        @keyframes colorChange {
            0% {
                color: linear-gradient(to right, red, orange);
                color: red;
            }
            25% {
                color: linear-gradient(to right, orange, yellow);
                color: yellow;
            }
            50% {
                color: linear-gradient(to right, yellow, green);
                color: green;
            }
            75% {
                color: linear-gradient(to right, green, blue);
                color: blue;
            }
            100% {
                color: linear-gradient(to right, blue, purple);
                color: red;
            }
        }
    </style>
</body>

</html>