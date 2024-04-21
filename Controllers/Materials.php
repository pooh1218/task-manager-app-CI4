<?php
namespace App\Modules\Materials\Controllers;

use App\Controllers\BaseController;
use App\Modules\Materials\Models\MaterialsModel;

/**
 * Class Task
 */
class Materials extends BaseController
{

    private $materials_model;

    function __construct()
    {
        $this->materials_model = new MaterialsModel();
    }

    public function index() {
        $data['title'] = [
            'module' => 'Materials List',
            'page'   => 'All Materials',
            'icon'  => 'fas fa-tasks'
        ];

        $data['breadcrumb'] = [
            ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
            ['title' => 'Materials List', 'route'  => "", 'active' => true]
        ];

        $data['btn_add'] = [
            'title' => 'Add New Materials',
            'route'   => '/materials/add',
            'class'   => 'btn btn-lg btn-primary float-md-right',
            'icon'  => 'fas fa-plus'
        ];

        $table = new \CodeIgniter\View\Table([
            'table_open' => '<table id="table-grid" class="table">'
        ]);

        $table->setHeading('Name','Created at', 'Options');

        $data['grid'] = $this->materials_model->select('materials_name, created_at, id_materials AS options')
            ->orderBy('created_at','DESC')
            ->findAll();

        foreach ($data['grid'] as $key => $value){
            $id = $data['grid'][$key]['options'];
            $data['grid'][$key]['options'] = ''.
                '<div class="btn-group mr-1 mb-1" xmlns="http://www.w3.org/1999/html">
                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/materials/view/'.$id.'"><i class="fas fa-edit"></i> View</a>
                        <a class="dropdown-item" href="/materials/edit/'.$id.'"><i class="fas fa-edit"></i> Edit</a>
                        <button class="dropdown-item" onclick="delete_materials(\''.$id.'\');"><i class="fas fa-trash"></i> Delete</button>
                    </div>
                    </div>
                ';
        }

        $data['table'] = $table;

        echo view(getenv('theme.backend.path').'main/header');
        echo view('App\Modules\Materials\Views\materials\index',$data);
        echo view(getenv('theme.backend.path').'main/footer');
    }

    public function add()
    {
        helper('form');

        $data['title'] = [
            'module' => 'Add Materials',
            'page'   => 'Add Materials',
            'icon'  => 'far fa-plus-square'
        ];

        $data['breadcrumb'] = [
            ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
            ['title' => 'List Materials', 'route' => "/materials", 'active' => false],
            ['title' => 'Add Materials', 'route'  => "", 'active' => true]
        ];

        $data['btn_return'] = [
            'title' => 'Come Back',
            'route'   => '/materials',
            'class'   => 'btn btn-dark mr-1',
            'icon'  => 'fas fa-angle-left'
        ];

        $data['btn_submit'] = [
            'title' => 'Save',
            'route'   => '',
            'class'   => 'btn btn-primary mr-1',
            'icon'  => 'fas fa-save'
        ];

        echo view(getenv('theme.backend.path').'main/header');
        echo view('App\Modules\Materials\Views\materials\form',$data);
        echo view(getenv('theme.backend.path').'main/footer');

    }

    public function edit($token=null)
    {
        if(empty($token)){
            return redirect()->to('/materials');
        }

        helper('form');

        $data['title'] = [
            'module' => 'Edit Materials',
            'page'   => 'Edit Materials',
            'icon'  => 'fas fa-edit'
        ];

        $data['breadcrumb'] = [
            ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
            ['title' => 'List Materials', 'route' => "/materials", 'active' => false],
            ['title' => 'Edit Materials', 'route'  => "", 'active' => true]
        ];

        $data['btn_return'] = [
            'title' => 'Come Back',
            'route'   => '/materials',
            'class'   => 'btn btn-dark mr-1',
            'icon'  => 'fas fa-angle-left'
        ];

        $data['btn_submit'] = [
            'title' => 'Save',
            'route'   => '',
            'class'   => 'btn btn-primary mr-1',
            'icon'  => 'fas fa-save'
        ];

        $data['obj'] = $this->materials_model->where('id_materials', $token)->first();
        if($data['obj']==null){
            return redirect()->to('/materials');
        }

        echo view(getenv('theme.backend.path').'main/header');
        echo view('App\Modules\Materials\Views\materials\edit',$data);
        echo view(getenv('theme.backend.path').'main/footer');
    }
	
	
//--------------------------------------------------------------------------//
	 public function view($token=null)
    {
        if(empty($token)){
            return redirect()->to('/materials');
        }

        helper('form');

        $data['title'] = [
            'module' => 'View Materials',
            'page'   => 'View Materials',
            'icon'  => 'fas fa-edit'
        ];

        $data['breadcrumb'] = [
            ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
            ['title' => 'List Materials', 'route' => "/materials", 'active' => false],
            ['title' => 'View Materials', 'route'  => "/views", 'active' => true]
        ];

        $data['btn_return'] = [
            'title' => 'Come Back',
            'route'   => '/materials',
            'class'   => 'btn btn-dark mr-1',
            'icon'  => 'fas fa-angle-left'
        ];

       

        $data['obj'] = $this->materials_model->where('id_materials', $token)->first();
        if($data['obj']==null){
            return redirect()->to('/materials');
        }

        echo view(getenv('theme.backend.path').'main/header');
        echo view('App\Modules\Materials\Views\materials\views',$data);// here
        echo view(getenv('theme.backend.path').'main/footer');
    }
//--------------------------------------------------------------------------//





