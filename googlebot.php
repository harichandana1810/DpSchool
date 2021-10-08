<?php
  $crawlers = array(
    'Google'=>'Google',
    'MSN' => 'msnbot',
    'Rambler'=>'Rambler',
    'Yahoo'=> 'Yahoo',
    'AbachoBOT'=> 'AbachoBOT',
    'accoona'=> 'Accoona',
    'AcoiRobot'=> 'AcoiRobot',
    'ASPSeek'=> 'ASPSeek',
    'CrocCrawler'=> 'CrocCrawler',
    'Dumbot'=> 'Dumbot',
    'FAST-WebCrawler'=> 'FAST-WebCrawler',
    'GeonaBot'=> 'GeonaBot',
    'Gigabot'=> 'Gigabot',
    'Lycos spider'=> 'Lycos',
    'MSRBOT'=> 'MSRBOT',
    'Altavista robot'=> 'Scooter',
    'AltaVista robot'=> 'Altavista',
    'ID-Search Bot'=> 'IDBot',
    'eStyle Bot'=> 'eStyle',
    'Scrubby robot'=> 'Scrubby',
    );
 
function crawlerDetect($USER_AGENT)
{
    // to get crawlers string used in function uncomment it
    // it is better to save it in string than use implode every time
    // global $crawlers
    // $crawlers_agents = implode('|',$crawlers);
    $crawlers_agents = 'Google|msnbot|Rambler|Yahoo|AbachoBOT|accoona|AcioRobot|ASPSeek|CocoCrawler|Dumbot|FAST-WebCrawler|GeonaBot|Gigabot|Lycos|MSRBOT|Scooter|AltaVista|IDBot|eStyle|Scrubby';
 
    if ( strpos($crawlers_agents , $USER_AGENT) === false )
       return false;
    // crawler detected
    // you can use it to return its name
    /*
    else {
       return array_search($USER_AGENT, $crawlers);
    }
    */
}
 
// example
 
$crawler = crawlerDetect($_SERVER['HTTP_USER_AGENT']);
 
if ($crawler )
{
   // it is crawler, it's name in $crawler variable
}
else
{
   // usual visitor
}