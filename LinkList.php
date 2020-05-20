<?php

include_once("Node.php");

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $countNode;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->countNode = 0;
    }

    public function insert($data, $index)
    {
        if ($index == 0) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->link;
            }
            $previous->link = $node;
            $node->link = $current;
            $this->countNode++;
        }
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;

        if ($this->lastNode == NULL) {
            $this->lastNode = $node;
        }
        $this->countNode++;
    }

    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $node->link = NULL;
            $this->lastNode = $node;
            $this->countNode++;
        } else {
            $this->addFirst($data);
        }

    }

    public function totalNodes()
    {
        return $this->countNode;
    }

    public function removeIndex($index)
    {

    }

    public function removeItem($item)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->data != $item) {
            if ($current->link == NULL) {
                return NULL;
            } else {
                $previous = $current;
                $current = $current->link;
            }
        }
        if ($current == $this->firstNode) {
            if ($this->countNode == 1) {
                $this->lastNode = $this->firstNode;
            } else {
                $this->firstNode = $this->firstNode->link;
            }
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            } else {
                $previous->link = $current->link;
            }
        }
        $this->countNode--;
    }

    public function get($index)
    {

    }

    public function printList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->link;
        }
        foreach ($listData as $value) {
            echo $value . " ";
        }
    }

    public function indexOf($data)
    {

    }

    public function emptyList()
    {
        $this->firstNode == NULL;

    }
}