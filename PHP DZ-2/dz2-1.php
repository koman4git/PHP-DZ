  <?php
      $a = -6;
      $b = -5;
        if ($a >= 0 && $b >= 0) {
          echo $a - $b;
        } else if ($a < 0 && $b < 0) {
          echo $a * $b;
        } else if ($a >= 0 && $b <= 0) {
          echo $a + $b;
        } else echo 'ни одно условие не сработало'
  ?>
   