<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * Display the fifth quote
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $record = $this->quotes->get(5);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }
    
    /**
     * Display the 6th quote
     */
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $record = $this->quotes->get(6);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }    
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */