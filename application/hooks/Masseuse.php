<?php

/**
 * A simple clas that overrides the default display functionality and
 * emboldens all capitalized words in a single quote page.
 */
class Masseuse extends Application {

    function __construct() {
        parent::__construct();
    }

    function embolden()
    {
        // Get an instance of the display object
        $CI =& get_instance();
        
        // Get the output of the objects
        $page = $CI->output->get_output();

        // Retrieve the DOM object
        $dom = new DOMDocument();

        $dom->loadHTML($page);
        
        $plist = $dom->getElementsByTagName('p');
        
        $search = array(
            '/([A-Z][A-Za-z]*)/'  
        );

        $replace = array(
            '<strong>$1</strong>'
        );
        
        // Loop through each paragraph tag on the page
        foreach($plist as $p)
        {
            // If the paragraph tag has a class of 'lead'
            if ($p->getAttribute('class') == 'lead')
            {
                $string = $p->nodeValue;

                // Replace the string with bold capitalized words
                $string = preg_replace($search, $replace, $string);

                // Create a new tag object
                $frag = $dom->createDocumentFragment();
                $frag->appendXML($string);
                
                // Append the new object to the element
                $p->nodeValue = '';
                $p->appendChild($frag);
            }
        }
        
        // Render the page
        echo $dom->saveHTML();
    }
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */