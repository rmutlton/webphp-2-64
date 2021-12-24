<!DOCTYPE html>
<html lang="en">

    <?php include("../component/head.php") ?>

<body>

    <?php include("../component/menu.php"); ?>

    <div class="container-fluid">
        <div class="row mt-4">
            <h1>นักศึกษา</h1>
        </div>
        <div class="row p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include("../component/script.php"); ?>

</body>
</html>