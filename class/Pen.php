<?php
class Pen
{
	public $color;
	public function write()
	{
		$this->string_echo("Pen write");
	}
	function string_echo($strings)
	{
		echo $strings."<br>";
	}
	public function give_color($color)
	{
		$this->color=$color;
	}
	public function take_color()
	{
		$str="Pen color is ".$this->color;
		$this->string_echo($str);
	}
}
?>