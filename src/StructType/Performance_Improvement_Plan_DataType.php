<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Performance_Improvement_Plan_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the latest completed performance improvement plan for the employee.
 * @subpackage Structs
 */
class Performance_Improvement_Plan_DataType extends AbstractStructBase
{
    /**
     * The Performance_Improvement_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains a reference to latest completed performance improvement plan for the employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType
     */
    public $Performance_Improvement_Plan_Reference;
    /**
     * The Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the information about the performance improvement plan for the employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public $Review_Data;
    /**
     * Constructor method for Performance_Improvement_Plan_DataType
     * @uses Performance_Improvement_Plan_DataType::setPerformance_Improvement_Plan_Reference()
     * @uses Performance_Improvement_Plan_DataType::setReview_Data()
     * @param \WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType $performance_Improvement_Plan_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType $performance_Improvement_Plan_Reference = null, \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this
            ->setPerformance_Improvement_Plan_Reference($performance_Improvement_Plan_Reference)
            ->setReview_Data($review_Data);
    }
    /**
     * Get Performance_Improvement_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType|null
     */
    public function getPerformance_Improvement_Plan_Reference()
    {
        return $this->Performance_Improvement_Plan_Reference;
    }
    /**
     * Set Performance_Improvement_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType $performance_Improvement_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Performance_Improvement_Plan_DataType
     */
    public function setPerformance_Improvement_Plan_Reference(\WorkdayWsdl\\StructType\Performance_Improvement_PlanObjectType $performance_Improvement_Plan_Reference = null)
    {
        $this->Performance_Improvement_Plan_Reference = $performance_Improvement_Plan_Reference;
        return $this;
    }
    /**
     * Get Review_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType|null
     */
    public function getReview_Data()
    {
        return $this->Review_Data;
    }
    /**
     * Set Review_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data
     * @return \WorkdayWsdl\\StructType\Performance_Improvement_Plan_DataType
     */
    public function setReview_Data(\WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data = null)
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
     * @return \WorkdayWsdl\\StructType\Performance_Improvement_Plan_DataType
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
