<!-- Phần chi tiết nợ -->
<?php
$IDNoL = explode(",", $_GET["IDNoL"]);
$ThangNoL = explode(",", $_GET["ThangNoL"]);
$TienNoL = explode(",", $_GET["TienNoL"]);

$NoCT = array();
foreach ($IDNoL as $id => $key) {
  $NoCT[$key] = array(
    'ThangNo' => date("m/Y", strtotime($ThangNoL[$id])),
    // phai chuyen str to time truoc do date post dang dang chuoi ko phai lay tu SQL
   'TienNo' => number_format(abs($TienNoL[$id]), 0, '.', ','),
    // Lấy tuyệt đối trước, 0 thập phân,  chấm ngăn thập phân, phẩy phần nghìn
  );
}
?>
<!-- Phần chi tiết nợ -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.94">
  <title>Phiếu nước <?php echo $_GET["TenKH"] ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style >
.k57 {
  font-family: Tahoma; /* head ko khai thì dùng 1 loại*/
  font-size: 12px;
  line-height: 0.48; /* độ giãn dòng*/
  width: 57.5mm;
  height: 140mm;
  margin: 0.5mm;
  /* T-R-B-L height ra chieu dai in-sau canh giu bi zoom to hon giảm h lai*/
}
/* kho giay */
.container {
display: flex;
justify-content: center;
}
/* canh giua noi dung */
h1{
text-align: center;
  font-size: 13px;
  font-weight: bold;
  line-height: 1.5;
}
h2{
	text-align: center; /* canh dòng ko khai là left*/
  font-size: 14.5px;
 font-weight: bold;
 line-height: 0.3;
}
.fa {
  border: none;
  text-align: center;
  color: blue;
  font-size: 36px;
  background-color: white;
  margin-top: 10px;
  width: 100%;
}
.fa:active {
  color: aqua;
}
hr {
    border: none ;
    border-top: 1.5px dashed;
}
#qr-code {
  display: flex;
}
/* an nut in */
@media only print {
  .fa{
      visibility: hidden;
  }
}
</style>
</head>
<body onload="window.print()" onfocus="window.close()">
  <div class="container">
  <div class="k57">
<h1>DNTN CẤP NƯỚC HỮU HÒA<br>
 <i style ="font-weight: normal;">Hữu Đạo-Châu Thành-Tiền Giang</i><br>
Hotline: 0903541722<br>
---------***---------</h1>
<h2>PHIẾU GHI TIỀN NƯỚC</h2>
<p align="center">Kỳ: <?php echo $_GET["Ngayghi"] ?></p>
<canvas id="qr-code" style="margin: -6px auto;"></canvas>
<p align="center" style="font-size: 10px;">Quét mã QR bằng Zalo để tra cứu</p>

<p>Mã KH   : <?php echo $_GET["IDKH"] ?></p>
<b>Tên KH  : <?php echo $_GET["TenKH"] ?></b>
<p>Ấp      :  <?php echo $_GET["Ap"] ?></p>
 <hr/>
<p>Chỉ số mới : <b><?php echo $_GET["CSM"] ?></b></p>
<p>Chỉ số cũ  : <b><?php echo $_GET["CSC"] ?></b></p>
<p>Tiêu thụ   : <b><?php echo $_GET["Sokhoi"] ?></b> (m<sup>3</sup>)</p>
<p>Đơn giá    : <?php echo $_GET["Dongia"] ?></p>
<p>Tiền nước  : <b><?php echo $_GET["Thanhtien"] ?></b> (VNĐ)</p>
 <hr/>
<!-- Phần chi tiết nợ -->
      <?php
      if (!empty($_GET["IDNoL"])) {
        echo '<p>Tháng cũ còn nợ:</p>';
        foreach ($NoCT as $row) {
          echo ' <p >' . $row['ThangNo'] . ' :  ' . $row['TienNo'] . '</p>
                    ';
        }
        echo '<hr />';
      } else {
        echo "";
      }
      ?>

<!-- Phần chi tiết nợ -->
<p>Tổng tiền thu bao gồm dư nợ :</p>
      <?php
      if ($_GET["Tienthu"] < 0) {
        echo '<p align="center"><b>' . number_format(abs($_GET["Tienthu"]), 0, '.', ',') . '</b> (VNĐ)</p>';
        include('docso.php');
        echo '<i style="line-height: 1.2;">' . ucfirst(convert_number_to_words(abs($_GET["Tienthu"]))) . " đồng." . '</i>';
      } else {
        echo '<p align="center"><b>' . "Không thu" . '</b></p>';
      }
      ?>
    
  <hr/>
<p>Ngày tạo phiếu: <?php echo $_GET["Ngaytao"] ?></p>
<p>NV: <?php echo $_GET["NV"] ?></p>
<p>ĐTNV: <?php echo $_GET["DTNV"] ?></p>
<p>Ghi Ch&#250;: <?php echo $_GET["Ghichu"] ?></p>
 <hr/>
<p>Sacombank <b>070120000691</b></p>
<p>Tài khoản :   LE HOANG DUNG </p>
<p>Zalo Pay - MoMo : <b> 0938391704 </b></p>
<p>Nội dung, lời nhắn : <b> <?php echo $_GET["IDKH"] ?> </b> </p>
<p align="center"><i>**Chân thành cảm ơn quý khách**</i></p>
 <hr/>
<button class="fa fa-print" onclick="printpage()"></button>
<script>
   function printpage() {
     window.print()
          }
</script>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script>
  var qr;
  (function() {
                qr = new QRious({
                element: document.getElementById('qr-code'),
                size: 100,
                level: 'H',
                value: 'https://sieuthi.saku.vn/capnuoc/?search=<?php echo $_GET["IDKH"] ?>'
            });
        })();
</script>
</body>
</html>
