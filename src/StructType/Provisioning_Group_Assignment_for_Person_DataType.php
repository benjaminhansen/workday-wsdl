<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_Assignment_for_Person_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all data defining the assignment of the person to a specific provisioning group at the current moment. It does not include the assignment's history.
 * @subpackage Structs
 */
class Provisioning_Group_Assignment_for_Person_DataType extends AbstractStructBase
{
    /**
     * The Provisioning_Group
     * Meta information extracted from the WSDL
     * - documentation: Name of the provisioning group
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Provisioning_Group;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Latest status of the provisioning group assignment, possible values are Assigned, Activated, Unassigned, Disabled
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Last_Changed
     * Meta information extracted from the WSDL
     * - documentation: Date/time when the status of the assignment was last changed
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Changed;
    /**
     * Constructor method for Provisioning_Group_Assignment_for_Person_DataType
     * @uses Provisioning_Group_Assignment_for_Person_DataType::setProvisioning_Group()
     * @uses Provisioning_Group_Assignment_for_Person_DataType::setStatus()
     * @uses Provisioning_Group_Assignment_for_Person_DataType::setLast_Changed()
     * @param string $provisioning_Group
     * @param string $status
     * @param string $last_Changed
     */
    public function __construct($provisioning_Group = null, $status = null, $last_Changed = null)
    {
        $this
            ->setProvisioning_Group($provisioning_Group)
            ->setStatus($status)
            ->setLast_Changed($last_Changed);
    }
    /**
     * Get Provisioning_Group value
     * @return string|null
     */
    public function getProvisioning_Group()
    {
        return $this->Provisioning_Group;
    }
    /**
     * Set Provisioning_Group value
     * @param string $provisioning_Group
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType
     */
    public function setProvisioning_Group($provisioning_Group = null)
    {
        // validation for constraint: string
        if (!is_null($provisioning_Group) && !is_string($provisioning_Group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provisioning_Group, true), gettype($provisioning_Group)), __LINE__);
        }
        $this->Provisioning_Group = $provisioning_Group;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Last_Changed value
     * @return string|null
     */
    public function getLast_Changed()
    {
        return $this->Last_Changed;
    }
    /**
     * Set Last_Changed value
     * @param string $last_Changed
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType
     */
    public function setLast_Changed($last_Changed = null)
    {
        // validation for constraint: string
        if (!is_null($last_Changed) && !is_string($last_Changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Changed, true), gettype($last_Changed)), __LINE__);
        }
        $this->Last_Changed = $last_Changed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType
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
