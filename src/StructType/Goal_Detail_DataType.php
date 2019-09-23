<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Goal_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a single Goal Detail (Review Goal or Worker Goal Detail) and the Notes and History.
 * @subpackage Structs
 */
class Goal_Detail_DataType extends AbstractStructBase
{
    /**
     * The Goal_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Contains the Reference ID for the shared Goal for which this Goal Detail provides a new snapshot.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Goal_Reference_ID;
    /**
     * The Goal
     * Meta information extracted from the WSDL
     * - documentation: Contains the Name of the Goal that is the primary way the Goal is identified to the User.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Goal;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Contains an optional Description to expand on the Goal Name and which can contain rich text formatting online but the rich text formatting is removed for this response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Organization_Goal_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains an optional reference to an Organization Goal which this Goal Detail supports.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_GoalObjectType
     */
    public $Organization_Goal_Reference;
    /**
     * The Due_Date
     * Meta information extracted from the WSDL
     * - documentation: Contains the Date that the Goal is Due to be completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Due_Date;
    /**
     * The Completion_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains an optional reference to a Completion Status that indicates progress of the goal.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Component_CompletionObjectType
     */
    public $Completion_Status_Reference;
    /**
     * The Completion_Date
     * Meta information extracted from the WSDL
     * - documentation: Contains the date the Goal was completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Completion_Date;
    /**
     * Constructor method for Goal_Detail_DataType
     * @uses Goal_Detail_DataType::setGoal_Reference_ID()
     * @uses Goal_Detail_DataType::setGoal()
     * @uses Goal_Detail_DataType::setDescription()
     * @uses Goal_Detail_DataType::setOrganization_Goal_Reference()
     * @uses Goal_Detail_DataType::setDue_Date()
     * @uses Goal_Detail_DataType::setCompletion_Status_Reference()
     * @uses Goal_Detail_DataType::setCompletion_Date()
     * @param string $goal_Reference_ID
     * @param string $goal
     * @param string $description
     * @param \WorkdayWsdl\\StructType\Organization_GoalObjectType $organization_Goal_Reference
     * @param string $due_Date
     * @param \WorkdayWsdl\\StructType\Component_CompletionObjectType $completion_Status_Reference
     * @param string $completion_Date
     */
    public function __construct($goal_Reference_ID = null, $goal = null, $description = null, \WorkdayWsdl\\StructType\Organization_GoalObjectType $organization_Goal_Reference = null, $due_Date = null, \WorkdayWsdl\\StructType\Component_CompletionObjectType $completion_Status_Reference = null, $completion_Date = null)
    {
        $this
            ->setGoal_Reference_ID($goal_Reference_ID)
            ->setGoal($goal)
            ->setDescription($description)
            ->setOrganization_Goal_Reference($organization_Goal_Reference)
            ->setDue_Date($due_Date)
            ->setCompletion_Status_Reference($completion_Status_Reference)
            ->setCompletion_Date($completion_Date);
    }
    /**
     * Get Goal_Reference_ID value
     * @return string|null
     */
    public function getGoal_Reference_ID()
    {
        return $this->Goal_Reference_ID;
    }
    /**
     * Set Goal_Reference_ID value
     * @param string $goal_Reference_ID
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setGoal_Reference_ID($goal_Reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($goal_Reference_ID) && !is_string($goal_Reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goal_Reference_ID, true), gettype($goal_Reference_ID)), __LINE__);
        }
        $this->Goal_Reference_ID = $goal_Reference_ID;
        return $this;
    }
    /**
     * Get Goal value
     * @return string|null
     */
    public function getGoal()
    {
        return $this->Goal;
    }
    /**
     * Set Goal value
     * @param string $goal
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setGoal($goal = null)
    {
        // validation for constraint: string
        if (!is_null($goal) && !is_string($goal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goal, true), gettype($goal)), __LINE__);
        }
        $this->Goal = $goal;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Organization_Goal_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_GoalObjectType|null
     */
    public function getOrganization_Goal_Reference()
    {
        return $this->Organization_Goal_Reference;
    }
    /**
     * Set Organization_Goal_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_GoalObjectType $organization_Goal_Reference
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setOrganization_Goal_Reference(\WorkdayWsdl\\StructType\Organization_GoalObjectType $organization_Goal_Reference = null)
    {
        $this->Organization_Goal_Reference = $organization_Goal_Reference;
        return $this;
    }
    /**
     * Get Due_Date value
     * @return string|null
     */
    public function getDue_Date()
    {
        return $this->Due_Date;
    }
    /**
     * Set Due_Date value
     * @param string $due_Date
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setDue_Date($due_Date = null)
    {
        // validation for constraint: string
        if (!is_null($due_Date) && !is_string($due_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($due_Date, true), gettype($due_Date)), __LINE__);
        }
        $this->Due_Date = $due_Date;
        return $this;
    }
    /**
     * Get Completion_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Component_CompletionObjectType|null
     */
    public function getCompletion_Status_Reference()
    {
        return $this->Completion_Status_Reference;
    }
    /**
     * Set Completion_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Component_CompletionObjectType $completion_Status_Reference
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setCompletion_Status_Reference(\WorkdayWsdl\\StructType\Component_CompletionObjectType $completion_Status_Reference = null)
    {
        $this->Completion_Status_Reference = $completion_Status_Reference;
        return $this;
    }
    /**
     * Get Completion_Date value
     * @return string|null
     */
    public function getCompletion_Date()
    {
        return $this->Completion_Date;
    }
    /**
     * Set Completion_Date value
     * @param string $completion_Date
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
     */
    public function setCompletion_Date($completion_Date = null)
    {
        // validation for constraint: string
        if (!is_null($completion_Date) && !is_string($completion_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completion_Date, true), gettype($completion_Date)), __LINE__);
        }
        $this->Completion_Date = $completion_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Goal_Detail_DataType
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
