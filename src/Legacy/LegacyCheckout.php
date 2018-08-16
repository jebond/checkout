<?php
namespace Legacy;

include_once $_SERVER['DOCUMENT_ROOT'] . '/subincludesdir.inc';
require "$subincludesdir/database.inc";
require_once "$subincludesdir/Classes/SSM_SystemSettingsManager.php";

class LegacyCheckout
{
  protected $checkoutUser;
  protected $SystemMgr;

  public function __construct()
  {
      $this->SystemMgr = new SSM_SystemSettingsManager();
  }

  public function getCheckoutUser(){
      $this->checkoutUser = $_SESSION['userid'];
      return $this->checkoutUser;
  }
}