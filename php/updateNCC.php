<?php 
    $id = $id1 =$macu = $tencu = $sdt = $email = $sanpham = $diachi = $macu2 = $tencu2 = $sdt2 = $email2 = $sanpham2 = $diachi2 = "";
    require_once('dbhelp.php');
    $id = $_GET['id'];
    if(!empty($_POST)) {
        if (isset($_POST['mancu'])) {
            $macu = $_POST['mancu'];
        }

        if (isset($_POST['tencu'])) {
            $tencu = $_POST['tencu'];
        }

        if (isset($_POST['sdt'])) {
            $sdt = $_POST['sdt'];
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['sanpham'])) {
            $sanpham = $_POST['sanpham'];
        }

        if (isset($_POST['diachi'])) {
            $diachi = $_POST['diachi'];
        }

        if ($id != '') {
            $sql = "UPDATE NhaCungUng SET MaCungUng = '$macu', TenCungUng = '$tencu', SDT = '$sdt',Email = '$email', SanPham = '$sanpham', DiaChi = '$diachi' WHERE id = " . $id;
        } else{
            $sql = "INSERT INTO NhaCungUng(MaCungUng,TenCungUng,SDT,Email,SanPham,DiaChi)
                    VALUES ('$macu','$tencu','$sdt','$email','$sanpham','$diachi')
                    ";
        }
        execute($sql);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM NhaCungUng WHERE id =". $id;
        $ncuList = executeResult($sql);
        if ($ncuList != null && count($ncuList) > 0) {
            $ncu = $ncuList[0];
            $macu2 = $ncu['MaCungUng'];
            $tencu2 = $ncu['TenCungUng'];
            $sdt2 = $ncu['SDT'];
            $email2 = $ncu['Email'];
            $sanpham2 = $ncu['SanPham'];
            $diachi2 =$ncu['DiaChi'];
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet"
        href="./assets/fonts/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese"
        rel="stylesheet">
    <script src="../assets/js/jquery.js"></script>
</head>

<body>
    <div class="app">
    	<div class="header">
    			<ul class="header__list row no-gutters">
    				<li class="header__list-item"><a href="#">Trang chủ</a></li>
    				<li class="header__list-item"><a href="#">Cập nhập nhà sản xuất</a></li>
    				<li class="header__list-item"><a href="updateItem.php">Cập nhập và xóa mặt hàng</a></li>
    				<li class="header__list-item"><a href="#">Liên hệ</a></li>
    			</ul>
    		</div>
    	<div class="grid wide" style="margin-top: 100px;">
    		
    		<div class="container">
    			<h1>Nhà Sản Xuất</h1>
    			<div class="form">
    				<form action="" method="post" class="form row gutters">
    					<div class="form__left c-6">
    						<div class="form__left-input">
    							<label for="mancu">Mã nhà sản xuất</label>
    						    <input type="text" name="mancu" id="mancu" value="<?=$macu2?>">
    						</div>
    						<div class="form__left-input">
	    						<label for="tencu">Tên nhà sản xuất</label>
	    						<input type="text" name="tencu" id="tencu" value="<?=$tencu2?>">
 							</div>
    						<div class="form__left-input">

	    						<label for="sdt">Số điện thoại</label>
	    						<input type="text" name="sdt" id="sdt" value="<?=$sdt2?>">
							</div>
    						<div class="form__left-input">

	    						<label for="email">E-Mail</label>
	    						<input type="text" name="email" id="email" value="<?=$email2?>">
    						</div>
    					</div>
    					<div class="form__right c-6">
    						<div class="form__right-input">
    							<label for="sanpham">Sản phẩm nhà sản xuất</label>
    						<!-- <select name="sanpham" id="sanpham">
    							<option value="<?=$sanpham2?>">Apple iPhone XS max</option>
    							<option value="AppleiPhoneSmax">Apple iPhone XS max</option>
    							<option value="AppleiPhoneXSmax">Apple iPhone XS max</option>
    						</select> -->
                            <input type="text" name="sanpham" id="sanpham" value="<?=$sanpham2?>">
    						</div>

    						<div class="form__right-input">
    							<label for="diachi">Địa chỉ</label>
    							<input type="text" name="diachi" id="diachi" value="<?=$diachi2?>">
    						</div>
    						<button class="btn btn-primary">Lưu</button>

    					</div>
    				</form>
    			</div>	
                <form action="" method="get" class="" style="
    top: 59%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Tên nhà cung ứng cần tìm">
                            <button >Tìm kiếm</button></div>
                        </form>
    			<div class="table">
    				<table class="table table-bordered table-hover">
    					<thead>
    					<tr>
    						<th>STT</th>
    						<th>Ma nha cung ung</th>
    						<th>Ten nha cung ung</th>
    						<th>Dien thoai</th>
    						<th>Email</th>
                            <th>San Pham</th>
                            <th>Dia chi</th>
                            <th></th>
                            <th></th>
    					</tr>
    					</thead>
    					<tbody>
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = "SELECT * FROM NhaCungUng WHERE TenCungUng LIKE '%".$_GET['timkiem']."%'";    
} else {
    $sql = "SELECT * FROM NhaCungUng";
}
    $ncuList1 = executeResult($sql);

    foreach ($ncuList1 as $ncu1) {
        echo '<tr>
                <td>'.$ncu1['id'].'</td>
                <td>'.$ncu1['MaCungUng'].'</td>
                <td>'.$ncu1['TenCungUng'].'</td>
                <td>'.$ncu1['SDT'].'</td>
                <td>'.$ncu1['Email'].'</td>
                <td>'.$ncu1['SanPham'].'</td>
                <td>'.$ncu1['DiaChi'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("updateNCC.php?id='.$ncu1['id'].'","_self")\'>Sửa</div></td>
                <td><div class="btn btn-block" onclick="deleteNCU('.$ncu1['id'].')">Xóa</div></td>
            </tr>
        ';
    }

?>
    					</tbody>
    				</table>
    			</div>				
    		</div>
    	</div>
    </div>
    <script type="text/javascript">
        function deleteNCU(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>

</body>

</html>