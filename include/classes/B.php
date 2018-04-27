<?php 
Class B{

	public function InitObject(){

		$this->A = new A;

	}

	public function __construct(){
		self::InitObject();

		echo "<br> Hay! i'm constructor of class 'B' <br> And you see you only Create instance of class B class A auto included extended thanks for using this class";


	}

	public function index(){

		echo "And you see you only Create instance of CLass B class A auto included extended thanks for using this class";

	}

}