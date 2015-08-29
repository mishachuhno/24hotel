<?php
class Auto_handle extends Pen
{
	public function write() // Pen functions will not shows. Becouse it is OOP.
	{
		$this->string_echo("Auto handle write");
	}
	function string_echo($strings)
	{
		echo $strings."<br>";
	}
}
?>