<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class OnboardingConversation extends Conversation
{

    protected $sid;

    protected $choise;

    public function askid()
    {
        $this->ask('Enter your id no',function(Answer $answer)
        {
            $this->sid = $answer->getText();
            if($this->sid == "19IT054")
            {
                $this->say('hello deep kavar ');
                $this->askchoise0();
            }
            elseif($this->sid == "19IT053")
            {
                $this->say('hello sahil kanjariya ');
                $this->askchoise1();
            }
            else{
                $this->say('enter valid student id no');
                $this->askid();
            }


        });
    }

    public function askchoise0()
    {

    $this->ask('Enter 1 for Attandance'."<br>".'Enter 2 for your last semester sgpa'."<br>".'If you have any quare regarding to marks and attandance enter 3'."<br>"    , function(Answer $answer) {
    // Save result
    $this->choise = $answer->getText();

    switch($this->choise){
            case 1:
                $this->say('Your Attandance is 90%');
                $this->say('enter hi');
                break;
            case 2 :
                $this->say('last semester  sgpa is 8.5');
                $this->say('enter hi');
                break;
            case 3:
                $this->say('the helpline no is 1234567892');
                $this->say('enter hi');
                break;


        }
    });
    }
    public function askchoise1()
    {
        $this->ask('Enter 1 for Attandance'."<br>".'Enter 2 for your last semester sgpa'."<br>".'If you have any quare regarding to marks and attandance enter 3', function(Answer $answer) {
            // Save result
            $this->choise = $answer->getText();

            switch($this->choise){
                    case 1:
                        $this->say('Your Attandance is 92%');
                        $this->say('enter hi');
                        break;
                    case 2 :
                        $this->say('last semester  sgpa is 9.0');
                        $this->say('enter hi');
                        break;
                    case 3:
                        $this->say('the helpline no is 1234567892');
                        $this->say('enter hi');
                        break;

            }
        });
    }



    public function run()
    {
        // This will be called immediately
            $this->askid();
    }
}
