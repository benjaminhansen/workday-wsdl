<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Frequency_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: When "Add Only" is used, the Frequency ID must not already exist. | Root request element for the operation
 * @subpackage Structs
 */
class Put_Frequency_RequestType extends AbstractStructBase
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
     * - documentation: Container for the core frequency data
     * @var \WorkdayWsdl\\StructType\Frequency_DataType
     */
    public $Frequency_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Frequency_RequestType
     * @uses Put_Frequency_RequestType::setFrequency_Reference()
     * @uses Put_Frequency_RequestType::setFrequency_Data()
     * @uses Put_Frequency_RequestType::setAdd_Only()
     * @uses Put_Frequency_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param \WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, \WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setFrequency_Reference($frequency_Reference)
            ->setFrequency_Data($frequency_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
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
     * @return \WorkdayWsdl\\StructType\Put_Frequency_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Frequency_RequestType
     */
    public function setFrequency_Data(\WorkdayWsdl\\StructType\Frequency_DataType $frequency_Data = null)
    {
        $this->Frequency_Data = $frequency_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Put_Frequency_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \WorkdayWsdl\\StructType\Put_Frequency_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Frequency_RequestType
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
