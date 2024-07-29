<?php
$url = "https://testurl.com/test/1234?email=abc@test.com&name=sarah";
$components = parse_url($url);

print_r(($components));

// ==============
    // the same ouput
// print_r($components);
