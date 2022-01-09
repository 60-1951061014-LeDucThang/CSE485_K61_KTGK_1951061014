<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div style="color: red">
                <?php echo $error; ?>
            </div>
            <div class="col-md-8 ms-auto me-auto">
                <h4>Sửa thuốc</h4>
                <form class="row g-3 needs-validation" method="post" action="" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Mã Độc Giả</label>
                        <input type="text" class="form-control" name="madg" id="validationCustom01" value="<?php echo isset($_GET['madg']) ? $_GET['madg'] : $BD['madg']?>" readonly required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label"> Họ và tên</label>
                        <input type="text" class="form-control" name="hovaten" id="validationCustom01" value="<?php echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $BD['hovaten']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Giới Tính</label>
                        <input type="text" class="form-control" name="gioitinh" id="validationCustom02" value="<?php echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $BD['gioitinh']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Năm Sinh</label>
                        <input type="text" class="form-control" name="namsinh" id="validationCustom02" value="<?php echo isset($_POST['namsinh']) ? $_POST['namsinh'] : $BD['namsinh']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Nghề Nghiệp</label>
                        <input type="text" class="form-control" name="nghenghiep" id="validationCustom02" value="<?php echo isset($_POST['nghenghiep']) ? $_POST['nghenghiep'] : $BD['nghenghiep']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày Cấp Thẻ</label>
                        <input type="text" class="form-control" name="ngaycapthe" id="validationCustom02" value="<?php echo isset($_POST['ngaycapthe']) ? $_POST['ngaycapthe'] : $BD['ngaycapthe']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày Hết Hạn</label>
                        <input type="text" class="form-control" name="ngayhethan" id="validationCustom02" value="<?php echo isset($_POST['ngayhethan']) ? $_POST['ngayhethan'] : $BD['ngayhethan']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Địa Chỉ</label>
                        <input type="text" class="form-control" name="diachi" id="validationCustom02" value="<?php echo isset($_POST['diachi']) ? $_POST['diachi'] : $BD['diachi']?>" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" name="submit" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>