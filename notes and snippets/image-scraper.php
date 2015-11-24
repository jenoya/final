<?php
ini_set('display_errors', 'On');

require 'vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;

$client = new GuzzleHttp\Client();
$url = 'https://us.fotolia.com/search?k=cats&filters%5Bcontent_type%3Aphoto%5D=1&search-submit=Search&limit=5';
$data = $client->get($url);
$data = $data->getbody(true);
$data = "$data";

// check to see the site is working
// print_r($data);

$images = array();
// crawl the page looking for links
$crawler = new Crawler($data);
$my_data = $crawler->filter('a.thumb-frame')->each(function (Crawler $node, $i) use($images) {
	// get the url of the single page for each image
    $value = $node->extract(array('href'));
    // setup base url
    $base_url = 'https://us.fotolia.com';
    // crawl each page
    $client = new GuzzleHttp\Client();
    $url = $base_url.$value[0];
    $data = $client->get($url);
	$data = $data->getbody(true);
	$data = "$data";

	// check to see if its getting the first one
	// print_r($data);
	// exit;

	$crawler = new Crawler($data);

	$title = $crawler->filter('h1.content-title')->text();
	$img_src = $crawler->filter('.content-detail-thumbnail img')->attr('src');
	$keywords_list = $crawler->filter('#keywords_list')->text();
	
	$image = array($title, $img_src);
	// add the image to the array of images
	$images[] = $image;
	return $images;
});
	
	// merge the arrays down
	$my_data = array_map('current', $my_data);
	// print_r($my_data);

	// write the array into a csv document

	$file = fopen("images.csv","w");
	$header = array("title","img");
	fputcsv ($file, $header, ",");
	foreach($my_data as $row){
        fputcsv($file, $row, ",");
   	}
   	fclose($file);

   	echo 'You got Images!'




?>