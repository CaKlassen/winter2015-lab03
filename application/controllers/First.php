<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * Display the first quote only
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $record = $this->quotes->first();
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }

    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $record = $this->quotes->first();
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }
    
    /**
     * Display a specific quote (we're calling the third one)
     * 
     * @param type $val the quote to display
     */
    function gimme($val) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        $record = $this->quotes->get($val);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
    }
    
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */