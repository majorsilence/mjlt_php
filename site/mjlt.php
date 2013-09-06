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


require_once("randomsites.php");
require_once("topsites.php");

class Mjlt
{

    private $base_url = "http://mjlt.biz";
    private $user_agent = "";
    
    public function get_user_agent(){
        return $this->user_agent;
    }
    public function set_user_agent($agent){
        if(substr( $agent, 0, 1 ) === " "){
            $this->user_agent;
        }
        else{
            $this->user_agent = " " . $agent;
        }
    }
    
    public function create($original_url){
        
        $url = $this->base_url . "/url/create.php?submit=" . $original_url;
        
	$str = file_get_contents($url);
	return $str;
        
    }
    
    public function get_random_sites($site_count)
    {

        $url = $this->base_url . "/v1/random.php?count=" . $site_count;
        $json_str = file_get_contents($url);
        $json_obj = json_decode($json_str, true);
        
        $return_value = array();
        foreach($json_obj as $key => $value){
            $data = new RandomSites();
            //print_r($value);
            $data->Code = $value["code"];
            $data->Url = $value["url"];
            array_push($return_value, $data);
        }
        
        return $return_value;
    }
    
    private function top_sites($url)
    {
        $json_str = file_get_contents($url);
        $json_obj = json_decode($json_str, true);
     
        $return_value = array();
        foreach($json_obj as $key => $value){
            $data = new TopSites();
            //print_r($value);
            $data->Count = $value["count"];
            $data->Url = $value["url"];
            $data->Url_Id = $value["url_id"];
            array_push($return_value, $data);
        }
         
        return $return_value;
    }

    public function get_top_ten_sites()
    {

        $url = $this->base_url . "/v1/topten.php?type=json";
         
        return $this->top_sites($url);

    }
    
    public function get_top_fifty_sites()
    {

        $url = $this->base_url . "/v1/topfifty.php?type=json";
        
        return $this->top_sites($url);

    }
    
    public function get_top_one_hundred_sites()
    {

        $url = $this->base_url . "/v1/toponehundred.php?type=json";
        
        return $this->top_sites($url);

    }

    
}


?>



