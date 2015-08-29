<?php
class Mechanical_pencil extends Auto_handle
{
	public function write() // Pen functions will not shows. Becouse it is OOP.
	{
		Pen::string_echo("Mechanical pencil write"); // Call function in calss Pen
	}
}
?>