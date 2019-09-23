<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Disability_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put Disability operation.
 * @subpackage Structs
 */
class Put_Disability_ResponseType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Disability.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\DisabilityObjectType
     */
    public $Disability_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Disability_ResponseType
     * @uses Put_Disability_ResponseType::setDisability_Reference()
     * @uses Put_Disability_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference = null, $version = null)
    {
        $this
            ->setDisability_Reference($disability_Reference)
            ->setVersion($version);
    }
    /**
     * Get Disability_Reference value
     * @return \WorkdayWsdl\\StructType\DisabilityObjectType|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * Set Disability_Reference value
     * @param \WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference
     * @return \WorkdayWsdl\\StructType\Put_Disability_ResponseType
     */
    public function setDisability_Reference(\WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference = null)
    {
        $this->Disability_Reference = $disability_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Disability_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Disability_ResponseType
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
