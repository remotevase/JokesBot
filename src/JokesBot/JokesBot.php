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
            $sender->sendMessage($this->prefix . "What kind of joke? \n Your response choices: Knock Knock Joke);
            $this->getMessage;
            if($this->Message = "Knock Knock Joke"){
            $chance = rand(0,9);
            	switch($chance){
			      case 1:
			      	$sender->sendMessage($this->prefix . "Ho ho \n Your response choices: Ho ho who? or Cancel Joke");
			      	$this->getMessage;
			      	if($this->Message = "Ho ho who?"){
			      	$sender->sendMessage($this->prefix . "You know, your Santa impression could use a little work.");
			      	}
			      	else if(this->Message = "Cancel Joke"){
			      		$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.")
			      	}
			      	
			      break;
			      
			      case 2:
			      break;
			      
			      case 3:
			      break;
			     
			      case 4:
			      break;
			      
			      case 5:
			      break;
			      
			      case 6:
			      break;
			      
			      case 7:
			      break;
			     
			      case 8:
			      break;
			     
			      case 9:
			      break;
            		}
            	}	
            }
           }
        }
