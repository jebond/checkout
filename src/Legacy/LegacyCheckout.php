<?php
namespace Legacy;

use System\System;
use TNTDatabase\TNTDatabase;
use TNTShipping\TNTShipping;

include_once $_SERVER['DOCUMENT_ROOT'] . '/subincludesdir.inc';
require "$subincludesdir/database.inc";
require_once "$subincludesdir/Classes/SSM_SystemSettingsManager.php";

class LegacyCheckout
{
  protected $checkoutUser;
  protected $SystemMgr;
  protected $System;
  protected $ErrorHandler;

  public function __construct(System $System,TNTDatabase $TntDb, TNTShipping $TntShip)
  {
      $this->System = $System;
      $this->ErrorHandler = $this->System->getErrorHandler();
      try{
          $this->SystemMgr = new SSM_SystemSettingsManager();
      }
      catch(\RuntimeException $ex){
          throw new $this->ErrorHandler->RuntimeException('Error instantiating SystemSetingsManager');
      }

  }

  public function getCheckoutUser(){
      $this->checkoutUser = $_SESSION['userid'];
      return $this->checkoutUser;
  }
}