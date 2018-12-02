<?php

namespace SKYW\Upgrader\Apps;

use SKYW\Upgrader\Cmds\CleanFiles;
use SKYW\Upgrader\Cmds\ModifyCode;
use SKYW\Upgrader\Cmds\SplitClasses;
use SKYW\Upgrader\Cmds\UpgradeSS;
use Symfony\Component\Console\Application as SymApp;

class Application extends SymApp
{
  public $app = 'Independent SilverStripe Upgrader Tool';
  public $ver = ' - v1.0.3';
  public function __construct()
  {
    parent::__construct($this->app, $this->ver);
  }

public function getAllCommands()
  {
    return [
        CleanFiles::class,
        ModifyCode::class,
        SplitClasses::class,
        UpgradeSS::class
    ];
  }
}
