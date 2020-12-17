<?php 
    $id = $id1 =$masv = $tensv = $lop = $diachi = $gioitinh = $tuoi = $masv2 = $tensv2 = $diachi2 = $lop2 = $tuoi2 = $gioitinh2  = "";
    require_once('dbhelp.php');
    if(!empty($_POST)) {
        if (isset($_POST['masv'])) {
            $masv = $_POST['masv'];
        }

        if (isset($_POST['tensv'])) {
            $tensv = $_POST['tensv'];
        }

        if (isset($_POST['lop'])) {
            $lop = $_POST['lop'];
        }

        if (isset($_POST['diachi'])) {
            $diachi = $_POST['diachi'];
        }

        if (isset($_POST['gioitinh'])) {
            $gioitinh = $_POST['gioitinh'];
        }

        if (isset($_POST['tuoi'])) {
            $tuoi = $_POST['tuoi'];
        }
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }

        if ($id1 != '') {
            $sql = "UPDATE Sinhvien SET MaSV = '$masv', TenSV = '$tensv', Lop = '$lop',DiaChi = '$diachi', GioiTinh = '$gioitinh', Tuoi = '$tuoi' WHERE id = " . $id1;
        } else{
            $sql = "INSERT INTO Sinhvien(MaSV,TenSV,Lop,DiaChi,GioiTinh,Tuoi)
                    VALUES ('$masv','$tensv','$lop','$diachi','$gioitinh','$tuoi')
                    ";
        }
        execute($sql);
    }
    $id = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM Sinhvien WHERE id =". $id;
        $ncuList = executeResult($sql);
        if ($ncuList != null && count($ncuList) > 0) {
            $ncu = $ncuList[0];
            $masv2 = $ncu['MaSV'];
            $tensv2 = $ncu['TenSV'];
            $lop2 = $ncu['Lop'];
            $diachi2 = $ncu['DiaChi'];
            $gioitinh2 = $ncu['GioiTinh'];
            $tuoi2 =$ncu['Tuoi'];
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
        <header class="header">
            <h1>Quan ly sinh vien</h1>
            <a class="a" href="updateItem.php">Lop</a>
            <a class="a1" href="updateNCC.php">Sinh vien</a>
        </header>
        <div class="grid wide">
            <div class="row">
                <div class="c-3">
                
                </div>
                <div class="c-9" style = "margin-bottom: 80px">
                        <h1>Cap nhap danh sach sinh vien</h1>
                        <form action="" method="post">
                            <div class="row" id="row2">
                                <div class="c-6 flex">
                                    <input type="text" name="id" value="<?=$id?>" hidden>
                                    <input type="text" name="masv" placeholder="Nhap Ma Sinh Vien" value="<?=$masv2?>">
                                    <input type="text" name="tensv" placeholder="Nhap Ten Sinh Vien" value="<?=$tensv2?>">
                                    <input type="text" name="lop" placeholder="Nhap Lop" value="<?=$lop2?>">
                                </div>
                                <div class="c-6 flex">
                                    <input type="text" name="diachi" placeholder="Nhap dia chi" value="<?=$diachi2?>">
                                    <select name="gioitinh" id="">
                                        <option value="<?=$gioitinh2?>"><?=$gioitinh2?></option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nu">Nu</option>
                                    </select>
                                    <input type="text" name="tuoi" placeholder="Nhap Tuoi" value="<?=$tuoi2?>">
                                </div>
                                <button class="btn btn-primary">Luu</button>
                            </div>   
                        </form>
                        <form action="" method="get" class="" style="
    top: 59%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Tên sinh vien can tim">
                            <button >Tìm kiếm</button></div>
                        </form>
                        <table class="table table-bordered table-hover" style="margin-top: 40px;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ma SV</th>
                                    <th>Ten SV</th>
                                    <th>Lop</th>
                                    <th>Dia Chi</th>
                                    <th>Gioi Tinh</th>
                                    <th>Tuoi</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM Sinhvien WHERE TenSV LIKE "%'.$_GET['timkiem'].'%"';
} else {
    $sql = "SELECT * FROM Sinhvien";
}
    $ncuList1 = executeResult($sql);

    foreach ($ncuList1 as $ncu1) {
        echo '<tr>
                <td>'.$ncu1['id'].'</td>
                <td>'.$ncu1['MaSV'].'</td>
                <td>'.$ncu1['TenSV'].'</td>
                <td>'.$ncu1['Lop'].'</td>
                <td>'.$ncu1['DiaChi'].'</td>
                <td>'.$ncu1['GioiTinh'].'</td>
                <td>'.$ncu1['Tuoi'].'</td>
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