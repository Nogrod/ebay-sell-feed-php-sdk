# # InventoryTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** | The ID of the task. This ID is generated when the task was created by the &lt;strong&gt;createInventoryTask&lt;/strong&gt; method. | [optional]
**status** | **string** | The status of the task. Users must wait until status is complete before moving on to the next step (such as uploading/downloading a file). For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**feed_type** | **string** | The feed type associated with the inventory task. | [optional]
**creation_date** | **string** | The date the task was created. | [optional]
**completion_date** | **string** | The timestamp when the task &lt;strong&gt;status&lt;/strong&gt; went into the &lt;code&gt;COMPLETED&lt;/code&gt;, &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt;, or &lt;code&gt;PARTIALLY_PROCESSED&lt;/code&gt; state. This field is only returned if the status is one of the three completed values. | [optional]
**schema_version** | **string** | The schema version number associated with the task. | [optional]
**detail_href** | **string** | The path to the call URI used to retrieve the task. This field points to the &lt;strong&gt;getInventoryTask&lt;/strong&gt; URI. | [optional]
**upload_summary** | [**\eBay\Sell\Feed\Model\UploadSummary**](UploadSummary.md) |  | [optional]
**filter_criteria** | [**\eBay\Sell\Feed\Model\InventoryFilterCriteria**](InventoryFilterCriteria.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
