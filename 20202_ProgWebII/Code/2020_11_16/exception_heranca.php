<?php

class MyFooException extends Exception
{
    public function __construct($message = null, $code = 0)
    {
        echo $message;
    }
}

class MyBarException extends Exception
{
    public function __construct($message = null, $code = 0)
    {
        echo $message;
    }
}

class MyBazException extends Exception
{
    public function __construct($message = null, $code = 0)
    {
        echo $message;
    }
}

try {
    $error = "Baz Exception thrown.";
    throw new MyBazException($error);
} catch (MyFooException $e) {
    echo "Caught a 'Foo' Exception";
    // Do something here
} catch (MyBarException $e) {
    echo "Caught a 'Bar' Exception";
    // Do something here
} catch (MyBazException $e) {
    echo "Caught a 'Baz' Exception";
    // Do something here
}
