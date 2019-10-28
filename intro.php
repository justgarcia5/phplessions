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

  echo "My favorite fruit is a " . $fruits[1] . "!<hr />";

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

  ?>

  </body>
</html>
