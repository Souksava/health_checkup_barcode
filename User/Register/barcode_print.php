<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST["btnPrint"])){
    $path = "../../";
    include ('../../oop/obj.php');
    $border = 5;//กำหนดความหน้าของเส้น Barcode
    $height = 80;//กำหนดความสูงของ Barcode
    $barcode = $_POST["barcode_id"];
    $generatorSVG = new Picqer\Barcode\BarcodeGeneratorJPG();
    file_put_contents('barcode/'.$barcode.'.jpg', $generatorSVG->getBarcode($barcode, $generatorSVG::TYPE_CODE_128,$border,$height));
    require_once '../../vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf([
        'format'        => "A4",
        'mode'              => 'utf-8',      
        'default_font_size' => 8,
        'margin_top' => 2,
        'margin_left' => 1.5,
        'margin_bottom' => 150,
        'default_font' => 'saysettha_ot'
    ]);
    $content = '<style>
        .paper{
            width: 53%;
            font-size: 10px;
        }
        .paper2{
            width: 100%;
        }
        .paper .col-2{
            width: 48%;
            height: 30mm;
            float: left;
            margin-left: 0.8mm;
        }
        .left-80{
            width: 77%;
            float: left;
        }
        .left{
            float: left;
            width: 22%;
            text-align: right;
        }
                </style>
    ';
    $content .='<div class="paper" >';
    $obj->print_barcode($_POST["print_barcode"]);
    while($row = mysqli_fetch_array($result_barcode,MYSQLI_ASSOC)){
    // $row = mysqli_fetch_array($result_barcode,MYSQLI_ASSOC);
    $content .='    
    <div class="col-2" align="center" style="padding-top: -9px;">
        <div class="paper2" style="font-size: 8px;">
            <div class="left-80">
                Reg: '.$row["barcode"].' 
            </div>
            <div class="left">
                No:'.$row["queue"].' &nbsp;
            </div>
        </div>
        <div class="paper2">
            <div class="left-80">
                '.$row["emp_name"].' '.$row["surname"].'
            </div>
            <div class="left">
            '.$row["pack_id"].' &nbsp;
            </div>
        </div>
        <br>
        <img src="barcode/'.$row["barcode"].'.jpg" style="width: 87%;height: 20px;padding: 2mm;padding-top: -3.5mm;" align="center" alt="">
        <div align="center" style="font-size: 8px;padding-top: -1.3mm;">
            '.$row["barcode"].'
        </div>
        <div align="left" style="font-size: 8px;padding-top: -1.3mm;">
            '.$row["company"].'<br>
            '.date("d/m/Y",strtotime($row["date"])).'
        </div>
    </div>
                ';
    }
    $content .='</div>';
    $mpdf->WriteHTML($content);
    $mpdf->Output("","I");
}

?>


</body>

</html>

