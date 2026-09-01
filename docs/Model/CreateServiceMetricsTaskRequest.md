# CreateServiceMetricsTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_type** | **string** | The &lt;strong&gt;feedType&lt;/strong&gt; specified for the customer service metric task being created. The report lists the transaction details that contribute to the service metrics evaluation. Supported types include:&lt;p&gt;&lt;code&gt;CUSTOMER_SERVICE_METRICS_REPORT&lt;/code&gt;&lt;/p&gt; |
**filter_criteria** | [**\eBay\Sell\Feed\Model\CustomerServiceMetricsFilterCriteria**](CustomerServiceMetricsFilterCriteria.md) | This container is used to customize and set criteria for the Customer Service Metric report that will be associated with the task. |
**schema_version** | **string** | The version number of the customer service metric.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This field &lt;strong&gt;must&lt;/strong&gt; have a value of &lt;code&gt;1.0&lt;/code&gt;.&lt;/span&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
