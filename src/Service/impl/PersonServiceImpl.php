<?php
namespace Service\impl;

use Service\PersonService;
use Pojo\Person;
use Dao\impl\PersonDaoImpl;

class PersonServiceImpl implements PersonService
{
    public function getPersonName($id){
        //实例化对象
        $person = new Person($id);
        //实现查询
        $personDaoImpl = new PersonDaoImpl();
        
        return $personDaoImpl->getSecID($person);
    }
}

?>