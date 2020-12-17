<?php 
	require_once('dbhelp.php');
	if (isset($_POST['id'])) {
		$manv = $_POST['id'];
		$sql = 'DELETE FROM Sinhvien WHERE id = ' . $manv;
		execute($sql);

		echo "Xoa thanh cong";
	}

	if (isset($_POST['id1'])) {
		$manv = $_POST['id1'];
		$sql = 'DELETE FROM Lop WHERE id = ' . $manv;
		execute($sql);

		echo "Xoa thanh cong";
	}
 ?>