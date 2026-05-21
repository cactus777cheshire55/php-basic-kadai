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
        'id' => '1', '名前' => '侍太郎', '年齢' => 30];

        foreach ($merchandise as $index => $value) {
          echo "{$index} : {$value} <br>";
        }

      ?>
    </p>
  </body>
</html>