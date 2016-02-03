<?php

class Last extends Application {
    function __construct() {
        parent::__construct();
    }
	
	//creates the link to the last
    function index() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->last();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

?>