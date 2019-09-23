<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequencyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for a single frequency
 * @subpackage Structs
 */
class FrequencyType extends AbstractStructBase
{
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a specific Frequency based on its unique ID (Frequency ID or Workday ID).
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Frequency_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Frequency_DataType
     */
    public $Frequency_Data;
    /**
     * Constructor method for FrequencyType
     * @uses FrequencyType::setFrequency_Reference()
     * @uses FrequencyType::setFrequency_Data()
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param \WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, \WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data = null)
    {
        $this
            ->setFrequency_Reference($frequency_Reference)
            ->setFrequency_Data($frequency_Data);
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\FrequencyType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Data value
     * @return \WorkdayWsdl\\StructType\Frequency_DataType|null
     */
    public function getFrequency_Data()
    {
        return $this->Frequency_Data;
    }
    /**
     * Set Frequency_Data value
     * @param \WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data
     * @return \WorkdayWsdl\\StructType\FrequencyType
     */
    public function setFrequency_Data(\WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data = null)
    {
        $this->Frequency_Data = $frequency_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\FrequencyType
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
