<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Difficulty_to_FillType StructType
 * Meta information extracted from the WSDL
 * - documentation: Difficulty to Fill
 * @subpackage Structs
 */
class Difficulty_to_FillType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the difficulty to fill.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * The Difficulty_to_Fill_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for the difficulty to fill data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public $Difficulty_to_Fill_Data;
    /**
     * Constructor method for Difficulty_to_FillType
     * @uses Difficulty_to_FillType::setDifficulty_to_Fill_Reference()
     * @uses Difficulty_to_FillType::setDifficulty_to_Fill_Data()
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @param \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null, \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data = null)
    {
        $this
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference)
            ->setDifficulty_to_Fill_Data($difficulty_to_Fill_Data);
    }
    /**
     * Get Difficulty_to_Fill_Reference value
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillType
     */
    public function setDifficulty_to_Fill_Reference(\WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Data value
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType|null
     */
    public function getDifficulty_to_Fill_Data()
    {
        return $this->Difficulty_to_Fill_Data;
    }
    /**
     * Set Difficulty_to_Fill_Data value
     * @param \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillType
     */
    public function setDifficulty_to_Fill_Data(\WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data = null)
    {
        $this->Difficulty_to_Fill_Data = $difficulty_to_Fill_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillType
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
