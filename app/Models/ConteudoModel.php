<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ConteudoModel extends Model{
        protected $table = 'conteudo';
        protected $primaryKey = 'id_conteudo';
        //campos editáveis
        protected $allowedFields = ['title_conteudo','text_curto','text_conteudo','type_conteudo'];

        public function getConteudo(){
            return $this->findAll();
        }
        /*mostra conteúdo específico*/
	    public function getConteudoItem($id){
            return $this->asArray()->where(['id_conteudo'=>$id])->first();
        }

        public function getConteudoNews(){
            return $this->asArray()->where(['type_conteudo'=>'noticia'])->findAll();
        }
        public function getConteudoMaterial(){
            return $this->asArray()->where(['type_conteudo'=>'material'])->findAll();
        }
    }
?>