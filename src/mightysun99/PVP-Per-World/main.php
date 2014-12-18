<?php

namespace mightysun99\PVP-Per-World;

use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener{
      private $WorldOn;
      private $WorldOff;
      
public function onEnable() {
    	@mkdir($this->getDataFolder());
        $this->configFile = (new Config($this->getDataFolder()."config.yml", Config::YAML, array()))->getAll();

public function onHurt(EntityDamageEvent $event) {
      $entity = $event->getEntity();
      $level = $event->getLevel()->getLevelName();
     if($entity instanceof Player) {
        if($level == "world"){
          //pvp only for world with name "world"
        }else{
        //for other worlds
        $event->setCancelled();
       }
     }
}
