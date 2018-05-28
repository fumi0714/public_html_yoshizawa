<?php
	include '../session.php';
	include '../header.php';
	include '../menu.php';

    try {     
        $staff_code = $_POST['code'];

        include '../database.php';
        $sql = 'DELETE FROM mst_staff WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $dbh = null;

    } catch(Exception $e) {
        print('ただいま障害により大変ご迷惑をお掛けしております。');
        exit();
    }
?>

削除しました。<br /><br />
<a href="staff_list.php">戻る</a>

<?php
    include '../footer.php';
?>
