<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Review_Details_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the information about the review for the employee.
 * @subpackage Structs
 */
class Employee_Review_Details_DataType extends AbstractStructBase
{
    /**
     * The Manager_Reference
     * Meta information extracted from the WSDL
     * - documentation: The manager for this review.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Manager_Reference;
    /**
     * The Multiple_Manager_Reference
     * Meta information extracted from the WSDL
     * - documentation: Manager(s) for this review.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Multiple_Manager_Reference;
    /**
     * The Review_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of review.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Review_TypeObjectType
     */
    public $Review_Type_Reference;
    /**
     * The Review_Template_Reference
     * Meta information extracted from the WSDL
     * - documentation: The review template that was used as a basis for the review.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType
     */
    public $Review_Template_Reference;
    /**
     * The Review_Initiated_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the review was started (i.e. first created).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Review_Initiated_Date;
    /**
     * The Period_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the review period began.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Period_Start_Date;
    /**
     * The Period_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the review period ended.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Period_End_Date;
    /**
     * The Self_Evaluation_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the evaluation information that was filled out by the employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType
     */
    public $Self_Evaluation_Data;
    /**
     * The Manager_Evaluation_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the evaluation information that was filled out by the manager.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType
     */
    public $Manager_Evaluation_Data;
    /**
     * Constructor method for Employee_Review_Details_DataType
     * @uses Employee_Review_Details_DataType::setManager_Reference()
     * @uses Employee_Review_Details_DataType::setMultiple_Manager_Reference()
     * @uses Employee_Review_Details_DataType::setReview_Type_Reference()
     * @uses Employee_Review_Details_DataType::setReview_Template_Reference()
     * @uses Employee_Review_Details_DataType::setReview_Initiated_Date()
     * @uses Employee_Review_Details_DataType::setPeriod_Start_Date()
     * @uses Employee_Review_Details_DataType::setPeriod_End_Date()
     * @uses Employee_Review_Details_DataType::setSelf_Evaluation_Data()
     * @uses Employee_Review_Details_DataType::setManager_Evaluation_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $multiple_Manager_Reference
     * @param \WorkdayWsdl\\StructType\Review_TypeObjectType $review_Type_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType $review_Template_Reference
     * @param string $review_Initiated_Date
     * @param string $period_Start_Date
     * @param string $period_End_Date
     * @param \WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType $self_Evaluation_Data
     * @param \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType $manager_Evaluation_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference = null, array $multiple_Manager_Reference = array(), \WorkdayWsdl\\StructType\Review_TypeObjectType $review_Type_Reference = null, \WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType $review_Template_Reference = null, $review_Initiated_Date = null, $period_Start_Date = null, $period_End_Date = null, \WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType $self_Evaluation_Data = null, \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType $manager_Evaluation_Data = null)
    {
        $this
            ->setManager_Reference($manager_Reference)
            ->setMultiple_Manager_Reference($multiple_Manager_Reference)
            ->setReview_Type_Reference($review_Type_Reference)
            ->setReview_Template_Reference($review_Template_Reference)
            ->setReview_Initiated_Date($review_Initiated_Date)
            ->setPeriod_Start_Date($period_Start_Date)
            ->setPeriod_End_Date($period_End_Date)
            ->setSelf_Evaluation_Data($self_Evaluation_Data)
            ->setManager_Evaluation_Data($manager_Evaluation_Data);
    }
    /**
     * Get Manager_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getManager_Reference()
    {
        return $this->Manager_Reference;
    }
    /**
     * Set Manager_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setManager_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference = null)
    {
        $this->Manager_Reference = $manager_Reference;
        return $this;
    }
    /**
     * Get Multiple_Manager_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getMultiple_Manager_Reference()
    {
        return $this->Multiple_Manager_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setMultiple_Manager_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMultiple_Manager_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMultiple_Manager_ReferenceForArrayConstraintsFromSetMultiple_Manager_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem) {
            // validation for constraint: itemType
            if (!$employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem) ? get_class($employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem) : sprintf('%s(%s)', gettype($employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem), var_export($employee_Review_Details_DataTypeMultiple_Manager_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Multiple_Manager_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Multiple_Manager_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $multiple_Manager_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setMultiple_Manager_Reference(array $multiple_Manager_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($multiple_Manager_ReferenceArrayErrorMessage = self::validateMultiple_Manager_ReferenceForArrayConstraintsFromSetMultiple_Manager_Reference($multiple_Manager_Reference))) {
            throw new \InvalidArgumentException($multiple_Manager_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Multiple_Manager_Reference = $multiple_Manager_Reference;
        return $this;
    }
    /**
     * Add item to Multiple_Manager_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function addToMultiple_Manager_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Multiple_Manager_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Multiple_Manager_Reference[] = $item;
        return $this;
    }
    /**
     * Get Review_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Review_TypeObjectType|null
     */
    public function getReview_Type_Reference()
    {
        return $this->Review_Type_Reference;
    }
    /**
     * Set Review_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Review_TypeObjectType $review_Type_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setReview_Type_Reference(\WorkdayWsdl\\StructType\Review_TypeObjectType $review_Type_Reference = null)
    {
        $this->Review_Type_Reference = $review_Type_Reference;
        return $this;
    }
    /**
     * Get Review_Template_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType|null
     */
    public function getReview_Template_Reference()
    {
        return $this->Review_Template_Reference;
    }
    /**
     * Set Review_Template_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType $review_Template_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setReview_Template_Reference(\WorkdayWsdl\\StructType\Employee_Review_TemplateObjectType $review_Template_Reference = null)
    {
        $this->Review_Template_Reference = $review_Template_Reference;
        return $this;
    }
    /**
     * Get Review_Initiated_Date value
     * @return string|null
     */
    public function getReview_Initiated_Date()
    {
        return $this->Review_Initiated_Date;
    }
    /**
     * Set Review_Initiated_Date value
     * @param string $review_Initiated_Date
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setReview_Initiated_Date($review_Initiated_Date = null)
    {
        // validation for constraint: string
        if (!is_null($review_Initiated_Date) && !is_string($review_Initiated_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($review_Initiated_Date, true), gettype($review_Initiated_Date)), __LINE__);
        }
        $this->Review_Initiated_Date = $review_Initiated_Date;
        return $this;
    }
    /**
     * Get Period_Start_Date value
     * @return string|null
     */
    public function getPeriod_Start_Date()
    {
        return $this->Period_Start_Date;
    }
    /**
     * Set Period_Start_Date value
     * @param string $period_Start_Date
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setPeriod_Start_Date($period_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($period_Start_Date) && !is_string($period_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period_Start_Date, true), gettype($period_Start_Date)), __LINE__);
        }
        $this->Period_Start_Date = $period_Start_Date;
        return $this;
    }
    /**
     * Get Period_End_Date value
     * @return string|null
     */
    public function getPeriod_End_Date()
    {
        return $this->Period_End_Date;
    }
    /**
     * Set Period_End_Date value
     * @param string $period_End_Date
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setPeriod_End_Date($period_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($period_End_Date) && !is_string($period_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period_End_Date, true), gettype($period_End_Date)), __LINE__);
        }
        $this->Period_End_Date = $period_End_Date;
        return $this;
    }
    /**
     * Get Self_Evaluation_Data value
     * @return \WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType|null
     */
    public function getSelf_Evaluation_Data()
    {
        return $this->Self_Evaluation_Data;
    }
    /**
     * Set Self_Evaluation_Data value
     * @param \WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType $self_Evaluation_Data
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setSelf_Evaluation_Data(\WorkdayWsdl\\StructType\Self_Evaluation_Detail_DataType $self_Evaluation_Data = null)
    {
        $this->Self_Evaluation_Data = $self_Evaluation_Data;
        return $this;
    }
    /**
     * Get Manager_Evaluation_Data value
     * @return \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType|null
     */
    public function getManager_Evaluation_Data()
    {
        return $this->Manager_Evaluation_Data;
    }
    /**
     * Set Manager_Evaluation_Data value
     * @param \WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType $manager_Evaluation_Data
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public function setManager_Evaluation_Data(\WorkdayWsdl\\StructType\Manager_Evaluation_Detail_DataType $manager_Evaluation_Data = null)
    {
        $this->Manager_Evaluation_Data = $manager_Evaluation_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
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
