<?php 
    namespace App\Controllers;
    use CodeIgniter\controller;
    use App\Models\UserModel;

    class User extends Controller
    {
        public function login()
        {
            $model = new UserModel();
            
            $user = $this->request->getVar('user');
            $senha = $this->request->getVar('senha');
            $data['user'] = $model->getUser($user, $senha);
            $data['secao'] = \Config\Services::session();

            if(empty($data['user'])){
                return redirect('loginuser');
            }else{
                $sessionData = [
                    'id_user' => $data['user']['id_user'],
                    'logged_in' => TRUE
                ];
                $data['secao']->set($sessionData);
                return redirect('estudo');
            }
        }

        public function cadastro()
        {
            helper('form');
            echo view("templates/header");
		    echo view("pages/cadastro");
		    echo view("templates/footer");
        }

        public function gravarUser()
        {
            helper('form');
            $usermodel = new UserModel();
            if($this->validate([
                'user'=>['label'=>'user', 'rules'=>'required|min_length[6]'],
                'senha'=>['label'=>'senha', 'rules'=>'required|max_length[25]'],
            ])){
                //salvar no banco
                $usermodel->save([
                    'id_user'=>$this->request->getVar('id'),
                    'user'=>$this->request->getVar('user'),
                    'senha'=>md5($this->request->getVar('senha'))
                ]);
                //Depois de salvar voltar para raiz
                return redirect('loginuser');
            }else{
                echo view("templates/header");
                echo view("pages/cadastro");
                echo view("templates/footer");
            }
        }

        public function gravarEditUser()
        {
            helper('form');
            $usermodel = new UserModel();
            $data['secao']=\Config\Services::session();
            $data['user'] = $usermodel->getUserById($data['secao']->get('id_user'));
            if($this->validate([
                'user'=>['label'=>'user', 'rules'=>'required|min_length[6]'],
                'atual'=>['label'=>'atual', 'rules'=>'required|max_length[25]'],
                'senha'=>['label'=>'senha', 'rules'=>'required|max_length[25]'],
            ])){
                $atual = md5($this->request->getVar('atual'));
                if ($atual == $data['user']['senha']) {
                    $usermodel->save([
                        'id_user'=>$this->request->getVar('id'),
                        'user'=>$this->request->getVar('user'),
                        'senha'=>md5($this->request->getVar('senha'))
                    ]);
                    return redirect('editaruser');
                }
                $data['secao']->destroy();
                return redirect('loginuser');
                //Depois de salvar voltar para raiz
            }else{
                echo view("templates/header");
                echo view("pages/perfil");
                echo view("templates/footer");
            }
        }

        public function becomeadm()
        {
            helper('form');
            $model = new UserModel();
            $data['secao']=\Config\Services::session();
            $data['user'] = $model->getUserById($data['secao']->get('id_user'));
            if(!$data['secao']->get('logged_in')){
			    return redirect('loginuser');
		    }
            $data['user'] = $model->getUserById($data['secao']->get('id_user'));
            echo view("templates/header");
            echo view("pages/beadm", $data);
            echo view("templates/footer");
        }

        public function saveAdm()
        {
            helper('form');
            $usermodel = new UserModel();
            $data['secao']=\Config\Services::session();
            $data['user'] = $usermodel->getUserById($data['secao']->get('id_user'));
            if($this->validate([
                'secret'=>['label'=>'secret', 'rules'=>'required|matches[segredo]']
            ])){
                $usermodel->save([
                    'id_user'=>$this->request->getVar('id'),
                    'perfil'=>'1'
                ]);
                return redirect('editaruser');
                //Depois de salvar voltar para raiz
            }else{
                echo view("templates/header");
                echo view("pages/perfil");
                echo view("templates/footer");
            }
        }

        public function editarUser()
        {
            helper('form');
            $model = new UserModel();
            $data['secao']=\Config\Services::session();
            if(!$data['secao']->get('logged_in')){
			    return redirect('loginuser');
		    }
            $data['user'] = $model->getUserById($data['secao']->get('id_user'));
            echo view("templates/header");
		    echo view("pages/perfil", $data);
		    echo view("templates/footer");
        }

        public function logout()
        {
            $data['secao'] = \Config\Services::session();
            $data['secao']->destroy();
            return redirect('loginuser');
        }

        public function loginpage()
        {
            echo view("templates/header");
            echo view("loginuser");
            echo view("templates/footer");
        }
    }
?>