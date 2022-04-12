<?php
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) { // $iが3の倍数かつ5の倍数の時
    echo 'FizzBuzz';
  } elseif ($i % 3 == 0) { // $iが3の倍数の時
    echo 'Fizz';
  } elseif ($i % 5 == 0) { // $iが5の倍数の時
    echo 'Buzz';
  } else {
    echo $i;
  }
  echo '<br>';
}
?>