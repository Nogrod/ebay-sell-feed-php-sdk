# Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completion_date** | **string** | The timestamp when the task went into the &lt;code&gt;COMPLETED&lt;/code&gt; or &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; state. This state means that eBay has compiled the report for the seller based on the seller&#39;s filter criteria, and the seller can run a &lt;strong&gt;getResultFile&lt;/strong&gt; call to download the report. | [optional]
**creation_date** | **string** | The date the task was created. | [optional]
**detail_href** | **string** | The path to the call URI used to retrieve the task. This field points to the &lt;strong&gt;GetOrderTask&lt;/strong&gt; URI if the task is for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;, or it will be null if this task is for &lt;code&gt;LMS_ORDER_ACK&lt;/code&gt;. | [optional]
**feed_type** | **string** | The feed type associated with the task. | [optional]
**schema_version** | **string** | The schema version number associated with the task. | [optional]
**status** | [**\eBay\Sell\Feed\Model\FeedStatusEnum**](FeedStatusEnum.md) | The enumeration value that indicates the state of the task that was submitted in the request. See &lt;strong&gt;FeedStatusEnum&lt;/strong&gt; for information. &lt;p&gt;The values &lt;code&gt;COMPLETED&lt;/code&gt; and &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; indicate the Order Report file is ready to download.&lt;/p&gt; | [optional]
**task_id** | **string** | The ID of the task that was submitted in the request. | [optional]
**upload_summary** | [**\eBay\Sell\Feed\Model\UploadSummary**](UploadSummary.md) | This container provides summary information on an upload feed (not applicable for download feed types). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
