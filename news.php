
<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
//if($q=="Google") {
  //$xml=("http://news.google.com/news?ned=us&topic=h&output=rss");
  //$xml = "https://www.techradar.com/rss";
//} elseif($q=="NBC") {
  //$xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
  $xml = "https://www.techradar.com/rss";
//}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

// //get elements from "<channel>"
// $channel=$xmlDoc->getElementsByTagName('channel')->item(0);
// $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
// $channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
// $channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

// //output elements from "<channel>"
// echo(
//   "<div><a href='" . $channel_link. "'>" . $channel_title . "</div>
//   <div>".$channel_desc . "</div>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
echo "<div class='div-rss-para-news-holder' style='background: #f7f7f7;margin: 0 30%;padding:1%;'>";

for ($i = 0; $i <= $x->length; $i++) {
  
    if($x->item($i) != null){
        $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;

        $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;

        $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

        $item_date=$x->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;

        echo (
        "<div class='rss-para-news' style='background-color:#fff;border: 1px solid #ddd;box-shadow: 0px 1px 5px #ddd;padding: 3%;margin-bottom: 50px;text-align:left;'>
          <div>".
            "<h4>
              <a href='" . $item_link. "' target='_blank'>" . $item_title . "</a>
            </h4>
            <div style='color:green;margin-bottom:35px;'>".$item_link."</div> 
            <div style='color:#999;margin-bottom:15px;'>Publised on ".$item_date."</div>
          </div>
          <div style='font-size:110%;font-family:Arial;color:#777;'>".$item_desc . "</div>
        </div>");
    }
}
echo "</div>";
?>