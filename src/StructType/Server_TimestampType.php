<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Server_TimestampType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing the current DateTime of the Workday system.
 * @subpackage Structs
 */
class Server_TimestampType extends AbstractStructBase
{
    /**
     * The Server_Timestamp_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Server Timestamp data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Server_Timestamp_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Server_TimestampType
     * @uses Server_TimestampType::setServer_Timestamp_Data()
     * @uses Server_TimestampType::setVersion()
     * @param string[] $server_Timestamp_Data
     * @param string $version
     */
    public function __construct(array $server_Timestamp_Data = array(), $version = null)
    {
        $this
            ->setServer_Timestamp_Data($server_Timestamp_Data)
            ->setVersion($version);
    }
    /**
     * Get Server_Timestamp_Data value
     * @return string[]|null
     */
    public function getServer_Timestamp_Data()
    {
        return $this->Server_Timestamp_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setServer_Timestamp_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServer_Timestamp_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServer_Timestamp_DataForArrayConstraintsFromSetServer_Timestamp_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $server_TimestampTypeServer_Timestamp_DataItem) {
            // validation for constraint: itemType
            if (!is_string($server_TimestampTypeServer_Timestamp_DataItem)) {
                $invalidValues[] = is_object($server_TimestampTypeServer_Timestamp_DataItem) ? get_class($server_TimestampTypeServer_Timestamp_DataItem) : sprintf('%s(%s)', gettype($server_TimestampTypeServer_Timestamp_DataItem), var_export($server_TimestampTypeServer_Timestamp_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Server_Timestamp_Data property can only contain items of type dateTime, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Server_Timestamp_Data value
     * @throws \InvalidArgumentException
     * @param string[] $server_Timestamp_Data
     * @return \WorkdayWsdl\\StructType\Server_TimestampType
     */
    public function setServer_Timestamp_Data(array $server_Timestamp_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($server_Timestamp_DataArrayErrorMessage = self::validateServer_Timestamp_DataForArrayConstraintsFromSetServer_Timestamp_Data($server_Timestamp_Data))) {
            throw new \InvalidArgumentException($server_Timestamp_DataArrayErrorMessage, __LINE__);
        }
        $this->Server_Timestamp_Data = $server_Timestamp_Data;
        return $this;
    }
    /**
     * Add item to Server_Timestamp_Data value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \WorkdayWsdl\\StructType\Server_TimestampType
     */
    public function addToServer_Timestamp_Data($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Server_Timestamp_Data property can only contain items of type dateTime, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Server_Timestamp_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Server_TimestampType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Server_TimestampType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
