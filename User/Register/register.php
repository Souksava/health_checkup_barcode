<?php
  $title = "ລົງທະບຽນ";
  $path = "../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<!-- employee -->
<form action="register" method="POST" id="import_emp" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalimpEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ນຳເຂົ້າຂໍ້ມູນພະນັກງານ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຟາຍນຳເຂົ້າ</label>
                            <input type="file" name="emp_file" id="emp_file" class="form-control">
                            <input type="hidden" name="upload_emp_id" id="upload_emp_id">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="emp_Update" id="btnload_import_emp" class="btn btn-outline-primary"
                        onclick="">
                        ນຳເຂົ້າຂໍ້ມູນ
                        <span class="" id="load_import_emp"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_register">
    <div class="modal fade" id="exampleModalRegisterEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົງທະບຽນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ລຳດັບຄິວເລກທີ: <lable class="queue"></lable>
                    </p>
                    <input type="hidden" name="queue" id="queue" class="queue">
                    <input type="hidden" name="reg_id" id="reg_id">
                    <input type="hidden" name="register_barcode" id="register_barcode">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnRegister" id="btnRegister" class="btn btn-outline-primary"
                        onclick="">
                        ລົງທະບຽນ
                        <span class="" id="load_Regiser"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_delete_emp">
    <div class="modal fade" id="exampleModalDeleteEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບຂໍ້ມູນພະນັກງານ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລົບຂໍ້ມູນພະນັກງານ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="emp_id_del" id="emp_id_del">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="del_emp" id="btnDel_emp" class="btn btn-outline-danger" onclick="">
                        ລົບ
                        <span class="" id="load_Del_emp"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="formSaveEmp">
    <div class="modal fade" id="exampleModalUpdateEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນພະນັກງານ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ລະຫັດພະນັກງານ</label>
                            <input type="text" name="emp_id" id="emp_id" placeholder="ລະຫັດພະນັກງານ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຊື່ພະນັກງານ</label>
                            <input type="text" name="emp_name" id="emp_name" placeholder="ຊື່ພະນັກງານ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ນາມສະກຸນ</label>
                            <input type="text" name="surname" id="surname" placeholder="ນາມສະກຸນ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ວັນເດືອນປີເກີດ</label>
                            <input type="date" name="dob" id="dob">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ອາຍຸ</label>
                            <input type="text" name="age" id="age" placeholder="ອາຍຸ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ເພດ</label>
                            <select name="gender" id="gender">
                                <option value="">ເລືອກເພດ</option>
                                <option value="ຍິງ">ຍິງ</option>
                                <option value="ຊາຍ">ຊາຍ</option>
                            </select>
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ບໍລິສັດ</label>
                            <input type="text" name="company" id="company" placeholder="ບໍລິສັດ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສາຂາ</label>
                            <input type="text" name="branch" id="branch" placeholder="ສາຂາ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ພະແນກ</label>
                            <input type="text" name="department" id="department" placeholder="ພະແນກ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ເບີໂທລະສັບ</label>
                            <input type="text" name="tel" id="tel" placeholder="ເບີໂທລະສັບ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສະຖານະຄອບຄົວ</label>
                            <input type="text" name="status" id="status" placeholder="ສະຖານະຄອບຄົວ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສັນຊາດ</label>
                            <input type="text" name="nation" id="nation" placeholder="ສັນຊາດ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຊົນເຜົ່າ</label>
                            <input type="text" name="ethnic" id="ethnic" placeholder="ຊົນເຜົ່າ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ສາສະໜາ</label>
                            <input type="text" name="religion" id="religion" placeholder="ສາສະໜາ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ອາຊີບ</label>
                            <input type="text" name="job" id="job" placeholder="ອາຊີບ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ເຮືອກເລກທີ</label>
                            <input type="text" name="home_no" id="home_no" placeholder="ເຮືອກເລກທີ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ບ້ານຢູ່ປັດຈຸບັນ</label>
                            <input type="text" name="village" id="village" placeholder="ບ້ານຢູ່ປັດຈຸບັນ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ເມືອງ</label>
                            <input type="text" name="district" id="district" placeholder="ເມືອງ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ແຂວງ</label>
                            <input type="text" name="province" id="province" placeholder="ແຂວງ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="Com_Update" id="btnSave" class="btn btn-outline-success" onclick="">
                        ເພີ່ມພະນັກງານ
                        <span class="" id="load_save"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Employee -->

