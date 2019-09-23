<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Development_Plan_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the latest completed development plan for the employee.
 * @subpackage Structs
 */
class Development_Plan_DataType extends AbstractStructBase
{
    /**
     * The Development_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains a reference to latest completed development plan for the employee.
     * - minOccurs: 0
     * @var \StructType\Development_PlanObjectType
     */
    public $Development_Plan_Reference;
    /**
     * The Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the information about the development plan for the employee.
     * - minOccurs: 0
     * @var \StructType\Employee_Review_Details_DataType
     */
    public $Review_Data;
    /**
     * Constructor method for Development_Plan_DataType
     * @uses Development_Plan_DataType::setDevelopment_Plan_Reference()
     * @uses Development_Plan_DataType::setReview_Data()
     * @param \StructType\Development_PlanObjectType $development_Plan_Reference
     * @param \StructType\Employee_Review_Details_DataType $review_Data
     */
    public function __construct(\StructType\Development_PlanObjectType $development_Plan_Reference = null, \StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this
            ->setDevelopment_Plan_Reference($development_Plan_Reference)
            ->setReview_Data($review_Data);
    }
    /**
     * Get Development_Plan_Reference value
     * @return \StructType\Development_PlanObjectType|null
     */
    public function getDevelopment_Plan_Reference()
    {
        return $this->Development_Plan_Reference;
    }
    /**
     * Set Development_Plan_Reference value
     * @param \StructType\Development_PlanObjectType $development_Plan_Reference
     * @return \StructType\Development_Plan_DataType
     */
    public function setDevelopment_Plan_Reference(\StructType\Development_PlanObjectType $development_Plan_Reference = null)
    {
        $this->Development_Plan_Reference = $development_Plan_Reference;
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
     * @return \StructType\Development_Plan_DataType
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
     * @return \StructType\Development_Plan_DataType
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
