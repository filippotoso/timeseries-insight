# Unofficial Google Timeseries Insights Api

A simple client library for Google Timeseries Insights Api

## Requirements

- PHP 7.0+

## Installing

Use Composer to install it:

```
composer require filippo-toso/timeseries-insights
```

## Using It

```
use Google\Cloud\Timeseriesinsights\V1\TimeseriesInsightsControllerClient;
use Google\Cloud\Timeseriesinsights\V1\DataSet;
use Google\Cloud\Timeseriesinsights\V1\DataSource;

// The project ID from the credentials file downloaded from Google Console
define('PROJECT_ID', 'project-id');

$client = new TimeseriesInsightsControllerClient([
    'credentials' => __DIR__ . '/credentials.json', // You JSON credentials file downloaded from Google Console
]);

$datasets = $client->listDataSets('projects/' . PROJECT_ID);

print("List datasets: \r\n");
foreach ($datasets as $dataset) {
    print($dataset->serializeToJsonString() . "\r\n");
}
```
