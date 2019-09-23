<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Ethnicity_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Ethnicity
 * @subpackage Structs
 */
class Put_Ethnicity_ResponseType extends AbstractStructBase
{
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Ethnicity.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EthnicityObjectType
     */
    public $Ethnicity_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Ethnicity_ResponseType
     * @uses Put_Ethnicity_ResponseType::setEthnicity_Reference()
     * @uses Put_Ethnicity_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference = null, $version = null)
    {
        $this
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setVersion($version);
    }
    /**
     * Get Ethnicity_Reference value
     * @return \WorkdayWsdl\\StructType\EthnicityObjectType|null
     */
    public function getEthnicity_Reference()
    {
        return $this->Ethnicity_Reference;
    }
    /**
     * Set Ethnicity_Reference value
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference
     * @return \WorkdayWsdl\\StructType\Put_Ethnicity_ResponseType
     */
    public function setEthnicity_Reference(\WorkdayWsdl\\StructType\EthnicityObjectType $ethnicity_Reference = null)
    {
        $this->Ethnicity_Reference = $ethnicity_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Ethnicity_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Ethnicity_ResponseType
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
