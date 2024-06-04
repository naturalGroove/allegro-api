<?php
/**
 * SmartOfferClassificationReport
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * SmartOfferClassificationReport Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SmartOfferClassificationReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartOfferClassificationReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'classification' => '\AllegroApi\Model\SmartOfferClassificationReportClassification',
        'scheduled_for_reclassification' => 'bool',
        'smart_delivery_methods' => '\AllegroApi\Model\SmartDeliveryMethod[]',
        'conditions' => '\AllegroApi\Model\SmartOfferClassificationReportConditionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'classification' => null,
        'scheduled_for_reclassification' => null,
        'smart_delivery_methods' => null,
        'conditions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'classification' => false,
        'scheduled_for_reclassification' => false,
        'smart_delivery_methods' => false,
        'conditions' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'classification' => 'classification',
        'scheduled_for_reclassification' => 'scheduledForReclassification',
        'smart_delivery_methods' => 'smartDeliveryMethods',
        'conditions' => 'conditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification' => 'setClassification',
        'scheduled_for_reclassification' => 'setScheduledForReclassification',
        'smart_delivery_methods' => 'setSmartDeliveryMethods',
        'conditions' => 'setConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification' => 'getClassification',
        'scheduled_for_reclassification' => 'getScheduledForReclassification',
        'smart_delivery_methods' => 'getSmartDeliveryMethods',
        'conditions' => 'getConditions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('scheduled_for_reclassification', $data ?? [], null);
        $this->setIfExists('smart_delivery_methods', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets classification
     *
     * @return \AllegroApi\Model\SmartOfferClassificationReportClassification|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param \AllegroApi\Model\SmartOfferClassificationReportClassification|null $classification classification
     *
     * @return self
     */
    public function setClassification($classification)
    {
        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets scheduled_for_reclassification
     *
     * @return bool|null
     */
    public function getScheduledForReclassification()
    {
        return $this->container['scheduled_for_reclassification'];
    }

    /**
     * Sets scheduled_for_reclassification
     *
     * @param bool|null $scheduled_for_reclassification Indicates whether that particular offer is set to be reclassified in the next 24 hours
     *
     * @return self
     */
    public function setScheduledForReclassification($scheduled_for_reclassification)
    {
        if (is_null($scheduled_for_reclassification)) {
            throw new \InvalidArgumentException('non-nullable scheduled_for_reclassification cannot be null');
        }
        $this->container['scheduled_for_reclassification'] = $scheduled_for_reclassification;

        return $this;
    }

    /**
     * Gets smart_delivery_methods
     *
     * @return \AllegroApi\Model\SmartDeliveryMethod[]|null
     */
    public function getSmartDeliveryMethods()
    {
        return $this->container['smart_delivery_methods'];
    }

    /**
     * Sets smart_delivery_methods
     *
     * @param \AllegroApi\Model\SmartDeliveryMethod[]|null $smart_delivery_methods Delivery methods marked with Smart! label
     *
     * @return self
     */
    public function setSmartDeliveryMethods($smart_delivery_methods)
    {
        if (is_null($smart_delivery_methods)) {
            throw new \InvalidArgumentException('non-nullable smart_delivery_methods cannot be null');
        }
        $this->container['smart_delivery_methods'] = $smart_delivery_methods;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \AllegroApi\Model\SmartOfferClassificationReportConditionsInner[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \AllegroApi\Model\SmartOfferClassificationReportConditionsInner[]|null $conditions Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

