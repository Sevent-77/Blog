<?php

class Usuarios extends Controller
{
    public function __construct(){
        $this->usuarioModel = $this->model("Usuario");
    }
    public function cadastrar()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['username']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['password']),
                'confirma_senha' => trim($formulario['confirm-password'])
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['username'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['password'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirm-password'])) :
                    $dados['confirma_senha_erro'] = 'Confirme a Senha';
                endif;
            else :
                if (Checa::checarNome($formulario['username'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';
                elseif (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                    
                elseif ($this->usuarioModel->checarEmail($formulario['email'])):
                    $dados['email_erro'] = 'O e-mail informado já está cadastrado';
                elseif (strlen($formulario['password']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif ($formulario['password'] != $formulario['confirm-password']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else :
                    $dados['senha'] = password_hash($formulario['password'], PASSWORD_DEFAULT);

                    if ($this->usuarioModel->armazenar($dados)) :    
                        echo 'Cadastro realizado com sucesso<hr>';
                    else :
                        die("Erro ao armazenar usuario no banco de dados");
                    endif;
                endif;
            endif;

        else :
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => ''
            ];

        endif;


        $this->view('usuarios/cadastrar', $dados);
    }


public function login()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['password']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['password'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;
            else :
                if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                else : 
                    echo 'Cadastro realizado com sucesso<hr>';
                endif;
            endif;

        else :
            $dados = [
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => ''
            ];

        endif;


        $this->view('usuarios/login', $dados);
    }
}