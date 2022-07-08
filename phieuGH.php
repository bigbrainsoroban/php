<?php
$IDCTL = explode(",", $_GET["IDCTL"]);
$HangL = explode(",", $_GET["HangL"]);
$SLL = explode(",", $_GET["SLL"]);
$GiaL = explode(",", $_GET["GiaL"]);
$TienL = explode(",", $_GET["TienL"]);
$Donhang = array();
foreach ($IDCTL as $id => $key) {
    $Donhang[$key] = array(
        'Hang' => $HangL[$id],
        'SL' => number_format($SLL[$id]),
        'Gia' => number_format($GiaL[$id] * 0.001, 1),
        'Tien' => number_format($TienL[$id] * 0.001),
    );
}

$IDCTVL = explode(",", $_GET["IDCTVL"]);
$TenvoL = explode(",", $_GET["TenvoL"]);
$TraL = explode(",", $_GET["TraL"]);
$TonL = explode(",", $_GET["TonL"]);
$TongtonL = explode(",", $_GET["TongtonL"]);
$VotonCT = array();
if (!empty($_GET["IDCTVL"])) {
    foreach ($IDCTVL as $id => $key) {
        $VotonCT[$key] = array(
            'Tenvo' => $TenvoL[$id],
            'Tra' => number_format($TraL[$id]),
            'Ton' => number_format($TonL[$id]),
            'Tongton' => number_format($TongtonL[$id]),
        );
    }
}
?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phiếu giao hàng <?php echo $_GET["TenKH"] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <style type="text/css">
        .k57 {
            font-family: Tahoma;
            /* head ko khai thì dùng 1 loại*/
            font-size: 12px;
            line-height: 0.48;
            /* độ giãn dòng*/
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

        @import url('https://themes.googleusercontent.com/fonts/css?kit=1ZpBgFLQKwrA6c9iLOONVLLukJZ0tncL9DlcRrH6sPk');

        ol {
            margin: 0;
            padding: 0
        }

        table td,
        table th {
            padding: 0
        }

        .c30 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 96pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c16 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 27.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c2 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 37.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c21 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 39.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c12 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 72pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c14 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 19.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c0 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 24.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c1 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 23.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c20 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 76.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c19 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 64.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c3 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 6.5pt;
            font-family: "Tahoma";
            font-style: normal
        }

        .c24 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.5;
            orphans: 2;
            widows: 2;
            text-align: center
        }

        .c26 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.5;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c15 {
            color: #000000;
            font-weight: 400;
            font-size: 7.5pt;
            font-family: "Tahoma"
        }

        .c39 {
            background-color: #ffffff;
            font-size: 10pt;
            font-family: "Tahoma";
            font-weight: 700
        }

        .c8 {
            color: #000000;
            font-weight: 400;
            font-size: 8pt;
            font-family: "Tahoma"
        }

        .c11 {
            color: #000000;
            font-weight: 700;
            font-size: 8pt;
            font-family: "Tahoma"
        }

        .c28 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c10 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: center
        }

        .c22 {
            color: #000000;
            font-weight: 700;
            font-size: 5.5pt;
            font-family: "Tahoma"
        }

        .c33 {
            color: #000000;
            font-weight: 700;
            font-size: 7.5pt;
            font-family: "Tahoma"
        }

        .c6 {
            font-size: 6pt;
            font-family: "Tahoma";
            color: #9900ff;
            font-weight: 400
        }

        .c4 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c23 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: right
        }

        .c25 {
            background-color: #ffffff;
            max-width: 161.6pt;
            padding: 0pt 0pt 0pt 0pt
        }

        .c37 {
            font-size: 7pt;
            font-family: "Tahoma";
            font-weight: 400
        }

        .c38 {
            font-weight: 400;
            font-size: 10pt;
            font-family: "Tahoma"
        }

        .c31 {
            font-size: 8pt;
            font-family: "Tahoma";
            font-weight: 400
        }

        .c32 {
            font-size: 6.5pt;
            font-family: "Tahoma";
            font-weight: 400
        }

        .c7 {
            text-decoration: none;
            vertical-align: baseline;
            font-style: normal
        }

        .c29 {
            font-size: 8pt;
            font-family: "Tahoma";
            font-weight: 700
        }

        .c40 {
            font-weight: 700;
            font-size: 6pt;
            font-family: "Tahoma"
        }

        .c9 {
            font-size: 6pt;
            font-family: "Tahoma";
            font-weight: 400
        }

        .c17 {
            background-color: #ffffff;
            color: #008000
        }

        .c34 {
            color: #000000
        }

        .c35 {
            height: 13.1pt
        }

        .c18 {
            height: 0pt
        }

        .c5 {
            height: 18pt
        }

        .c27 {
            height: 4.5pt
        }

        .c36 {
            height: 13.4pt
        }

        .c13 {
            height: 11pt
        }

        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .novoCT {
            <?php
            // if ($_GET["Novo"] == "true") {
            // "&Novo=",IF(OR([_THISROW].[IDKH].[Tổng vỏ bình nước]>0,[_THISROW].[IDKH].[Tổng vỏ tồn bình gas]>0),"true","false"),
            if (!empty($_GET["IDCTVL"])) {
                echo " display: inline;";
            } else {
                echo " display: none;";
            }
            ?>
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
            border: none;
            border-top: 1.5px dashed;
        }

        #qr-code {
            display: flex;
        }

        /* an nut in */
        @media only print {
            .fa {
                visibility: hidden;
            }
        }
    </style>
