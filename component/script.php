<?php 

    $parts = explode('/', $_SERVER["SCRIPT_NAME"]);
    $filename = $parts[count($parts) - 1];

    if($filename === 'index.php'){
        $script_link = './bootstrap/js/bootstrap.bundle.min.js';
    } else {
        $script_link = '../bootstrap/js/bootstrap.bundle.min.js';
    }

?>

<script src="<?= $script_link ?>"></script>