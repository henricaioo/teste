<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class QuestionModel extends Model{
        protected $table = 'question';
        protected $primaryKey = 'id_question';
        //campos editáveis
        protected $allowedFields = ['enunciado','a_answer','b_answer','c_answer','d_answer','correct'];

        public function getQuestions(){
            return $this->findAll();
        }
        /*mostra conteúdo específico*/
	    public function getQuestionItem($id){
            return $this->asArray()->where(['id_question'=>$id])->first();
        }
    }
?>