<!-- Package -->
<form action="register" method="POST" id="delete_info_package">
    <div class="modal fade" id="exampleModalDelete_ID_Package" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບຂໍ້ມູນແພັກເກັດການກວດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລົບຂໍ້ມູນແພັກເກັດການກວດ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="delete_package" id="delete_package">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnDelete_info_package" id="btnDelete_info_package"
                        class="btn btn-outline-danger" onclick="">
                        ລົບ
                        <span class="" id="load_Delete_info_package"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="resgister" method="POST" id="form_package_add_more">
    <div class="modal fade" id="exampleModalAdd_more" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລາຍການກວດເພີ່ມ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການເພີ່ມແພັກເກັດເພີ່ມຕື່ມ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="package_add_more" id="package_add_more">
                    <input type="hidden" name="package_add_more_des" id="package_add_more_des">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btn_package_add_more" id="btn_package_add_more"
                        class="btn btn-outline-primary" onclick="">
                        ເພີ່ມ
                        <span class="" id="load_package_add_more"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_package_add_list">
    <div class="modal fade" id="exampleModalAdd_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມລາຍການກວດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການເພີ່ມເຂົ້າໃນການກະກຽມແພັກເກັດເຂົ້າ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="package_add_list" id="package_add_list">
                    <input type="hidden" name="package_add_list_des" id="package_add_list_des">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnpackage_add_list" id="btnpackage_add_list"
                        class="btn btn-outline-primary" onclick="">
                        ເພີ່ມ
                        <span class="" id="load_package_add_list"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="import_package" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalimpPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ນຳເຂົ້າຂໍ້ມູນແພັກເກັດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຟາຍນຳເຂົ້າ</label>
                            <input type="file" name="package_file" id="package_file" class="form-control">
                            <input type="hidden" name="upload_pack_id" id="upload_pack_id">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btn_load_package" id="btn_load_package" class="btn btn-outline-primary"
                        onclick="">
                        ນຳເຂົ້າຂໍ້ມູນ
                        <span class="" id="load_package"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Package -->

<!-- Company Package -->
<div class="modal fade" id="exampleModalDeletePackageCom" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ລົບຂໍ້ມູນແພັກເກັດການກວດ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p align="center">ທ່ານຕ້ອງການລົບແພັກເກັດລົງທະບຽນ ຫຼື ບໍ່ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                <button type="submit" name="Com_Update" id="Com_Update" class="btn btn-outline-danger" onclick="">
                    ລົບ
                    <span class="" id="load_save"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End Company Package -->
<!-- Register -->
<form action="register" method="POST" id="form_delete_register">
    <div class="modal fade" id="exampleModalDeleteRegiter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບລາຍການລົງທະບຽນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລົບລາຍການລົງທະບຽນ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="delete_register" id="delete_register">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btndelete_register" id="btndelete_register"
                        class="btn btn-outline-danger" onclick="">
                        ລົບ
                        <span class="" id="load_delete_register"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="printbarcode" method="POST" target="_blank">
    <div class="modal fade" id="exampleModalPrint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ພິມບາໂຄດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການພິມບຣາໂຄດ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="print_barcode" id="print_barcode">
                    <input type="hidden" name="barcode_id" id="barcode_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnPrint" id="btnPrint" class="btn btn-outline-primary" onclick="">
                        ພິມບຣາໂຄດ
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Register -->
<!-- List -->
<form action="register" method="POST" id="form_del_more">
    <div class="modal fade" id="exampleModalDeleteList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບລາຍການແພັກເກັດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລົບລາຍການແພັກເກັດເພີ່ມເຕີມ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="del_more" id="del_more">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btndel_more" id="btndel_more" class="btn btn-outline-danger" onclick="">
                        ລົບ
                        <span class="" id="load_del_more"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_clear_more">
    <div class="modal fade" id="exampleModalCelar_More" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບລາຍການແພັກເກັດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລ້າງລາຍການແພັກເກັດເພີ່ມເຕີມ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="clear_more" id="clear_more">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnclear_more" id="btnclear_more" class="btn btn-outline-danger"
                        onclick="">
                        ລົບ
                        <span class="" id="load_clear_more"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_del_list">
    <div class="modal fade" id="exampleModalDelSTBPackage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບແພັກເກັດກະກຽມ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລົບລາຍການແພັກເກັດກະກຽມ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="del_list" id="del_list">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btndel_list" id="btndel_list" class="btn btn-outline-danger" onclick="">
                        ລົບ
                        <span class="" id="load_del_list"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="register" method="POST" id="form_clear_list">
    <div class="modal fade" id="exampleModalCelar_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ລົບແພັກເກັດກະກຽມ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p align="center">ທ່ານຕ້ອງການລ້າງລາຍການແພັກເກັດກະກຽມ ຫຼື ບໍ່ ?</p>
                    <input type="hidden" name="clear_list">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnclear_list" id="btnclear_list" class="btn btn-outline-danger"
                        onclick="">
                        ລົບ
                        <span class="" id="load_clear_list"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End List -->

