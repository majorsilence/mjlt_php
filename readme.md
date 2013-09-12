mjlt_php
===========

mjlt (major link tool) php api is a library wrapping the mjlt.biz site. The site is used to create short urls.

# Examples

# Create a new short url
```php
require_once ("mjlt.php");

$m = new \Majorsilence\Mjlt\Mjlt();
$m->set_user_agent("Your Program Name");
$short_url = $m->create("http://www.some-example-website.com/some-long-very-very-long-page-on-the-site.html");
```


## Retrieve 11 random sites

```php
require_once ("mjlt.php");
$m = new \Majorsilence\Mjlt\Mjlt();
$m->set_user_agent("Your Program Name");

$rsites = $m->get_random_sites(10);

foreach($rsites as $value){
    
    echo $value->Code . ": ";
    echo $value->Url . "<br>";
    
}

```

## Retrieve 10 most popular sites
```php
require_once ("mjlt.php");
$m = new \Majorsilence\Mjlt\Mjlt();
$m->set_user_agent("Your Program Name");

$top10 = $m->get_top_ten_sites();

foreach($top10 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
```

## Retrieve 50 most popular sites
```php
require_once ("mjlt.php");
$m = new \Majorsilence\Mjlt\Mjlt();
$m->set_user_agent("Your Program Name");

$top50 = $m->get_top_fifty_sites();

foreach($top50 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
```

## Retrieve 100 most popular sites
```php
require_once ("mjlt.php");
$m = new \Majorsilence\Mjlt\Mjlt();
$m->set_user_agent("Your Program Name");

$top100 = $m->get_top_one_hundred_sites();

foreach($top100 as $value){
    
    echo "Count: " . $value->Count . " - ";
    echo "Code: " . $value->Url_Id . ": ";
    echo $value->Url . "<br>";
    
}
```
