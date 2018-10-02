<?php

$a= 1;
function testWrite($a)
{
    return ($a ? "work" : "not");
}
echo testWrite($a);