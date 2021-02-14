<?php
namespace runCloud\server;

class Server
{

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $ipAddress;

    public function __set($n,$v)
    {

        $this->$n = $v;

        if ($n == 'ipAddress') {

            $_SESSION[$this->name] = $this->name . '[' . $this->ipAddress . ']';//storing the server data of all created server instance

        }

    }


public function main_server($plan,$user){

    print "\nAction: Connecting $this->name ";
    sleep(1);
    print ".";
    sleep(1);
    print ".";
    sleep(1);
    print ".\n";
    sleep(1);


                if($plan=='Basic Plan' ){

                    $this->server_connect1($plan,$user);//only one server

                }
                elseif ($plan=="Pro Plan"){
                    $this->server_connect2($plan,$user);// all listed server

                }
                else
                    print "\nError => User is not Subscribe to any plan !";



        }

private function server_connect1($plan,$user){



    if( $this->name=='Server 1'){
        print "\nAction => Server $this->name is connected !\n";
        sleep(2);
        print "+--------------------+----------\n";
        print "|User's Name         |$user\n";
        print "+--------------------+----------\n";
        print "|Current Plan        |$plan\n";
        print "+--------------------+----------\n";
        print "|Connected Server    |$this->name [$this->ipAddress]\n";
        print "+--------------------+----------\n";
        sleep(2);

    }
    elseif ($plan=='Basic Plan' and $this->name!='Server 1'){
        print "\n Error => User Exceeded Server limit allowed for Basic plan";
    }

}

    private function server_connect2($plan,$user){
        if($plan=='Pro Plan' ){
            print "\nAction => Server $this->name is connected !\n";
            sleep(2);
            print "+--------------------+----------\n";
            print "|User's Name         |$user\n";
            print "+--------------------+----------\n";
            print "|Current Plan        |$plan\n";
            print "+--------------------+----------\n";
            print "|Connected Server    |"; foreach ($_SESSION as $key=>$val) print $val;//getting data from session
            print "\n+--------------------+----------\n";
            sleep(2);
        }


    }







}