<!-- <?php
        echo "hello world";
        ?>
<br>
<?php
$text = "testing";
echo $text;
?>
<br>
<?php
$nama = ["nacht", "asta", "nero", "noele"];

foreach ($nama as $ininama) {
    echo "$ininama <br/>";
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- VARIABLE -->
    <?php
    echo "INI Variable !!!";
    echo "<br>";
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    ?>
    <br>
    <br>
    <!-- IF ELSE -->
    <?php
    echo "INI IF ELSE !!!";
    echo "<br>";
    $t = 20;

    if ($t > 13) {
        echo "Lebih dari 13";
    } else {
        echo "Kurang dari 13";
    }
    ?>
    <br>
    <br>
    <!-- SWITCH -->
    <?php
    echo "INI SWITCH !!!";
    echo "<br>";
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Warna Kesukaan kamu adalah red!";
            break;
        case "blue":
            echo "Warna Kesukaan kamu adalah blue!";
            break;
        case "green":
            echo "Warna Kesukaan kamu adalah green!";
            break;
        default:
            echo "Warna Kesukaan kamu adalah neither red, blue, nor green!";
    }
    ?>
    <!-- FOREACH -->
    <br>
    <br>
    <?php
    echo "INI FOREACH !!!";
    echo "<br>";
    $nama = ["nacht", "asta", "nero", "noele"];

    foreach ($nama as $ininama) {
        echo "$ininama <br/>";
    }
    ?>

    <!-- FUNCTION -->
    <?php
    echo "INI FUNCTION";
    echo "<br>";
    function nama($nama)
    {
        echo "Hello Saya $nama";
    }

    nama("Fatiya");
    ?>

    <!-- ARRAYS -->
    <br>
    <?php
    echo "INI ARRAY";
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <br>
    <br>
    <!-- DATE AND TIME -->
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>
    <br>
    <br>

    <!-- PHP OOP -->
    <?php
    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>

    <!-- PHP CONSTRUKTOR -->
    <br>
    <br>
    <?php
    echo "INI CONSTRUCTOR";
    echo "<br>";
    class komputer
    {
        public $prossesor;
        public $memory;
        public $ram;
        public function __construct($prossesor = "prossesor", $memory = "Memory", $ram = "Ram")
        {
            $this->prossesor = $prossesor;
            $this->memory = $memory;
            $this->ram = $ram;
        }
        public function get_Data()
        {
            return "$this->prossesor | $this->memory | $this->ram";
        }
    }
    $komputer1 = new komputer("Core i7", "225 GB", "8 GB");
    $komputer2 = new komputer("Core i9", "500 GB");
    echo "Spek Komputer Sekolah : " . $komputer1->get_Data();
    echo "<br/>";
    echo "<br/>";
    echo "Spek Komputer Rumah : " . $komputer2->get_Data();
    ?>
    <br>
    <br>
    <!-- PHP DESTRUCTOR -->
    <?php
    class product
    {
        public $ram;
        public function __construct($ram = "ram")
        {
            $this->ram = $ram;
        }
        function __destruct()
        {
            echo "RAM Komputer {$this->ram}";
        }
    }
    $komputer1 = new product("255 GB");
    ?>
    <br>
    <!-- SESSION -->
    <?php
    echo "INI SESSION";
    echo "<br>";
    session_start();
    echo "Id user saaya adalah " . $_SESSION['logged_in_user_id'];
    echo "<br>";
    echo "Username saaya adalah " . $_SESSION['logged_in_user_name'];
    ?>
</body>

</html>