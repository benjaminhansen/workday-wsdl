<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workteam_Membership_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information required for the workteam membership.
 * @subpackage Structs
 */
class Workteam_Membership_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: When the worker is not a member as of this effective date, they are added as a member with the specified effective date and membership status. When the worker is a member as of the specified effective date, only their membership
     * status is updated. Use the same effective date as an existing membership status snapshot to correct the membership status. To correct the effective date of a membership status to an earlier date, specify the desired effective date and the same
     * membership status as the next effective-dated snapshot. When the effective date is empty, the current date is used.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker ID. Can specify either the ID or WID.
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Workteam_Membership_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Required unless Delete is true. Valid values are Active, Passive, or Inactive.
     * - minOccurs: 0
     * @var \StructType\Workteam_Membership_StatusObjectType
     */
    public $Workteam_Membership_Status_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: When true, membership status and effective date must be empty. The specified worker must be a workteam member now or in the future. When a workteam member is deleted, it is as if they were never a member and their entire membership
     * status history is also deleted. If you want to retain membership status history after a member departs, Workday recommends that you change the member's status to Inactive instead.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Workteam_Membership_DataType
     * @uses Workteam_Membership_DataType::setEffective_Date()
     * @uses Workteam_Membership_DataType::setWorker_Reference()
     * @uses Workteam_Membership_DataType::setWorkteam_Membership_Status_Reference()
     * @uses Workteam_Membership_DataType::setDelete()
     * @param string $effective_Date
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\Workteam_Membership_StatusObjectType $workteam_Membership_Status_Reference
     * @param bool $delete
     */
    public function __construct($effective_Date = null, \StructType\WorkerObjectType $worker_Reference = null, \StructType\Workteam_Membership_StatusObjectType $workteam_Membership_Status_Reference = null, $delete = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setWorker_Reference($worker_Reference)
            ->setWorkteam_Membership_Status_Reference($workteam_Membership_Status_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Workteam_Membership_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Workteam_Membership_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Workteam_Membership_Status_Reference value
     * @return \StructType\Workteam_Membership_StatusObjectType|null
     */
    public function getWorkteam_Membership_Status_Reference()
    {
        return $this->Workteam_Membership_Status_Reference;
    }
    /**
     * Set Workteam_Membership_Status_Reference value
     * @param \StructType\Workteam_Membership_StatusObjectType $workteam_Membership_Status_Reference
     * @return \StructType\Workteam_Membership_DataType
     */
    public function setWorkteam_Membership_Status_Reference(\StructType\Workteam_Membership_StatusObjectType $workteam_Membership_Status_Reference = null)
    {
        $this->Workteam_Membership_Status_Reference = $workteam_Membership_Status_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Workteam_Membership_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workteam_Membership_DataType
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
