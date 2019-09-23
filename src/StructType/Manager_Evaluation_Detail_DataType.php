<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manager_Evaluation_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the evaluation information that was filled out by the manager.
 * @subpackage Structs
 */
class Manager_Evaluation_Detail_DataType extends AbstractStructBase
{
    /**
     * The Overall_Data
     * Meta information extracted from the WSDL
     * - documentation: The overall section evaluation information (rating, comments) from the manager.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType
     */
    public $Overall_Data;
    /**
     * Constructor method for Manager_Evaluation_Detail_DataType
     * @uses Manager_Evaluation_Detail_DataType::setOverall_Data()
     * @param \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType $overall_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType $overall_Data = null)
    {
        $this
            ->setOverall_Data($overall_Data);
    }
    /**
     * Get Overall_Data value
     * @return \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType|null
     */
    public function getOverall_Data()
    {
        return $this->Overall_Data;
    }
    /**
     * Set Overall_Data value
     * @param \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType $overall_Data
     * @return \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType
     */
    public function setOverall_Data(\WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType $overall_Data = null)
    {
        $this->Overall_Data = $overall_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType
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
