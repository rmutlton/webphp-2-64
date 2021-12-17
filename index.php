<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PHP</title>
    
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- Navbar content -->
        <div class="container-fluid">
            <!-- code -->
            <?php 
                $name = "Morakot";
                $lastname = "Thongprom";
                $home = "หน้าหลัก";
                $list = "รายชื่อ";
                $about = "เกี่ยวกับเรา";
            ?>

            <span class="navbar-brand mb-0 h1">WebAPP</span>
                
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#"><?= $home ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><?= $list ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><?= $about ?></a></li>
                </ul>
            </div>
            <form class="d-flex">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><span class="nav-link"><?php echo $name . " " . $lastname ?></span></li>
                    </ul>
                </div>
                <button class="btn btn-danger" type="submit">Logout</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-4">
            <h1>WEB APP ระบบจัดการรายชื่อนักศึกษา</h1>
        </div>
    </div>
        
    
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>