<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

</head>

<body>
  <?php
  require_once('Post.php');
  $posts = readPostsFromJson();

  function readPostsFromJson()
  {
    //jsonファイルを開く
    $data_file_name = "data.json";
    $data = file_get_contents($data_file_name);
    $json = json_decode($data, true);

    //jsonファイルを$postに入れPostクラスをインスタンス化。引数で中身を渡す。
    foreach($json as $post) {
       $post = new Post($post['date'],$post['post']);

      //Postクラスのget関数を使って表示
      echo "<div class ='card'>";
      echo "<div class ='dttm'>" .  $post->getDatetime() . "</br></div>";
      echo "<div class ='post'>" .  $post->getPost() . "</br></div>";
      echo "</div>";
    }
  }
  // for ($i = 0; $i <= count($posts) - 1; $i++) {
  //   echo "<div class ='card'>";
  //   echo "<div class ='dttm'>" . $posts[$i]->dttm . "</br></div>";
  //   echo "<div class ='post'>" . $posts[$i]->post . "</br></div>";
  //   echo "</div>";
  // }
  ?>
</body>

</html>