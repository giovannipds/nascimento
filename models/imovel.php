<?php
	require_once('banco.php');

	class Imovel
	{
		private $id, $id_bentoimoveis, $categoria, $tipo, $cidade, $bairro, $preco, $incc, $descricao;

		function Imovel($id, $id_bentoimoveis, $categoria, $tipo, $cidade, $bairro, $preco, $incc, $descricao) {

		}
		function inserir() {
			$banco = new Banco;
			$banco->conectar();
			$banco->query('INSERT INTO '.$banco->prefix.'imoveis (id, id_bentoimoveis, categoria, tipo, cidade, bairro, preco, incc, descricao) VALUES ("'.$this->id.'", "'.$this->id_bentoimoveis.'", "'.$this->categoria.'", "'.$this->tipo.'", "'.$this->cidade.'", "'.$this->bairro.'", "'.$this->preco.'", "'.$this->incc.'", "'.$this->descricao.'")');
			$banco->desconectar();
		}
		function deletar($id) {
			
		}
	}
?>