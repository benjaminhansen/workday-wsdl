<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Insurance_Coverage_Level_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the coverage level detailed information and volume for the insurance election.
 * @subpackage Structs
 */
class Insurance_Coverage_Level_DataType extends AbstractStructBase
{
    /**
     * The Coverage_Level_Value_Data
     * @var \StructType\Coverage_Level_Value_DataType
     */
    public $Coverage_Level_Value_Data;
    /**
     * The Volume_Data
     * @var \StructType\Volume_DataType
     */
    public $Volume_Data;
    /**
     * Constructor method for Insurance_Coverage_Level_DataType
     * @uses Insurance_Coverage_Level_DataType::setCoverage_Level_Value_Data()
     * @uses Insurance_Coverage_Level_DataType::setVolume_Data()
     * @param \StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data
     * @param \StructType\Volume_DataType $volume_Data
     */
    public function __construct(\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data = null, \StructType\Volume_DataType $volume_Data = null)
    {
        $this
            ->setCoverage_Level_Value_Data($coverage_Level_Value_Data)
            ->setVolume_Data($volume_Data);
    }
    /**
     * Get Coverage_Level_Value_Data value
     * @return \StructType\Coverage_Level_Value_DataType|null
     */
    public function getCoverage_Level_Value_Data()
    {
        return $this->Coverage_Level_Value_Data;
    }
    /**
     * Set Coverage_Level_Value_Data value
     * @param \StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data
     * @return \StructType\Insurance_Coverage_Level_DataType
     */
    public function setCoverage_Level_Value_Data(\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data = null)
    {
        $this->Coverage_Level_Value_Data = $coverage_Level_Value_Data;
        return $this;
    }
    /**
     * Get Volume_Data value
     * @return \StructType\Volume_DataType|null
     */
    public function getVolume_Data()
    {
        return $this->Volume_Data;
    }
    /**
     * Set Volume_Data value
     * @param \StructType\Volume_DataType $volume_Data
     * @return \StructType\Insurance_Coverage_Level_DataType
     */
    public function setVolume_Data(\StructType\Volume_DataType $volume_Data = null)
    {
        $this->Volume_Data = $volume_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Insurance_Coverage_Level_DataType
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
