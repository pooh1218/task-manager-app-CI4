<!--Content Body-->

<link href="<?=site_url("themes/focus2/vendor/jquery-steps/css/jquery.steps.css")?>" rel="stylesheet">
<link href="<?=site_url("themes/focus2/vendor/select2/css/select2.min.css")?>" rel="stylesheet">
<link href="<?=site_url("themes/focus2/css/style.css")?>" rel="stylesheet">
<link href="<?=site_url("themes/focus2/vendor/summernote/summernote.css")?>" rel="stylesheet">
<link href="<?=site_url("themes/focus2/vendor/highlightjs/styles/vs2015.css")?>" rel="stylesheet">

	
	
	
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4><i class="<?= $title['icon']??'' ?>"></i> <?= $title['module']??'' ?></h4>
                    <span class="ml-1"><?= $title['page']??'' ?></span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumb??[] as $item) : ?>
                        <?php if (!$item['active']) : ?>
                            <li class="breadcrumb-item"><a href="<?= $item['route'] ?>"><?= $item['title'] ?></a></li>
                        <?php else : ?>
                            <li class="breadcrumb-item active"><?= $item['title'] ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
		
		 <?= formAlert() ?>
                        <form class="form" action="/materials/store" method="post">
                            <?= csrf_field() ?>
		<input type="hidden" name="id_materials" value="<?= (isset($obj)) ? $obj['id_materials'] : set_value('id_materials') ?>">
        <div class="row">
		
		
               
                    <div class="col-xl-3 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $title['page']??'' ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                 
                                      
										<div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="materials_company" id="materials_company" class="form-control" value="<?= (isset($obj)) ? $obj['materials_company'] : set_value('materials_company') ?>" placeholder="Company">
                                        </div>
                                    </div> 
										
										<div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="materials_name" id="materials_name" class="form-control" value="<?= (isset($obj)) ? $obj['materials_name'] : set_value('materials_name') ?>" placeholder="Name">
                                        </div>
                                    </div>
										
										
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-xl-4 col-xxl-12">
                        <div class="card">
						
						
                            <div class="card-header">
                                <h4 class="card-title">Denumire</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-row">
											
											<div class=" col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="materials_culoare" id="materials_culoare" class="form-control" value="<?= (isset($obj)) ? $obj['materials_culoare'] : set_value('materials_culoare') ?>" placeholder="Culoare">
                                        </div>
                                    </div>
											
											
										<div class=" col-md-6 col-sm-6">
                                        <div class="form-group">
										<select name="materials_status" id="default_theme" class="form-control" value="<?= (isset($obj)) ? $obj['materials_status'] : set_value('materials_status') ?>" placeholder="Status">
                                                <option>&nbsp;</option>
                                                <option>Mat</option>
                                                <option>Lucios</option>
                                                <option>Spate Gri</option>
                                                <option>Spate Alb</option>
                                            </select>
										
										
													
										
										
                                        </div>
                                    </div>
										
											
											
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                
           
			 <div class="col-xl-5 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dimensiune ( mm )</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    
                                        <div class="form-row">
											<div class=" col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="materials_latime" id="materials_latime" class="form-control" value="<?= (isset($obj)) ? $obj['materials_latime'] : set_value('materials_latime') ?>" placeholder="Latime">
                                        </div>
                                    </div>
											<div class=" col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="materials_inaltime" id="materials_inaltime" class="form-control" value="<?= (isset($obj)) ? $obj['materials_inaltime'] : set_value('materials_inaltime') ?>" placeholder="Inaltime">
                                        </div>
                                    </div>
									
									
										<div class=" col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="materials_cantitate" id="materials_cantitate" class="form-control" value="<?= (isset($obj)) ? $obj['materials_cantitate'] : set_value('materials_cantitate') ?>" placeholder="Cantitate">
                                        </div>
                                    </div>	
									
									<div class=" col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="materials_cantitate_mp" id="materials_cantitate_mp" class="form-control" value="<?= (isset($obj)) ? $obj['materials_cantitate_mp'] : set_value('materials_cantitate_mp') ?>" placeholder="MP">
                                        </div>
                                    </div>
											
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                <div class="card col col-md-12">
                   
                    <div class="card-body">
                       
                            
                            
                            <div class="form-actions mt-2">
                                <a href="<?= $btn_return['route']??'#' ?>" class="<?= $btn_return['class']??''?>">
                                    <i class="<?= $btn_return['icon']??'' ?>"></i> <?= $btn_return['title']??'' ?>
                                </a>
                                <button type="submit" class="<?= $btn_submit['class']??''?>">
                                    <i class="<?= $btn_submit['icon']??'' ?>"></i> <?= $btn_submit['title']??'' ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
				
				
				
				
		
				
				
            </div>
        </div>
    </div>
</div>
<!-- Required vendors -->
<script src="<?=site_url("themes/focus2/vendor/global/global.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/js/quixnav-init.js")?>"></script>
<script src="<?=site_url("themes/focus2/js/plugins-init/jquery-steps-init.js")?>"></script>
<script src="<?=site_url("themes/focus2/js/custom.min.js")?>"></script>

    <!-- Form validate init -->
