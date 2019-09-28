<?php
namespace Dao\impl;

use Dao\PersonDao;
use Pojo\Person;
class PersonDaoImpl implements PersonDao
{
    /**
     * 根据id数据库查询(non-PHPdoc)
     * 
     * @see \Dao\PersonDao::getSecID()
     */
    public function getSecID(Person $person){
        // $pserson->getId();
        //模拟数据库查询
        $list = array(
            'name'=>'wlgs'
        );
        return $list;
    }
}

?>