<?php
namespace Dao\impl;

use Dao\PersonDao;
use Pojo\Person;
class PersonDaoImpl implements PersonDao
{
    /**
     * ����id���ݿ��ѯ(non-PHPdoc)
     * 
     * @see \Dao\PersonDao::getSecID()
     */
    public function getSecID(Person $person){
        // $pserson->getId();
        //ģ�����ݿ��ѯ
        $list = array(
            'name'=>'wlgs'
        );
        return $list;
    }
}

?>