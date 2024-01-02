<?php 

namespace MyApp\Model\Dao;

interface DaoInterface
{
    public function getById($id);
    public function getAll(): array;
    public function save($entity): void;
    public function update($entity): void;
    public function delete($entity): void;
}
