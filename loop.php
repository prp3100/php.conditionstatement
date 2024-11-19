<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั้งแบบวนรอบ loop statement</h1>
?php
    echo "<h2> while loop</h2>";
    echo "<br>";
    $x = 1;
    while ($x<=5) {

        echo "รอบที่ $x <br>";
        $x++;
        if(x==3) continue;

    }
    $1 = 1;
    while ($i<=40) {echo "-"; $i++;}
    echo"<br>";
    echo "<h2> while loop</h2>";
    echo "<br>";
    $x = 1;
    do{
       echo "do...while รอบที่ $y <br>";
        $y++;
    }while ($y<=5)
    echo"..............................<br>"
    echo "<h2>For loop</h2>";
    for ($i=0; $i < 10; $i++) {
        echo "for รอบที่ $i<br>";
    }
    echo "<h2>For loop</h2>";
    for ($i=1; $i <=100; $i=10+) {
        for ($j=1; $j <=$i; $j++) {
            echo="*";
        }
        echo "for รอบที่ $i<br>";
    }
    echo ".............................<br>";
    echo "<h2>foreach loop แบบปกติ</h2>";
    $pet= array ("แมว","สุนัข","นกแก้ว","ปลาทอง","หมูเด้ง");
    foreach ($pet as $value) {
        echo "ฉันชอบ".$value."<br>";
    }
    echo "................................................."
    echo "<h2>foreach loop แบบ key=>value </h2>";
    $food =array("หมวย"=>"ส้มตำ","บูม"=>"หมูย่าง","ยิม"=> "ผัดกระเพรา","อารต์"=>"ข้าวมันไก่");
    foreach($food as $student=>$value){
        echo "ชื่อ$student ชอบกินvalue<br>";
    } 
?>
</body>
</html>