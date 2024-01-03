<?php


use MyApp\Model\PropertyModel;

 require_once __DIR__ . '/../../vendor/autoload.php';



$propertyModel = new PropertyModel();

try {
  
    $properties = $propertyModel->getAll();

    
    if (!empty($properties)) {
     
        foreach ($properties as $property) {
            echo "Property ID: " . $property->getId() . "<br>";
            echo "Title: " . $property->getTitle() . "<br>";
            echo "Description: " . $property->getDescription() . "<br>";
            echo "city: " .$property->getCity()."<br>";
            echo "Price: " . $property->getPrice() . "<br>";
            echo "Area: " . $property->getArea() . "<br>";
            echo "Beds: " . $property->getBeds() . "<br>";
            echo "Baths: " . $property->getBaths() . "<br>";
            echo "Garage: " . $property->getGarage() . "<br>";
            echo "Localization: " . $property->getLocalization() . "<br>";
            echo "Status: " . $property->getStatus() . "<br>";
            echo "Image1: " . $property->getImage1() . "<br>";
            echo "Image2: " . $property->getImage2() . "<br>";
            echo "Image3: " . $property->getImage3() . "<br>";
            echo "Image4: " . $property->getImage4() . "<br>";
            echo "Image5: " . $property->getImage5() . "<br>";
            echo "Type ID: " . $property->getTypeID() . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No properties found.";
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
} 

?>
