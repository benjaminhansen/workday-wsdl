<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Sexual_Orientation_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response to the sexual orientation put request.
 * @subpackage Structs
 */
class Put_Sexual_Orientation_ResponseType extends AbstractStructBase
{
    /**
     * The Sexual_Orientation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the sexual orientation of the person.
     * - minOccurs: 0
     * @var \StructType\Sexual_OrientationObjectType
     */
    public $Sexual_Orientation_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Sexual_Orientation_ResponseType
     * @uses Put_Sexual_Orientation_ResponseType::setSexual_Orientation_Reference()
     * @uses Put_Sexual_Orientation_ResponseType::setVersion()
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @param string $version
     */
    public function __construct(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null, $version = null)
    {
        $this
            ->setSexual_Orientation_Reference($sexual_Orientation_Reference)
            ->setVersion($version);
    }
    /**
     * Get Sexual_Orientation_Reference value
     * @return \StructType\Sexual_OrientationObjectType|null
     */
    public function getSexual_Orientation_Reference()
    {
        return $this->Sexual_Orientation_Reference;
    }
    /**
     * Set Sexual_Orientation_Reference value
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @return \StructType\Put_Sexual_Orientation_ResponseType
     */
    public function setSexual_Orientation_Reference(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null)
    {
        $this->Sexual_Orientation_Reference = $sexual_Orientation_Reference;
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
     * @return \StructType\Put_Sexual_Orientation_ResponseType
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
     * @return \StructType\Put_Sexual_Orientation_ResponseType
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
