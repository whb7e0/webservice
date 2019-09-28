<?php
include_once(dirname(__FILE__).'/load.php');

class JumpService
{
    public function getDbPerson($id){
        try{
            $pimpl = new \Service\impl\PersonServiceImpl();
            $obj = $pimpl->getPersonName($id);
            return json_encode($obj);
            
        }catch(Exception $e) {
     		return new SoapFault("SoapServer:", $e->getMessage());
     	}
    }
}

//定义接口
$soap = "soap.wsdl";
$class = "JumpService";
$SoapServer = new SoapServer($soap);
$SoapServer->setClass($class);
$SoapServer->handle();


