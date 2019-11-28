<?php
    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Cliente;

    class DAOCliente{

        public function cadastrar(Cliente $cliente){
            $sql = "INSERT INTO cliente
                VALUES (default, :nome, :nascimento,  :cpf, :email, :telefone, :estado, :cep, :endereco)";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":nascimento", $cliente->getNascimento());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":estado", $cliente->getEstado());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":endereco", $cliente->getEndereco());
           
            $con->execute();

            return "Cadastrado com sucesso";
        }

            public function listaClientes(){

                $sql = "SELECT * FROM cliente";
                $con = Conexao::getInstance()->prepare($sql);
                $con->execute();

                $lista = array();

                while($cliente = $con->fetch(\PDO::FETCH_ASSOC)){
                    $lista[] = $cliente;
                }

                return $lista;
            }
    }
?>
