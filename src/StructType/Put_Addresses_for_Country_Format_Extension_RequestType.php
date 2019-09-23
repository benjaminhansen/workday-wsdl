<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Addresses_for_Country_Format_Extension_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates that the address is related to an active contactable. | Request element containing Address update information.
 * @subpackage Structs
 */
class Put_Addresses_for_Country_Format_Extension_RequestType extends AbstractStructBase
{
    /**
     * The Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: Identifies instance of Address.
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Address_Reference;
    /**
     * The Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for Address Update Data.
     * - maxOccurs: unbounded
     * @var \StructType\Global_Address_DataType[]
     */
    public $Address_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Addresses_for_Country_Format_Extension_RequestType
     * @uses Put_Addresses_for_Country_Format_Extension_RequestType::setAddress_Reference()
     * @uses Put_Addresses_for_Country_Format_Extension_RequestType::setAddress_Data()
     * @uses Put_Addresses_for_Country_Format_Extension_RequestType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $address_Reference
     * @param \StructType\Global_Address_DataType[] $address_Data
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $address_Reference = null, array $address_Data = array(), $version = null)
    {
        $this
            ->setAddress_Reference($address_Reference)
            ->setAddress_Data($address_Data)
            ->setVersion($version);
    }
    /**
     * Get Address_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getAddress_Reference()
    {
        return $this->Address_Reference;
    }
    /**
     * Set Address_Reference value
     * @param \StructType\Unique_IdentifierObjectType $address_Reference
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_RequestType
     */
    public function setAddress_Reference(\StructType\Unique_IdentifierObjectType $address_Reference = null)
    {
        $this->Address_Reference = $address_Reference;
        return $this;
    }
    /**
     * Get Address_Data value
     * @return \StructType\Global_Address_DataType[]|null
     */
    public function getAddress_Data()
    {
        return $this->Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddress_DataForArrayConstraintsFromSetAddress_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem) {
            // validation for constraint: itemType
            if (!$put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem instanceof \StructType\Global_Address_DataType) {
                $invalidValues[] = is_object($put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem) ? get_class($put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem) : sprintf('%s(%s)', gettype($put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem), var_export($put_Addresses_for_Country_Format_Extension_RequestTypeAddress_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Data property can only contain items of type \StructType\Global_Address_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Global_Address_DataType[] $address_Data
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_RequestType
     */
    public function setAddress_Data(array $address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($address_DataArrayErrorMessage = self::validateAddress_DataForArrayConstraintsFromSetAddress_Data($address_Data))) {
            throw new \InvalidArgumentException($address_DataArrayErrorMessage, __LINE__);
        }
        $this->Address_Data = $address_Data;
        return $this;
    }
    /**
     * Add item to Address_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Global_Address_DataType $item
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_RequestType
     */
    public function addToAddress_Data(\StructType\Global_Address_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Global_Address_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Data property can only contain items of type \StructType\Global_Address_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Data[] = $item;
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
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_RequestType
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
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_RequestType
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