<!-- End Modal -->
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="formatexcel?format_emp" target="_blank">ຂໍ້ມູນພະນັກງານ</a>
                    </div>
                    <div class="col-xs-12 col-sm-6" align="right">
                        <a href="#" data-toggle="modal" data-target="#exampleModalimpEmp">ນຳເຂົ້າຂໍ້ມູນ</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" name="search_company" id="search_company" class="form-control"
                        placeholder="ບໍລິສັດ" aria-describedby="button-addon2">
                    <input type="text" name="emp_search" id="emp_search" class="form-control"
                        placeholder="ລະຫັດ ພ/ງ, ຊື່, ອາຍຸ, ບໍລິສັດ" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalUpdateEmp"
                        type="button" id="button-addon2">
                        ເພີ່ມ ພ/ງ
                    </button>
                </div>
                <div id="result_data_emp" class="result_data_emp">
                    <?php
                    include ($path."header-footer/loading.php");
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="formatexcel?format_package" target="_blank">ຂໍ້ມູນແພັກເກັດການກວດສຸຂະພາບ</a>
                    </div>
                    <div class="col-xs-12 col-sm-6" align="right">
                        <a href="#" data-toggle="modal" data-target="#exampleModalimpPackage">ນຳເຂົ້າຂໍ້ມູນ</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <input type="text" name="search_package" id="search_package" class="form-control"
                    placeholder="ຄົ້ນຫາ"><br>
                <div id="result_data_package" class="result_data_package">
                    <?php
                    include ($path."header-footer/loading.php");
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        ລາຍການກະກຽມແພັກເກັດ
                    </div>
                    <div class="col-xs-12 col-sm-6" align="right">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCelar_list">ລ້າງລາຍການ</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php
                    $obj->select_package_list();
                    if(isset($_COOKIE['package_list'])){
                ?>
                <div class="table-responsive3">
                    <table class="table-bordered" style="width: 680px;text-align: center;">
                        <tr style="font-size: 18px;">
                            <th style="width: 40px;"></th>
                            <th style="width:50px;">No.</th>
                            <th style="width:120px;">Package</th>
                            <th>Description</th>
                        </tr>
                        <?php
                        $no_list = 0;

                        foreach($cart_data_package_list as $row_list){
                            $no_list += 1;
                        ?>
                        <tr>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModalDelSTBPackage"
                                    class="fa fa-trash toolcolor btnDelete_com"></a>
                            </td>
                            <td><?php echo $no_list ?></td>
                            <td><?php echo $row_list['pack_id'] ?></td>
                            <td><?php echo $row_list['pack_name'] ?></td>
                        </tr>
                        <?php
                             }
                        ?>
                    </table>
                </div><br>
                <div align="right" style="color: red;">
                    <h3>Total: <?php echo $no_list ?> ລາຍການ</h3>
                </div>
                <?php
                    }
                    else{
                        echo'
                        <div align="center">
                            <hr size="1" style="width: 90%;"/>
                                ຍັງບໍ່ມີຂໍ້ມູນ
                            <hr size="1" style="width: 90%;"/>
                        </div>
                    ';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        ລາຍການແພັກເກັດເພີ່ມຕື່ມ
                    </div>
                    <div class="col-xs-12 col-sm-6" align="right">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCelar_More">ລ້າງລາຍການ</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php
                    $obj->select_package_more();
                    if(isset($_COOKIE['package_more'])){
                ?>
                <div class="table-responsive3">
                    <table class="table-bordered" style="width: 680px;text-align: center;">
                        <tr style="font-size: 18px;">
                            <th style="width: 40px;"></th>
                            <th style="width:50px;">No.</th>
                            <th style="width:120px;">Package</th>
                            <th>Description</th>

                        </tr>
                        <?php
                        $no_more = 0;
                        foreach($cart_data_package_more as $row_more){
                            $no_more += 1;
                        ?>
                        <tr>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModalDeleteList"
                                    class="fa fa-trash toolcolor btnDelete_List"></a>
                            </td>
                            <td><?php echo $no_more ?></td>
                            <td><?php echo $row_more['pack_id'] ?></td>
                            <td><?php echo $row_more['pack_name'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div><br>
                <div align="right" style="color: red;">
                    <h3>Total: <?php echo $no_more ?> ລາຍການ</h3>
                </div>
                <?php
                    }
                    else{
                        echo'
                        <div align="center">
                            <hr size="1" style="width: 90%;"/>
                                ຍັງບໍ່ມີຂໍ້ມູນ
                            <hr size="1" style="width: 90%;"/>
                        </div>
                    ';
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                ລາຍການລົງທະບຽນ
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="register_company" placeholder="ບໍລິສັດ"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input type="text" class="form-control" id="register_search"
                        placeholder="ລະຫັດ ພ/ງ, ຊື່, ອາຍຸ, ບໍລິສັດ" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <input type="date" class="form-control" id="register_date" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                </div>
                <div id="result_register" class="result_register">
                    <?php
                        include ($path."header-footer/loading.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="card">
            <div class="card-header">
                ລາຍລະອຽດການລົງທະບຽນ
                <input type="hidden" name="detail" class="detail" id="detail">
            </div>
            <div class="card-body">
                <div id="result_registerdetail">
                    <?php
                        include ($path."header-footer/loading.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['emp_name'])){
        $barcode = "";
        $get_barcode = mysqli_query($conn,"call max_barcode_emp();");
        if(mysqli_num_rows($get_barcode) > 0){
            $max = mysqli_fetch_array($get_barcode,MYSQLI_ASSOC);
            $no_ = (int)$max['barcode']+1;
            $new_max = sprintf("%05s",$no_);
            $barcode = "1".$Date_barcode.$new_max; 
        }
        else{
            $barcode = "1".$Date_barcode."00001"; 
        }
        mysqli_free_result($get_barcode);  
        mysqli_next_result($conn);
        $obj->insert_employee($barcode,$_POST["emp_id"],$_POST["emp_name"],$_POST["surname"],$_POST["dob"],$_POST["age"],$_POST["gender"],$_POST["company"],$_POST["branch"],$_POST["department"],$_POST["tel"],$_POST["family_stt"],$_POST["nation"],$_POST["ethnnic"],$_POST["religion"],$_POST["job"],$_POST["house_no"],$_POST["village"],$_POST["district"],$_POST["province"]);
    }
    if(isset($_POST["upload_emp_id"])){
        $obj->import_emp($_FILES["emp_file"]["tmp_name"]);
    }
    if(isset($_POST["upload_pack_id"])){
        $obj->import_package($_FILES["package_file"]["tmp_name"]);

    }
    if(isset($_POST["emp_id_del"])){
        $obj->delete_emp($_POST["emp_id_del"]);

    }
    if(isset($_POST["delete_package"])){
        $obj->del_package($_POST["delete_package"]);

    }
    if(isset($_POST["package_add_more"])){
        $obj->cookie_more($_POST["package_add_more"],$_POST["package_add_more_des"]);
    }
    if(isset($_POST["package_add_list"])){
        $obj->cookie_list($_POST["package_add_more"],$_POST["package_add_more_des"]);
    }
    if(isset($_POST["delete_register"])){
        $obj->del_register($_POST["delete_register"]);
    }
       if(isset($_GET["import"])=="success"){
        echo'<script type="text/javascript">
        swal("", "ນຳເຂົ້າຂໍ້ມູນສຳເລັດ !", "success");
        </script>';
      }   
      if(isset($_GET["register"])=="true"){
        echo'<script type="text/javascript">
        swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນໄດ້ ເນື່ອງຈາກພະນັກງານນີ້ໄດ້ທຳການລົງທະບຽນແລ້ວ !", "error");
        </script>';
      }  
      if(isset($_GET["del"])=="fail"){
        echo'<script type="text/javascript">
        swal("", "ການລົບຂໍ້ມູນຜິດພາດ !", "error");
        </script>';
      }  
      if(isset($_GET["del2"])=="success"){
        echo'<script type="text/javascript">
        swal("", "ລົບຂໍ້ມູນສຳເລັດ !", "success");
        </script>';
      }  
      if(isset($_GET["package"])=="true"){
        echo'<script type="text/javascript">
        swal("", "ແພັກເກັດນີ້ເຄີຍລົງທະບຽນແລ້ວ !", "error");
        </script>';
      }  
      if(isset($_GET["list"])=="same"){
        echo'<script type="text/javascript">
        swal("", "ແພັກເກັດນີ້ມີໃນລາຍການແລ້ວ !", "info");
        </script>';
      }  
      if(isset($_GET["addmore"])=="same"){
        echo'<script type="text/javascript">
        swal("", "ແພັກເກັດນີ້ໄດ້ເພີ່ມໄດ້ລາຍການເພີ່ມເຕີມແລ້ວ !", "info");
        </script>';
      }  
      if(isset($_GET["list-register"])=="null"){
        echo'<script type="text/javascript">
        swal("", "ກະລຸນາເພີ່ມລາຍການແພັກເກັດກ່ອນ !", "info");
        </script>';
      }  
      if(isset($_GET["regis"])=="success"){
        echo'<script type="text/javascript">
        swal("", "ລົງທະບຽນສຳເລັດ !", "success");
        </script>';
      }  
      if(isset($_GET["barcode"])=="registed"){
        echo'<script type="text/javascript">
        swal("", "ບຣາໂຄດນີ້ໄດ້ທຳການລົງທະບຽນແລ້ວ !", "info");
        </script>';
      }  
    
?>
<?php
    include ("../../header-footer/footer.php");
?>
<script>
        function formatDate(date) {
            var d = new Date(date),
                month = "" + (d.getMonth() + 1),
                day = "" + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) 
                month = "0" + month;
            if (day.length < 2) 
                day = "0" + day;

            return [year, month, day].join("-");
        }   
</script>
<script>
loadReg();

function loadReg() {
    $.ajax({
        url: "reg.php",
        success: function(result) {
            $('#reg_id').val(result); //insert text of test.php into your div
            setTimeout(function() {
                loadReg(); //this will send request again and again;
            }, 2000);
        }
    });
}
loadQueue();

function loadQueue() {
    $.ajax({
        url: "queue.php",
        success: function(result) {
            $('.queue').val(result); //insert text of test.php into your div
            setTimeout(function() {
                loadQueue(); //this will send request again and again;
            }, 2000);
        }
    });
}
loadQueue2();

function loadQueue2() {
    $.ajax({
        url: "queue.php",
        success: function(result) {
            $('.queue').text(result); //insert text of test.php into your div
            setTimeout(function() {
                loadQueue2(); //this will send request again and again;
            }, 2000);
        }
    });
}
</script>
<script src="fetch.js"></script>
</script>
<script>
const myform = document.getElementById("formSaveEmp");
const emp_id = document.getElementById("emp_id");
const emp_name = document.getElementById("emp_name");
const surname = document.getElementById("surname");
const dob = document.getElementById("dob");
const age = document.getElementById("age");
const gender = document.getElementById("gender");
const company = document.getElementById("company");
const branch = document.getElementById("branch");
const department = document.getElementById("department");
const tel = document.getElementById("tel");
const status = document.getElementById("status");
const nation = document.getElementById("nation");
const ethnic = document.getElementById("ethnic");
const religion = document.getElementById("religion");
const job = document.getElementById("job");
const home_no = document.getElementById("home_no");
const village = document.getElementById("village");
const district = document.getElementById("district");
const province = document.getElementById("province");
const load_save = document.getElementById("load_save");
const btnLoad_save = document.getElementById("btnSave");
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const emp_idValue = emp_id.value.trim();
    const emp_nameValue = emp_name.value.trim();
    const surnameValue = surname.value.trim();
    const dobValue = dob.value.trim();
    const ageValue = age.value.trim();
    const genderValue = gender.value.trim();
    const companyValue = company.value.trim();
    const branchValue = branch.value.trim();
    const departmentValue = department.value.trim();
    const telValue = tel.value.trim();
    const statusValue = status.value.trim();
    const nationValue = nation.value.trim();
    const ethnicValue = ethnic.value.trim();
    const religionValue = religion.value.trim();
    const jobValue = job.value.trim();
    const home_noValue = home_no.value.trim();
    const villageValue = village.value.trim();
    const districtValue = district.value.trim();
    const provinceValue = province.value.trim();

    if (emp_nameValue === "") {
        setErrorFor(emp_name, 'ກະລຸນາປ້ອນຊື່ພະນັກງານ');
    } else {
        setSuccessFor(emp_name);
    }
    if (ageValue === "") {
        setErrorFor(age, 'ກະລຸນາປ້ອນອາຍຸພະນັກງານ');
    } else {
        setSuccessFor(age);
    }
    if (genderValue === "") {
        setErrorFor(gender, 'ກະລຸນາເລືອກເພດ');
    } else {
        setSuccessFor(gender);
    }
    if (companyValue === "") {
        setErrorFor(company, 'ກະລຸນາປ້ອນຊື່ບໍລິສັດ');
    } else {
        setSuccessFor(company);
    }
    if (departmentValue === "") {
        setErrorFor(department, 'ກະລຸນາປ້ອນພະແນກ');
    } else {
        setSuccessFor(department);
    }
    if (emp_nameValue !== "" && ageValue !== "" && genderValue !== "" && companyValue !== "" && departmentValue !==
        "") {
        setloading(load_save, btnLoad_save);
        document.getElementById("formSaveEmp").action = "register";
        document.getElementById("formSaveEmp").submit();
    }
}



const myform_import_emp = document.getElementById("import_emp");
const emp_file = document.getElementById("emp_file");
const upload_emp_id = document.getElementById("upload_emp_id");
const load_import_emp = document.getElementById("load_import_emp");
const btnload_import_emp = document.getElementById("btnload_import_emp");
myform_import_emp.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_import_emp();
});

function checkInputs_import_emp() {
    const emp_fileValue = emp_file.value.trim();
    if (emp_fileValue === "") {
        setErrorFor(emp_file, 'ກະລຸນາເລືອກຟາຍ Excel ກ່ອນ');
    } else {
        setSuccessFor(emp_file);
    }
    if (emp_fileValue !== "") {
        setloading(load_import_emp, btnload_import_emp);
        document.getElementById("import_emp").action = "register";
        document.getElementById("import_emp").submit();
    }
}

const myform_import_package = document.getElementById("import_package");
const package_file = document.getElementById("package_file");
const upload_pack_id = document.getElementById("upload_pack_id");
const load_package = document.getElementById("load_package");
const btn_load_package = document.getElementById("btn_load_package");
myform_import_package.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_import_package();
});

