<?php
/**
 * @Author: Daniel
 * @Date:   2016-04-04 12:56:01
 * @Last Modified by:   Daniel
 * @Last Modified time: 2016-04-04 12:59:39
 */

namespace ZfcUser\Factory\Authentication\Adapter;

use ZfcUser\Authentication\Adapter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Db implements FactoryInterface
{

  public function createService(ServiceLocatorInterface $serviceLocator)
  {

    $mapper = $serviceLocator->get('zfcuser_user_mapper');
    $options = $serviceLocator->get('zfcuser_module_options');
    
    $adapterDb = new Adapter\Db();
    $adapterDb->setMapper($mapper);
    $adapterDb->setOptions($options);

    return $adapterDb;

  }

}