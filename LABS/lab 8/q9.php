<?php
class Counter {
    private static $count = 0;

    function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();
$c4 = new Counter();
$c5 = new Counter();

echo "Total objects created: " . Counter::getCount();
?>