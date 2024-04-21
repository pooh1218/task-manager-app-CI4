<?php
namespace App\Modules\Materials\Models;

class MaterialsModel extends \App\Models\BaseModel
{
    protected $table = 'materials_list';
    protected $primaryKey = 'id_materials';
    protected $allowedFields = [
        'materials_company',
        'materials_name',
        'materials_latime',
        'materials_inaltime',
        'materials_status',
        'materials_culoare',
        'materials_cantitate',
        'materials_cantitate_mp'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
};