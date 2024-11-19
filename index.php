<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>    
<body>
    <h1>การใช้คำสั้งแบบ condition (กลุ่มคำสั้ง if) </h1>
    <?php
        echo "<h2> คำสั้ง if </h2>";
        $x =5;
        $y =8;
        echo "\$x = $x <br>";
        echo "\$y = $y <br>";
        if($x<$y){
            echo "ค่าในตัวแปร x น้อยกว่าตัวแปรy<br>";
        }
        else{
            echo "ค่าในตัวแปรy น้อยกว่าตัวแปรx<br>";

        }    

        
        echo ".............";
        echo "<h2> short hand if </h2>";
        $scorer = 55;
        if ($score >= 50) echo "ขอแสดงความยินดีด้วย";
        echo "<br>";
        $result = $score>=50?"ได้เกรด p":"ได้เกรด f";
        echo "<br>";
        echo "ผลการเเรียนคุณ".$result;
        echo "<br>";    
        echo "..........................................................";    
        echo "<h2>คำสั้ง switch Case </h2>";
        echo "<br>";
        $pet = "cat";
        switch ($pet) {
            case "cat":
            echo "คุณชอบเหมือนแมว";
            break;
            case "dog":
            echo "คุณทำเหมือนสุนัข";
            break;
            case "นก":
            echo "ตุณพูดมากเหมือนนก";
            break;
        }
        echo "<br>";
        echo "........................................................";


