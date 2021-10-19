<?php
class Foo
{
    public static $counter = 0;

    public function __construct()
    {
        ++self::$counter;
    }
};

class Bar extends Foo
{
    public static $counter = 0;

    public function __construct()
    {
        ++self::$counter;
    }
}

$foo1 = new Foo();
$foo2 = new Foo();

$bar1 = new Bar();

echo ( "Число объектов класса Foo " . Foo::$counter. "\n");
echo ( "Число объектов класса Bar: " . Bar::$counter. "\n");