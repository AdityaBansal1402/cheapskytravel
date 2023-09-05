<?php

// Replace with the actual path to your sitemap.php file
$siteMapPath = 'application/views/site-map.php';

// Fetch the content of the site map page
$siteMapContent = file_get_contents($siteMapPath);

// Clean up the HTML content to fix any invalid entity references
$cleanedContent = mb_convert_encoding($siteMapContent, 'HTML-ENTITIES', 'UTF-8');

// Create a DOM document and load the cleaned site map content
$dom = new DOMDocument;
$dom->loadHTML($cleanedContent);

// Find all list items (li) with anchor tags (links)
$listItems = $dom->getElementsByTagName('li');

$extractedLinks = [];

// Loop through the list items and extract links
foreach ($listItems as $listItem) {
    $anchorTag = $listItem->getElementsByTagName('a')->item(0);

    if ($anchorTag) {
        $href = $anchorTag->getAttribute('href');

        // Match the base_url and replace it with https://www.localhost/Cheapskytravel.com/
        $href = preg_replace('/<\?= base_url\(\) \?>/', 'https://www.localhost/Cheapskytravel.com/', $href);

        $extractedLinks[] = $href;
    }
}

// Write the extracted links to a file
file_put_contents('extracted-links.txt', implode(PHP_EOL, $extractedLinks));

echo 'Links extracted and saved to extracted-links.txt.' . PHP_EOL;
