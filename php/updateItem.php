<?php 
    $id = $id1 =$malop = $tenlop = $namhoc = $hocky = $malop2 = $tenlop2 = $diachi2 = $lop2 = $tuoi2 = $gioitinh2  = "";
    require_once('dbhelp.php');
    if(!empty($_POST)) {
        if (isset($_POST['malop'])) {
            $malop = $_POST['malop'];
        }

        if (isset($_POST['tenlop'])) {
            $tenlop = $_POST['tenlop'];
        }

        if (isset($_POST['namhoc'])) {
            $namhoc = $_POST['namhoc'];
        }

        if (isset($_POST['hocky'])) {
            $hocky = $_POST['hocky'];
        }
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }

        if ($id1 != '') {
            $sql = "UPDATE Lop SET MaLop = '$malop', TenLop = '$tenlop', NamHoc = '$namhoc',HocKy = '$hocky' WHERE id = " . $id1;
        } else{
            $sql = "INSERT INTO Lop(MaLop,TenLop,NamHoc,HocKy)
                    VALUES ('$malop','$tenlop','$namhoc','$hocky')
                    ";
        }
        execute($sql);
    }
    $id = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM Lop WHERE id =". $id;
        $ncuList = executeResult($sql);
        if ($ncuList != null && count($ncuList) > 0) {
            $ncu = $ncuList[0];
            $malop2 = $ncu['MaLop'];
            $tenlop2 = $ncu['TenLop'];
            $namhoc2 = $ncu['NamHoc'];
            $hocky2 = $ncu['HocKy'];
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
                        <h1>Cap nhap danh sach lop</h1>
                        <form action="" method="post">
                            <div class="row" id="row2">
                                <div class="c-6 flex">
                                    <input type="text" name="id" value="<?=$id?>" hidden>
                                    <input type="text" name="masv" placeholder="Nhap Ma Lop" value="<?=$malop2?>">
                                    <input type="text" name="tensv" placeholder="Nhap Ten Lop" value="<?=$tenlop2?>">
                                </div>
                                <div class="c-6 flex">
                                    <input type="text" name="diachi" placeholder="Nhap Nam Hoc" value="<?=$namhoc2?>">
                                    <input type="text" name="tuoi" placeholder="Nhap Hoc Ky" value="<?=$hocky2?>">
                                </div>
                                <button class="btn btn-primary">Luu</button>
                            </div>   
                        </form>
                        <form action="" method="get" class="" style="
    top: 59%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Tên Lop can tim">
                            <button >Tìm kiếm</button></div>
                        </form>
                        <table class="table table-bordered table-hover" style="margin-top: 40px;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ma Lop</th>
                                    <th>Ten Lop</th>
                                    <th>Nam Hoc</th>
                                    <th>Hoc Ky</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM Lop WHERE TenLop LIKE "%'.$_GET['timkiem'].'%"';
} else {
    $sql = "SELECT * FROM Lop";
}
    $ncuList1 = executeResult($sql);

    foreach ($ncuList1 as $ncu1) {
        echo '<tr>
                <td>'.$ncu1['id'].'</td>
                <td>'.$ncu1['MaLop'].'</td>
                <td>'.$ncu1['TenLop'].'</td>
                <td>'.$ncu1['NamHoc'].'</td>
                <td>'.$ncu1['HocKy'].'</td>
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