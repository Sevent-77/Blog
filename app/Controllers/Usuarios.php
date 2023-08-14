<?php
class Usuarios extends Controller{
    public function cadastrar(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $pattern_email = '/^[a-zA-Z0-9.+]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,}$/';
        $pattern_nome = '/^[a-zA-Z\s\-\'\.]+$/';
        if(isset($formulario) && preg_match($pattern_email, $formulario['email'])&& preg_match($pattern_nome, $formulario['username'])):
            $dados=[
                'nome'=>trim($formulario['username']),
                'email'=>trim($formulario['email']),
                'senha'=>trim($formulario['password']),
                'confirma_senha'=>trim($formulario['confirm-password'])
            ];
            var_dump($dados);
        else:
            $dados=[
                'nome'=>'',
                'email'=>'',
                'senha'=>'',
                'confirma_senha'=>''
            ];
        endif;
        $this->view('usuarios/cadastrar',$dados);
    }//fim da função cadastrar
}//fim da classe Usuario
?>