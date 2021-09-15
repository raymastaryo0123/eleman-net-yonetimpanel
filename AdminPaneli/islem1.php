<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {

   $kaydet=$db->prepare("INSERT into ilan set
		ilanBaslik=:ilanBaslik,
		ilanSirketIsmi=:ilanSirketIsmi,
		ilanAciklama=:ilanAciklama,
		ilanCalismaTuru=:ilanCalismaTuru,
		ilanYer=:ilanYer
		");

   $insert=$kaydet->execute(array(

		'ilanBaslik' => $_POST['ilanBaslik'],
	    'ilanSirketIsmi' => $_POST['ilanSirketIsmi'],
		'ilanAciklama' => $_POST['ilanAciklama'],
	    'ilanCalismaTuru' => $_POST['ilanCalismaTuru'],
	    'ilanYer' => $_POST['ilanYer']
	));

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	
	$ilanid=$_POST['ilanid'];

	$kaydet=$db->prepare("UPDATE ilan set
		ilanBaslik=:ilanBaslik,
		ilanSirketIsmi=:ilanSirketIsmi,
		ilanAciklama=:ilanAciklama,
		ilanCalismaTuru=:ilanCalismaTuru,
		ilanYer=:ilanYer
		where ilanid={$_POST['ilanid']}
		");

	$insert=$kaydet->execute(array(

		'ilanBaslik' => $_POST['ilanBaslik'],
	    'ilanSirketIsmi' => $_POST['ilanSirketIsmi'],
		'ilanAciklama' => $_POST['ilanAciklama'],
	    'ilanCalismaTuru' => $_POST['ilanCalismaTuru'],
	    'ilanYer' => $_POST['ilanYer']
	));
		if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle1.php?ilanid=$ilanid");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle1.php?ilanid=$ilanid");
		exit;
	}

}

if ($_GET['ilansil']=="ok") {
	

	$sil=$db->prepare("DELETE from ilan where ilanid=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['ilanid']
	));
	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index2.php?");
		exit;
	}
}




?>