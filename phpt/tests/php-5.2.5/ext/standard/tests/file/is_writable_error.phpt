--TEST--
Test is_writable() and its alias is_writeable() function: error conditions
--FILE--
<?php
/* Prototype: bool is_writable ( string $filename );
   Description: Tells whether the filename is writable.

   is_writeable() is an alias of is_writable()
*/

echo "*** Testing is_writable(): error conditions ***\n";
var_dump( is_writable() );  // args < expected
var_dump( is_writeable() );

echo "\n*** Testing is_writeable(): error conditions ***\n";
var_dump( is_writable(1, 2) );  // args > expected
var_dump( is_writeable(1, 2) );

echo "\n*** Testing is_writable() on non-existent file ***\n";
var_dump( is_writable(dirname(__FILE__)."/is_writable") );
var_dump( is_writeable(dirname(__FILE__)."/is_writable") );

echo "Done\n";
?>
--EXPECTF--
*** Testing is_writable(): error conditions ***

Warning: Wrong parameter count for is_writable() in %s on line %d
NULL

Warning: Wrong parameter count for is_writeable() in %s on line %d
NULL

*** Testing is_writeable(): error conditions ***

Warning: Wrong parameter count for is_writable() in %s on line %d
NULL

Warning: Wrong parameter count for is_writeable() in %s on line %d
NULL

*** Testing is_writable() on non-existent file ***
bool(false)
bool(false)
Done
