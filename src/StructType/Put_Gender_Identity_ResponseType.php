<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Gender_Identity_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response to the gender identity put request.
 * @subpackage Structs
 */
class Put_Gender_Identity_ResponseType extends AbstractStructBase
{
    /**
     * The Gender_Identity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the gender identity of the person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Gender_IdentityObjectType
     */
    public $Gender_Identity_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Gender_Identity_ResponseType
     * @uses Put_Gender_Identity_ResponseType::setGender_Identity_Reference()
     * @uses Put_Gender_Identity_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null, $version = null)
    {
        $this
            ->setGender_Identity_Reference($gender_Identity_Reference)
            ->setVersion($version);
    }
    /**
     * Get Gender_Identity_Reference value
     * @return \WorkdayWsdl\\StructType\Gender_IdentityObjectType|null
     */
    public function getGender_Identity_Reference()
    {
        return $this->Gender_Identity_Reference;
    }
    /**
     * Set Gender_Identity_Reference value
     * @param \WorkdayWsdl\\StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @return \WorkdayWsdl\\StructType\Put_Gender_Identity_ResponseType
     */
    public function setGender_Identity_Reference(\WorkdayWsdl\\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null)
    {
        $this->Gender_Identity_Reference = $gender_Identity_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Gender_Identity_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Gender_Identity_ResponseType
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
