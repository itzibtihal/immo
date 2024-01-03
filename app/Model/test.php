<?php

// Include your Property and PropertyModel classes
use MyApp\Entity\Property;
use MyApp\Model\PropertyModel;
// Create a Property entity
$property = new Property(
    "Beautiful House",
    "A spacious and beautiful house with a great view.",
    "Cityville",
    250000.00,
    2000,
    4,
    2,
    1,
    1,
    "Near the park",
    "Available",
    "image1.jpg",
    "image2.jpg",
    "image3.jpg",
    "image4.jpg",
    "image5.jpg",
    1 // Assuming type_id is 1
);

try {
    // Create an instance of PropertyModel with the appropriate table name
    $propertyModel = new PropertyModel("property"); // Replace "property" with your actual table name

    // Call the save function with the Property entity
    $propertyModel->save($property);

    // If execution reaches here, the save was successful
    echo "Property saved successfully!";
} catch (\Exception $e) {
    // Handle any exceptions that may occur during the save process
    echo "Error: " . $e->getMessage();
}

?>
