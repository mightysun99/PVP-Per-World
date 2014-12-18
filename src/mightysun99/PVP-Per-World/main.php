<?php

namespace mightysun99\PVP-Per-World;

use pocketmine\event\entity\EntityDamageEvent;

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