function checkInputs_import_package() {
    const package_fileValue = package_file.value.trim();
    if (package_fileValue === "") {
        setErrorFor(package_file, 'ກະລຸນາເລືອກຟາຍ Excel ກ່ອນ');
    } else {
        setSuccessFor(package_file);
    }
    if (package_fileValue !== "") {
        setloading(load_package, btn_load_package);
        document.getElementById("import_package").action = "register";
        document.getElementById("import_package").submit();
    }
}

const myform_form_delete_emp = document.getElementById("form_delete_emp");
const emp_id_del = document.getElementById("emp_id_del");
const load_Del_emp = document.getElementById("load_Del_emp");
const btnDel_emp = document.getElementById("btnDel_emp");
myform_form_delete_emp.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_Delete_emp();
});

function checkInputs_Delete_emp() {
    setloading(load_Del_emp, btnDel_emp);
    document.getElementById("form_delete_emp").action = "register";
    document.getElementById("form_delete_emp").submit();
}

const myform_delete_info_package = document.getElementById("delete_info_package");
const delete_package = document.getElementById("delete_package");
const load_Delete_info_package = document.getElementById("load_Delete_info_package");
const btnDelete_info_package = document.getElementById("btnDelete_info_package");
myform_delete_info_package.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_delete_info_package();
});

