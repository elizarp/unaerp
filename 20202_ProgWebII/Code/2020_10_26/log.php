<?php

interface Logger {
	public function log($text);
	public function clean();
	public function getLast();
}

class TxtLogger implements Logger{
	public function log($text){
		# jogar $text num arquivo texto
	}
	public function clean(){
		# limpo o arquivo texto
	}
	public function getLast(){
		# abro o arquivo texto e retorno o ultimo log
	}
}


class XmlLogger implements Logger{
	public function log($text){
		# jogar $text num arquivo XML
	}
	public function clean(){
		# deleta o arquivo XML
	}
	public function getLast(){
		# abre o arquivo XML e retorno o ultimo log
	}
}
