# eBay\Sell\Feed\ScheduleApi

All URIs are relative to https://api.ebay.com/sell/feed/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSchedule()**](ScheduleApi.md#createSchedule) | **POST** /schedule |  |
| [**deleteSchedule()**](ScheduleApi.md#deleteSchedule) | **DELETE** /schedule/{schedule_id} |  |
| [**getLatestResultFile()**](ScheduleApi.md#getLatestResultFile) | **GET** /schedule/{schedule_id}/download_result_file |  |
| [**getSchedule()**](ScheduleApi.md#getSchedule) | **GET** /schedule/{schedule_id} |  |
| [**getSchedules()**](ScheduleApi.md#getSchedules) | **GET** /schedule |  |
| [**updateSchedule()**](ScheduleApi.md#updateSchedule) | **PUT** /schedule/{schedule_id} |  |


## `createSchedule()`

```php
createSchedule($create_user_schedule_request)
```



This method creates a schedule, which is a subscription to the specified schedule template. A schedule periodically generates a report for the <strong>feedType</strong> specified by the template. Specify the same <strong>feedType</strong> as the <strong>feedType</strong> of the associated schedule template. When creating the schedule, if available from the template, you can specify a preferred trigger hour, day of the week, or day of the month. These and other fields are conditionally available as specified by the template.<p> <span class=\"tablenote\"><strong>Note:</strong> Make sure to include all fields required by the schedule template (<strong>scheduleTemplateId</strong>). Call the <strong>getScheduleTemplate</strong> method (or the <strong>getScheduleTemplates</strong> method), to find out which fields are required or optional. If a field is optional and a default value is provided by the template, the default value will be used if omitted from the payload.</span></p>A successful call returns the location response header containing the <strong>getSchedule</strong> call URI to retrieve the schedule you just created. The URL includes the eBay-assigned schedule ID, which you can use to reference the schedule task. <br /><br />To retrieve the details of the create schedule task, use the <strong>getSchedule</strong> method for a single schedule ID or the <strong>getSchedules</strong> method to retrieve all schedule details for the specified <strong>feed_type</strong>. The number of schedules for each feedType is limited. Error code 160031 is returned when you have reached this maximum.<p> <span class=\"tablenote\"><strong>Note:</strong> Except for schedules with a HALF-HOUR frequency, all schedules will ideally run at the start of each hour ('00' minutes). Actual start time may vary due to load and other factors.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_user_schedule_request = new \eBay\Sell\Feed\Model\CreateUserScheduleRequest(); // \eBay\Sell\Feed\Model\CreateUserScheduleRequest | In the request payload: <strong>feedType</strong> and <strong>scheduleTemplateId</strong> are required; <strong>scheduleName</strong> is optional; <strong>preferredTriggerHour</strong>, <strong>preferredTriggerDayOfWeek</strong>, <strong>preferredTriggerDayOfMonth</strong>, <strong>scheduleStartDate</strong>, <strong>scheduleEndDate</strong>, and <strong>schemaVersion</strong> are conditional.

try {
    $apiInstance->createSchedule($create_user_schedule_request);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->createSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_schedule_request** | [**\eBay\Sell\Feed\Model\CreateUserScheduleRequest**](../Model/CreateUserScheduleRequest.md)| In the request payload: &lt;strong&gt;feedType&lt;/strong&gt; and &lt;strong&gt;scheduleTemplateId&lt;/strong&gt; are required; &lt;strong&gt;scheduleName&lt;/strong&gt; is optional; &lt;strong&gt;preferredTriggerHour&lt;/strong&gt;, &lt;strong&gt;preferredTriggerDayOfWeek&lt;/strong&gt;, &lt;strong&gt;preferredTriggerDayOfMonth&lt;/strong&gt;, &lt;strong&gt;scheduleStartDate&lt;/strong&gt;, &lt;strong&gt;scheduleEndDate&lt;/strong&gt;, and &lt;strong&gt;schemaVersion&lt;/strong&gt; are conditional. | |

### Return type

void (empty response body)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSchedule()`

```php
deleteSchedule($schedule_id)
```



This method deletes an existing schedule. Specify the schedule to delete using the <strong>schedule_id</strong> path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string | This path parameter is the unique identifier of the schedule being deleted.<br><br>Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\" target=\"_blank \">getSchedules</a> method to retrieve schedule IDs.

try {
    $apiInstance->deleteSchedule($schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->deleteSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**| This path parameter is the unique identifier of the schedule being deleted.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getSchedules&lt;/a&gt; method to retrieve schedule IDs. | |

### Return type

void (empty response body)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLatestResultFile()`

```php
getLatestResultFile($schedule_id): object
```



This method downloads the latest Order Report generated by the schedule. The response of this call is a compressed or uncompressed CSV, XML, or JSON file, with the applicable file extension (for example: csv.gz). Specify the <strong>schedule_id</strong> path parameter to download its last generated file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string | This path parameter is the unique identifier of the schedule for which to retrieve the latest Order Report. <br><br> Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\" target=\"_blank \">getSchedules</a> method to retrieve schedule IDs.

try {
    $result = $apiInstance->getLatestResultFile($schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getLatestResultFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**| This path parameter is the unique identifier of the schedule for which to retrieve the latest Order Report. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getSchedules&lt;/a&gt; method to retrieve schedule IDs. | |

### Return type

**object**

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchedule()`

```php
getSchedule($schedule_id): \eBay\Sell\Feed\Model\UserScheduleResponse
```



This method retrieves schedule details and status of the specified schedule. Specify the schedule to retrieve using the <strong>schedule_id</strong>. Use the <strong>getSchedules</strong> method to find a schedule if you do not know the <strong>schedule_id</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string | This path parameter is the unique identifier of the schedule for which to retrieve details.<br><br> Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\" target=\"_blank \">getSchedules</a> method to retrieve schedule IDs.

try {
    $result = $apiInstance->getSchedule($schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**| This path parameter is the unique identifier of the schedule for which to retrieve details.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getSchedules&lt;/a&gt; method to retrieve schedule IDs. | |

### Return type

[**\eBay\Sell\Feed\Model\UserScheduleResponse**](../Model/UserScheduleResponse.md)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchedules()`

```php
getSchedules($feed_type, $limit, $offset): \eBay\Sell\Feed\Model\UserScheduleCollection
```



This method retrieves an array containing the details and status of all schedules based on the specified <strong>feed_type</strong>. Use this method to find a schedule if you do not know the <strong>schedule_id</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_type = 'feed_type_example'; // string | The feed type associated with the schedules being retrieved.<br><br><span class=\"tablenote\"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
$limit = 10; // int | The maximum number of schedules that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves schedules 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><strong>Default: </strong> 10 <br /><br /><strong>Maximum: </strong>500
$offset = 0; // int | The number of schedules to skip in the result set before returning the first schedule in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><strong>Default: </strong>0

try {
    $result = $apiInstance->getSchedules($feed_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feed_type** | **string**| The feed type associated with the schedules being retrieved.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Schedules are currently only available for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;.&lt;/span&gt; | |
| **limit** | **int**| The maximum number of schedules that can be returned on each page of the paginated response. Use this parameter in conjunction with the &lt;strong&gt;offset&lt;/strong&gt; parameter to control the pagination of the output. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to 10 and &lt;strong&gt;limit&lt;/strong&gt; is set to 10, the call retrieves schedules 11 thru 20 from the result set.&lt;/p&gt;&lt;p&gt;If this parameter is omitted, the default value is used. &lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Default: &lt;/strong&gt; 10 &lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Maximum: &lt;/strong&gt;500 | [optional] [default to 10] |
| **offset** | **int**| The number of schedules to skip in the result set before returning the first schedule in the paginated response. &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Default: &lt;/strong&gt;0 | [optional] [default to 0] |

### Return type

[**\eBay\Sell\Feed\Model\UserScheduleCollection**](../Model/UserScheduleCollection.md)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSchedule()`

```php
updateSchedule($schedule_id, $update_user_schedule_request)
```



This method updates an existing schedule. Specify the schedule to update using the <strong>schedule_id</strong> path parameter. If the schedule template has changed after the schedule was created or updated, the input will be validated using the changed template.<p> <span class=\"tablenote\"><strong>Note:</strong> Make sure to include all fields required by the schedule template (<strong>scheduleTemplateId</strong>). Call the <strong>getScheduleTemplate</strong> method (or the <strong>getScheduleTemplates</strong> method), to find out which fields are required or optional. If you do not know the <strong>scheduleTemplateId</strong>, call the <strong>getSchedule</strong> method to find out.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: sell_analytics_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ebay_user_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_fulfillment_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_marketing_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: commerce_catalog_readonly_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sell_inventory_scope
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string | This path parameter is the unique identifier of the schedule being updated. <br><br> Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\" target=\"_blank \">getSchedules</a> method to retrieve schedule IDs.
$update_user_schedule_request = new \eBay\Sell\Feed\Model\UpdateUserScheduleRequest(); // \eBay\Sell\Feed\Model\UpdateUserScheduleRequest | In the request payload: <strong>scheduleName</strong> is optional; <strong>preferredTriggerHour</strong>, <strong>preferredTriggerDayOfWeek</strong>, <strong>preferredTriggerDayOfMonth</strong>, <strong>scheduleStartDate</strong>, <strong>scheduleEndDate</strong>, and <strong>schemaVersion</strong> are conditional.

try {
    $apiInstance->updateSchedule($schedule_id, $update_user_schedule_request);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->updateSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**| This path parameter is the unique identifier of the schedule being updated. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-schedule-getschedules\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getSchedules&lt;/a&gt; method to retrieve schedule IDs. | |
| **update_user_schedule_request** | [**\eBay\Sell\Feed\Model\UpdateUserScheduleRequest**](../Model/UpdateUserScheduleRequest.md)| In the request payload: &lt;strong&gt;scheduleName&lt;/strong&gt; is optional; &lt;strong&gt;preferredTriggerHour&lt;/strong&gt;, &lt;strong&gt;preferredTriggerDayOfWeek&lt;/strong&gt;, &lt;strong&gt;preferredTriggerDayOfMonth&lt;/strong&gt;, &lt;strong&gt;scheduleStartDate&lt;/strong&gt;, &lt;strong&gt;scheduleEndDate&lt;/strong&gt;, and &lt;strong&gt;schemaVersion&lt;/strong&gt; are conditional. | |

### Return type

void (empty response body)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
