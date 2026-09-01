# CreateOrderTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_type** | **string** | The feed type associated with the task. The only presently supported value is &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Report download feed types&lt;/a&gt; for more information. |
**filter_criteria** | [**\eBay\Sell\Feed\Model\OrderFilterCriteria**](OrderFilterCriteria.md) | The container for the filter fields. This container is used to set the filter criteria for the order report. A seller can set date range filters and/or can retrieve orders in a specific state. | [optional]
**schema_version** | **string** | The schema version of the LMS OrderReport. For the &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt; feed type, see the &lt;a href&#x3D;\&quot;/devzone/merchant-data/CallRef/OrderReport.html#OrderReport\&quot; target&#x3D;\&quot;_blank\&quot;&gt;OrderReport&lt;/a&gt; reference page to see the present schema version. The &lt;strong&gt;schemaVersion&lt;/strong&gt; value is the version number shown at the top of the &lt;strong&gt;OrderReport&lt;/strong&gt; page. &lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Restriction: &lt;/strong&gt; This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after &#39;1113&#39; is &#39;1115&#39;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
