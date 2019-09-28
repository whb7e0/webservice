<?php
namespace Service\impl;

use Service\PersonService;
use Pojo\Person;
use Dao\impl\PersonDaoImpl;

class PersonServiceImpl implements PersonService
{
    public function getPersonName($id){
        //ʵ��������
        $person = new Person($id);
        //ʵ�ֲ�ѯ
        $personDaoImpl = new PersonDaoImpl();
        
        return $personDaoImpl->getSecID($person);
    }
}

?>