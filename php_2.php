<?php

class Foo {
    static public function setParams($a, $b = null, $c = null) {
        return $a+$b+$c;
    }

}

    $a = 0;
    $b = 1;
    $c = 2;

    echo Foo::setParams($a);
    echo Foo::setParams($a,$b);
    echo Foo::setParams($a,$b,$c);
