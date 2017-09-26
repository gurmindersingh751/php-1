<html>
    <head>
        <title>first Pager</title>
        <meta charset="utf-8" />

    </head>
    <body>

        <h1> "hello world"</h1>
		
        <?php
		
$x = 5;
$y = 4;
echo "Value of variables is mentioned as ";
echo "<br>";
echo "x= " . $x ." and y= ".$y."<br>";
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
function test(){
    global $x,$y;
    $y= $x+$y;
    $x= $y-$x;
    echo "Now x= " . $x ." and y= ".$y."<br>";
$age = array("Nancy"=>"23", "Arsh"=>"80", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Name=" . $x . ", Age=" . $x_value;
    echo "<br>";
}
}

test();
?>
    </body>
    
</html>