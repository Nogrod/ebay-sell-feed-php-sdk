<?php
/**
 * Task
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
 * Generator version: 7.12.0
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
 * Task Class Doc Comment
 *
 * @description The type that defines the fields for the task details.
 * @package  eBay\Sell\Feed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Task implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'completion_date' => 'string',
        'creation_date' => 'string',
        'detail_href' => 'string',
        'feed_type' => 'string',
        'schema_version' => 'string',
        'status' => 'string',
        'task_id' => 'string',
        'upload_summary' => '\eBay\Sell\Feed\Model\UploadSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'completion_date' => null,
        'creation_date' => null,
        'detail_href' => null,
        'feed_type' => null,
        'schema_version' => null,
        'status' => null,
        'task_id' => null,
        'upload_summary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'completion_date' => false,
        'creation_date' => false,
        'detail_href' => false,
        'feed_type' => false,
        'schema_version' => false,
        'status' => false,
        'task_id' => false,
        'upload_summary' => false
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
        'completion_date' => 'completionDate',
        'creation_date' => 'creationDate',
        'detail_href' => 'detailHref',
        'feed_type' => 'feedType',
        'schema_version' => 'schemaVersion',
        'status' => 'status',
        'task_id' => 'taskId',
        'upload_summary' => 'uploadSummary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'completion_date' => 'setCompletionDate',
        'creation_date' => 'setCreationDate',
        'detail_href' => 'setDetailHref',
        'feed_type' => 'setFeedType',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'task_id' => 'setTaskId',
        'upload_summary' => 'setUploadSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'completion_date' => 'getCompletionDate',
        'creation_date' => 'getCreationDate',
        'detail_href' => 'getDetailHref',
        'feed_type' => 'getFeedType',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'task_id' => 'getTaskId',
        'upload_summary' => 'getUploadSummary'
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
        $this->setIfExists('completion_date', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('detail_href', $data ?? [], null);
        $this->setIfExists('feed_type', $data ?? [], null);
        $this->setIfExists('schema_version', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('task_id', $data ?? [], null);
        $this->setIfExists('upload_summary', $data ?? [], null);
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
     * Gets completion_date
     *
     * @return string|null
     */
    public function getCompletionDate(): ?string
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param string|null $completion_date The timestamp when the task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
     *
     * @return $this
     */
    public function setCompletionDate(?string $completion_date): static
    {
        if (is_null($completion_date)) {
            throw new InvalidArgumentException('non-nullable completion_date cannot be null');
        }
        $this->container['completion_date'] = $completion_date;

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
     * @param string|null $creation_date The date the task was created.
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
     * Gets detail_href
     *
     * @return string|null
     */
    public function getDetailHref(): ?string
    {
        return $this->container['detail_href'];
    }

    /**
     * Sets detail_href
     *
     * @param string|null $detail_href The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for <code>LMS_ORDER_REPORT</code> or will be null if this task is for <code>LMS_ORDER_ACK</code>.
     *
     * @return $this
     */
    public function setDetailHref(?string $detail_href): static
    {
        if (is_null($detail_href)) {
            throw new InvalidArgumentException('non-nullable detail_href cannot be null');
        }
        $this->container['detail_href'] = $detail_href;

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
     * @param string|null $feed_type The feed type associated with the task.
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
     * @param string|null $schema_version The schema version number associated with the task.
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
     * @param string|null $status The enumeration value that indicates the state of the task that was submitted in the request. See <strong>FeedStatusEnum</strong> for information. <p>The values <code>COMPLETED </code>and<code> COMPLETED_WITH_ERROR</code> indicate the Order Report file is ready to download.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
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
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId(): ?string
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id The ID of the task that was submitted in the request.
     *
     * @return $this
     */
    public function setTaskId(?string $task_id): static
    {
        if (is_null($task_id)) {
            throw new InvalidArgumentException('non-nullable task_id cannot be null');
        }
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets upload_summary
     *
     * @return \eBay\Sell\Feed\Model\UploadSummary|null
     */
    public function getUploadSummary(): ?\eBay\Sell\Feed\Model\UploadSummary
    {
        return $this->container['upload_summary'];
    }

    /**
     * Sets upload_summary
     *
     * @param \eBay\Sell\Feed\Model\UploadSummary|null $upload_summary upload_summary
     *
     * @return $this
     */
    public function setUploadSummary(?\eBay\Sell\Feed\Model\UploadSummary $upload_summary): static
    {
        if (is_null($upload_summary)) {
            throw new InvalidArgumentException('non-nullable upload_summary cannot be null');
        }
        $this->container['upload_summary'] = $upload_summary;

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