function checkInputs_delete_info_package() {
    setloading(load_Delete_info_package, btnDelete_info_package);
    document.getElementById("delete_info_package").action = "register";
    document.getElementById("delete_info_package").submit();
}

const myform_form_package_add_more = document.getElementById("form_package_add_more");
const package_add_more = document.getElementById("package_add_more");
const package_add_more_des = document.getElementById("package_add_more_des");
const load_package_add_more = document.getElementById("load_package_add_more");
const btn_package_add_more = document.getElementById("btn_package_add_more");
myform_form_package_add_more.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_package_add_more();
});

function checkInputs_package_add_more() {
    setloading(load_package_add_more, btn_package_add_more);
    document.getElementById("form_package_add_more").action = "register";
    document.getElementById("form_package_add_more").submit();
}

const myform_form_package_add_list = document.getElementById("form_package_add_list");
const package_add_list = document.getElementById("package_add_list");
const package_add_list_des = document.getElementById("package_add_list_des");
const load_package_add_list = document.getElementById("load_package_add_list");
const btnpackage_add_list = document.getElementById("btnpackage_add_list");
myform_form_package_add_list.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_package_add_list();
});

function checkInputs_form_package_add_list() {
    setloading(load_package_add_list, btnpackage_add_list);
    document.getElementById("form_package_add_list").action = "register";
    document.getElementById("form_package_add_list").submit();
}

