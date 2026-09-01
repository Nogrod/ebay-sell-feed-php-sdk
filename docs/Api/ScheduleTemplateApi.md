# eBay\Sell\Feed\ScheduleTemplateApi

All URIs are relative to https://api.ebay.com/sell/feed/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getScheduleTemplate()**](ScheduleTemplateApi.md#getScheduleTemplate) | **GET** /schedule_template/{schedule_template_id} |  |
| [**getScheduleTemplates()**](ScheduleTemplateApi.md#getScheduleTemplates) | **GET** /schedule_template |  |


## `getScheduleTemplate()`

```php
getScheduleTemplate($schedule_template_id): \eBay\Sell\Feed\Model\ScheduleTemplateResponse
```



This method retrieves the details of the specified template. Specify the template to retrieve using the <strong>schedule_template_id</strong> path parameter. Use the <strong>getScheduleTemplates</strong> method to find a schedule template if you do not know the <strong>schedule_template_id</strong>.

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


$apiInstance = new eBay\Sell\Feed\Api\ScheduleTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_template_id = 'schedule_template_id_example'; // string | This path parameter is the unique identifier of the schedule template being retrieved.<br><br>Use the <a href=\"/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates\" target=\"_blank\">getScheduleTemplates</a> method to retrieve schedule template IDs.<br><br><span class=\"tablenote\"><strong>Note:</strong> Template schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>

try {
    $result = $apiInstance->getScheduleTemplate($schedule_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleTemplateApi->getScheduleTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_template_id** | **string**| This path parameter is the unique identifier of the schedule template being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/feed_api#sell-feed_api-schedule-getscheduletemplates\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getScheduleTemplates&lt;/a&gt; method to retrieve schedule template IDs.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Template schedules are currently only available for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;.&lt;/span&gt; | |

### Return type

[**\eBay\Sell\Feed\Model\ScheduleTemplateResponse**](../Model/ScheduleTemplateResponse.md)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduleTemplates()`

```php
getScheduleTemplates($feed_type, $limit, $offset): \eBay\Sell\Feed\Model\ScheduleTemplateCollection
```



This method retrieves an array containing the details and status of all schedule templates based on the specified <strong>feed_type</strong>. Use this method to find a schedule template if you do not know the <strong>schedule_template_id</strong>.

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


$apiInstance = new eBay\Sell\Feed\Api\ScheduleTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_type = 'feed_type_example'; // string | The feed type of the schedule templates to retrieve. <br><br><span class=\"tablenote\"><strong>Note:</strong> Schedules are currently only available for <code>LMS_ORDER_REPORT</code>.</span>
$limit = 10; // int | The maximum number of schedule templates that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves schedule templates 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used. <br /><br /><strong>Default: </strong> 10 <br /><br /><strong>Maximum: </strong>500
$offset = 0; // int | The number of schedule templates to skip in the result set before returning the first template in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><strong>Default: </strong>0

try {
    $result = $apiInstance->getScheduleTemplates($feed_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleTemplateApi->getScheduleTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feed_type** | **string**| The feed type of the schedule templates to retrieve. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Schedules are currently only available for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;.&lt;/span&gt; | |
| **limit** | **int**| The maximum number of schedule templates that can be returned on each page of the paginated response. Use this parameter in conjunction with the &lt;strong&gt;offset&lt;/strong&gt; parameter to control the pagination of the output. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to 10 and &lt;strong&gt;limit&lt;/strong&gt; is set to 10, the call retrieves schedule templates 11 thru 20 from the result set.&lt;/p&gt;&lt;p&gt;If this parameter is omitted, the default value is used. &lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Default: &lt;/strong&gt; 10 &lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Maximum: &lt;/strong&gt;500 | [optional] [default to 10] |
| **offset** | **int**| The number of schedule templates to skip in the result set before returning the first template in the paginated response. &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Default: &lt;/strong&gt;0 | [optional] [default to 0] |

### Return type

[**\eBay\Sell\Feed\Model\ScheduleTemplateCollection**](../Model/ScheduleTemplateCollection.md)

### Authorization

[sell_analytics_readonly_scope](../../README.md#sell_analytics_readonly_scope), [ebay_user_scope](../../README.md#ebay_user_scope), [sell_fulfillment_scope](../../README.md#sell_fulfillment_scope), [sell_marketing_scope](../../README.md#sell_marketing_scope), [commerce_catalog_readonly_scope](../../README.md#commerce_catalog_readonly_scope), [api_auth](../../README.md#api_auth), [sell_inventory_scope](../../README.md#sell_inventory_scope)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
