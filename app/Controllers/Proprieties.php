<?php
namespace MyApp\Controllers;


require  '../../View/proprieties.php';
use MyApp\Model\PropertyModel;

class PropertyController
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
                    'user_id' => $property->getUserId(), 
                ];
            }

            return $formattedProperties;
        } catch (\Exception $e) {
            
            return [];
        }
    }
}
