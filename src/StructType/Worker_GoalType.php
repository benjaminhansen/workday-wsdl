<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_GoalType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the reference to the Goal Detail and all the Goal Data payload.
 * @subpackage Structs
 */
class Worker_GoalType extends AbstractStructBase
{
    /**
     * The Goal_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Goal Detail.
     * - minOccurs: 0
     * @var \StructType\GoalObjectType
     */
    public $Goal_Reference;
    /**
     * The Goal_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Goal_Detail_DataType[]
     */
    public $Goal_Data;
    /**
     * Constructor method for Worker_GoalType
     * @uses Worker_GoalType::setGoal_Reference()
     * @uses Worker_GoalType::setGoal_Data()
     * @param \StructType\GoalObjectType $goal_Reference
     * @param \StructType\Goal_Detail_DataType[] $goal_Data
     */
    public function __construct(\StructType\GoalObjectType $goal_Reference = null, array $goal_Data = array())
    {
        $this
            ->setGoal_Reference($goal_Reference)
            ->setGoal_Data($goal_Data);
    }
    /**
     * Get Goal_Reference value
     * @return \StructType\GoalObjectType|null
     */
    public function getGoal_Reference()
    {
        return $this->Goal_Reference;
    }
    /**
     * Set Goal_Reference value
     * @param \StructType\GoalObjectType $goal_Reference
     * @return \StructType\Worker_GoalType
     */
    public function setGoal_Reference(\StructType\GoalObjectType $goal_Reference = null)
    {
        $this->Goal_Reference = $goal_Reference;
        return $this;
    }
    /**
     * Get Goal_Data value
     * @return \StructType\Goal_Detail_DataType[]|null
     */
    public function getGoal_Data()
    {
        return $this->Goal_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setGoal_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoal_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoal_DataForArrayConstraintsFromSetGoal_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_GoalTypeGoal_DataItem) {
            // validation for constraint: itemType
            if (!$worker_GoalTypeGoal_DataItem instanceof \StructType\Goal_Detail_DataType) {
                $invalidValues[] = is_object($worker_GoalTypeGoal_DataItem) ? get_class($worker_GoalTypeGoal_DataItem) : sprintf('%s(%s)', gettype($worker_GoalTypeGoal_DataItem), var_export($worker_GoalTypeGoal_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Goal_Data property can only contain items of type \StructType\Goal_Detail_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Goal_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Goal_Detail_DataType[] $goal_Data
     * @return \StructType\Worker_GoalType
     */
    public function setGoal_Data(array $goal_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($goal_DataArrayErrorMessage = self::validateGoal_DataForArrayConstraintsFromSetGoal_Data($goal_Data))) {
            throw new \InvalidArgumentException($goal_DataArrayErrorMessage, __LINE__);
        }
        $this->Goal_Data = $goal_Data;
        return $this;
    }
    /**
     * Add item to Goal_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Goal_Detail_DataType $item
     * @return \StructType\Worker_GoalType
     */
    public function addToGoal_Data(\StructType\Goal_Detail_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Goal_Detail_DataType) {
            throw new \InvalidArgumentException(sprintf('The Goal_Data property can only contain items of type \StructType\Goal_Detail_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Goal_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_GoalType
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
