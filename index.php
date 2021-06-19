<?php include './config/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--css fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />

    <!-- tynemce -->
    <script src="https://cdn.tiny.cloud/1/pno1jzy3fokxrq842muonq3jfelg0kv5blqeryq4qxob95al/tinymce/5.8.0-111/tinymce.min.js" referrerpolicy="origin"></script>
    <!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5.8.0-111/tinymce.min.js"></script>-->
    <title>File maneger</title>
</head>

<body>

    <div class="container">
        <h4> File maneger with tynemce</h4>
        <textarea class="editor"></textarea>
    </div>

</body>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--js fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>

<!-- bootstrajs -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</html>

<style>
    .v-center {
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>

<script>
    var plugin_tiny = "<?= FILEMANAGER['PLUGIN_TINY_FILEMANAGER'] ?>";
    var plugin_filemanager = "<?= FILEMANAGER['PLUGIN_FILEMANAGER'] ?>";
    var external_filemanager_path_server = "<?= FILEMANAGER['EXTERNAL_FILEMAGER_PATH'] ?>" ;
    var templates = "<?= FILEMANAGER['TEMPLATES']?>";
    tinymce.init({
        content_css : 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css',
        relative_urls: false,
        remove_script_host: false,
        selector: ".editor",
        height: 300,
        plugins: ["bbcode code print preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable help charmap emoticons responsivefilemanager"],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect| template",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview | code",
        bbcode_dialect: 'punbb',
        image_advtab: false,
        external_filemanager_path: external_filemanager_path_server,
        filemanager_title: "Responsive Filemanager",
        external_plugins: {
            "responsivefilemanager": plugin_tiny,
            "filemanager": plugin_filemanager
        },
        templates: templates
    });
</script>