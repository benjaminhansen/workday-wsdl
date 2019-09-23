<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Social_Benefits_Locality_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put Political Affiliation operation.
 * @subpackage Structs
 */
class Put_Social_Benefits_Locality_ResponseType extends AbstractStructBase
{
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Social Benefits Locality
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Social_Benefits_Locality_ResponseType
     * @uses Put_Social_Benefits_Locality_ResponseType::setSocial_Benefits_Locality_Reference()
     * @uses Put_Social_Benefits_Locality_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, $version = null)
    {
        $this
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setVersion($version);
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_ResponseType
     */
    public function setSocial_Benefits_Locality_Reference(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_ResponseType
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
