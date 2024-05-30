# eBay\Sell\Feed\TaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTask()**](TaskApi.md#createTask) | **POST** /task |  |
| [**getInputFile()**](TaskApi.md#getInputFile) | **GET** /task/{task_id}/download_input_file |  |
| [**getResultFile()**](TaskApi.md#getResultFile) | **GET** /task/{task_id}/download_result_file |  |
| [**getTask()**](TaskApi.md#getTask) | **GET** /task/{task_id} |  |
| [**getTasks()**](TaskApi.md#getTasks) | **GET** /task |  |
| [**uploadFile()**](TaskApi.md#uploadFile) | **POST** /task/{task_id}/upload_file |  |


## `createTask()`

```php
createTask($x_ebay_c_marketplace_id, $content_type, $create_task_request)
```



This method creates an upload task or a download task without filter criteria. When using this method, specify the <b> feedType</b> and the feed file <b> schemaVersion</b>. The feed type specified sets the task as a download or an upload task.  <p>For details about the upload and download flows, see <a href=\"/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html\">Working with Order Feeds</a> in the Selling Integration Guide.</p><p> <span class=\"tablenote\"><strong>Note:</strong> The scope depends on the feed type. An error message results when an unsupported scope or feed type is specified.</span></p><p>The following list contains this method's authorization scopes and their corresponding feed types:</p><ul><li>https://api.ebay.com/oauth/api_scope/sell.inventory: See <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl\" target=\"_blank\">LMS FeedTypes</a></li><li>https://api.ebay.com/oauth/api_scope/sell.fulfillment: LMS_ORDER_ACK (specify for upload tasks). Also see <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl\" target=\"_blank\">LMS FeedTypes</a></li><li>https://api.ebay.com/oauth/api_scope/sell.marketing: None*</li><li>https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly: None*</li></ul><p>* Reserved for future release</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the item is hosted. <br><br>For example:<br><br><code>X-EBAY-C-MARKETPLACE-ID:EBAY_US</code><br><br>This identifies the eBay marketplace that applies to this task. See <a href=\"/api-docs/sell/feed/types/bas:MarketplaceIdEnum\">MarketplaceIdEnum</a> for supported values.</p>
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$create_task_request = new \eBay\Sell\Feed\Model\CreateTaskRequest(); // \eBay\Sell\Feed\Model\CreateTaskRequest | description not needed

try {
    $apiInstance->createTask($x_ebay_c_marketplace_id, $content_type, $create_task_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the item is hosted. &lt;br&gt;&lt;br&gt;For example:&lt;br&gt;&lt;br&gt;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID:EBAY_US&lt;/code&gt;&lt;br&gt;&lt;br&gt;This identifies the eBay marketplace that applies to this task. See &lt;a href&#x3D;\&quot;/api-docs/sell/feed/types/bas:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported values.&lt;/p&gt; | |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **create_task_request** | [**\eBay\Sell\Feed\Model\CreateTaskRequest**](../Model/CreateTaskRequest.md)| description not needed | |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInputFile()`

```php
getInputFile($task_id): object
```



This method downloads the file previously uploaded using <strong>uploadFile</strong>. Specify the task_id from the <strong>uploadFile</strong> call. <p><span class=\"tablenote\"><strong>Note:</strong> With respect to LMS, this method applies to all feed types except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>. See <a href=\"/api-docs/sell/static/feed/lms-feeds.html\">LMS API Feeds</a> in the Selling Integration Guide.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | This path parameter is the unique identifier of the task associated with the input file to be downloaded.<br><br>Use the <a href=\"/api-docs/sell/feed/resources/task/methods/getTasks\" target=\"_blank \">getTasks</a> method to retrieve task IDs.

try {
    $result = $apiInstance->getInputFile($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getInputFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| This path parameter is the unique identifier of the task associated with the input file to be downloaded.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/feed/resources/task/methods/getTasks\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getTasks&lt;/a&gt; method to retrieve task IDs. | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResultFile()`

```php
getResultFile($task_id): object
```



This method retrieves the generated file that is associated with the specified task ID. The response of this call is a compressed or uncompressed CSV, XML, or JSON file, with the applicable file extension (for example: csv.gz). <p>For details about how this method is used, see <a href=\"/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html\">Working with Order Feeds</a> in the Selling Integration Guide. </p><p><span class=\"tablenote\"><strong>Note:</strong> The status of the task to retrieve must be in the COMPLETED or COMPLETED_WITH_ERROR state before this method can retrieve the file. You can use the getTask or getTasks method to retrieve the status of the task.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | This path parameter is the unique identifier of the task associated with the file to be downloaded. <br><br>Use the <a href=\"/api-docs/sell/feed/resources/task/methods/getTasks\" target=\"_blank \">getTasks</a> method to retrieve task IDs.

try {
    $result = $apiInstance->getResultFile($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getResultFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| This path parameter is the unique identifier of the task associated with the file to be downloaded. &lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/feed/resources/task/methods/getTasks\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getTasks&lt;/a&gt; method to retrieve task IDs. | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($task_id): \eBay\Sell\Feed\Model\Task
```



This method retrieves the details and status of the specified task. The input is <strong>task_id</strong>. <br /><br />For details of how this method is used, see <a href=\"/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html\">Working with Order Feeds</a> in the Selling Integration Guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | This path parameter is the unique identifier of the task being retrieved.<br><br>Use the <a href=\"/api-docs/sell/feed/resources/task/methods/getTasks\" target=\"_blank \">getTasks</a> method to retrieve task IDs.

try {
    $result = $apiInstance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| This path parameter is the unique identifier of the task being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/feed/resources/task/methods/getTasks\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getTasks&lt;/a&gt; method to retrieve task IDs. | |

### Return type

[**\eBay\Sell\Feed\Model\Task**](../Model/Task.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTasks()`

```php
getTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id): \eBay\Sell\Feed\Model\TaskCollection
```



This method returns the details and status for an array of tasks based on a specified <strong>feed_type</strong> or <strong>schedule_id</strong>. Specifying both <strong>feed_type</strong> and <strong>schedule_id</strong> results in an error. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.<br /><br />If specifying the <strong>feed_type</strong>, limit which tasks are returned by specifying filters, such as the creation date range or period of time using <strong>look_back_days</strong>. Also, by specifying the <strong>feed_type</strong>, both on-demand and scheduled reports are returned.<br /><br />If specifying a <strong>schedule_id</strong>, the schedule template (that the schedule ID is based on) determines which tasks are returned (see <strong>schedule_id</strong> for additional information). Each <strong>scheduledId</strong> applies to one <strong>feed_type</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_range = 'date_range_example'; // string | Specifies the range of task creation dates used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only tasks that are less than 90 days can be retrieved. <p> <span class=\"tablenote\"><strong>Note:</strong> Maximum date range window size is 90 days.</span></p> <br /><b>Valid Format (UTC):</b><code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code><br /><br />For example: Tasks created on September 8, 2019<br /> <code>2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z</code>
$feed_type = 'feed_type_example'; // string | The feed type associated with the tasks to be returned. Only use a <strong>feedType</strong> that is available for your API: <ul><li>Order Feeds: <code>LMS_ORDER_ACK, LMS_ORDER_REPORT</code></li><li>Inventory Upload Feed Types: See <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl\" target=\"_blank\">Available FeedTypes</a></li></ul>Do not use with the <strong>schedule_id</strong> parameter. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.
$limit = 'limit_example'; // string | The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><b>Default: </b> 10 <br /><br /><b>Maximum: </b>500
$look_back_days = 'look_back_days_example'; // string | The number of previous days in which to search for tasks. Do not use with the <code>date_range</code> parameter. If both <code>date_range</code> and <code>look_back_days</code> are omitted, this parameter's default value is used.  <br /><br /><b>Default: </b> 7 <br /><br /><b>Range: </b> 1-90 (inclusive)
$offset = 'offset_example'; // string | The number of tasks to skip in the result set before returning the first task in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. <br /><br /><b>Default: </b>0
$schedule_id = 'schedule_id_example'; // string | The unique identifier associated with the tasks being returned. A schedule periodically generates a report for the feed type specified by the schedule template.<br><br><span class=\"tablenote\"><b>Note:</b> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span><br>Do not use with the <strong>feed_type</strong> parameter.

try {
    $result = $apiInstance->getTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_range** | **string**| Specifies the range of task creation dates used to filter the results. The results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only tasks that are less than 90 days can be retrieved. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Maximum date range window size is 90 days.&lt;/span&gt;&lt;/p&gt; &lt;br /&gt;&lt;b&gt;Valid Format (UTC):&lt;/b&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ &lt;/code&gt;&lt;br /&gt;&lt;br /&gt;For example: Tasks created on September 8, 2019&lt;br /&gt; &lt;code&gt;2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z&lt;/code&gt; | [optional] |
| **feed_type** | **string**| The feed type associated with the tasks to be returned. Only use a &lt;strong&gt;feedType&lt;/strong&gt; that is available for your API: &lt;ul&gt;&lt;li&gt;Order Feeds: &lt;code&gt;LMS_ORDER_ACK, LMS_ORDER_REPORT&lt;/code&gt;&lt;/li&gt;&lt;li&gt;Inventory Upload Feed Types: See &lt;a href&#x3D;\&quot;/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Available FeedTypes&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;Do not use with the &lt;strong&gt;schedule_id&lt;/strong&gt; parameter. Since schedules are based on feed types, you can specify a schedule (&lt;strong&gt;schedule_id&lt;/strong&gt;) that returns the needed &lt;strong&gt;feed_type&lt;/strong&gt;. | [optional] |
| **limit** | **string**| The maximum number of tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the &lt;strong&gt;offset&lt;/strong&gt; parameter to control the pagination of the output. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to 10 and &lt;strong&gt;limit&lt;/strong&gt; is set to 10, the call retrieves tasks 11 thru 20 from the result set.&lt;/p&gt;&lt;p&gt;If this parameter is omitted, the default value is used. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt; 10 &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt;500 | [optional] |
| **look_back_days** | **string**| The number of previous days in which to search for tasks. Do not use with the &lt;code&gt;date_range&lt;/code&gt; parameter. If both &lt;code&gt;date_range&lt;/code&gt; and &lt;code&gt;look_back_days&lt;/code&gt; are omitted, this parameter&#39;s default value is used.  &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt; 7 &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Range: &lt;/b&gt; 1-90 (inclusive) | [optional] |
| **offset** | **string**| The number of tasks to skip in the result set before returning the first task in the paginated response. &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt;0 | [optional] |
| **schedule_id** | **string**| The unique identifier associated with the tasks being returned. A schedule periodically generates a report for the feed type specified by the schedule template.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Schedules are currently only available for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;.&lt;/span&gt;&lt;br&gt;Do not use with the &lt;strong&gt;feed_type&lt;/strong&gt; parameter. | [optional] |

### Return type

[**\eBay\Sell\Feed\Model\TaskCollection**](../Model/TaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($task_id, $content_type): object
```



This method associates the specified file with the specified task ID and uploads the input file. After the file has been uploaded, the processing of the file begins. <br><br>Reports often take time to generate and it's common for this method to return an HTTP status of 202, which indicates the report is being generated. Use the <b> getTask</b> with the task ID or <b> getTasks</b> to determine the status of a report. <br><br>The status flow is <code>QUEUED</code> &gt; <code>IN_PROCESS</code> &gt; <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>. When the status is <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code>, this indicates the file has been processed and the order report can be downloaded. If there are errors, they will be indicated in the report file. <br /><br />For details of how this method is used in the upload flow, see <a href=\"/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html\">Working with Order Feeds</a> in the Selling Integration Guide. <br><br>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre> fileName: &quot;AddFixedPriceItem_Macbook.xml&quot; <br /> name: &quot;file&quot; <br /> type: &quot;form-data&quot; <br /> file: @&quot;/C:/Users/.../AddFixedPriceItem_Macbook.7z&quot;</pre>See <a href=\"/api-docs/sell/feed/resources/task/methods/uploadFile#h2-samples\">Samples</a> for information.<p><span class=\"tablenote\"><strong>Note:</strong> This method applies to all <a href=\"/api-docs/sell/static/feed/fx-feeds-quick-reference.html#availabl\" target=\"_blank\">Seller Hub feed types</a>, and to all <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Availabl\" target=\"_blank\">LMS feed types</a> except <code>LMS_ORDER_REPORT</code> and <code>LMS_ACTIVE_INVENTORY_REPORT</code>.</span></p><p> <span class=\"tablenote\"><b>Note:</b> You must use a <strong>Content-Type</strong> header with its value set to \"<strong>multipart/form-data</strong>\". See <a href=\"/api-docs/sell/feed/resources/task/methods/uploadFile#h2-samples\">Samples</a> for information.</span></p><p><span class=\"tablenote\"><b>Note:</b> For LMS feed types, upload a regular XML file or an XML file in zipped format (both formats are allowed).</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Feed\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Feed\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | This path parameter is the unique identifier of the task associated with the file that will be uploaded.<br><br>Use the <a href=\"/api-docs/sell/feed/resources/task/methods/getTasks\" target=\"_blank \">getTasks</a> method to retrieve task IDs.
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>multipart/form-data</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->uploadFile($task_id, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| This path parameter is the unique identifier of the task associated with the file that will be uploaded.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/feed/resources/task/methods/getTasks\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getTasks&lt;/a&gt; method to retrieve task IDs. | |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;multipart/form-data&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
