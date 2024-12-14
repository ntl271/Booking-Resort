<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head" style="background-color: #008000;border-radius: 5px; padding: 2px;">
                        <header>Sửa Tài Khoản</header>
                        </ul>
                    </div>
                    <?php $taikhoan  = json_decode($data["data_taikhoan"],true)[0];?>
                    <form action="./admin/edittaikhoan/<?php echo $taikhoan['username']; ?>" method="POST" onsubmit="return checkpass()">
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="username_create" placeholder="Bắt buộc" value="<?php echo $taikhoan['username']; ?>" disable='disable' readonly>
                                    <label class="mdl-textfield__label">Username</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="ten" placeholder="Bắt buộc" value="<?php echo $taikhoan['ten']; ?>">
                                    <label class="mdl-textfield__label">Họ tên</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="pass" id="pass_create" placeholder="Bắt buộc" value="<?php echo $taikhoan['pass']; ?>">
                                    <label class="mdl-textfield__label">Mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="pass_confirm" id="pass_confirm" placeholder="Bắt buộc" value="<?php echo $taikhoan['pass']; ?>">
                                    <label class="mdl-textfield__label">Nhập lại mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="sdt" id="sdt" value="<?php echo $taikhoan['sdt']; ?>">
                                    <label class="mdl-textfield__label">Số điện thoại</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" name="email" id="email" value="<?php echo $taikhoan['email']; ?>">
                                    <label class="mdl-textfield__label">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" name="btn_update_taikhoan" style="border-radius: 20px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                Sửa Tài Khoản</button>
                                <button type="button" onclick="XemDS()" style="border-radius: 20px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ham ngoai vi danh cho javascript va php -->
<script type="text/javascript">
    function checkpass() {
        var pass = document.forms["taotaikhoan"]["pass_create"].value;
        var nhaplai = document.forms["taotaikhoan"]["pass_confirm"].value;
        if (pass != nhaplai) {
            swal("Pass word  bạn nhập không giống nhau ");
            return false;
        }
        if (pass == pass_confirm) {
            return true;
        }

    }

    function thanhcong() {
        swal("Thêm Thuộc Tính Thành Công!",
            "");
    }

    function thatbai() {
        swal("Thêm Thuộc Tính không Thành Công!",
            "Hãy Chắc chắn rằng bạn nhập đúng hoặc không bỏ trống các trường.");
    }

    function XemDS() {
        window.location = "./admin/viewTaiKhoan";
    }
</script>

<?php
if (isset($data["result"])) {
    if ($data["result"] == true) {
        echo '<script type="text/javascript"> thanhcong(); </script>';
    } else {
        echo '<script type="text/javascript"> thatbai(); </script>';
    }
}


?>