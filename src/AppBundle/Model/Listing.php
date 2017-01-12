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
        $this->id = 1234;
        $this->sellerId = 0001;
        $this->type = 'Truck';
        $this->year = 2009;
        $this->make = 'Chevrolet';
        $this->model = 'Silverado';
        $this->description = 'A 2009 Chevy Silverado ready for purchase!';
        $this->price = 5989.00;
        $this->color = 'Black';
        $this->transmissionType = 'Automatic';
        $this->bodyStyle = 'Extended Cab';
        $this->options = [
            'Height' => '16 feet',
            'Weight' => '1500 lbs'
        ];
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

    public function getYear() {
        return $this->year;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getColor() {
        return $this->color;
    }

    public function getTransmissionType() {
        return $this->transmissionType;
    }

    public function getBodyStyle() {
        return $this->bodyStyle;
    }

    public function getOptions() {
        return $this->options;
    }

}
