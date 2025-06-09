<?php

//cURL is a tool that gives the possibility to interact remote to other services

// The curl_init() function will initialize a new session and return a cURL handle.
// curl_exec($ch) function should be called after initialize a cURL session and all the options for the session are set. Its purpose is simply to execute the predefined CURL session (given by ch).
// curl_setopt($ch, option, value) set an option for a cURL session identified by the ch parameter. Option specifies which option is to set, and value specifies the value for the given option.
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) return page contents. If set 0 then no output will be returned.
// curl_setopt($ch, CURLOPT_URL, $url) pass URL as a parameter. This is your target server website address. This is the URL you want to get from the internet.
// curl_exec($ch) grab URL and pass it to the variable for showing output.
// curl_close($ch) close curl resource, and free up system resources.


$url = "https://jsonplaceholder.typicode.com/users";

//Sample example to get dat

$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
echo $result;

curl_close($resource);

//Check more about curl

?>