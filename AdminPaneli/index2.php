<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>

body{
    
    position: relative;
    min-height: 100vh;
    width: 100%;
    
    background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

 

}
.renk{
  background-color: #E7E9BB;
  width: 100%;
  font-size: 18px;
  border-radius: 10px;
  border: 1px soid rgba(255, 255, 255, 0.3);
  box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
 
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 240px;
  background: #217fe7;
  padding: 6px 14px;
}
.sidebar .logo_content .logo{
  color: #fff;
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
}
.logo_content .logo i{
  font-size: 28px;
  margin-right: 5px;
}
.logo_content .logo .logo_name{
  font-size: 20px;
  font-weight: 400;
}
.sidebar #btn{
  position: absolute;
  color: #fff;
  left: 90%;
  top: 6px;
  font-size: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  transform: translateX(-50%);
}
.sidebar ul{
  margin-top: 20px;
}

.sidebar ul li{
  position: relative;
  height: 50px;
  width: 100%;
  margin: 0 5px;
  list-style: none ;
  line-height: 50px;
}

.sidebar ul li a{
  color: #fff;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  border-radius: 12px;
}


.sidebar ul li a q{
  height: 50px;
  min-width: 50px;
  border-radius: 12px;
  line-height: 50px;
  text-align: center;
}

.sidebar .profile_content{
  position: absolute;
  color: #fff;
  bottom: 0;
  left: 0;
}

.sidebar .profile_content .profile{
  position: relative;
  padding: 10px 6px;
  height: 60px;
}

.profile_content .profile .profile_details{
  display: flex;
  align-items: center;
}
.firstname{
  line-height: 40px;
  border-radius: 6px;
  padding:0 22px;
  font-size: 16px;
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 20px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}


</style>
<script src="js/popper.min.js" ></script> 
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/cozunurlukAyarlari.css" />
<script src="js/jquery-3.3.1.min.js" ></script> 
<script src="js/bootstrap.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="stil.css">

</head>
<body >



<div class="container">
<div class="row"> 
<div class="col-3">

<div class="sidebar">
  <div class="logo_content shadow">
    <div class="logo ">
    <i class='q bx bx-user  ms-2'></i>
      <div class="logo_name ms-3">Admin Paneli</div>
    </div>
    
  </div>
  <ul class="nav_list ">
    <li >
    <a href="http://localhost/AdminPaneli/index.php">
    <i class='bx bxs-rewind-circle' ></i>
      <span class="links_name ms-1 ">Çıkış</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/AdminPaneli/index1.php">
      <i class='bx bx-bar-chart-alt-2'></i>
      <span class="links_name ms-1">Formlar</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/AdminPaneli/index2.php">
      <i class='bx bx-grid' ></i>
      <span class="links_name ms-1">Tablolar</span>
      </a>
    </li>
  </ul>

</div>



</div>



<div class="col-9  mt-3">

<div class="row ">
<div class="col-12">
  <div class="container mt-3">
      <div class="row text-center justify-content-center">
        <table  class="content-table"  > 
          <tr class="fw-bold text-white bg-dark">
            <th  style="font-family: cursive;">S.NO</th>
            <th style="font-family: cursive;">İlan Başlık</th>
            <th style="font-family: cursive;">ilan Şirket İsmi</th>
            <th style="font-family: cursive;">ilan Açıklama</th>
            <th style="font-family: cursive;">ilan Çalışma Türü</th>
            <th style="font-family: cursive;">ilan Yer</th>
            <th style="font-family: cursive;" >İşlemler</th>
            <th style="font-family: cursive;" >İşlemler</th>
          </tr>
      </div>
    </div>    
      
      
          <?php
      
          $ilansor=$db->prepare("SELECT * from ilan");
          $ilansor->execute();
      
          $say=0;
      
          while($ilancek=$ilansor->fetch(PDO::FETCH_ASSOC)) { $say++?>
      
          <tr>
            <td class="fw-bold"><?php echo $say; ?></td>
            <td class="fw-bold"><?php echo $ilancek['ilanBaslik'] ?></td>
            <td class="fw-bold"><?php echo $ilancek['ilanSirketIsmi'] ?></td>
            <td class="fw-bold"><?php echo $ilancek['ilanAciklama'] ?></td>
            <td class="fw-bold"><?php echo $ilancek['ilanCalismaTuru'] ?></td>
            <td class="fw-bold"><?php echo $ilancek['ilanYer'] ?></td>
            <td align="center"><a href="duzenle1.php?ilanid=<?php echo $ilancek['ilanid'] ?>"><button class="fw-bold  rounded-2 shadow-lg  btn btn-light">Düzenle</button></td></a>
            <td align="center"><a href="islem1.php?ilanid=<?php echo $ilancek['ilanid'] ?>&ilansil=ok"><button class="fw-bold  rounded-2 shadow-lg  btn btn-light">Sil</button></td></a>
          </tr>
      
          <?php } ?>
      
        </table>
  </div>
  </div>


  
</div>          
</div>    
</div>  
      </body>
      </html>