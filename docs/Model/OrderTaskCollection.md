# # OrderTaskCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The path to the call URI that produced the current page of results. | [optional]
**limit** | **int** | The value of the &lt;strong&gt;limit&lt;/strong&gt; parameter submitted in the request, which is the maximum number of order tasks to return per page, from the result set. A result set is the complete set of tasks returned by the method. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Though this parameter is not required to be submitted in the request, the parameter defaults to &lt;code&gt;10&lt;/code&gt; if omitted.&lt;/span&gt;&lt;/p&gt;&lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If this is the last or only page of the result set, the page may contain fewer tasks than the &lt;strong&gt;limit&lt;/strong&gt; value. To determine the number of pages in a result set, divide the total value (total number of tasks matching input criteria) by this limit value, and then round up to the next integer. For example, if the &lt;strong&gt;total&lt;/strong&gt; value was &lt;code&gt;120&lt;/code&gt; (120 total tasks) and the &lt;strong&gt;limit&lt;/strong&gt; value was &lt;code&gt;50&lt;/code&gt; (show 50 tasks per page), the total number of pages in the result set is three, so the seller would have to make three separate &lt;strong&gt;getOrderTasks&lt;/strong&gt; calls to view all tasks matching the input criteria.&lt;/span&gt;&lt;/p&gt; | [optional]
**next** | **string** | The path to the call URI for the next page of results. This value is returned if there is an additional page of results to return from the result set. | [optional]
**offset** | **int** | The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the &lt;b&gt;offset&lt;/b&gt; query parameter. &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt;The items in a paginated result set use a zero-based list where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/p&gt; | [optional]
**prev** | **string** | The path to the call URI for the previous page of results. This is returned if there is a previous page of results from the result set. | [optional]
**tasks** | [**\eBay\Sell\Feed\Model\OrderTask[]**](OrderTask.md) | An array of the order tasks on this page. The tasks are sorted by creation date. An empty array is returned if the filter criteria excludes all tasks. | [optional]
**total** | **int** | The total number of order tasks that match the input criteria. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
