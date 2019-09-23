<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Frequency_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for Put Frequency service
 * @subpackage Structs
 */
class Put_Frequency_ResponseType extends AbstractStructBase
{
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Frequency object
     * - minOccurs: 0
     * @var \StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Frequency_ResponseType
     * @uses Put_Frequency_ResponseType::setFrequency_Reference()
     * @uses Put_Frequency_ResponseType::setVersion()
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @param string $version
     */
    public function __construct(\StructType\FrequencyObjectType $frequency_Reference = null, $version = null)
    {
        $this
            ->setFrequency_Reference($frequency_Reference)
            ->setVersion($version);
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @return \StructType\Put_Frequency_ResponseType
     */
    public function setFrequency_Reference(\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
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
     * @return \StructType\Put_Frequency_ResponseType
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
     * @return \StructType\Put_Frequency_ResponseType
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
