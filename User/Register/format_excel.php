<?php 

    if(isset($_GET['format_package'])){
        $output2 = ' 
        <table class="table" border="1" style="width: 450px;font-size: 18px;font-family: '."Phetsarath OT".';">
            <tr style="font-size: 18px;">
                <th style="width: 60px;">No.</th>
                <th style="width: 250px;">Description</th>
                <th style="width: 120px;">Sticker</th>
            </tr> 
        ';
        for($i=0;$i<=100;$i++){
        $output2 .='
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>  
        ';
        }
        $output2 .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition:attachment; filename=Form_Package_upload.xls");
        echo $output2;
    }
    if(isset($_GET['format_emp'])){
        $output = ' 
        <table class="table" border="1" style="width: 3000px;font-size: 18px;font-family: '."Phetsarath OT".';">
            <tr style="font-size: 18px;">
                <th style="width: 80px;">ລຳດັບ</th>
                <th style="width: 150px;">ບຣາໂຄດ</th>
                <th style="width: 150px;">ລະຫັດພະນັກງານ</th>
                <th style="width: 180px;">ຊື່</th>
                <th style="width: 150px;">ນາມສະກຸນ</th>
                <th style="width: 120px;">ວັນເດືອນປີເກີດ</th>
                <th style="width: 50px;">ອາຍຸ</th>
                <th style="width: 70px;">ເພດ</th>
                <th style="width: 280px;">ບໍລິສັດ</th>
                <th style="width: 250px;">ສາຂາ</th>
                <th style="width: 200px;">ພະແນກ</th>
                <th style="width: 180px;">ເບີໂທລະສັບ</th>
                <th style="width: 130px;">ສະຖານະຄອບຄົວ</th>
                <th style="width: 100px;">ສັນຊາດ</th>
                <th style="width: 120px;">ຊົນເຜົ່າ</th>
                <th style="width: 100px;">ສາສະໜາ</th>
                <th style="width: 150px;">ອາຊີບ</th>
                <th style="width: 150px;">ເຮືອກເລກທີ</th>
                <th style="width: 180px;">ບ້ານຢູ່ປັດຈຸບັນ</th>
                <th style="width: 180px;">ເມືອງ</th>
                <th style="width: 180px;">ແຂວງ</th>
            </tr> 
        ';
        for($i=0;$i<=100;$i++){
        $output .='
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>  
        ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition:attachment; filename=Form_Employee_upload.xls");
        echo $output;
    } 
   
?>