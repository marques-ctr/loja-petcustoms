<?php 
    require "includes/autoload.php";
    session_start();

    
    @$router = $_GET['model'].$_GET['action'];
    
    $view = "";

    $url = "http://localhost/loja-petcustoms";

    switch($router){

        case 'departamentocadastrar':
            
            $obj = new \LOJA\API\DepartamentoCadastrar;
            $msg = $obj->msg;
            $view = "form-departamento.php";
            break;

        case 'departamentolistar':

            LOJA\includes\Seguranca::restritoAdm();

            $obj = new \LOJA\API\DepartamentoListar;
            $lista = $obj->lista;
            $view = "lista-departamento.php";
            break;

        case 'departamentovisualizar':
            $obj = new \LOJA\API\DepartamentoVisualizar;
            $departamento = $obj->dados;
            $view = "visualiza-departamento.php";
            break;


        case 'clientecadastrar':
            
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;

        case 'clientelistar':
            $obj = new \LOJA\API\ClienteListar;
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;

        case 'clientevisualizar':
            $obj = new \LOJA\API\ClienteVisualizar;
            $cliente = $obj->dados;
            $view = "visualiza-cliente.php";
            break;
            
        case 'usuariolistar':
            $obj = new \LOJA\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
            break;

        case 'usuariocadastrar':
            
            $obj = new \LOJA\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
            break;       

        case 'produtocadastrar':
            
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\DepartamentoListar;                
            $lista = $obj2->lista;

            $view = "form-produto.php";
            break;

        case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'loginadm':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = "form-login-admin.php";
            break;

        case 'paineladm':
            $view = "painel-admin.php";
            break;

        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = "form-login-admin.php";
            break;


        case 'admin/home':
            $view = "admin.php";
            break;

        case 'home':
            $view = "index.php";
            break;      

        case 'item':
            $view = "item.php";
            break;

        case 'produtos':
            $obj = new \LOJA\API\ProdutoListarHome;
            $lista = $obj->lista;
            $view = "produtos.php";
            break;

        case 'carrinhoadicionar':
            $obj = new \LOJA\API\CarrinhoVisualizar;
            $view = "carrinho.php";
            break;

        case 'carrinhoremover':
            $obj = new \LOJA\API\CarrinhoRemover;
            
            $view = "carrinho.php";
            break;

        case 'carrinho':
            $view = "carrinho.php";
            break; 

        

        default:
        echo "ok";
        $obj = new \LOJA\API\DepartamentoListar;
        $lista = $obj->lista;
        $view = "lista-produto.php";
        break;
    }

    include "view/{$view}";

?>

