<?php
class Calculadora
{
	private $valores;
	
	public function setValores(array $valores)
	{
		$this->valores = $valores;
	}
	
	//soma todos os valores do array
	public function soma()
	{
		return array_sum($this->valores);
	}
	
	//subtrai de zero o somatório de todos os valores do array
	public function subtrai()
	{
		$result=0;
		foreach($this->valores as $value){
			$result-=$value;
		}
		
		return $result;
	}
	
	//multiplica todos os valores do array
	public function mult()
	{
		return array_product($this->valores);
	}
	
	//divide o primeiro pelo segundo valor do array.
	//somente para DOIS valores
	public function div()
	{
		$cont = count ($this->valores);
		if ($cont!=2){
			return "Para divisão, são aceitos apenas dois valores!";
		}
		else{
			if ($this->valores[1]!=0)
				return $this->valores[0]/$this->valores[1];
			//remova os comentários das duas próximas linhas e verifique que o teste 'testDiv2' passará com sucesso!
			//else
				//return "Erro!";
		}
	}
}
?>