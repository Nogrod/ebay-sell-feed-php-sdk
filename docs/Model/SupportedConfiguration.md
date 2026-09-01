# SupportedConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_value** | **string** | The default value for the property. If a value is omitted from the schedule and a default value is supplied, the default value is used. | [optional]
**property** | **string** | Properties supported by the template. Properties can include the following: &lt;ul&gt;&lt;li&gt;&lt;strong&gt;scheduleStartDate:&lt;/strong&gt; The timestamp that the report generation (subscription) begins. After this timestamp, the schedule status becomes active until either the scheduleEndDate occurs or the scheduleTemplate becomes inactive.&lt;br /&gt;&lt;strong&gt;Format&lt;/strong&gt;: UTC &lt;code&gt;yyyy-MM-dd&lt;strong&gt;T&lt;/strong&gt;HH&lt;strong&gt;Z&lt;/strong&gt;&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;scheduleEndDate:&lt;/strong&gt; The timestamp that the report generation (subscription) ends. After this date, the schedule status becomes INACTIVE.&lt;br /&gt;&lt;strong&gt;Format&lt;/strong&gt;: UTC &lt;code&gt;yyyy-MM-dd&lt;strong&gt;T&lt;/strong&gt;HH&lt;strong&gt;Z&lt;/strong&gt;&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;schemaVersion:&lt;/strong&gt; The schema version of the schedule templates feedType. This field is required if the feedType has a schema version.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;preferredTriggerDayOfMonth:&lt;/strong&gt; The preferred day of the month to trigger the schedule. &lt;/li&gt;&lt;li&gt;&lt;strong&gt;preferredTriggerDayOfWeek:&lt;/strong&gt; The preferred day of the week to trigger the schedule. &lt;/li&gt;&lt;li&gt;&lt;strong&gt;preferredTriggerHour:&lt;/strong&gt; The preferred two-digit hour of the day to trigger the schedule.&lt;br /&gt;&lt;strong&gt;Format&lt;/strong&gt;: UTC &lt;code&gt;hhZ&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
**usage** | **string** | Whether the specified property is REQUIRED or OPTIONAL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