const myform_form_clear_list = document.getElementById("form_clear_list");
const clear_list = document.getElementById("clear_list");
const btnclear_list = document.getElementById("btnclear_list");
const load_clear_list = document.getElementById("load_clear_list");
myform_form_clear_list.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_clear_list();
});

function checkInputs_form_clear_list() {
    setloading(load_clear_list, btnclear_list);
    document.getElementById("form_clear_list").action = "register";
    document.getElementById("form_clear_list").submit();
}

const myform_form_clear_more = document.getElementById("form_clear_more");
const clear_more = document.getElementById("clear_more");
const btnclear_more = document.getElementById("btnclear_more");
const load_clear_more = document.getElementById("load_clear_more");
myform_form_clear_more.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_clear_more();
});

function checkInputs_form_clear_more() {
    setloading(load_clear_more, btnclear_more);
    document.getElementById("form_clear_more").action = "register";
    document.getElementById("form_clear_more").submit();
}


const myform_form_del_list = document.getElementById("form_del_list");
const del_list = document.getElementById("del_list");
const btndel_list = document.getElementById("btndel_list");
const load_del_list = document.getElementById("load_del_list");
myform_form_del_list.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_del_list();
});

function checkInputs_form_del_list() {
    setloading(load_del_list, btndel_list);
    document.getElementById("form_del_list").action = "register";
    document.getElementById("form_del_list").submit();
}