<script src="<?=site_url("themes/focus2/vendor/jquery-steps/build/jquery.steps.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/jquery-validation/jquery.validate.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/select2/js/select2.full.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/js/plugins-init/select2-init.js")?>"></script>
  
  
  
  
  
  
  <!-- Required vendors -->
<script src="<?=site_url("themes/focus2/vendor/sweetalert2/dist/sweetalert2.min.js")?>"></script>
<!-- Datatable -->
<script src="<?=site_url("themes/focus2/vendor/datatables/js/jquery.dataTables.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/pickers/daterange/moment.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/dataTables.datetime.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/dataTables.buttons.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/buttons.bootstrap4.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/jszip.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/pdfmake.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/vfs_fonts.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/buttons.html5.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/buttons.print.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/datatables/js/buttons.colVis.min.js")?>"></script>
<!-- Highlightjs -->
<script src="<?=site_url("themes/focus2/vendor/highlightjs/highlight.pack.min.js")?>"></script>
<!-- Summernote -->
<script src="<?=site_url("themes/focus2/vendor/summernote/summernote.min.js")?>"></script>
<!-- Custom -->
<script src="<?=site_url("assets/js/main.js")?>"></script>
<!-- Form -->
  

    <!-- Form validate init -->


<!-- Form -->
<script>

		"use strict";
    "use strict";
    $(document).ready(function () {
        $('#first_name').focus();
        $("#email_gateway").select2();
        $("#email_cert").select2();
        $("#sms_gateway").select2();
        $("#captcha_gateway").select2();
        $("#default_language").select2();
        $("#default_role").select2();
        $("#default_date_format").select2();
        $("#default_hour_format").select2();
        $("#default_currency").select2();
        $("#default_currency_position").select2();
        $("#default_currency_separation").select2();
        $("#default_country").select2();
        $("#default_theme").select2();
        $("#default_theme_front").select2();
        $("#default_timezone").select2();
        $("#storage_gateway").select2();
        $("#backup_storage").select2();
        $("#backup_table").select2();
        $("#backup_time").select2();
        $("#send_user_register").select2();

        let configSummerNote = {
            height: 150, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['codeview']]
            ]
        }
        $("#terms_conditions_text").summernote(configSummerNote);
        let dataFormat = [
            {
                targets: 2,
                render: $.fn.dataTable.render.moment('YYYY-MM-DD HH:mm:ss','<?=momentDateTimeJS()?>')
            }
        ];
        let order = [[2, "desc"]];
        let translate = '/themes/focus2/vendor/datatables/locales/<?=langJS()?>.json';
        let button = ["<?=lang("App.global_copy")?>","<?=lang("App.global_print")?>","<?=lang("App.global_excel")?>","<?=lang("App.global_pdf")?>"];
        let columns = [{ data: 'routine' },{ data: 'error' },{ data: 'created_at' }];
        loadDataTableAjax('table-grid', '<?=site_url('ajax/getCronHistory')?>', translate, true, true, order, columns,dataFormat, button);
        load_data_api();
    });

    $("#terms_conditions_text").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });

    function save_permission_api(){
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="api_"]');
        let obj = {};
        checkboxes.forEach((checkbox) => {
            const chkArray = checkbox.id.split("_");
            if(chkArray.length === 4 && chkArray[3].length === 32 ){
                chkArray.push(checkbox.checked)
            }
            if(obj[chkArray[3]] === undefined){
                obj[chkArray[3]] = [chkArray]
            }else{
                obj[chkArray[3]].push(chkArray);
            }
        });
        $("#group_api").val(JSON.stringify(obj));
        document.getElementById("settingsForm").submit();
    }

    function load_permission_api(){
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="api_"]');
        let permission = JSON.parse($("#group_api").val());
        let arrayP = Object.entries(permission);
        arrayP.forEach((group) =>{
            group[1].forEach((item) =>{
                let id = item[0]+'_'+item[1]+'_'+item[2]+'_'+item[3];
                checkboxes.forEach((checkbox) => {
                    if(checkbox.id === id){
                        if(item[4]){
                            checkbox.checked = true;
                        }else{
                            checkbox.checked = false;
                        }
                    }
                });
            });
        });
    }

    function load_data_api(){
        let api_user_all = document.getElementById("api_user_all");
        let api_user_token = document.getElementById("api_user_token");
        let api_user_add = document.getElementById("api_user_add");
        let api_user_delete = document.getElementById("api_user_delete");
        let api_user_edit = document.getElementById("api_user_edit");
        let api_status = document.getElementById("api_status");
        let api_signin = document.getElementById("api_signin");
        api_user_all.innerText = '[\n' +
            '    {\n' +
            '        "token": "fdfa9b8b69e2a71f8a35fdaa226745cf",\n' +
            '        "first_name": "Web",\n' +
            '        "last_name": "Guard",\n' +
            '        "date_birth": null,\n' +
            '        "email": "test@eduardofiorini.com",\n' +
            '        "mobile": "551190000000",\n' +
            '        "picture": "/assets/img/default-user.png",\n' +
            '        "language": "en",\n' +
            '        "address": "",\n' +
            '        "state": "",\n' +
            '        "country": "BR",\n' +
            '        "zip_code": null,\n' +
            '        "status": "1",\n' +
            '        "created_at": "2021-11-12 14:58:46",\n' +
            '        "updated_at": "2021-11-30 16:44:05"\n' +
            '    }\n' +
            ']';
        api_user_token.innerText = '{\n' +
            '        "token": "fdfa9b8b69e2a71f8a35fdaa226745cf",\n' +
            '        "first_name": "Web",\n' +
            '        "last_name": "Guard",\n' +
            '        "date_birth": null,\n' +
            '        "email": "test@eduardofiorini.com",\n' +
            '        "mobile": "551190000000",\n' +
            '        "picture": "/assets/img/default-user.png",\n' +
            '        "language": "en",\n' +
            '        "address": "",\n' +
            '        "state": "",\n' +
            '        "country": "BR",\n' +
            '        "zip_code": null,\n' +
            '        "status": "1",\n' +
            '        "created_at": "2021-11-12 14:58:46",\n' +
            '        "updated_at": "2021-11-30 16:44:05"\n' +
            '    }\n';
        api_user_add.innerText = '{\n' +
            '    "error": false,\n' +
            '    "message": "Added successfully!",\n' +
            '    "data": {\n' +
            '        "token": "0c4e735f95425818d76d89d0837bbe9c",\n' +
            '        "first_name": "Web",\n' +
            '        "last_name": "Guard",\n' +
            '        "date_birth": null,\n' +
            '        "email": "test@eduardofiorini.com",\n' +
            '        "mobile": "",\n' +
            '        "picture": "/assets/img/default-user.png",\n' +
            '        "language": "pt",\n' +
            '        "address": null,\n' +
            '        "state": "",\n' +
            '        "country": "",\n' +
            '        "zip_code": null,\n' +
            '        "status": "1",\n' +
            '        "created_at": "2021-12-10 14:30:35",\n' +
            '        "updated_at": "2021-12-10 14:30:35"\n' +
            '    }\n' +
            '}';
        api_user_delete.innerText = '{\n' +
            '    "error": false,\n' +
            '    "message": "Successfully deleted!"\n' +
            '}';
        api_user_edit.innerText = '{\n' +
            '    "error": false,\n' +
            '    "message": "Successfully Edited!",\n' +
            '    "data": {\n' +
            '        "token": "92f223f92f8d1f95298eba5dd09f53af",\n' +
            '        "first_name": "Eduardo",\n' +
            '        "last_name": "Fiorini",\n' +
            '        "date_birth": "1989-06-19",\n' +
            '        "email": "edupva@gmail.com",\n' +
            '        "mobile": "556696000000",\n' +
            '        "picture": "https://s.gravatar.com/avatar/60bc9eb71c6bc1e82f165ad587bd0947?s=150",\n' +
            '        "language": "pt",\n' +
            '        "address": "",\n' +
            '        "state": "",\n' +
            '        "country": "BR",\n' +
            '        "zip_code": null,\n' +
            '        "status": "1",\n' +
            '        "created_at": "2021-11-07 17:04:49",\n' +
            '        "updated_at": "2021-12-10 14:31:19"\n' +
            '    }\n' +
            '}';
        api_status.innerText = '{\n'+
            '"status": true,\n' +
            '"message": "The system is running!"\n'+
            '}';
        api_signin.innerText = '{\n'+
            '"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFkbWluQGFkbWluLmNvbSIsImlhdCI6MTYzOTE1NTgyNiwiZXhwIjoxNjM5MTU2MTI2fQ.-gfpuC2jqWBqCiTUFMECbBR0nUqyfW1n8OyWqqNKqvE"\n'+
            '}';
        hljs.highlightBlock(api_user_all)
        hljs.highlightBlock(api_user_token)
        hljs.highlightBlock(api_user_add)
        hljs.highlightBlock(api_user_delete)
        hljs.highlightBlock(api_user_edit)
        hljs.highlightBlock(api_status)
        hljs.highlightBlock(api_signin)
    }
    function send_test(){
        let email = $("#send_email_test");
        let ajax = new XMLHttpRequest();
        document.getElementById('msg_email_test').style.display = 'block';
        ajax.open("GET", "<?=site_url("integration/send_email_test/")?>"+email.val(), true);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                let data = JSON.parse(this.responseText);
                document.getElementById('msg_email_test').style.display = 'none';
                if(data.return){
                    swal({
                        position: 'center',
                        type: 'success',
                        title: '<?=lang("App.settings_alert_email_test_send")?>',
                        showConfirmButton: false,
                        timer: 2000,
                        confirmButtonClass: 'btn btn-primary',
                        buttonsStyling: false
                    });
                }else{
                    swal({
                        position: 'center',
                        type: 'error',
                        title: '<?=lang("App.settings_alert_email_test_error")?>',
                        showConfirmButton: false,
                        timer: 2000,
                        confirmButtonClass: 'btn btn-primary',
                        buttonsStyling: false
                    });
                }
                email.val("");
            }
        }
    }
</script>