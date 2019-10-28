<!DOCTYPE html>
<html>
<html>
  <body>

  <?php

  function test() {
    $x = 5;
    echo "The value of x is: $x</p>";
  }
  test();

  $x = 20;
  $y = 30;

  function test2() {
    // global $x, $y;
    // $y = $x + $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  test2();
  echo "$y<hr />";

  function test3() {
    static $x = 10;
    $x++;
    echo "$x<br />";
  }

  test3();
  test3();
  test3();
  test3();
  test3();

  echo "<hr />";

  $txt1 = "I love";
  $txt2 = "playing soccer";

  print "<h2>I like " . $txt2 . " every day!</h2>";

  echo "<br />";

  $num = 3000;
  var_dump($num);
  echo "<br />";

  $num2 = 32.506;
  var_dump($num2);
  echo "<br />";

  $fruits = array("apple", "orange", "pear", "grape");
  var_dump($fruits);
  echo "<br />";
  echo "$fruits[2]<br />";

  for ($x = 0; $x < count($fruits); $x++) {
    if ($fruits[$x][0] === "a" or $fruits[$x][0] === "o") {
      echo "My favorite fruit is an " . $fruits[$x] . "!<hr />";
    } else {
      echo "My favorite fruit is a " . $fruits[$x] . "!<hr />";
    }
  }



  // obects
  class Person {
    public $firstname;
    public $lastname;
    public $age;

    public function __construct($firstname, $lastname, $age) {
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->age = $age;
    }

    public function hello() {
      return "I am " . $this->firstname . " " . $this->lastname . ". My age is " . $this->age . ".";
    }
  }

  $person1 = new person("Justin", "Garcia", 33);
  $person2 = new person("Angela", "Doan", 29);

  echo $person1->hello();
  echo "<br />";
  echo $person2->hello();
  echo "<hr />";



  echo str_word_count("Hello world");
  echo "<br />";
  echo strrev("Hello World");
  echo "<br />";
  echo strpos("Hello world", "r");
  echo "<br />";
  echo str_replace();
  echo "<hr />";

  define("WELCOME", "Hello! My name is John Smith.");
  echo WELCOME;
  echo "<br />";

  define("WELCOME2", "Hello! My name is John Smith.", true);
  echo welcome2;
  echo "<br />";

  define("CAR", "VOVLO");

  function mycar() {
    echo CAR;
  }

  mycar();

  echo "<hr />";

  $arr1 = array(0 => "red", 1 => "orange");
  $arr2 = array(2 => "yellow", 3 => "green");
  print_r($arr1 + $arr2);
  $arr3 = $arr1 + $arr2;
  echo "<br />";
  echo $arr3[3];
  echo "<hr />";

  for ($x = 0; $x < 10; $x++) {
    echo "$x<br />";
  }

  echo "<hr />";


  $car = array("Honda", "Toyota", "Ford");
  foreach ($car as $value) {
    echo "$value<br />";
  }
  echo "<br />";

  echo count($car);
  echo sort($car);
  echo "<br />";

  for ($x = 0; $x < count($car); $x++) {
    echo $car[$x] . ",<br /> ";
  }
  echo "<hr />";

  echo $_SERVER["PHP_SELF"];
  echo "<br />";
  echo $_SERVER["SERVER_NAME"];
  echo "<br />";
  echo $_SERVER["GET"];
  echo "<br />";

  ?>

  </body>
</html>
