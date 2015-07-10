    public function onPlayerJoin(PlayerJoinEvent $event){
        $check = $config->get("Join-Messages");
        if($check == "true"){
        $config = $this->getConfig();
        $msgc = $config->get("Message");
        $msgc = str_replace("{PLAYER}", $p, $msgc);
        $player = $event->getPlayer();
        $p = $player->getName();
        $player->sendMessage("[Herobrine] " . $msgc . "");
        if($msgc == "" or " "){
            $player->sendMessage("[Herobrine] I see you!");
            $player->sendMessage("[Herobrine] I want my diamonds!");
            $player->sendMessage("[Herobrine] I want them, " . $p . "!");
            $player->sendMessage("[Herobrine] Now you die unless you enter the passcode!");
            }
           }else{
               $event->setCancelled();
               }
               }
            
    punlic function onPlayerChat(PlayerChatEvent $event){
        $config = $this->getConfig();
        $check = $config->get("Join-Messages");
        if($check == "true"){
        $code = $config->get("Passcode");
        $player = $event->getPlayer();
        $msg = $player->getMessage();
        if($player->getMessage === $code){
            $player->sendMessage("[Herobrine] Okay, I will leave you alone");
        }else{
            $player->sendMessage("[Herobrine] Wrong! You die!");
            $player->kill();
            }
        }else{
            $event->setCancelled();
         }
       }
