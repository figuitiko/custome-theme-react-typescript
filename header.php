<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php



 wp_head() ?>
</head>
<body>
    <?php
    $data = casautomotive_get_theme_data();
    
       
    ?>
    <main class="casautomotive-layout">
    <div id="casautomative-header">
        <pre style="display: none;"><?php echo wp_json_encode($data)  ?></pre>
    </div>
   
