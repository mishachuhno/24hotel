<?php
class Auto_handle extends Pen
{
	public $bool_handle = false;
	public function chek()
	{
		$this->bool_handle=true;
	}
	public function unchek()
	{
		$this->bool_handle=false;
	}
	public function write() // Pen functions will not shows. Becouse it is OOP.
	{
		if($this->bool_handle == true)
		{
			$this->string_echo("Auto handle write");
		}
		else 
		{
			$this->string_echo("Auto handle do not write");
		}
	}
	function string_echo($strings)
	{
		echo $strings."<br>";
	}
}
?>