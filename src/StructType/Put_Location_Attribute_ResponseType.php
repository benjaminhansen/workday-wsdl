<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Location_Attribute_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Web Service Element for Put Location Attribute Response
 * @subpackage Structs
 */
class Put_Location_Attribute_ResponseType extends AbstractStructBase
{
    /**
     * The Location_Attribute_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Attribute reference
     * - minOccurs: 0
     * @var \StructType\Location_AttributeObjectType
     */
    public $Location_Attribute_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Location_Attribute_ResponseType
     * @uses Put_Location_Attribute_ResponseType::setLocation_Attribute_Reference()
     * @uses Put_Location_Attribute_ResponseType::setVersion()
     * @param \StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @param string $version
     */
    public function __construct(\StructType\Location_AttributeObjectType $location_Attribute_Reference = null, $version = null)
    {
        $this
            ->setLocation_Attribute_Reference($location_Attribute_Reference)
            ->setVersion($version);
    }
    /**
     * Get Location_Attribute_Reference value
     * @return \StructType\Location_AttributeObjectType|null
     */
    public function getLocation_Attribute_Reference()
    {
        return $this->Location_Attribute_Reference;
    }
    /**
     * Set Location_Attribute_Reference value
     * @param \StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @return \StructType\Put_Location_Attribute_ResponseType
     */
    public function setLocation_Attribute_Reference(\StructType\Location_AttributeObjectType $location_Attribute_Reference = null)
    {
        $this->Location_Attribute_Reference = $location_Attribute_Reference;
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
     * @return \StructType\Put_Location_Attribute_ResponseType
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
     * @return \StructType\Put_Location_Attribute_ResponseType
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
