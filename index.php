<?php
include_once ("LinkList.php");
include_once ("Node.php");
$data= new LinkList();
$data->addFirst(5);
$data->addFirst(6);
$data->addFirst(7);
$data->addLast(8);
//$data->removeItem(7);
$data->insert(9,1);
$data->printList();