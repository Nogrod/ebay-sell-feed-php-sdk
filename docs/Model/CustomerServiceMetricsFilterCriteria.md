# CustomerServiceMetricsFilterCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_service_metric_type** | **string** | An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance. | [optional]
**evaluation_marketplace_id** | **string** | An enumeration value that specifies the eBay marketplace where the evaluation occurs. | [optional]
**listing_categories** | **string[]** | A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API.&lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt;Pass this attribute to narrow down your filter results for the &lt;code&gt;ITEM_NOT_AS_DESCRIBED&lt;/code&gt; &lt;strong&gt;customerServiceMetricType&lt;/strong&gt;.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;Supported categories include:&lt;/p&gt;&lt;p&gt;&lt;code&gt;primary(L1) category Id&lt;/code&gt;&lt;/p&gt; | [optional]
**shipping_regions** | **string[]** | A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt;Pass this attribute to narrow down your filter results for the &lt;code&gt;ITEM_NOT_RECEIVED&lt;/code&gt; customerServiceMetricType.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;Supported categories include:&lt;/p&gt;&lt;p&gt;&lt;code&gt;primary(L1) category Id&lt;/code&gt;&lt;/p&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
