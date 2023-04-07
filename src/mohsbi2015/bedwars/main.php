<?php

namespace mohsbi2015\bedwars;

use pocketmine\plugin\PluginBase;

class main extends PluginBase {
  public function onEnable(): void {
    $this->getServer()->getLogger()->info("Enabling bedwars-core made by mohsbi2015 p.");
  }
}
