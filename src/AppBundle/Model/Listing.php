<?php

namespace AppBundle\Model;

class Listing {
    private $id;
    private $sellerId;
    private $type;
    private $year;
    private $make;
    private $model;
    private $description;
    private $price;
    private $color;
    private $transmissionType;
    private $bodyStyle;
    private $options;

    function __construct() {
        $this->testVar = 'Testing';
    }

    public function getId() {
        return $this->id;
    }

    public function getSellerId() {
        return $this->sellerId;
    }

    public function getType() {
        return $this->type;
    }

}
