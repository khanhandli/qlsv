<?php 

    if (isset($_POST['DN'])) {
        $user = "";
        $password1 = "";
        if ($_POST['user'] == NULL) {
            echo "user khong duoc de trong!";
            echo "</br>";
        } else {
            $user = $_POST['user'];
            echo "</br>";}

        if ($_POST['password1'] == NULL) {
            echo "Password khong duoc de trong!";
            echo "</br>";
        } else {
            $password1 = $_POST['password1'];
            echo "</br>";
        }
        if ($user == "" && $password1 == "") {
            echo "Khong duoc de trong";
            echo "</br>";

        } else {

        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "QLDT";      // Khai báo database
        // Kết nối database
        $connect = new mysqli($server, $username, $password, $dbname);
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if ($connect->connect_error) {
        die("Không kết nối :" . $conn->connect_error);
        exit();}
        // dang nhap
        $sql = "SELECT user,password FROM user";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $user1;
          $password2;
          $a = 'tc';
          $b = '';
        if ($a == 'tc') {
          while($row = mysqli_fetch_assoc($result)) {
                $user1 = $row["user"];
                $password2 = $row["password"];
            if ($user1 == $user && $password2 == $password1) {
                if (!$loggedIn) {
                    header("Location: php/updateNCC.php");
                    die();
            }
                $b = 'a';
            } else{
                $a = 'tc2';
            }        
        }
        }
        if ($a == 'tc2' && $b !== 'a') {
            
                $message = "Sai mat khau hoac user";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<center><a class='btn1 btn_a'href='javascript: history.go(-1)'>Trở lại</a></center>";
        }
        } else {
          echo "saii";
        }
        $connect->close();
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
    <link rel="stylesheet"
        href="./assets/fonts/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese"
        rel="stylesheet">
        <style>
            body,html {
                background-color: rgba(153, 255, 51, .5);
                height: 100%;
                width: 100%;
                overflow: hidden;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .form {
                border-radius:  6px;
                padding: 55px 30px;
                display:  flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #55acee;
            }

            .user,.password {
                display:  flex;
            }

            label {
                width: 100px;
            }
            h1 {
                color: white;
                font-family: courier,arial,helvetica;
            }

            input {
                outline: none;
                width: 250px;
                padding:  4px 0;
                margin: 2px 0;
            }

            .btn > button{
                margin-top: 20px;
                border:  none;
                outline: none;
                padding: 8px 20px;
                border:  1px solid #ccc;
                border-radius: 10px;
                cursor: pointer;
            }

            .btn > button:hover {
                opacity: 0.7;
            }

        </style>
</head>

<body>
    <form action="" method="post" class="form">
        <h1>Login Form</h1>
        <div class="user">
            <input type="text" name="user" id="user" placeholder="USER"> 
        </div>
        <div class="password">
            <input type="text" name="password1" id="password1" placeholder="PASSWORD"> 
        </div>
        <div class="btn">
            <button name="DN">Đăng Nhập</button>
        </div>
        
    </form>
</body>

</html>