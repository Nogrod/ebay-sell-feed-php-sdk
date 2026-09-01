# eBay\Sell\Feed\CustomerServiceMetricTaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#createCustomerServiceMetricTask) | **POST** /customer_service_metric_task |  |
| [**getCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTask) | **GET** /customer_service_metric_task/{task_id} |  |
| [**getCustomerServiceMetricTasks()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTasks) | **GET** /customer_service_metric_task |  |


## `createCustomerServiceMetricTask()`

```php
createCustomerServiceMetricTask($accept_language, $create_service_metrics_task_request)
```



<p>Use this method to create a customer service metrics download task with filter criteria for the customer service metrics report. When using this method, specify the <strong>feedType</strong> and <strong>filterCriteria</strong> including both <strong>evaluationMarketplaceId</strong> and <strong>customerServiceMetricType</strong> for the report. The method returns the location response header containing the call URI to use with <strong>getCustomerServiceMetricTask</strong> to retrieve status and details on the task.</p><p>Only CURRENT Customer Service Metrics reports can be generated with the Sell Feed API. PROJECTED reports are not supported at this time. See the <a href=\"/api-docs/sell/analytics/resources/customer_service_metric/methods/getCustomerServiceMetric\">getCustomerServiceMetric</a> method document in the Analytics API for more information about these two types of reports.</p><p><span class=\"tablenote\"><strong>Note:</strong> Before calling this API, retrieve the summary of the seller's performance and rating for the customer service metric by calling <strong>getCustomerServiceMetric</strong> (part of the <a href=\"/develop/api/sell/analytics_api\">Analytics API</a>). You can then populate the create task request fields with the values from the response. This technique eliminates failed tasks that request a report for a <strong>customerServiceMetricType</strong> and <strong>evaluationMarketplaceId</strong> that are without evaluation.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | Use this header to specify the natural language in which the authenticated user desires the response. For example, <code>en-US</code> for English or <code>de-DE</code> for German.
$create_service_metrics_task_request = new \eBay\Sell\Feed\Model\CreateServiceMetricsTaskRequest(); // \eBay\Sell\Feed\Model\CreateServiceMetricsTaskRequest | Request payload containing version, feedType, and optional filterCriteria.

try {
    $apiInstance->createCustomerServiceMetricTask($accept_language, $create_service_metrics_task_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->createCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| Use this header to specify the natural language in which the authenticated user desires the response. For example, &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German. | |
| **create_service_metrics_task_request** | [**\eBay\Sell\Feed\Model\CreateServiceMetricsTaskRequest**](../Model/CreateServiceMetricsTaskRequest.md)| Request payload containing version, feedType, and optional filterCriteria. | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTask()`

```php
getCustomerServiceMetricTask($task_id): \eBay\Sell\Feed\Model\ServiceMetricsTask
```



<p>Use this method to retrieve customer service metric task details for the specified task. The input is <strong>task_id</strong>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | This path parameter is the unique identifier of the customer service metric task being retrieved.<br><br>Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-customer_service_metric_task-getcustomerservicemetrictasks\">getCustomerServiceMetricTasks</a> method to retrieve task IDs.

try {
    $result = $apiInstance->getCustomerServiceMetricTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| This path parameter is the unique identifier of the customer service metric task being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-customer_service_metric_task-getcustomerservicemetrictasks\&quot;&gt;getCustomerServiceMetricTasks&lt;/a&gt; method to retrieve task IDs. | |

### Return type

[**\eBay\Sell\Feed\Model\ServiceMetricsTask**](../Model/ServiceMetricsTask.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTasks()`

```php
getCustomerServiceMetricTasks($feed_type, $look_back_days, $date_range, $limit, $offset): \eBay\Sell\Feed\Model\CustomerServiceMetricTaskCollection
```



Use this method to return an array of customer service metric tasks. You can limit the tasks returned by specifying a date range. </p> <p> <span class=\"tablenote\"><strong>Note:</strong> You can pass in either the <code>look_back_days</code> or <code>date_range</code>, but not both.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_type = 'feed_type_example'; // string | The feed type associated with the tasks being retrieved. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT.
$look_back_days = 56; // int | The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter's default value is used. Default value: 7. Range: 1-90 (inclusive).
$date_range = 'date_range_example'; // string | The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC. For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ. Tasks created on March 8, 2020: 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z. Maximum: 90 days.
$limit = 56; // int | The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10. Maximum: 500.
$offset = 56; // int | The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0.

try {
    $result = $apiInstance->getCustomerServiceMetricTasks($feed_type, $look_back_days, $date_range, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feed_type** | **string**| The feed type associated with the tasks being retrieved. The only presently supported value is CUSTOMER_SERVICE_METRICS_REPORT. | |
| **look_back_days** | **int**| The number of previous days in which to search for tasks. Do not use with the date_range parameter. If both date_range and look_back_days are omitted, this parameter&#39;s default value is used. Default value: 7. Range: 1-90 (inclusive). | [optional] |
| **date_range** | **string**| The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the look_back_days parameter. Format: UTC. For example, tasks within a range: yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ. Tasks created on March 8, 2020: 2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z. Maximum: 90 days. | [optional] |
| **limit** | **int**| The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves tasks 11 thru 20 from the result set. If this parameter is omitted, the default value is used. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 10. Maximum: 500. | [optional] |
| **offset** | **int**| The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0. | [optional] |

### Return type

[**\eBay\Sell\Feed\Model\CustomerServiceMetricTaskCollection**](../Model/CustomerServiceMetricTaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
