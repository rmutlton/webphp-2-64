<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PHP</title>
<!-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <button class="btn btn-primary">OK</button>
    <button class="btn btn-outline-danger">Cancel</button>
    <?php
        $name = "มรกต ทองพรหม";
        $age = 37;
    ?>

    <p>สวัสดีคุณ <?php echo $name; ?></p>
    <p>ขณะนี้คุณอายุ <?= $age ?></p>

    <?php 
    
        for ($i = 0; $i < 10; $i++) {
            // echo '<p>';
            // echo $i + 1;
            // echo '. RMUTL';
            // echo '</p>';

            // $num = $i + 1;
            // echo '<p>'.$num.'. RMUTL</p>';

            $num = $i + 1;
            echo "<p>$num .RMUTL</p>";
            echo "<hr>";
        }
    
    ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>