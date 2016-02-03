<?php


//first. this creates the link to the first in the data model.
class First extends Application {
    function __construct() {
        parent::__construct();
    }
	
	//creates link to the first
    function index() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
	
	//Wildcard routing 
	function zzz(){
		$this->data['pagebody'] = 'justone';
        $record  = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
	}
}

?>