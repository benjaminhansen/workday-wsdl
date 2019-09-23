<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Management_Chains_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's organizations that they are a member of related to the position.
 * @subpackage Structs
 */
class Position_Management_Chains_DataType extends AbstractStructBase
{
    /**
     * The Position_Supervisory_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType
     */
    public $Position_Supervisory_Management_Chain_Data;
    /**
     * The Position_Matrix_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType
     */
    public $Position_Matrix_Management_Chain_Data;
    /**
     * Constructor method for Position_Management_Chains_DataType
     * @uses Position_Management_Chains_DataType::setPosition_Supervisory_Management_Chain_Data()
     * @uses Position_Management_Chains_DataType::setPosition_Matrix_Management_Chain_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType $position_Supervisory_Management_Chain_Data
     * @param \WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType $position_Matrix_Management_Chain_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType $position_Supervisory_Management_Chain_Data = null, \WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType $position_Matrix_Management_Chain_Data = null)
    {
        $this
            ->setPosition_Supervisory_Management_Chain_Data($position_Supervisory_Management_Chain_Data)
            ->setPosition_Matrix_Management_Chain_Data($position_Matrix_Management_Chain_Data);
    }
    /**
     * Get Position_Supervisory_Management_Chain_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType|null
     */
    public function getPosition_Supervisory_Management_Chain_Data()
    {
        return $this->Position_Supervisory_Management_Chain_Data;
    }
    /**
     * Set Position_Supervisory_Management_Chain_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType $position_Supervisory_Management_Chain_Data
     * @return \WorkdayWsdl\\StructType\Position_Management_Chains_DataType
     */
    public function setPosition_Supervisory_Management_Chain_Data(\WorkdayWsdl\\StructType\Worker_Supervisory_Management_Chain_DataType $position_Supervisory_Management_Chain_Data = null)
    {
        $this->Position_Supervisory_Management_Chain_Data = $position_Supervisory_Management_Chain_Data;
        return $this;
    }
    /**
     * Get Position_Matrix_Management_Chain_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType|null
     */
    public function getPosition_Matrix_Management_Chain_Data()
    {
        return $this->Position_Matrix_Management_Chain_Data;
    }
    /**
     * Set Position_Matrix_Management_Chain_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType $position_Matrix_Management_Chain_Data
     * @return \WorkdayWsdl\\StructType\Position_Management_Chains_DataType
     */
    public function setPosition_Matrix_Management_Chain_Data(\WorkdayWsdl\\StructType\Worker_Matrix_Management_Chain_DataType $position_Matrix_Management_Chain_Data = null)
    {
        $this->Position_Matrix_Management_Chain_Data = $position_Matrix_Management_Chain_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Position_Management_Chains_DataType
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
