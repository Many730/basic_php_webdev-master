<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<style>
  .card {
    /* ポイント４ */
    width: calc((100% - 20px * 1) / 2);
    height: auto;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, .2);
    padding: 20px;
    margin: 40px;
  }

  .datetime {
    /* ポイント４ */
    width: calc(100% - 20px * 1);
    height: auto;
    border-radius: 8px;
    font-size: small;
  }

  .post {
    /* ポイント４ */
    width: calc(100% - 20px * 1);
    height: auto;
    border-radius: 8px;
    font-size: x-large;
  }
  </style>
<body>
  <?php
$posts = array(
  array("date" => "2023-01-04 9:00", "post" => "500万人突破するまで生配信！"),
  array("date" => "2023-01-09 11:42", "post" => "頼む！行かないでくれ！"),
  array("date" => "2023-01-12 10:07", "post" => "登録即解除とかしたらどうなるん"),
  array("date" => "2023-01-13 22:59", "post" => "お前らは大嫌いだろうけど素直に凄いわ"),
);

  foreach ($posts as $post) {
    echo "<div class ='card'>" ;
    echo "<div class ='datetime'>" . $post["date"] . "</div>";
    echo "<br>";
    echo "<div class ='post'>" . $post["post"] . "</div>";
    // echo "<br>";
    echo "</div>";
    // foreach ($post as $key => $value) {
      // echo "<div class ='card'>" ;
      // echo "<div class ='datetime'>" . $value . "</div>";
      // echo "<div class ='post'>" . $value . "</div>";
      // echo "<br>";
      // echo "</div>";
    //   $date = $post["date"];
    //   var_dump($date);
    //   echo "<br>";
    // }
  }

  ?>
</body>

</html>