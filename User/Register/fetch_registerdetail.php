<?php
  $path="../../";
  include (''.$path.'oop/obj.php');
  $output = '';
 if(isset($_POST["query"]))
{
   $obj->select_registerdetail($_POST['query']);
   $_POST['query'];
}
else
{
   $obj->select_registerdetail("");
}
if(mysqli_num_rows($result_registerdetail) > 0)
{
 $output .= '
  <div class="table-responsive">
  <table class="table-bordered" style="width: 650px;text-align: center;">
    <tr style="font-size: 18px;">
        <th style="width: 30px;">No.</th>
        <th style="width: 70px;">Package</th>
        <th style="width: 150px;">Descript</th>
    </tr>
 ';
 $no_ = 0;
foreach($result_registerdetail as $row){
$no_ += 1;
  $output .= '
    <tr>
        <td>'.$no_.'</td>
        <td>'.$row['pack_id'].'</td>
        <td>'.$row['pack_name'].'</td>
    </tr>
  ';
 }
 $output .='
   </table>
</div>
  <div align="right" style="color: red;">
      <h3>ລວມ: '.$no_.' ລາຍການ</h3>
  </div>
 ';
 echo $output;
}
else
{
 echo '<br>
 <hr size="1" width="90%">
<p align="center">ບໍ່ມີຂໍ້ມູນ</p>
<hr size="1" width="90%">
 ';
}
?>
