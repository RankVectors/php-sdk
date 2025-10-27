# RankVectors PHP SDK

Official PHP SDK for the RankVectors API - Intelligent internal linking optimization using AI.

## Installation

```bash
composer require rankvectors/rankvectors-php-sdk
```

## Quick Start

```php
<?php
require_once 'vendor/autoload.php';

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
```

## Features

- ✅ **PHP 7.4+**: Modern PHP support with type declarations
- ✅ **Composer**: PSR-4 autoloading with Composer
- ✅ **Guzzle HTTP**: Built on Guzzle HTTP client for reliability
- ✅ **Error Handling**: Comprehensive error handling with detailed error messages
- ✅ **Type Safety**: Strongly typed models and request/response objects
- ✅ **PSR Standards**: Follows PSR-4 autoloading and PSR-7 HTTP message standards

## API Coverage

- **Projects**: Create, manage, and delete projects
- **Crawling**: Start and monitor website crawls
- **Suggestions**: Generate AI-powered link suggestions
- **Implementations**: Implement links via API or webhook
- **Credits**: Manage credit balance and usage
- **Content Verification**: Verify content changes before implementation

## Error Handling

```php
try {
    $project = $apiInstance->createProject($projectData);
} catch (ApiException $e) {
    switch ($e->getCode()) {
        case 401:
            echo "Authentication failed\n";
            break;
        case 400:
            echo "Invalid request: " . $e->getResponseBody() . "\n";
            break;
        default:
            echo "Unexpected error: " . $e->getMessage() . "\n";
    }
} catch (Exception $e) {
    echo "Network error: " . $e->getMessage() . "\n";
}
```

## Configuration

```php
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://api.rankvectors.com');
$config->setApiKey('Authorization', 'YOUR_API_KEY');
$config->setTimeout(30); // Request timeout in seconds
$config->setRetries(3); // Number of retries for failed requests
```

## Custom HTTP Client

```php
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

// Create custom HTTP client with retry logic
$stack = HandlerStack::create();
$stack->push(Middleware::retry(function ($retries, $request, $response, $exception) {
    return $retries < 3 && ($exception instanceof ConnectException || $response->getStatusCode() >= 500);
}));

$httpClient = new Client([
    'handler' => $stack,
    'timeout' => 30,
]);

$apiInstance = new ProjectsApi($httpClient, $config);
```

## Async Usage with ReactPHP

```php
use React\EventLoop\Loop;
use React\Http\Browser;

$loop = Loop::get();
$browser = new Browser($loop);

$browser->post('https://api.rankvectors.com/api/projects', [
    'Authorization' => 'Bearer YOUR_API_KEY',
    'Content-Type' => 'application/json',
], json_encode($projectData))
->then(function ($response) {
    echo "Project created: " . $response->getBody() . "\n";
})
->catch(function (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
});

$loop->run();
```

## Laravel Integration

```php
// In your Laravel service provider
use RankVectors\Configuration;
use RankVectors\Api\ProjectsApi;

class RankVectorsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ProjectsApi::class, function ($app) {
            $config = Configuration::getDefaultConfiguration();
            $config->setHost('https://api.rankvectors.com');
            $config->setApiKey('Authorization', config('rankvectors.api_key'));
            
            return new ProjectsApi(
                new GuzzleHttp\Client(),
                $config
            );
        });
    }
}

// In your controller
class ProjectController extends Controller
{
    public function create(Request $request, ProjectsApi $projectsApi)
    {
        $projectData = new CreateProjectRequest([
            'name' => $request->input('name'),
            'domain' => $request->input('domain'),
        ]);
        
        try {
            $project = $projectsApi->createProject($projectData);
            return response()->json($project);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
```

## Support

- **Documentation**: https://rankvectors.com/docs
- **Support**: tj@rankvectors.com
- **GitHub**: https://github.com/RankVectors/php-sdk

## License

MIT License