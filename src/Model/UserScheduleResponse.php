<?php

/**
 * UserScheduleResponse
 *
 * PHP version 8.1
 *
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Feed\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Sell\Feed\ObjectSerializer;

/**
 * UserScheduleResponse Class Doc Comment
 *
 * @description The type that defines the fields for a paginated result set of available schedules. The response consists of 0 or more sequenced &lt;em&gt; pages&lt;/em&gt; where each page has 0 or more items.
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UserScheduleResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UserScheduleResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'schedule_id' => 'string',
        'creation_date' => 'string',
        'feed_type' => 'string',
        'last_modified_date' => 'string',
        'preferred_trigger_day_of_month' => 'int',
        'preferred_trigger_day_of_week' => 'string',
        'preferred_trigger_hour' => 'string',
        'schedule_end_date' => 'string',
        'schedule_name' => 'string',
        'schedule_start_date' => 'string',
        'schedule_template_id' => 'string',
        'schema_version' => 'string',
        'status' => 'string',
        'status_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'schedule_id' => null,
        'creation_date' => null,
        'feed_type' => null,
        'last_modified_date' => null,
        'preferred_trigger_day_of_month' => 'int32',
        'preferred_trigger_day_of_week' => null,
        'preferred_trigger_hour' => null,
        'schedule_end_date' => null,
        'schedule_name' => null,
        'schedule_start_date' => null,
        'schedule_template_id' => null,
        'schema_version' => null,
        'status' => null,
        'status_reason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'schedule_id' => false,
        'creation_date' => false,
        'feed_type' => false,
        'last_modified_date' => false,
        'preferred_trigger_day_of_month' => false,
        'preferred_trigger_day_of_week' => false,
        'preferred_trigger_hour' => false,
        'schedule_end_date' => false,
        'schedule_name' => false,
        'schedule_start_date' => false,
        'schedule_template_id' => false,
        'schema_version' => false,
        'status' => false,
        'status_reason' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'schedule_id' => 'scheduleId',
        'creation_date' => 'creationDate',
        'feed_type' => 'feedType',
        'last_modified_date' => 'lastModifiedDate',
        'preferred_trigger_day_of_month' => 'preferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'preferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'preferredTriggerHour',
        'schedule_end_date' => 'scheduleEndDate',
        'schedule_name' => 'scheduleName',
        'schedule_start_date' => 'scheduleStartDate',
        'schedule_template_id' => 'scheduleTemplateId',
        'schema_version' => 'schemaVersion',
        'status' => 'status',
        'status_reason' => 'statusReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'schedule_id' => 'setScheduleId',
        'creation_date' => 'setCreationDate',
        'feed_type' => 'setFeedType',
        'last_modified_date' => 'setLastModifiedDate',
        'preferred_trigger_day_of_month' => 'setPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'setPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'setPreferredTriggerHour',
        'schedule_end_date' => 'setScheduleEndDate',
        'schedule_name' => 'setScheduleName',
        'schedule_start_date' => 'setScheduleStartDate',
        'schedule_template_id' => 'setScheduleTemplateId',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'status_reason' => 'setStatusReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'schedule_id' => 'getScheduleId',
        'creation_date' => 'getCreationDate',
        'feed_type' => 'getFeedType',
        'last_modified_date' => 'getLastModifiedDate',
        'preferred_trigger_day_of_month' => 'getPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'getPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'getPreferredTriggerHour',
        'schedule_end_date' => 'getScheduleEndDate',
        'schedule_name' => 'getScheduleName',
        'schedule_start_date' => 'getScheduleStartDate',
        'schedule_template_id' => 'getScheduleTemplateId',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'status_reason' => 'getStatusReason'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('schedule_id', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('feed_type', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('preferred_trigger_day_of_month', $data ?? [], null);
        $this->setIfExists('preferred_trigger_day_of_week', $data ?? [], null);
        $this->setIfExists('preferred_trigger_hour', $data ?? [], null);
        $this->setIfExists('schedule_end_date', $data ?? [], null);
        $this->setIfExists('schedule_name', $data ?? [], null);
        $this->setIfExists('schedule_start_date', $data ?? [], null);
        $this->setIfExists('schedule_template_id', $data ?? [], null);
        $this->setIfExists('schema_version', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_reason', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets schedule_id
     *
     * @return string|null
     */
    public function getScheduleId(): ?string
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param string|null $schedule_id The ID of the schedule. This ID is generated when the schedule was created by the <strong>createSchedule</strong> method.
     *
     * @return $this
     */
    public function setScheduleId(?string $schedule_id): static
    {
        if (is_null($schedule_id)) {
            throw new InvalidArgumentException('non-nullable schedule_id cannot be null');
        }
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The creation date of the schedule in hours based on the 24-hour Coordinated Universal Time (UTC) clock.
     *
     * @return $this
     */
    public function setCreationDate(?string $creation_date): static
    {
        if (is_null($creation_date)) {
            throw new InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets feed_type
     *
     * @return string|null
     */
    public function getFeedType(): ?string
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     *
     * @param string|null $feed_type The <strong>feedType</strong> associated with the schedule.
     *
     * @return $this
     */
    public function setFeedType(?string $feed_type): static
    {
        if (is_null($feed_type)) {
            throw new InvalidArgumentException('non-nullable feed_type cannot be null');
        }
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param string|null $last_modified_date The date the schedule was last modified.
     *
     * @return $this
     */
    public function setLastModifiedDate(?string $last_modified_date): static
    {
        if (is_null($last_modified_date)) {
            throw new InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets preferred_trigger_day_of_month
     *
     * @return int|null
     */
    public function getPreferredTriggerDayOfMonth(): ?int
    {
        return $this->container['preferred_trigger_day_of_month'];
    }

    /**
     * Sets preferred_trigger_day_of_month
     *
     * @param int|null $preferred_trigger_day_of_month The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month.
     *
     * @return $this
     */
    public function setPreferredTriggerDayOfMonth(?int $preferred_trigger_day_of_month): static
    {
        if (is_null($preferred_trigger_day_of_month)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_day_of_month cannot be null');
        }
        $this->container['preferred_trigger_day_of_month'] = $preferred_trigger_day_of_month;

        return $this;
    }

    /**
     * Gets preferred_trigger_day_of_week
     *
     * @return string|null
     */
    public function getPreferredTriggerDayOfWeek(): ?string
    {
        return $this->container['preferred_trigger_day_of_week'];
    }

    /**
     * Sets preferred_trigger_day_of_week
     *
     * @param string|null $preferred_trigger_day_of_week The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPreferredTriggerDayOfWeek(?string $preferred_trigger_day_of_week): static
    {
        if (is_null($preferred_trigger_day_of_week)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_day_of_week cannot be null');
        }
        $this->container['preferred_trigger_day_of_week'] = $preferred_trigger_day_of_week;

        return $this;
    }

    /**
     * Gets preferred_trigger_hour
     *
     * @return string|null
     */
    public function getPreferredTriggerHour(): ?string
    {
        return $this->container['preferred_trigger_hour'];
    }

    /**
     * Sets preferred_trigger_hour
     *
     * @param string|null $preferred_trigger_hour The preferred two-digit hour of the day to trigger the schedule. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<br /><br /><code>11Z</code><br /><br />
     *
     * @return $this
     */
    public function setPreferredTriggerHour(?string $preferred_trigger_hour): static
    {
        if (is_null($preferred_trigger_hour)) {
            throw new InvalidArgumentException('non-nullable preferred_trigger_hour cannot be null');
        }
        $this->container['preferred_trigger_hour'] = $preferred_trigger_hour;

        return $this;
    }

    /**
     * Gets schedule_end_date
     *
     * @return string|null
     */
    public function getScheduleEndDate(): ?string
    {
        return $this->container['schedule_end_date'];
    }

    /**
     * Sets schedule_end_date
     *
     * @param string|null $schedule_end_date The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes <code>INACTIVE</code>.
     *
     * @return $this
     */
    public function setScheduleEndDate(?string $schedule_end_date): static
    {
        if (is_null($schedule_end_date)) {
            throw new InvalidArgumentException('non-nullable schedule_end_date cannot be null');
        }
        $this->container['schedule_end_date'] = $schedule_end_date;

        return $this;
    }

    /**
     * Gets schedule_name
     *
     * @return string|null
     */
    public function getScheduleName(): ?string
    {
        return $this->container['schedule_name'];
    }

    /**
     * Sets schedule_name
     *
     * @param string|null $schedule_name The schedule name assigned by the user for the created schedule. Users assign this name for their reference.
     *
     * @return $this
     */
    public function setScheduleName(?string $schedule_name): static
    {
        if (is_null($schedule_name)) {
            throw new InvalidArgumentException('non-nullable schedule_name cannot be null');
        }
        $this->container['schedule_name'] = $schedule_name;

        return $this;
    }

    /**
     * Gets schedule_start_date
     *
     * @return string|null
     */
    public function getScheduleStartDate(): ?string
    {
        return $this->container['schedule_start_date'];
    }

    /**
     * Sets schedule_start_date
     *
     * @param string|null $schedule_start_date The timestamp that indicates the start of the report generation.
     *
     * @return $this
     */
    public function setScheduleStartDate(?string $schedule_start_date): static
    {
        if (is_null($schedule_start_date)) {
            throw new InvalidArgumentException('non-nullable schedule_start_date cannot be null');
        }
        $this->container['schedule_start_date'] = $schedule_start_date;

        return $this;
    }

    /**
     * Gets schedule_template_id
     *
     * @return string|null
     */
    public function getScheduleTemplateId(): ?string
    {
        return $this->container['schedule_template_id'];
    }

    /**
     * Sets schedule_template_id
     *
     * @param string|null $schedule_template_id The ID of the template used to create this schedule.
     *
     * @return $this
     */
    public function setScheduleTemplateId(?string $schedule_template_id): static
    {
        if (is_null($schedule_template_id)) {
            throw new InvalidArgumentException('non-nullable schedule_template_id cannot be null');
        }
        $this->container['schedule_template_id'] = $schedule_template_id;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion(): ?string
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string|null $schema_version The schema version of the feedType for the schedule.
     *
     * @return $this
     */
    public function setSchemaVersion(?string $schema_version): static
    {
        if (is_null($schema_version)) {
            throw new InvalidArgumentException('non-nullable schema_version cannot be null');
        }
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The enumeration value that indicates the state of the schedule. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string|null
     */
    public function getStatusReason(): ?string
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string|null $status_reason The reason the schedule is inactive. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:StatusReasonEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStatusReason(?string $status_reason): static
    {
        if (is_null($status_reason)) {
            throw new InvalidArgumentException('non-nullable status_reason cannot be null');
        }
        $this->container['status_reason'] = $status_reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


