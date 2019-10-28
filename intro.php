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

  ?>

  </body>
</html>
