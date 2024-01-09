<?php
	
	namespace Controllers;
	class HomeController
	{

		public function __construct(){
			$this->view = new \Views\MainView('home');
		}
		public function executar(){
			$this->view->render(array('titulo'=>'Home'));
		}
	}
?>