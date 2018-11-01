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
  <script>

    function previewFile(files) {
        var previewArea = document.querySelector('.img-preview');
        previewArea.innerHTML = "";
        console.log(files);
        for(var i = 0;i<files.length;i++){
            loadFile(previewArea,files[i]);
        }
    }

    function loadFile(previewArea,file){
        var img = new Image();
        var preview = new Image();
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
            previewArea.appendChild(preview);
            previewArea.appendChild(createHidden("image[]",reader.result));
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    function createHidden(name,value){
        var q = document.createElement('input');
        q.type = 'hidden';
        q.name = name;
        q.value = value;
        return q;
    }
    </script>
</head>

<body>
    <form action="./confirm.php" method="POST">
        <label for="file_photo">
            ＋写真を選択
            <input type="file" id="file_photo" name="image_name[]" accept="image/*;capture=camera" multiple onchange="previewFile(this.files)" style="display:none;">
        </label>
        
        <button type="submit">SUBMIT</button>
        <div class="img-preview">
            <?php foreach($img as $value): ?>
                <div><img src="<?php echo($value) ?>" alt=""></div>
                <input type="hidden" name="image[]" value="<?php echo($value) ?>">
            <?php endforeach; ?>
        </div>
    </form>
</body>

</html>