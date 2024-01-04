<?php
namespace MyApp\Controllers;

require  '../../View/proprietyDetails.php';

namespace MyApp\Controllers;

use MyApp\Model\PropertyModel;

class PropertyDetailsController
{
    public function getPropertyDetails($propertyId)
    {
        try {
            $propertyModel = new PropertyModel();
            $property = $propertyModel->getById($propertyId);

            if ($property) {
                $propertyDetails = [
                    'id' => $property->getId(),
                    'title' => $property->getTitle(),
                    'description' => $property->getDescription(),
                    'city' => $property->getCity(),
                    'price' => $property->getPrice(),
                    'area' => $property->getArea(),
                    'beds' => $property->getBeds(),
                    'baths' => $property->getBaths(),
                    'garage' => $property->getGarage(),
                    'localization' => $property->getLocalization(),
                    'status' => $property->getStatus(),
                    'image1' => $property->getImage1(),
                    'image2' => $property->getImage2(),
                    'image3' => $property->getImage3(),
                    'image4' => $property->getImage4(),
                    'image5' => $property->getImage5(),
                    'type_id' => $property->getTypeID(),
                ];

                
                return $propertyDetails;
            } else {
                
                return [];
            }
        } catch (\Exception $e) {
            
            return [];
        }
    }
}
