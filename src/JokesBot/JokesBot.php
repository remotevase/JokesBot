<?php

namespace JokesBot;

use pocketmine\command\{Command, CommandSender};
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\level\{Position, Level};
use pocketmine\utils\TextFormat as C;
use pocketmine\math\Vector3;

class JokesBot extends PluginBase{

public $this->prefix = C::BLUE . "[JokesBot]" . C::WHITE . "-" . C::BLACK . " ";

public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch(strtolower($command->getName())){
            case "Jokes":
            if($sender instanceof Player(){
            $sender->sendMessage($this->prefix . "What kind of joke?);
            $this->getFirstMessage;
            case $this->FirstMessage = "Knock-Knock-Joke;
            $chance = rand(0,9);
			      if($chance = 1){
			      }
			      if($chance = 2){
			      }
			      if($chance = 3){
			      }
			      if($chance = 4){
			      }
			      if($chance = 5){
			      }
			      if($chance = 6){
			      }
			      if($chance = 7){
			      }
			      if($chance = 8){
			      }
			      if($chance = 9){
			      }
