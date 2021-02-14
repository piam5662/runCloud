<?php
namespace runCloud\plans;

use runCloud\user\User;

class ProPlan extends User
{
    public function plan($plan){
        print "\nAction: Subscribing to plan $plan ";
        sleep(1);
        print ".";
        sleep(1);
        print ".";
        sleep(1);
        print ".";
        print "\nSubscribed to plan $plan \n";
        sleep(1);
        $this->plan='Pro plan';

    }
}