



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
    						    <input type="text" name="mamh" id="mamh">
    						</div>
    						<div class="form__left-input">
	    						<label for="tenmh">Ten MH</label>
	    						<input type="text" name="tenmh" id="tenmh">
 							</div>
    						<div class="form__left-input">

	    						<label for="mansx">Ma NSX</label>
	    						<input type="text" name="mansx" id="mansx">
							</div>
    						<div class="form__left-input">

	    						<label for="gianhap">Giá nhập</label>
	    						<input type="text" name="gianhap" id="gianhap">
    						</div>
                            <div class="form__left-input">
                                <label for = "start" >Ngày cập nhập</label>
                                <input type="date" id="start" name="ngaycapnhap"
                                           min="2010-01-01" max="2020-12-31">
                            </div>
    					</div>
    					<div class="form__right c-6">
                            <div class="form__right-input">
                                <label for="tennsx">Ten NSX</label>
                                <input type="text" name="tennsx" id="tennsx">
                            </div>

    						<div class="form__right-input">
    							<label for="dacdiem">Đặc điểm</label>
    						<select name="dacdiem" id="dacdiem">
    							<option value="Apple iPhone XS max">Apple iPhone XS max</option>
    							<option value="Apple iPhone XS max">Apple iPhone XS max</option>
    							<option value="Apple iPhone XS max">Apple iPhone XS max</option>
    						</select>
    						</div>

    						<div class="form__right-input">
    							<label for="soluong">Số lượng</label>
    							<input type="text" name="soluong" id="soluong">
    						</div>
                            <div class="form__right-input">
                                <label for="gia">Giá xuất</label>
                                <input type="text" name="gia" id="gia">
                            </div>
    						<div class="btn__submit">
    							<button type="button" class="btn btn-primary">Lưu</button>
    						</div>

    					</div>
    				</form>
    			</div>	
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
    						<tr>
        						<td>STT</td>
        						<td>Ma nha cung ung</td>
        						<td>Ten nha cung ung</td>
        						<td>Dia chi</td>
        						<td>Dien thoai</td>
        						<td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
    					   </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>
                           <tr>
                                <td>STT</td>
                                <td>Ma nha cung ung</td>
                                <td>Ten nha cung ung</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                                <td>Dia chi</td>
                                <td>Dien thoai</td>
                                <td>Email</td>
                           </tr>

    					
    					</tbody>
    				</table>
    			</div>				
    		</div>
    	</div>
    </div>
    <script type="text/javascript" src="./assets/js/test.js"></script>
</body>

</html>