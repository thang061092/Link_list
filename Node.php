<?php


class Node
{
    public $data;
    public $link;

    function __construct($data)
    {
        $this->data=$data;
        $this->link=NULL;
    }

    function readNode(){
        return $this->data;
    }
}