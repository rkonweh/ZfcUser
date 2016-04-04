<?php
/**
 * @Author: Daniel
 * @Date:   2016-04-04 11:57:00
 * @Last Modified by:   Daniel
 * @Last Modified time: 2016-04-04 12:54:34
 */

namespace ZfcUser\Factory\Authentication\Storage;

use ZfcUser\Authentication\Storage;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Db implements FactoryInterface
{

  public function createService(ServiceLocatorInterface $serviceLocator)
  {

    $mapper = $serviceLocator->get('zfcuser_user_mapper');
    
    $storageDb = new Storage\Db();
    $storageDb->setMapper($mapper);

    return $storageDb;

  }

}