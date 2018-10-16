<?php
require 'body/body_parts/header.php';
require 'body/body_parts/aside.php';
require 'body/body.php';
require 'head/head.php';

class Html {
	private $html = '';
	private $head = '';
	private $body = '';

	public function Html($content) {
		//header
		$header_list = array('lang' => $lang, 'list' => array());
		$temp_header = new Header($header_list);
		$header = $temp_header->getHeader();

		//right menu
		$aside_list = array('lang' => $lang, 'list' => array());
		$temp_aside = new Aside($aside_list);
		$aside = $temp_aside->getAside();

		//head
		$head_list = array('lang' => $lang, 'list' => array());
		$temp_head_list = new Head($head_list);
		$this->head = $temp_head_list->getHead();

		//body
		$body_parts = array('header' => $header, 'aside' => $aside, 'content' => $content);
		$temp = new Body($body_parts);
		$this->body = $temp->getBody();
	}

	public function getHtml() {
		$this->html = $this->head;
		$this->html .= $this->body;

		return $this->html;
	}
}
?>