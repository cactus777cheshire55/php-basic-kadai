<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php 
      $merchandise = [
        '名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($merchandise as $index => $value) {
          echo "{$index} : {$value} <br>";
        }

      ?>
    </p>
  </body>
</html>