const myform_form_del_more = document.getElementById("form_del_more");
const del_more = document.getElementById("del_more");
const btndel_more = document.getElementById("btndel_more");
const load_del_more = document.getElementById("load_del_more");
myform_form_del_more.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_del_more();
});

function checkInputs_form_del_more() {
    setloading(load_del_more, btndel_more);
    document.getElementById("form_del_more").action = "register";
    document.getElementById("form_del_more").submit();
}



const myform_form_register = document.getElementById("form_register");
const queue = document.getElementById("queue");
const reg_id = document.getElementById("reg_id");
const register_barcode = document.getElementById("register_barcode");
const btnRegister = document.getElementById("btnRegister");
const load_Regiser = document.getElementById("load_Regiser");
myform_form_register.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_register();
});

function checkInputs_form_register() {
    setloading(load_Regiser, btnRegister);
    document.getElementById("form_register").action = "register";
    document.getElementById("form_register").submit();
}


const myform_form_delete_register = document.getElementById("form_delete_register");
const delete_register = document.getElementById("delete_register");
const btndelete_register = document.getElementById("btndelete_register");
const load_delete_register = document.getElementById("load_delete_register");
myform_form_delete_register.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs_form_delete_register();
});

function checkInputs_form_delete_register() {
    setloading(load_delete_register, btndelete_register);
    document.getElementById("form_delete_register").action = "register";
    document.getElementById("form_delete_register").submit();
}
</script>

<script>

