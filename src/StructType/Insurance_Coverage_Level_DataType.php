<?php

namespace WorkdayWsdl\\StructType;

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
     * @var \WorkdayWsdl\\StructType\Coverage_Level_Value_DataType
     */
    public $Coverage_Level_Value_Data;
    /**
     * The Volume_Data
     * @var \WorkdayWsdl\\StructType\Volume_DataType
     */
    public $Volume_Data;
    /**
     * Constructor method for Insurance_Coverage_Level_DataType
     * @uses Insurance_Coverage_Level_DataType::setCoverage_Level_Value_Data()
     * @uses Insurance_Coverage_Level_DataType::setVolume_Data()
     * @param \WorkdayWsdl\\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data
     * @param \WorkdayWsdl\\StructType\Volume_DataType $volume_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data = null, \WorkdayWsdl\\StructType\Volume_DataType $volume_Data = null)
    {
        $this
            ->setCoverage_Level_Value_Data($coverage_Level_Value_Data)
            ->setVolume_Data($volume_Data);
    }
    /**
     * Get Coverage_Level_Value_Data value
     * @return \WorkdayWsdl\\StructType\Coverage_Level_Value_DataType|null
     */
    public function getCoverage_Level_Value_Data()
    {
        return $this->Coverage_Level_Value_Data;
    }
    /**
     * Set Coverage_Level_Value_Data value
     * @param \WorkdayWsdl\\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType
     */
    public function setCoverage_Level_Value_Data(\WorkdayWsdl\\StructType\Coverage_Level_Value_DataType $coverage_Level_Value_Data = null)
    {
        $this->Coverage_Level_Value_Data = $coverage_Level_Value_Data;
        return $this;
    }
    /**
     * Get Volume_Data value
     * @return \WorkdayWsdl\\StructType\Volume_DataType|null
     */
    public function getVolume_Data()
    {
        return $this->Volume_Data;
    }
    /**
     * Set Volume_Data value
     * @param \WorkdayWsdl\\StructType\Volume_DataType $volume_Data
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType
     */
    public function setVolume_Data(\WorkdayWsdl\\StructType\Volume_DataType $volume_Data = null)
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
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_Level_DataType
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
