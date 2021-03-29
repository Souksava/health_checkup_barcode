<?php
if(isset($_POST["btnPrint"])){
    $path = "../../";
    include ('../../oop/obj.php');
    $border = 1;//กำหนดความหน้าของเส้น Barcode
    $height = 80;//กำหนดความสูงของ Barcode
    $barcode = $_POST["barcode_id"];
    $generatorSVG = new Picqer\Barcode\BarcodeGeneratorJPG();
    file_put_contents('barcode/'.$barcode.'.jpg', $generatorSVG->getBarcode($barcode, $generatorSVG::TYPE_CODE_128,$border,$height));
    require_once '../../vendor/autoload.php';
    //158
    $mpdf = new \Mpdf\Mpdf([
        'format' => [105,23],
        'mode' => 'utf-8',      
        'default_font_size' => 8,
        'margin_top' => 2.2,
        'margin_left' => 2.5,
        'margin_bottom' => 0,
        'default_font' => 'saysettha_ot'
    ]);
    $content = '<style>
        .paper{
            width: 100%;
            float: left;
            font-size: 8px;
        }
        .col-50{
            width: 49%;
            float: left;
        }
        .col2-50{
            width: 65%;
            float: left;
        }
        .col3-50{
            width: 34%;
            float: left;
        }
                </style>
    ';
    $content .='<div class="paper" >          
    ';
    $obj->print_barcode($_POST["print_barcode"]);
    while($row = mysqli_fetch_array($result_barcode,MYSQLI_ASSOC)){
    $content .='    
    <div class="col-50">
        <div class="col2-50">
        &nbsp;&nbsp;Reg: 1234567890 <br>
        &nbsp;&nbsp;ທ່ານກອງມະນີ ມະນີຈັນ
        </div>
        <div class="col3-50" align="right">
            No. '.$row["queue"].'  &nbsp; 
            '.$row["pack_id"].' &nbsp;
        </div>
        <div align="center">
            <img src="barcode/'.$row["barcode"].'.jpg" style="width: 87%;height: 20px;" alt="">
        </div>
        <div align="center">
            '.$row["barcode"].'
        </div>
        <div align="left">
        &nbsp;&nbsp;'.$row["company"].'<br>
        &nbsp;&nbsp;'.$row["date"].'
        </div>
    </div>
                ';
    }
    $content .=' 
    </div>
    ';
    $mpdf->WriteHTML($content);
    $mpdf->Output("","I");
}
?>
    
