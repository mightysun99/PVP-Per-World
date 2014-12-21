<?php

namespace mightysun99\PVP-Per-World;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
      private $WorldOn;
      private $worldname;
public function onEnable() {
    	$config = $this->getConfig();
    	$this->WorldOn = $config->get("WorldOn");
    	$this->worldname = $config->get("LevelForPVP");
    	/*if($this->WorldOn == "false"){ //This checks to see if the config has been edited or not
    	      //$this->getLogger()->info("Please set your PVP-enabled world in the config.");
    	}     WHY???          */
}

public function onDisable(){
      $this->getLogger()->info("PVP-Per-World has been disabled.");
}

public function onHurt(EntityDamageEvent $event) {
      $entity = $event->getEntity();
      $level = $event->getLevel()->getLevelName();
      if($entity instanceof Player) {
        if(!$this->WorldOn == "false"){
            if($level == $this->worldname){
            //pvp only for world with name "world"
            }else{
                  //for other worlds
                  $event->setCancelled();
            }
        }
      }
}