    public function store()
    {
        $session = session();
        helper('form');

        $rules = [
            'materials_company'        => 'required',
            'materials_name'        => 'required',
            'materials_latime'        => 'required',
            'materials_inaltime'  => 'required',
            'materials_status'  => 'required',
            'materials_culoare'  => 'required',
            'materials_cantitate'  => 'required',
            'materials_cantitate_mp'  => 'required'
        ];

        $rules_error = [
            'materials_company' => [
                'required' => 'Company field is required.',
            ], 
			'materials_name' => [
                'required' => 'Name field is required.',
            ],
            'materials_latime' => [
                'required' => 'Latime field is required',
            ],
            'materials_inaltime' => [
                'required' => 'Inaltime field is required',
            ],
            'materials_status' => [
                'required' => 'Status field is required',
            ],
            'materials_culoare' => [
                'required' => 'Culoare field is required',
            ],
            'materials_cantitate' => [
                'required' => 'Cantitate field is required',
            ],
            'materials_cantitate_mp' => [
                'required' => 'Cantitate_mp field is required',
            ]
        ];

        if ($this->validate($rules,$rules_error)){
            if(empty($this->request->getPost('id_materials'))){
                $this->materials_model->save([
                    'id_materials' => null,
                    'materials_company' => $this->request->getPost('materials_company'),
                    'materials_name' => $this->request->getPost('materials_name'),
                    'materials_latime' => $this->request->getPost('materials_latime'),
                    'materials_inaltime' => $this->request->getPost('materials_inaltime'),
                    'materials_status' => $this->request->getPost('materials_status'),
                    'materials_culoare' => $this->request->getPost('materials_culoare'),
                    'materials_cantitate' => $this->request->getPost('materials_cantitate'),
                    'materials_cantitate_mp' => $this->request->getPost('materials_cantitate_mp')
                ]);
                $session->setFlashdata('sweet', ['success','Added successfully!']);
                return redirect()->to('/materials');
            }else{
                $this->materials_model->save([
                    'id_materials' => $this->request->getPost('id_materials'),
                    'materials_company' => $this->request->getPost('materials_company'),
                    'materials_name' => $this->request->getPost('materials_name'),
                    'materials_latime' => $this->request->getPost('materials_latime'),
                    'materials_inaltime' => $this->request->getPost('materials_inaltime'),
                    'materials_status' => $this->request->getPost('materials_status'),
                    'materials_culoare' => $this->request->getPost('materials_culoare'),
                    'materials_cantitate' => $this->request->getPost('materials_cantitate'),
                    'materials_cantitate_mp' => $this->request->getPost('materials_cantitate_mp')
                ]);
                $session->setFlashdata('sweet', ['success','Successfully edited!']);
                return redirect()->to('/materials');
            }
        }else{
            $session->setFlashdata('error','error');
            $this->add();
        }
    }

    public function delete($id)
    {
        $session = session();
        if(!empty($session->get('token'))){
            $this->materials_model->where('id_materials', $id)->delete();
            $session->setFlashdata('sweet', ['success','Successfully deleted!']);
            return redirect()->to('/materials');
        }else{
            return redirect()->to('/login');
        }
    }
}