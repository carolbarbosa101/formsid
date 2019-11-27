<?php
class Conexao
{
	public $servidor;
	public $usuario;
	public $senha;
	public $banco;
	public $conn;
	
	function __construct($pServ,$pUser,$pSenha,$pBanco)
	{
		$this->servidor = $pServ;
		$this->usuario = $pUser;
		$this->senha = $pSenha;
		$this->banco = $pBanco;
	}
	
	function abrirConexao()
	{
		$this->conn = mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->banco);

		if (mysqli_connect_errno())
		{
			echo "Falha ao Conectar: " . mysqli_connect_error();
		}
		else
		{
			//echo "Conectado";
		}
	}
	
	function abrirConsulta($pQuery)
	{
		$resposta = 0;
		$result = mysqli_query($this->conn,$pQuery);
		while($row = mysqli_fetch_array($result))
		{
			if(!empty($row[0])){
				$resposta = $row[0];
			}
		}
		return $resposta;	
		$this->fecharConexao();
	}
	
	function executarSQL($pQuery)
	{
        mysqli_set_charset($this->conn,"utf8");
		mysqli_query($this->conn,$pQuery);
		$this->fecharConexao();
	}
	
	function fecharConexao()
	{
		mysqli_close($this->conn);
	}
}
?>