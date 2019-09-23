<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_LGBT_Identification_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put LGBT Identification operation.
 * @subpackage Structs
 */
class Put_LGBT_Identification_ResponseType extends AbstractStructBase
{
    /**
     * The LGBT_Identification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a LGBT Identification
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType
     */
    public $LGBT_Identification_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_LGBT_Identification_ResponseType
     * @uses Put_LGBT_Identification_ResponseType::setLGBT_Identification_Reference()
     * @uses Put_LGBT_Identification_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null, $version = null)
    {
        $this
            ->setLGBT_Identification_Reference($lGBT_Identification_Reference)
            ->setVersion($version);
    }
    /**
     * Get LGBT_Identification_Reference value
     * @return \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType|null
     */
    public function getLGBT_Identification_Reference()
    {
        return $this->LGBT_Identification_Reference;
    }
    /**
     * Set LGBT_Identification_Reference value
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_ResponseType
     */
    public function setLGBT_Identification_Reference(\WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null)
    {
        $this->LGBT_Identification_Reference = $lGBT_Identification_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_ResponseType
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
