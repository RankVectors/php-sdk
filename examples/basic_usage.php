<?php
require_once '../vendor/autoload.php';

use RankVectors\Api\ProjectsApi;
use RankVectors\Model\CreateProjectRequest;
use RankVectors\Configuration;

// Configure the API client
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://api.rankvectors.com');
$config->setApiKey('Authorization', 'YOUR_API_KEY'); // Replace with your actual API key

// Create API instance
$apiInstance = new ProjectsApi(
    new GuzzleHttp\Client(),
    $config
);

// Create project
$projectData = new CreateProjectRequest([
    'name' => 'My Website',
    'domain' => 'https://example.com',
    'prompt' => 'Only crawl blog posts and documentation'
]);

try {
    $project = $apiInstance->createProject($projectData);
    echo "Project created: " . $project . "\n";
    
    // Start crawling
    $crawl = $apiInstance->startCrawl($project->getId());
    echo "Crawl started: " . $crawl . "\n";
    
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi: ', $e->getMessage(), "\n";
}
?>
