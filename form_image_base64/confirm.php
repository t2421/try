<?php
    $img = $_POST["image"];
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="icon.png">
  
</head>

<body>
    <form action="index.php" method="POST">
        <?php foreach($img as $value): ?>
            <div><img src="<?php echo($value) ?>" alt=""></div>
            <input type="hidden" name="image[]" value="<?php echo($value) ?>">
        <?php endforeach; ?>
        <button type="submit">戻る</button>
    </form>
    
    
</body>

</html>