</head>

 <body onload="window.print()" onfocus="window.close()"> 


    <div class="container">
        <div class="k57">
            <p class="c26"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 215.43px; height: 78.67px;"><img alt="" src="image1.png" style="width: 215.43px; height: 78.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p>
            <p class="c24"><span class="c39">PHIẾU GIAO HÀNG</span></p>
            <p class="c24"><span class="c37">Ngày: </span><span class="c37"><?php echo $_GET["Ngaygiao"] ?></span></p>
            <p class="c26"><span class="c29">Khách hàng : <?php echo $_GET["TenKH"] ?></span></p>
            <p class="c26"><span class="c7 c8">Địa chỉ: <?php echo $_GET["Diachi"] ?></span></p>
            <p class="c26"><span class="c31">Điện thoại : <?php echo $_GET["Phone"] ?></span></p><a id="t.b1b674068ef6c3617c2be1fedd6078d45447b5b8"></a><a id="t.0"></a>
            <table class="c28">
                <tbody>
                    <tr class="c35">
                        <td class="c20" colspan="1" rowspan="1">
                            <p class="c10"><span class="c3">Hàng</span></p>
                        </td>
                        <td class="c14" colspan="1" rowspan="1">
                            <p class="c10"><span class="c3">SL</span></p>
                        </td>
                        <td class="c0" colspan="1" rowspan="1">
                            <p class="c10"><span class="c3">Giá </span></p>
                        </td>
                        <td class="c21" colspan="1" rowspan="1">
                            <p class="c10"><span class="c3">Tiền</span></p>
                        </td>
                    </tr>
                    <?php
                    foreach ($Donhang as $row) {
                        echo '
                    <tr class="c36">
                        <td class="c20" colspan="1" rowspan="1">
                            <p class="c4"><span class="c32">' . $row['Hang'] . '</span></p>
                        </td>
                        <td class="c14" colspan="1" rowspan="1">
                            <p class="c4"><span class="c15 c7">' . $row['SL'] . '</span></p>
                        </td>
                        <td class="c0" colspan="1" rowspan="1">
                            <p class="c23"><span class="c15 c7">' . $row['Gia'] . '</span></p>
                        </td>
                        <td class="c21" colspan="1" rowspan="1">
                            <p class="c23"><span class="c15 c7">' . $row['Tien'] . '</span></p>
                        </td>
                    </tr>';
                    } ?>
                    <tr class="c27">
                        <td class="c30" colspan="2" rowspan="1">
                            <p class="c10"><span class="c11 c7">Tổng đơn</span></p>
                        </td>
                        <td class="c19" colspan="2" rowspan="1">
                            <p class="c23"><span class="c11 c7"><?php echo number_format($_GET["Tongdon"]) ?></span></p>
                        </td>
                    </tr>
                    <tr class="c5">
                        <td class="c30" colspan="2" rowspan="1">
                            <p class="c10"><span class="c11 c7">Cộng nợ cũ</span></p>
                        </td>
                        <td class="c19" colspan="2" rowspan="1">
                            <p class="c23"><span class="c8 c7"><?php echo number_format($_GET["Congnocu"]) ?></span></p>
                        </td>
                    </tr>
                    <tr class="c5">
                        <td class="c30" colspan="2" rowspan="1">
                            <p class="c10"><span class="c11 c7">Tiền trả</span></p>
                        </td>
                        <td class="c19" colspan="2" rowspan="1">
                            <p class="c23"><span class="c8 c7"><?php echo number_format($_GET["Tientra"]) ?></span></p>
                        </td>
                    </tr>
                    <tr class="c5">
                        <td class="c30" colspan="2" rowspan="1">
                            <p class="c10"><span class="c11 c7">Tổng dư nợ</span></p>
                        </td>
                        <td class="c19" colspan="2" rowspan="1">
                            <p class="c23"><span class="c11 c7"><?php echo number_format($_GET["Tongduno"]) ?></span></p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="novoCT">
                <p class="c26"><span class="c7 c11">CHI TIẾT VỎ NỢ</span></p><a id="t.3ecc44b49947270706d2a4ed82330787ddd112c3"></a><a id="t.1"></a>
                <table class="c28">
                    <tbody>
                        <tr class="c18">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c10"><span class="c3">Tên vỏ</span></p>
                            </td>
                            <td class="c1" colspan="1" rowspan="1">
                                <p class="c10"><span class="c3">Trả</span></p>
                            </td>
                            <td class="c16" colspan="1" rowspan="1">
                                <p class="c10"><span class="c3">Tồn</span></p>
                            </td>
                            <td class="c2" colspan="1" rowspan="1">
                                <p class="c10"><span class="c7 c22">Tổng tồn</span></p>
                            </td>
                        </tr>
                        <?php
                        foreach ($VotonCT as $row) {
                            echo '
                        <tr class="c18">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c4"><span class="c9">' . $row['Tenvo'] . '</span></p>
                            </td>
                            <td class="c1" colspan="1" rowspan="1">
                                <p class="c10"><span class="c15 c7">' . $row['Tra'] . '</span></p>
                            </td>
                            <td class="c16" colspan="1" rowspan="1">
                                <p class="c10"><span class="c15 c7">' . $row['Ton'] . '</span></p>
                            </td>
                            <td class="c2" colspan="1" rowspan="1">
                                <p class="c23"><span class="c7 c33">' . $row['Tongton'] . '</span></p>
                            </td>
                            </tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
            <p class="c26"><span class="c8 c7">Người giao: <?php echo $_GET["Nguoigiao"] ?></span></p>
            <p class="c26"><span class="c8 c7">Ghi chú: <?php echo $_GET["Ghichu"] ?></span></p>
            <p class="c26"><span class="c11 c7">ZALO QR TRA LỊCH SỬ MUA HÀNG</span></p>
            <p class="c24"><canvas id="qr-code" style="margin: -2px auto;"></canvas></p>
            <p class="c24"><span class="c15 c7">sieuthi.saku.vn/hoangdung/?search=<?php echo $_GET["Web"] ?></span></p>
            <p class="c24"><span class="c31">&nbsp;**Chân thành cảm ơn quý khách**</span></p>
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
                value: '<?php echo $_GET["QR"] ?>'
            });
        })();
    </script>
</body>

</html>
