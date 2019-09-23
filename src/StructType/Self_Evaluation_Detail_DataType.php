<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Self_Evaluation_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the evaluation information that was filled out by the employee.
 * @subpackage Structs
 */
class Self_Evaluation_Detail_DataType extends AbstractStructBase
{
    /**
     * The Overall_Data
     * Meta information extracted from the WSDL
     * - documentation: The overall section evaluation information (rating, comments) from the employee.
     * - minOccurs: 0
     * @var \StructType\Overall_Evaluation_Detail_DataType
     */
    public $Overall_Data;
    /**
     * Constructor method for Self_Evaluation_Detail_DataType
     * @uses Self_Evaluation_Detail_DataType::setOverall_Data()
     * @param \StructType\Overall_Evaluation_Detail_DataType $overall_Data
     */
    public function __construct(\StructType\Overall_Evaluation_Detail_DataType $overall_Data = null)
    {
        $this
            ->setOverall_Data($overall_Data);
    }
    /**
     * Get Overall_Data value
     * @return \StructType\Overall_Evaluation_Detail_DataType|null
     */
    public function getOverall_Data()
    {
        return $this->Overall_Data;
    }
    /**
     * Set Overall_Data value
     * @param \StructType\Overall_Evaluation_Detail_DataType $overall_Data
     * @return \StructType\Self_Evaluation_Detail_DataType
     */
    public function setOverall_Data(\StructType\Overall_Evaluation_Detail_DataType $overall_Data = null)
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
     * @return \StructType\Self_Evaluation_Detail_DataType
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
