<?php
namespace Howtomakeaturn\PDFInfo;
/*
* Inspired by http://stackoverflow.com/questions/14644353/get-the-number-of-pages-in-a-pdf-document/14644354
* @author howtomakeaturn
*/

class PDFInfo
{
    protected $file;
    public $output;

    public $pages;
    #protected $title;
    #protected $author;

    public function __construct($file)
    {
        $this->file = $file;
        
        $this->loadOutput();
        
        $this->parseOutput();        
    }
    
    public function loadOutput()
    {
        $cmd = "/usr/bin/pdfinfo";           // Linux

        $file = $this->file;
        // Parse entire output
        // Surround with double quotes if file name has spaces
        exec("$cmd \"$file\"", $output);
        
        $this->output = $output;
    }

    private function parseOutput()
    {
        $this->pages = $this->parse('Pages');
    }
        
    private function parse($attribute)
    {
        // Iterate through lines
        $result = null;
        foreach($this->output as $op)
        {
            // Extract the number
            if(preg_match("/" . $attribute . ":\s*(\d+)/i", $op, $matches) === 1)
            {
                $result = $matches[1];
                break;
            }
        }

        return $result;    
    }
    
}

/*
    static public function load()
    {
        $pdfInfo = new self();
        
        
Title:          test1.pdf
Author:         John Smith
Creator:        PScript5.dll Version 5.2.2
Producer:       Acrobat Distiller 9.2.0 (Windows)
CreationDate:   01/09/13 19:46:57
ModDate:        01/09/13 19:46:57
Tagged:         yes
Form:           none
Pages:          13    <-- This is what we need
Encrypted:      no
Page size:      2384 x 3370 pts (A0)
File size:      17569259 bytes
Optimized:      yes
PDF version:    1.6    
    }
*/
