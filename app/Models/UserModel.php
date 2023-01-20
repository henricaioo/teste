<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class UserModel extends Model{
        /*Atributos de Configuração*/
        protected $table = 'usuarios';
        protected $primaryKey = 'id_user';
        protected $allowedFields = ['user', 'senha','perfil'];
    
        public function getUser($user, $senha){
            return $this->asArray()->where(['user'=>$user, 'senha'=>md5($senha)])->first();
        }
        public function getUserById($id){
            return $this->asArray()->where(['id_user'=>$id])->first();
        }
    }
?>