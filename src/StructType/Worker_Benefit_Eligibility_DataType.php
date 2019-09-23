<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Benefit_Eligibility_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the plans that the worker is eligible for
 * @subpackage Structs
 */
class Worker_Benefit_Eligibility_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Benefit plan that the worker is eligible for
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Benefit_PlanObjectType[]
     */
    public $Benefit_Plan_Reference;
    /**
     * The Plan_Eligibility_Dates_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Plan_Eligiblity_Dates_DataType[]
     */
    public $Plan_Eligibility_Dates_Data;
    /**
     * Constructor method for Worker_Benefit_Eligibility_DataType
     * @uses Worker_Benefit_Eligibility_DataType::setBenefit_Plan_Reference()
     * @uses Worker_Benefit_Eligibility_DataType::setPlan_Eligibility_Dates_Data()
     * @param \StructType\Benefit_PlanObjectType[] $benefit_Plan_Reference
     * @param \StructType\Plan_Eligiblity_Dates_DataType[] $plan_Eligibility_Dates_Data
     */
    public function __construct(array $benefit_Plan_Reference = array(), array $plan_Eligibility_Dates_Data = array())
    {
        $this
            ->setBenefit_Plan_Reference($benefit_Plan_Reference)
            ->setPlan_Eligibility_Dates_Data($plan_Eligibility_Dates_Data);
    }
    /**
     * Get Benefit_Plan_Reference value
     * @return \StructType\Benefit_PlanObjectType[]|null
     */
    public function getBenefit_Plan_Reference()
    {
        return $this->Benefit_Plan_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setBenefit_Plan_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBenefit_Plan_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBenefit_Plan_ReferenceForArrayConstraintsFromSetBenefit_Plan_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem instanceof \StructType\Benefit_PlanObjectType) {
                $invalidValues[] = is_object($worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem) ? get_class($worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem), var_export($worker_Benefit_Eligibility_DataTypeBenefit_Plan_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Benefit_Plan_Reference property can only contain items of type \StructType\Benefit_PlanObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Benefit_Plan_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Benefit_PlanObjectType[] $benefit_Plan_Reference
     * @return \StructType\Worker_Benefit_Eligibility_DataType
     */
    public function setBenefit_Plan_Reference(array $benefit_Plan_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($benefit_Plan_ReferenceArrayErrorMessage = self::validateBenefit_Plan_ReferenceForArrayConstraintsFromSetBenefit_Plan_Reference($benefit_Plan_Reference))) {
            throw new \InvalidArgumentException($benefit_Plan_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Benefit_Plan_Reference = $benefit_Plan_Reference;
        return $this;
    }
    /**
     * Add item to Benefit_Plan_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Benefit_PlanObjectType $item
     * @return \StructType\Worker_Benefit_Eligibility_DataType
     */
    public function addToBenefit_Plan_Reference(\StructType\Benefit_PlanObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Benefit_PlanObjectType) {
            throw new \InvalidArgumentException(sprintf('The Benefit_Plan_Reference property can only contain items of type \StructType\Benefit_PlanObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Benefit_Plan_Reference[] = $item;
        return $this;
    }
    /**
     * Get Plan_Eligibility_Dates_Data value
     * @return \StructType\Plan_Eligiblity_Dates_DataType[]|null
     */
    public function getPlan_Eligibility_Dates_Data()
    {
        return $this->Plan_Eligibility_Dates_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPlan_Eligibility_Dates_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlan_Eligibility_Dates_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlan_Eligibility_Dates_DataForArrayConstraintsFromSetPlan_Eligibility_Dates_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem instanceof \StructType\Plan_Eligiblity_Dates_DataType) {
                $invalidValues[] = is_object($worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem) ? get_class($worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem) : sprintf('%s(%s)', gettype($worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem), var_export($worker_Benefit_Eligibility_DataTypePlan_Eligibility_Dates_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Plan_Eligibility_Dates_Data property can only contain items of type \StructType\Plan_Eligiblity_Dates_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Plan_Eligibility_Dates_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Plan_Eligiblity_Dates_DataType[] $plan_Eligibility_Dates_Data
     * @return \StructType\Worker_Benefit_Eligibility_DataType
     */
    public function setPlan_Eligibility_Dates_Data(array $plan_Eligibility_Dates_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($plan_Eligibility_Dates_DataArrayErrorMessage = self::validatePlan_Eligibility_Dates_DataForArrayConstraintsFromSetPlan_Eligibility_Dates_Data($plan_Eligibility_Dates_Data))) {
            throw new \InvalidArgumentException($plan_Eligibility_Dates_DataArrayErrorMessage, __LINE__);
        }
        $this->Plan_Eligibility_Dates_Data = $plan_Eligibility_Dates_Data;
        return $this;
    }
    /**
     * Add item to Plan_Eligibility_Dates_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Plan_Eligiblity_Dates_DataType $item
     * @return \StructType\Worker_Benefit_Eligibility_DataType
     */
    public function addToPlan_Eligibility_Dates_Data(\StructType\Plan_Eligiblity_Dates_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Plan_Eligiblity_Dates_DataType) {
            throw new \InvalidArgumentException(sprintf('The Plan_Eligibility_Dates_Data property can only contain items of type \StructType\Plan_Eligiblity_Dates_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Plan_Eligibility_Dates_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Benefit_Eligibility_DataType
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
