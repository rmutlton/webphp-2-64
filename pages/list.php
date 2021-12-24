<!DOCTYPE html>
<html lang="en">

<?php include("../component/head.php") ?>

<body>

    <?php include("../component/menu.php"); ?>

    <div class="container-fluid">
        <div class="row mt-4">
            <h1>รายชื่อ</h1>
        </div>
        <div class="row p-3">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">เพิ่มรายชื่อนักศึกษา</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="firstName" placeholder="กรุณากรอกชื่อ" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="lastName" placeholder="กรุณากรอกนามสกุล" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">ชื่อผู้ใช้</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้"
                                    required="">
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">อีเมล <span
                                    class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" id="address" placeholder="52/32" required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">ที่อยู่ 2 <span
                                    class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="หมู่บ้าน ซอย">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">ประเทศ</label>
                            <select class="form-select" id="country" required="">
                                <option value="">เลือก...</option>
                                <option>ประเทศไทย</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">จังหวัด</label>
                            <select class="form-select" id="state" required="">
                                <option value="">เลือก...</option>
                                <option>พิษณุโลก</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" id="zip" placeholder="65000" required="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">เพิ่มรายชื่อ</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("../component/footer.php"); ?>
    <?php include("../component/script.php"); ?>

</body>

</html>