<?php 
namespace App\Controllers;
use CodeIgniter\controller;
use App\Models\ConteudoModel;
use App\Models\QuestionModel;
use App\Models\UserModel;

class Home extends Controller
{
	public function questions()
	{
		//return view('welcome_message');
		$model = new QuestionModel();
		$data = [
			'questions'=>$model->getQuestions(),
			'secao'=>\Config\Services::session()
		];
		if(!$data['secao']->get('logged_in')){
			return redirect('loginuser');
		}
		$model = new QuestionModel();
		$data['questions'] = $model->getQuestions();
		echo view("templates/header");
		echo view("pages/homequestion", $data);
		echo view("templates/footer");
	}
	public function questionsadm()
	{
		//return view('welcome_message');
		$model = new QuestionModel();
		$usermodel = new UserModel();
		$data = [
			'questions'=>$model->getQuestions(),
			'secao'=>\Config\Services::session()
		];
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));
		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		$model = new QuestionModel();
		$data['questions'] = $model->getQuestions();
		echo view("templates/header");
		echo view("pages/homequestionadm", $data);
		echo view("templates/footer");
	}
	public function questoesgravar()
	{
		helper('form');
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		echo view("templates/header");
		echo view("pages/questaogravar");
		echo view("templates/footer");
	}
	public function index(){
		echo view("templates/header");
		echo view("pages/index");
		echo view("templates/footer");
	}
	public function qitem($id)
	{
		//return view('welcome_message');
		$model = new QuestionModel();
		$data['questao'] = $model->getQuestionItem($id);
		echo view("templates/header");
		echo view("pages/questionitem", $data);
		echo view("templates/footer");
	}
	public function qeditar($id = null)
	{
		helper('form');
		$model = new QuestionModel();
		$data['secao']=\Config\Services::session();
		$data['questions'] = $model->getQuestionItem($id);
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		echo view("templates/header");
		echo view("pages/questaogravar", $data);
		echo view("templates/footer");
	}
	public function qexcluir($id = null)
	{
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		$model = new QuestionModel();
		$model->delete($id);
		return redirect('adm');
	}
	public function news()
	{
		//return view('welcome_message');
		$model = new ConteudoModel();
		$data['conteudo'] = $model->getConteudoNews();
		echo view("templates/header");
		echo view("pages/homealuno", $data);
		echo view("templates/footer");
	}
	public function materials()
	{
		//return view('welcome_message');
		$model = new ConteudoModel();
		$data = [
			'conteudo'=>$model->getConteudoMaterial(),
			'secao'=>\Config\Services::session()
		];
		if(!$data['secao']->get('logged_in')){
			return redirect('loginuser');
		}
		$model = new ConteudoModel();
		$data['conteudo'] = $model->getConteudoMaterial();
		echo view("templates/header");
		echo view("pages/homealuno", $data);
		echo view("templates/footer");
	}
	public function adm()
	{
		$model = new ConteudoModel();
		$data['conteudo'] = $model->GetConteudo();
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		echo view("templates/header");
		echo view("pages/home", $data);
		echo view("templates/footer");
	}
	public function map()
	{
		echo view("templates/headermap");
		echo view("pages/map");
		echo view("templates/footer");
	}
	public function item($id)
	{
		//return view('welcome_message');
		$model = new ConteudoModel();
		$data['conteudo'] = $model->getConteudoItem($id);
		echo view("templates/header");
		echo view("pages/conteudoitem", $data);
		echo view("templates/footer");
	}
	public function inserir()
	{
		helper('form');
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		echo view("templates/header");
		echo view("pages/ConteudoGravar");
		echo view("templates/footer");
	}
	public function gravar()
	{
		helper('form');
		$model = new ConteudoModel();
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		//validação dos campos
		if($this->validate([
			'titulo'=>['label'=>'titulo', 'rules'=>'required|min_length[3]|max_length[100]'],
			'texto_curto'=>['label'=>'resumo', 'rules'=>'required|min_length[10]|max_length[100]'],
			'texto_completo'=>['label'=>'texto_completo', 'rules'=>'required|min_length[10]'],
			'tipo'=>['label'=>'tipo_do_conteudo', 'rules'=>'required'],
		])){
			//salvar no banco
			$model->save([
				'id_conteudo'=>$this->request->getVar('id'),
				'title_conteudo'=>$this->request->getVar('titulo'),
				'text_curto'=>$this->request->getVar('texto_curto'),
				'text_conteudo'=>$this->request->getVar('texto_completo'),
				'type_conteudo'=>$this->request->getVar('tipo'),
			]);
			//Depois de salvar voltar para raiz
			return redirect('adm');

		}else{
			echo view("templates/header");
			echo view("pages/ConteudoGravar",$data);
			echo view("templates/footer");
		}
	}

	public function gravarquestao()
	{
		helper('form');
		$model = new QuestionModel();
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		//validação dos campos
		if($this->validate([
			'anuncio'=>['label'=>'anuncio', 'rules'=>'required|min_length[10]'],
			'a'=>['label'=>'a', 'rules'=>'required'],
			'b'=>['label'=>'b', 'rules'=>'required'],
			'c'=>['label'=>'c', 'rules'=>'required'],
			'd'=>['label'=>'d', 'rules'=>'required'],
			'correcao'=>['label'=>'correcao', 'rules'=>'required|min_length[5]'],
		])){
			//salvar no banco
			$model->save([
				'id_question'=>$this->request->getVar('id'),
				'enunciado'=>$this->request->getVar('anuncio'),
				'a_answer'=>$this->request->getVar('a'),
				'b_answer'=>$this->request->getVar('b'),
				'c_answer'=>$this->request->getVar('c'),
				'd_answer'=>$this->request->getVar('d'),
				'correct'=>$this->request->getVar('correcao')
			]);
			//Depois de salvar voltar para raiz
			return redirect('adm');

		}else{
			echo view("templates/header");
			echo view("pages/questaogravar",$data);
			echo view("templates/footer");
		}
	}

	public function editar($id = null)
	{
		$model = new ConteudoModel();
		$data['conteudo'] = $model->getConteudoItem($id);
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		echo view("templates/header");
		echo view("pages/ConteudoGravar", $data);
		echo view("templates/footer");
	}

	public function excluir($id = null)
	{
		$data['secao']=\Config\Services::session();
		$usermodel = new UserModel();
		$data['usuario'] = $usermodel->getUserById($data['secao']->get('id_user'));

		if(!$data['secao']->get('logged_in') or $data['usuario']['perfil'] != 1){
			return redirect('loginuser');
		}
		$model = new ConteudoModel();
		$model->delete($id);
		return redirect('adm');
	}

	//--------------------------------------------------------------------

}
