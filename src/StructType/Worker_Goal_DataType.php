<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Goal_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains all the Goal Details (Review Goals and Worker Goal Details) for a Worker.
 * @subpackage Structs
 */
class Worker_Goal_DataType extends AbstractStructBase
{
    /**
     * The Goal
     * Meta information extracted from the WSDL
     * - documentation: Contains a single Goal Detail (either Review Goal or Worker Goal Detail) and its Notes and History.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_GoalType[]
     */
    public $Goal;
    /**
     * Constructor method for Worker_Goal_DataType
     * @uses Worker_Goal_DataType::setGoal()
     * @param \StructType\Worker_GoalType[] $goal
     */
    public function __construct(array $goal = array())
    {
        $this
            ->setGoal($goal);
    }
    /**
     * Get Goal value
     * @return \StructType\Worker_GoalType[]|null
     */
    public function getGoal()
    {
        return $this->Goal;
    }
    /**
     * This method is responsible for validating the values passed to the setGoal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoalForArrayConstraintsFromSetGoal(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Goal_DataTypeGoalItem) {
            // validation for constraint: itemType
            if (!$worker_Goal_DataTypeGoalItem instanceof \StructType\Worker_GoalType) {
                $invalidValues[] = is_object($worker_Goal_DataTypeGoalItem) ? get_class($worker_Goal_DataTypeGoalItem) : sprintf('%s(%s)', gettype($worker_Goal_DataTypeGoalItem), var_export($worker_Goal_DataTypeGoalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Goal property can only contain items of type \StructType\Worker_GoalType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Goal value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_GoalType[] $goal
     * @return \StructType\Worker_Goal_DataType
     */
    public function setGoal(array $goal = array())
    {
        // validation for constraint: array
        if ('' !== ($goalArrayErrorMessage = self::validateGoalForArrayConstraintsFromSetGoal($goal))) {
            throw new \InvalidArgumentException($goalArrayErrorMessage, __LINE__);
        }
        $this->Goal = $goal;
        return $this;
    }
    /**
     * Add item to Goal value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_GoalType $item
     * @return \StructType\Worker_Goal_DataType
     */
    public function addToGoal(\StructType\Worker_GoalType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_GoalType) {
            throw new \InvalidArgumentException(sprintf('The Goal property can only contain items of type \StructType\Worker_GoalType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Goal[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Goal_DataType
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
