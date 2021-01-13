<?php
    class Human
    {
        function __construct() {
            $this->name = null;
            $this->address = null;
        }

        function show() {
            print($this->name."\n");
            print($this->address);
        }
    }
//クラスの継承（extends）存在するクラスの機能を引き継ぐことで同じコードを書かなくて住むようになる。
    class Actor extends Human{}

    $actor  = new Actor();

    $actor->name ="大泉";
    $actor->address = "北海道";

    $actor->show();