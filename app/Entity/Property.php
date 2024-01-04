<?php
namespace MyApp\Entity;
class Property {
    private $id;
    private $title;
    private $description;
    private $city;
    private $price;
    private $area;
    private $beds;
    private $baths;
    private $garage;
    private $localization;
    private $status;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    private $type_id;
    private $user_id; // New property for user ID

    public function __construct($title, $description, $city, $price, $area, $beds, $baths, $garage, $localization, $status, $image1, $image2, $image3, $image4, $image5, $type_id, $user_id) {
        $this->title = $title;
        $this->description = $description;
        $this->city = $city;
        $this->price = $price;
        $this->area = $area;
        $this->beds = $beds;
        $this->baths = $baths;
        $this->garage = $garage;
        $this->localization = $localization;
        $this->status = $status;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->type_id = $type_id;
        $this->user_id = $user_id;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCity() {
        return $this->city;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getArea() {
        return $this->area;
    }

    public function getBeds() {
        return $this->beds;
    }

    public function getBaths() {
        return $this->baths;
    }

    public function getGarage() {
        return $this->garage;
    }

    public function getLocalization() {
        return $this->localization;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getImage1() {
        return $this->image1;
    }

    public function getImage2() {
        return $this->image2;
    }

    public function getImage3() {
        return $this->image3;
    }

    public function getImage4() {
        return $this->image4;
    }

    public function getImage5() {
        return $this->image5;
    }

    public function getTypeID() {
        return $this->type_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setBeds($beds) {
        $this->beds = $beds;
    }

    public function setBaths($baths) {
        $this->baths = $baths;
    }

    public function setGarage($garage) {
        $this->garage = $garage;
    }

    public function setLocalization($localization) {
        $this->localization = $localization;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setImage1($image1) {
        $this->image1 = $image1;
    }

    public function setImage2($image2) {
        $this->image2 = $image2;
    }

    public function setImage3($image3) {
        $this->image3 = $image3;
    }

    public function setImage4($image4) {
        $this->image4 = $image4;
    }

    public function setImage5($image5) {
        $this->image5 = $image5;
    }

    public function setTypeID($type_id) {
        $this->type_id = $type_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
}