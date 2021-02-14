<?php
namespace runCloud\user;

class User
{   public $name;
    private $plan='///////////////';

    public function subscribe($param)
    {
        $p=get_class($param);//checking which class has been called

        if($p=="runCloud\plans\BasicPlan"){
           $this->plan='Basic Plan';
        }
        else{
            $this->plan='Pro Plan';
        }
        $param->plan($this->plan);

    }

    public function connectServer($server)
    {

        $server->main_server($this->plan,$this->name);
    }

    public function unsubscribe()
    {   print "\nAction: Canceling Subscription  to plan $this->plan";
        sleep(1);
        print ".";
        sleep(1);
        print ".";
        sleep(1);
        print ".";
        sleep(1);
        print "\nYou have successfully unsubscribed from the plan $this->plan  ";
        print "\nThanks you for using RunCloud.";

        $this->plan='null';
    }

    public function __set($n,$v)
    {
        $this->$n = $v;
}
}