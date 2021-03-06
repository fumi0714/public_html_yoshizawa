<?php
	include '../session_guest.php';
	include '../header.php';
	include '../menu_guest.php';

	$flg = true; //エラーの場合はfalse
	$post = sanitize($_POST);

	$onamae = $post['onamae'];
	$email = $post['email'];
	$postal1 = $post['postal1'];
	$postal2 = $post['postal2'];
	$address = $post['address'];
	$tel = $post['tel'];

	if ($onamae == '') {
		print 'お名前が入力されていません。<br /><br />';
		$flg = false;
	} else {
		print 'お名前 '.$onamae.'<br /><br />';
	}

	if (preg_match('/^[\w\-\.]+\@[\w\-\.]+\.([a-z]+)+$/', $email) == 0) {
		print 'メールアドレスを正確に入力してください。<br /><br />';
		$flg = false;
	} else {
		print 'メールアドレス '.$email.'<br /><br />';
	}

	if (preg_match('/^[0-9]+$/', $postal1) == 0) {
		print '郵便番号は半角数字で入力してください。<br /><br />';
		$flg = false;
	} elseif (preg_match('/^[0-9]+$/', $postal2) == 0) {
		print '郵便番号は半角数字で入力してください。<br /><br />';
		$flg = false;
	} else {
		print '郵便番号 '.$postal1.'-'.$postal2.'<br /><br />';
	}

	if ($address == '') {
		print '住所が入力されていません。<br /><br />';
		$flg = false;
	} else {
		print '住所 '.$address.'<br /><br />';
	}

	if (preg_match('/^\d{2,5}-?\d{2,5}-?\d{4,5}+$/', $tel) == 0) {
		print '電話番号を正確に入力してください。<br /><br />';
		$flg = false;
	} else {
		print '電話番号 '.$tel.'<br /><br />';
	}

	if ($flg) {
?>

<form method="post" action="shop_form_done.php">
<input type="hidden" name="onamae" value="<?=$onamae?>">
<input type="hidden" name="email" value="<?=$email?>">
<input type="hidden" name="postal1" value="<?=$postal1?>">
<input type="hidden" name="postal2" value="<?=$postal2?>">
<input type="hidden" name="address" value="<?=$address?>">
<input type="hidden" name="tel" value="<?=$tel?>">
<input type="submit" value="OK"><br />
</form>

<?php
	} else {
?>

<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

<?php
	}

	include '../footer.php';
?>