<?php
	namespace Models;

	class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('vps.rafaelfmelo.com','rafael.fmelo@hotmail.com','rafael34456','Rafael');
			$mail->addAdress('rafael.fmelo@hotmail.com','Rafael');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}

	}

?>