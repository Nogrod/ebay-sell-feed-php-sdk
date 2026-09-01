# OrderFilterCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date_range** | [**\eBay\Sell\Feed\Model\DateRange**](DateRange.md) | The creation date range of the orders you want returned. Set the date range so it contains less than 10 days (maximum). If you do not specify a &lt;strong&gt;DateRange&lt;/strong&gt;, results from the last 10 days will be returned by default. | [optional]
**modified_date_range** | [**\eBay\Sell\Feed\Model\DateRange**](DateRange.md) | The modified date range of the orders you want returned. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This container is for future use. At this time, the &lt;strong&gt;createOrderTask&lt;/strong&gt; method only supports order creation date filters and not modified order date filters.&lt;/span&gt;&lt;/p&gt; | [optional]
**order_status** | **string** | The order status of the orders returned. If the filter is omitted from the &lt;strong&gt;createOrderTask&lt;/strong&gt; call, orders that are in both &lt;code&gt;ACTIVE&lt;/code&gt; and &lt;code&gt;COMPLETED&lt;/code&gt; states are returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
