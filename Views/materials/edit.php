<!--Content Body-->

<link href="<?=site_url("themes/focus2/vendor/jquery-steps/css/jquery.steps.css")?>" rel="stylesheet">
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
                                            <input type="text" name="materials_status" id="materials_status" class="form-control" value="<?= (isset($obj)) ? $obj['materials_status'] : set_value('materials_status') ?>" placeholder="Status">
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
<script src="<?=site_url("themes/focus2/vendor/select2/js/select2.full.min.js")?>"></script>

    <!-- Form validate init -->
<script src="<?=site_url("themes/focus2/vendor/jquery-steps/build/jquery.steps.min.js")?>"></script>
<script src="<?=site_url("themes/focus2/vendor/jquery-validation/jquery.validate.min.js")?>"></script>



    <!-- Form validate init -->


<!-- Form -->
<script>
    $(document).ready(function () {
        "use strict";
        $('#title').focus();
    });
</script>