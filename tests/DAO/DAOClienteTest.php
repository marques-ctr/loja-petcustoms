<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;


class DAOClienteTest extends TestCase
{
    public function testCadastro()
    {
        $c = new Cliente();
        $c->setNome('Felippe');
        $c->setNascimento('29/10/1994');
        $c->setCpf('123.456.789-10');
        $c->setEmail('Felippe@email.com');
        $c->setTelefone('(21)1231-2132');
        $c->setEstado('Rio de Janeiro');
        $c->setCep('23040-160');
        $c->setEndereco('Rua A, 20');

        $DAO = new DAOCliente();
        $msg = $DAO->cadastrar($c);
        $this->assertEquals($msg, "Cadastrado com sucesso");

    }} ?>
        