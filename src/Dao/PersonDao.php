<?php
namespace Dao;

use Pojo\Person;
interface PersonDao
{
    public function getSecID(Person $person);
}

?>