$(document).ready(function() {
    load_data_emp("%%", "%%", "0");
    load_data_package("%%", "0");

    function load_data_emp(query, query2, page) {
        $.ajax({
            url: "fetch_emp.php",
            method: "POST",
            data: {
                query: query,
                query2: query2,
                page: page
            },
            success: function(data) {
                $("#result_data_emp").html(data);
            }
        });
    }
    $('#search_company').keyup(function() {
        var page = "0";
        var search_company = $(this).val();
        var emp_search = $('#emp_search').val();
        if (search_company != '') {
            load_data_emp(search_company, emp_search, page);
        } else {
            load_data_emp('%%', emp_search, page);
        }
    });
    $('#emp_search').keyup(function() {
        var page = "0";
        var emp_search = $(this).val();
        var search_company = $('#search_company').val();
        if (emp_search != '') {
            load_data_emp(search_company, emp_search, page);
        } else {
            load_data_emp(search_company, "%%", page);
        }
    });
    $(document).on('click', '.page-links_emp', function() {
        var page_emp = this.id;
        console.log(page_emp);
        var emp_search = $('#emp_search').val();
        var search_company = $('#search_company').val();
        if (search_company != '' || emp_search != '') {
            load_data_emp(search_company, emp_search, page_emp);
        } else {
            load_data_emp("%%", "%%", page_emp);
        }
    });










    function load_data_package(query, page) {
        $.ajax({
            url: "fetch_package.php",
            method: "POST",
            data: {
                query: query,
                page: page
            },
            success: function(data) {
                $('#result_data_package').html(data);
            }
        });
    }
    $('#search_package').keyup(function() {
        var page = "0";
        var search_package = $(this).val();
        if (search_package != '') {
            load_data_package(search_package, page);
        } else {
            load_data_package('%%', page);
        }
    });
    $(document).on('click', '.page-links_package', function() {
        var page_package = this.id;
        var search_package = $('#search_package').val();
        if (search_package != '') {
            load_data_package(search_package, page_package);
        } else {
            load_data_package("%%", page_package);
        }
    });


    load_data_register("%%", "%%", "%%", "0");

    function load_data_register(query, query2, dates, page) {
        $.ajax({
            url: "fetch_register.php",
            method: "POST",
            data: {
                query: query,
                query2: query2,
                dates: dates,
                page: page
            },
            success: function(data) {
                $('#result_register').html(data);
            }
        });
    }
    $('#register_company').keyup(function() {
        var page = "0";
        var register_date = "";
        var register_company = $(this).val();
        var register_search = $('#register_search').val();
      
        if(!register_date){
            var register_date = formatDate(new Date($('#register_date').val()));
        }
        else{
            register_date = null;
        }
        console.log(register_date);
        if (register_company != '') {
            load_data_register(register_company, register_search, register_date, page);
        } else {
            load_data_register("%%", register_search, register_date, page);
        }
    });
    $('#register_search').keyup(function() {
        var page = "0";
        var register_date = "";
        var register_search = $(this).val();
        var register_company = $('#register_company').val();
        if(!register_date){
            var register_date = formatDate(new Date($('#register_date').val()));
        }
        else{
            var register_date = null;
        }
        console.log(register_date);
        if (register_search != "") {
            load_data_register(register_company, register_search, register_date, page);
        } else {
            load_data_register(register_company, "%%", register_date, page);
        }
    });
    $('#register_date').change(function() {
        var page = "0";
        var register_date = "";
        if(!register_date){
            var register_date = formatDate(new Date($('#register_date').val()));
        }
        else{
            var register_date = null;
        }
        console.log(register_date);
        var register_company = $('#register_company').val();
        var register_search = $('#register_search').val();
        if (register_date != "") {
            load_data_register(register_company, register_search, register_date, page);
        } else {
            load_data_register(register_company, register_search, "%%", page);
        }

    });

    $(document).on('click', '.page-links-register', function() {
        var page_register = this.id;
        var register_company = $('#register_company').val();
        var register_search = $('#register_search').val();
        var register_date = formatDate(new Date($('#register_date').val()));
        if (register_search != "" || register_company != "" || register_date != "") {
            load_data_register(register_company, register_search, register_date, page_register);
        } else {
            load_data_register("%%", "%%", "%%", page_register);
        }
    });



    load_data_registerdetail("");

    function load_data_registerdetail(query) {
        $.ajax({
            url: "fetch_registerdetail.php",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result_registerdetail').html(data);
            }
        });
    }
    $(document).on('click', '.btndetail', function() {
        var details = $('#detail').val();
        if (details != '') {
            load_data_registerdetail(details);
        } else {
            load_data_registerdetail("");
        }
    });



});
</script>



<script>
$('.btnDelete_List').on('click', function() {
    $('#exampleModalDeleteList').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#del_more').val(data[2]);
});

$('.btnDelete_com').on('click', function() {
    $('#exampleModalDelSTBPackage').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    console.log(data);

    $('#del_list').val(data[2]);
});
</script>