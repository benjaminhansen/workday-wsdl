<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Performance_Review_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the latest completed performance review for the employee.
 * @subpackage Structs
 */
class Performance_Review_DataType extends AbstractStructBase
{
    /**
     * The Performance_Review_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains a reference to latest completed performance review for the employee.
     * - minOccurs: 0
     * @var \StructType\Performance_ReviewObjectType
     */
    public $Performance_Review_Reference;
    /**
     * The Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the information about the performance review for the employee.
     * - minOccurs: 0
     * @var \StructType\Employee_Review_Details_DataType
     */
    public $Review_Data;
    /**
     * Constructor method for Performance_Review_DataType
     * @uses Performance_Review_DataType::setPerformance_Review_Reference()
     * @uses Performance_Review_DataType::setReview_Data()
     * @param \StructType\Performance_ReviewObjectType $performance_Review_Reference
     * @param \StructType\Employee_Review_Details_DataType $review_Data
     */
    public function __construct(\StructType\Performance_ReviewObjectType $performance_Review_Reference = null, \StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this
            ->setPerformance_Review_Reference($performance_Review_Reference)
            ->setReview_Data($review_Data);
    }
    /**
     * Get Performance_Review_Reference value
     * @return \StructType\Performance_ReviewObjectType|null
     */
    public function getPerformance_Review_Reference()
    {
        return $this->Performance_Review_Reference;
    }
    /**
     * Set Performance_Review_Reference value
     * @param \StructType\Performance_ReviewObjectType $performance_Review_Reference
     * @return \StructType\Performance_Review_DataType
     */
    public function setPerformance_Review_Reference(\StructType\Performance_ReviewObjectType $performance_Review_Reference = null)
    {
        $this->Performance_Review_Reference = $performance_Review_Reference;
        return $this;
    }
    /**
     * Get Review_Data value
     * @return \StructType\Employee_Review_Details_DataType|null
     */
    public function getReview_Data()
    {
        return $this->Review_Data;
    }
    /**
     * Set Review_Data value
     * @param \StructType\Employee_Review_Details_DataType $review_Data
     * @return \StructType\Performance_Review_DataType
     */
    public function setReview_Data(\StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this->Review_Data = $review_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Performance_Review_DataType
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
