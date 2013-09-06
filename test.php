<?php
namespace Majorsilence\Mjlt;
/*
Copyright (c) 2013, Majorsilence Solutions Inc.
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

  Redistributions of source code must retain the above copyright notice, this
  list of conditions and the following disclaimer.

  Redistributions in binary form must reproduce the above copyright notice, this
  list of conditions and the following disclaimer in the documentation and/or
  other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/


require_once ("site/mjlt.php");

$m = new \Majorsilence\Mjlt\Mjlt();

echo "Random Sites <br>";
$rsites = $m->get_random_sites(10);
foreach($rsites as $value){
    
    echo $value->Code . ": ";
    echo $value->Url . "<br>";
    
}
echo "<br>";


echo "Top 10 sites <br>";
$top10 = $m->get_top_ten_sites();
foreach($top10 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
echo "<br>";

echo "Top 50 sites <br>";
$top50 = $m->get_top_fifty_sites();
foreach($top50 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
echo "<br>";


echo "Top 100 sites <br>";
$top100 = $m->get_top_one_hundred_sites();
foreach($top100 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
echo "<br>";


?>
