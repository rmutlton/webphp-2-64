<?php 

    $parts = explode('/', $_SERVER["SCRIPT_NAME"]);
    $filename = $parts[count($parts) - 1];

    if($filename === 'index.php'){
        $bootstrap_link = './bootstrap/css/bootstrap.min.css';
    } else {
        $bootstrap_link = '../bootstrap/css/bootstrap.min.css';
    }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PHP</title>
    
    <link rel="stylesheet" href="<?= $bootstrap_link ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>

</head>