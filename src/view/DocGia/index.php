<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3> Hệ thống quản lý thư viện</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=DocGia&action=admin"><button class="btn btn-primary">Xem chi tiết</button></a>
            </div>
            <div class="col-md-12 ms-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã Độc Giả</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Giới Tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề nghiệp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bdonor as $bd) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $bd['id'] ?></th>
                                <td><?php echo $bd['name'] ?></td>
                                <td><?php echo $bd['type'] ?></td>
                                <td><?php echo $bd['barcode'] ?></td>
                                <td><?php echo $bd['dose'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>