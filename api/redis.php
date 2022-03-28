<?php

    require "predis/autoload.php";
    Predis\Autoloader::register();

    /**
    * Radis(NoSQl) Database Connection
    */
    class Redis {

        public function connect() {

            try {

                $redis = new Predis\Client();

                // This connection is for a remote server
                /*
                    $redis = new PredisClient(array(
                        "scheme" => "tcp",
                        "host" => "153.202.124.2",
                        "port" => 6379
                    ));
                */
                
                // echo "Successfully connected to Redis";
                // exit;

                // $redis->set("hello_world", "Hi from php!");
                // $value = $redis->get("hello_world");
                // var_dump($value);
                // echo ($redis->exists("Santa Claus")) ? "true" : "false";
                // exit;
                
                return $redis;
            }
            catch (Exception $e) {
                die("Redis Database Error: ".$e->getMessage());
            }
        }
    }

    // $r = new Redis;
    // echo $r->connect();

?>