<?php 
    $id = $id1 =$mamh = $tenmh = $mansx = $gianhap = $ngaycapnhap = $tennsx = $dacdiem = $soluong = $gia = $mamh2 = $tenmh2 = $mansx2 = $gianhap2 = $ngaycapnhap2 = $tennsx2 = $dacdiem2 = $soluong2 = $gia2 = "";
    require_once('dbhelp.php');
    $id = $_GET['id'];
    if(!empty($_POST)) {
        if (isset($_POST['mamh'])) {
            $mamh = $_POST['mamh'];
        }

        if (isset($_POST['tenmh'])) {
            $tenmh = $_POST['tenmh'];
        }

        if (isset($_POST['mansx'])) {
            $mansx = $_POST['mansx'];
        }

        if (isset($_POST['gianhap'])) {
            $gianhap = $_POST['gianhap'];
        }

        if (isset($_POST['ngaycapnhap'])) {
            $ngaycapnhap = $_POST['ngaycapnhap'];
        }

        if (isset($_POST['tennsx'])) {
            $tennsx = $_POST['tennsx'];
        }

        if (isset($_POST['dacdiem'])) {
            $dacdiem = $_POST['dacdiem'];
        }

        if (isset($_POST['soluong'])) {
            $soluong = $_POST['soluong'];
        }

        if (isset($_POST['gia'])) {
            $gia = $_POST['gia'];
        }

        if ($id != '') {
            $sql = "UPDATE MatHang SET MaMH = '$mamh', TenMH = '$tenmh', MaNSX = '$mansx',GiaNhap = '$gianhap', NgayCapNhap = '$ngaycapnhap', TenNSX = '$tennsx', DacDiem = '$dacdiem', SoLuong = '$soluong', GiaXuat ='$gia'  WHERE id = " . $id;
        } else{
            $sql = "INSERT INTO MatHang(MaMH,TenMH,MaNSX,GiaNhap,NgayCapNhap,TenNSX,DacDiem,SoLuong,GiaXuat)
                    VALUES ('$mamh','$tenmh','$mansx','$gianhap','$ngaycapnhap','$tennsx','$dacdiem','$soluong','$gia')
                    ";
        }
        execute($sql);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM MatHang WHERE id =". $id;
        $ncuList = executeResult($sql);
        if ($ncuList != null && count($ncuList) > 0) {
            $ncu = $ncuList[0];
            $mamh2 = $ncu['MaMH'];
            $tenmh2 = $ncu['TenMH'];
            $mansx2 = $ncu['MaNSX'];
            $gianhap2 = $ncu['GiaNhap'];
            $ngaycapnhap2 = $ncu['NgayCapNhap'];
            $tennsx2 =$ncu['TenNSX'];
            $dacdiem2 = $ncu['DacDiem'];
            $soluong2 = $ncu['SoLuong'];
            $gia2 =$ncu['GiaXuat'];
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
    				<li class="header__list-item"><a href="updateNCC.php">Cập nhập nhà cung cấp</a></li>
    				<li class="header__list-item"><a href="#">Cập nhập và xóa mặt hàng</a></li>
    				<li class="header__list-item"><a href="#">Liên hệ</a></li>
    			</ul>
    		</div>
    	<div class="grid wide" style="margin-top: 100px;">
    		
    		<div class="container">
    			<h1>Cập nhập mặt hàng</h1>
    			<div class="form">
    				<form action="" method="post" class="form row gutters">
    					<div class="form__left c-6">
    						<div class="form__left-input">
    							<label for="mamh">Ma MH</label>
    						    <input type="text" name="mamh" id="mamh" value="<?=$mamh2?>">
    						</div>
    						<div class="form__left-input">
	    						<label for="tenmh">Ten MH</label>
	    						<input type="text" name="tenmh" id="tenmh" value="<?=$tenmh2?>">
 							</div>
    						<div class="form__left-input">

	    						<label for="mansx">Ma NSX</label>
                                <select name="mansx" id="mansx" class="">
                                                <option value="<?=$mansx2?>"><?=$mansx2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaCungUng FROM NhaCungUng';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaCungUng'].'>
                                                                    '.$epl['MaCungUng'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
							</div>
    						<div class="form__left-input">

	    						<label for="gianhap">Giá nhập</label>
	    						<input type="text" name="gianhap" id="gianhap" value="<?=$gianhap2?>">
    						</div>
                            <div class="form__left-input">
                                <label for = "start" >Ngày cập nhập</label>
                                <input type="date" id="start" name="ngaycapnhap"
                                           min="2010-01-01" max="2020-12-31" value="<?=$ngaycapnhap2?>">
                            </div>
    					</div>
    					<div class="form__right c-6">
                            <div class="form__right-input">
                                <label for="tennsx">Ten NSX</label>
                                 <select name="tennsx" id="tennsx" class="">
                                                <option value="<?=$tennsx2?>"><?=$tennsx2?></option>
                                                <?php 
                                                        $sql = 'SELECT TenCungUng FROM NhaCungUng';
                                                        $employeeList1 = executeResult($sql);
                                                    foreach ($employeeList1 as $epl) {
                                                            echo '<option value= '.$epl['TenCungUng'].'>
                                                                    '.$epl['TenCungUng'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                            </div>

    						<div class="form__right-input">
    							<label for="dacdiem">Đặc điểm</label>
    						<select name="dacdiem" id="dacdiem" value="<?=$dacdiem2?>">
    							<option value="Mới 100%">Mới 100%</option>
    							<option value="90%">90%</option>
                                <option value="80%">80%</option>
    							<option value="50%">50%</option>
    						</select>
    						</div>

    						<div class="form__right-input">
    							<label for="soluong">Số lượng</label>
    							<input type="text" name="soluong" id="soluong" value="<?=$soluong2?>">
    						</div>
                            <div class="form__right-input">
                                <label for="gia">Giá xuất</label>
                                <input type="text" name="gia" id="gia" value="<?=$gia2?>">
                            </div>
    						<div class="btn__submit">
    							<button class="btn btn-primary">Lưu</button>
    						</div>

    					</div>
    				</form>
    			</div>	
                <form action="" method="get" class="" style="
    top: 59%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Tên mặt hàng cần tìm">
                            <button >Tìm kiếm</button></div>
                        </form>
    			<div class="table">
    				<table class="table table-bordered table-hover">
    					<thead>
    					<tr>
    						<th>STT</th>
    						<th>Mã mặt hàng</th>
    						<th>Tên mặt hàng</th>
    						<th>Mã nhà sản xuất</th>
    						<th>Giá nhập</th>
    						<th>Ngày cập nhập</th>
                            <th>Tên nhà sản xuất</th>
                            <th>Đặc điểm</th>
                            <th>Số lượng</th>
                            <th>Giá xuất</th>
                            <th></th>
                            <th></th>
    					</tr>
    					</thead>
    					<tbody>
    					<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM MatHang WHERE TenMH LIKE "%'.$_GET['timkiem'].'%"';
} else {
    $sql = "SELECT * FROM MatHang";
}
    $ncuList1 = executeResult($sql);

    foreach ($ncuList1 as $ncu1) {
        echo '<tr>
                <td>'.$ncu1['id'].'</td>
                <td>'.$ncu1['MaMH'].'</td>
                <td>'.$ncu1['TenMH'].'</td>
                <td>'.$ncu1['MaNSX'].'</td>
                <td>'.$ncu1['GiaNhap'].'</td>
                <td>'.$ncu1['NgayCapNhap'].'</td>
                <td>'.$ncu1['TenNSX'].'</td>
                <td>'.$ncu1['DacDiem'].'</td>
                <td>'.$ncu1['SoLuong'].'</td>
                <td>'.$ncu1['GiaXuat'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("updateItem.php?id='.$ncu1['id'].'","_self")\'>Sửa</div></td>
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
                        'id1': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>

</html>