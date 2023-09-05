<?php

use PHPUnit\Framework\TestCase;

class SiteMapTest extends TestCase
{
    public function testLinksInSiteMap()
    {
        // Read the extracted links from the file
        $links = file('extracted-links.txt', FILE_IGNORE_NEW_LINES);

        $successLinks = [];
        $failedLinks = [];

        // Loop through the links and check their validity
        foreach ($links as $link) {
            // Perform an HTTP GET request and check the response code
            $response = getHttpResponseCode($link);

            if ($response === 200) {
                $successLinks[] = "Succeeded link: $link - HTTP $response";
            } else {
                $failedLinks[] = "Failed link: $link - HTTP $response";
            }
        }

        // Display a report of succeeded and failed links
        $report = "Successful Links:" . PHP_EOL . implode(PHP_EOL, $successLinks) . PHP_EOL . PHP_EOL .
                  "Failed Links:" . PHP_EOL . implode(PHP_EOL, $failedLinks);

        echo $report;

        // Assert that no failed links were found
        $this->assertCount(0, $failedLinks, $report);
    }
}

// Helper function to get HTTP response code
function getHttpResponseCode($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Use 'localhost' instead of the IP address in the cURL request
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/Cheapskytravel.com/' . parse_url($url, PHP_URL_PATH));

    curl_exec($ch);

    // Check for cURL errors and output error details
    if (curl_errno($ch)) {
        $errorCode = curl_errno($ch);
        $errorMessage = curl_error($ch);
        echo "cURL Error (Code $errorCode): $errorMessage" . PHP_EOL;
    }

    $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Handle the case of HTTP response code 0
    return ($responseCode === 0) ? 0 : $responseCode;
}
