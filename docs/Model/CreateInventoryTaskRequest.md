# # CreateInventoryTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_type** | **string** | The feed type associated with the inventory task you are about to create. Presently, only one feed type is available:&lt;br&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;LMS_ACTIVE_INVENTORY_REPORT&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Report download feed types&lt;/a&gt; for more information. | [optional]
**filter_criteria** | [**\eBay\Sell\Feed\Model\InventoryFilterCriteria**](InventoryFilterCriteria.md) |  | [optional]
**schema_version** | **string** | The version number of the inventory task to use for the &lt;b&gt;feedType&lt;/b&gt;.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field &lt;b&gt;must&lt;/b&gt; have a value of &lt;code&gt;1.0&lt;/code&gt;.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
