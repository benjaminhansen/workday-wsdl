<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Location_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Location operation.
 * @subpackage Structs
 */
class Put_Location_ResponseType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Location.
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Exceptions_Response_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Application_Instance_Related_Exceptions_DataType[]
     */
    public $Exceptions_Response_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Location_ResponseType
     * @uses Put_Location_ResponseType::setLocation_Reference()
     * @uses Put_Location_ResponseType::setExceptions_Response_Data()
     * @uses Put_Location_ResponseType::setVersion()
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\Application_Instance_Related_Exceptions_DataType[] $exceptions_Response_Data
     * @param string $version
     */
    public function __construct(\StructType\LocationObjectType $location_Reference = null, array $exceptions_Response_Data = array(), $version = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setExceptions_Response_Data($exceptions_Response_Data)
            ->setVersion($version);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Put_Location_ResponseType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Exceptions_Response_Data value
     * @return \StructType\Application_Instance_Related_Exceptions_DataType[]|null
     */
    public function getExceptions_Response_Data()
    {
        return $this->Exceptions_Response_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setExceptions_Response_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExceptions_Response_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExceptions_Response_DataForArrayConstraintsFromSetExceptions_Response_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Location_ResponseTypeExceptions_Response_DataItem) {
            // validation for constraint: itemType
            if (!$put_Location_ResponseTypeExceptions_Response_DataItem instanceof \StructType\Application_Instance_Related_Exceptions_DataType) {
                $invalidValues[] = is_object($put_Location_ResponseTypeExceptions_Response_DataItem) ? get_class($put_Location_ResponseTypeExceptions_Response_DataItem) : sprintf('%s(%s)', gettype($put_Location_ResponseTypeExceptions_Response_DataItem), var_export($put_Location_ResponseTypeExceptions_Response_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Exceptions_Response_Data property can only contain items of type \StructType\Application_Instance_Related_Exceptions_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Exceptions_Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Application_Instance_Related_Exceptions_DataType[] $exceptions_Response_Data
     * @return \StructType\Put_Location_ResponseType
     */
    public function setExceptions_Response_Data(array $exceptions_Response_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($exceptions_Response_DataArrayErrorMessage = self::validateExceptions_Response_DataForArrayConstraintsFromSetExceptions_Response_Data($exceptions_Response_Data))) {
            throw new \InvalidArgumentException($exceptions_Response_DataArrayErrorMessage, __LINE__);
        }
        $this->Exceptions_Response_Data = $exceptions_Response_Data;
        return $this;
    }
    /**
     * Add item to Exceptions_Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Application_Instance_Related_Exceptions_DataType $item
     * @return \StructType\Put_Location_ResponseType
     */
    public function addToExceptions_Response_Data(\StructType\Application_Instance_Related_Exceptions_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Application_Instance_Related_Exceptions_DataType) {
            throw new \InvalidArgumentException(sprintf('The Exceptions_Response_Data property can only contain items of type \StructType\Application_Instance_Related_Exceptions_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Exceptions_Response_Data[] = $item;
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
     * @return \StructType\Put_Location_ResponseType
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
     * @return \StructType\Put_Location_ResponseType
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
