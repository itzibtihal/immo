<?php

namespace MyApp\Model;
use MyApp\Dao\DaoImpl\DaoImplementation;

use MyApp\Config\DbConnection;
use MyApp\Dao\DaoInterface;
use MyApp\Entity\Property;

use PDO;
use PDOException;



class PropertyModel extends DaoImplementation
{
    public function __construct()
    {
        parent::__construct("property");
    }

    public function getById($id)
    {
        $query = "SELECT * FROM $this->tableName WHERE id = :id";
        $statement = $this->getConnection()->prepare($query);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        if ($statement) {
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $property = new Property(
                    $result['title'],
                    $result['description'],
                    $result['city'],
                    $result['price'],
                    $result['area'],
                    $result['beds'],
                    $result['baths'],
                    $result['garage'],
                    $result['localization'],
                    $result['status'],
                    $result['image1'],
                    $result['image2'],
                    $result['image3'],
                    $result['image4'],
                    $result['image5'],
                    $result['type_id'],
                    $result['user_id'] // Add user_id
                );

                $property->setId($result['id']);

                return $property;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    public function getAll(): array
    {
        $query = "SELECT * FROM $this->tableName";
        $statement = $this->getConnection()->query($query);

        if ($statement) {
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            $properties = [];

            foreach ($results as $result) {
                $property = new Property(
                    $result['title'],
                    $result['description'],
                    $result['city'],
                    $result['price'],
                    $result['area'],
                    $result['beds'],
                    $result['baths'],
                    $result['garage'],
                    $result['localization'],
                    $result['status'],
                    $result['image1'],
                    $result['image2'],
                    $result['image3'],
                    $result['image4'],
                    $result['image5'],
                    $result['type_id'],
                    $result['user_id'] // Add user_id
                );

                $property->setId($result['id']);

                $properties[] = $property;
            }

            return $properties;
        } else {

            return [];
        }
    }

    public function save($entity): void
    {
        try {
            if (!$entity instanceof Property) {
                throw new \InvalidArgumentException("Invalid entity type provided. Expected Property.");
            }

            $query = "INSERT INTO $this->tableName 
                      (title, description, city, price, area, beds, baths, garage, localization, status, image1, image2, image3, image4, image5, type_id, user_id)
                      VALUES
                      (:title, :description, :city, :price, :area, :beds, :baths, :garage, :localization, :status, :image1, :image2, :image3, :image4, :image5, :type_id, :user_id)";

            $statement = $this->getConnection()->prepare($query);

            $statement->bindParam(':title', $entity->getTitle());
            $statement->bindParam(':description', $entity->getDescription());
            $statement->bindParam(':city', $entity->getCity());
            $statement->bindParam(':price', $entity->getPrice());
            $statement->bindParam(':area', $entity->getArea());
            $statement->bindParam(':beds', $entity->getBeds());
            $statement->bindParam(':baths', $entity->getBaths());
            $statement->bindParam(':garage', $entity->getGarage());
            $statement->bindParam(':localization', $entity->getLocalization());
            $statement->bindParam(':status', $entity->getStatus());
            $statement->bindParam(':image1', $entity->getImage1());
            $statement->bindParam(':image2', $entity->getImage2());
            $statement->bindParam(':image3', $entity->getImage3());
            $statement->bindParam(':image4', $entity->getImage4());
            $statement->bindParam(':image5', $entity->getImage5());
            $statement->bindParam(':type_id', $entity->getTypeID());
            $statement->bindParam(':user_id', $entity->getUserId()); // Add user_id

            $result = $statement->execute();

            if ($result) {
                $entity->setId($this->getConnection()->lastInsertId());
            } else {
                throw new \RuntimeException("Failed to save the entity to the database.");
            }
        } catch (\PDOException $pdoException) {
            throw $pdoException;
        } catch (\RuntimeException $runtimeException) {
            throw $runtimeException;
        }
    }

    public function getByTypeId($typeId): array
    {
        $query = "SELECT * FROM $this->tableName WHERE type_id = :type_id";
        $statement = $this->getConnection()->prepare($query);
        $statement->bindParam(":type_id", $typeId, PDO::PARAM_INT);
        $statement->execute();

        if ($statement) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
}