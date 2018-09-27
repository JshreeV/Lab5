<?php
/**
 * Created by PhpStorm.
 * User: Jayshree
 * Date: 2018-09-27
 * Time: 12:01 PM
 */

class Page{
    private $header;
    private $footer;
    private $title;

    public function __construct($header,$footer,$title)
    {
        $this->header=$header;
        $this->footer=$footer;
        $this->title=$title;
    }

    public function getHeader(){
        return $this->header;
    }

    public function setHeader($value){
        $this->header=$value;
    }

    public function getFooter(){
        return $this->footer;
    }

    public function setFooter($value){
        $this->header=$value;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($value){
        $this->header=$value;
    }

    public function displayPage(){
        return "Header: ".$this->header." || Footer: ".$this->footer." || Title: ".$this->title;
    }
}