<?php

interface People_Setting {

	public function register();
	public function display();
	public function sanitize( $input );
	
}