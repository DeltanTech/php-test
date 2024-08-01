<?php

$file = "count.dat";

$fp = fopen($file, "a+");



if($_SERVER["REQUEST_METHOD"] === "POST"){


  $content = "名前：".$_POST["name"]. "\n"."内容：". $_POST["content"]."\n";


  fwrite($fp, $content);

}
$str = file_get_contents("count.dat");



?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <title>PHPをテストしてみた</title>
</head>
<body>
<textarea id="" disabled><?php echo $str;?></textarea>
  <section>
    <h1>PHPをテスト</h1>
    <form action="index.php" method="post">
      <input type="text" name="name" id="" required>
      <textarea name="content" id="" required></textarea>
      <button type="submit">送信</button>
    </form>
  </section>
</body>
</html>

