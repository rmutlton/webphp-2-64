<?php 

    $parts = explode('/', $_SERVER["SCRIPT_NAME"]);
    $filename = $parts[count($parts) - 1];

    if($filename === 'index.php'){
        $index_link = 'index.php';
        $student_link = './pages/student.php';
        $list_link = './pages/list.php';
        $about_link = './pages/about.php';
    } else {
        $index_link = '../index.php';
        $student_link = './student.php';
        $list_link = './list.php';
        $about_link = './about.php';
    }

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- Navbar content -->
        <div class="container-fluid">
            <!-- code -->
            <?php 
                $name = "Morakot";
                $lastname = "Thongprom";
                $home = "หน้าหลัก";
                $student = "นักศึกษา";
                $list = "รายชื่อ";
                $about = "เกี่ยวกับเรา";
            ?>

            <span class="navbar-brand mb-0 h1">WebAPP</span>
                
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= $index_link ?>"><?= $home ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $student_link ?>"><?= $student ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $list_link ?>"><?= $list ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $about_link ?>"><?= $about ?></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">TEST</a></li> -->
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