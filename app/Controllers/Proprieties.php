<?php
namespace MyApp\Controllers;


use MyApp\Model\PropertyModel;

require  '../../View/proprieties.php';
class Proprieties
{
    public function getAllPropertiesForCardView(): array
    {
        try {
            $propertyModel = new PropertyModel();
            $properties = $propertyModel->getAll();

            $formattedProperties = [];

            foreach ($properties as $property) {
                $formattedProperties[] = [
                    'image' => $property->getImage1(),
                    'title' => $property->getTitle(),
                    'status' => $property->getStatus(),
                    'price' => $property->getPrice(),
                    'area' => $property->getArea(),
                    'beds' => $property->getBeds(),
                    'baths' => $property->getBaths(),
                    'garage' => $property->getGarage(),
                ];
            }

            return $formattedProperties;
        } catch (\Exception $e) {
            // exceptions 
            return [];
        }
    }




}