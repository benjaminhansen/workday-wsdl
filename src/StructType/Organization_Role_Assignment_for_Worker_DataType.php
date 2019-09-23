<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Role_Assignment_for_Worker_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the organzation role information.
 * @subpackage Structs
 */
class Organization_Role_Assignment_for_Worker_DataType extends AbstractStructBase
{
    /**
     * The Role_Assigner_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the organization.
     * - minOccurs: 0
     * @var \StructType\Role_AssignerObjectType
     */
    public $Role_Assigner_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective Date of the Assigned, Defaulted, or Inherited Role Assignment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Assignment_From
     * Meta information extracted from the WSDL
     * - documentation: The way the role was assigned to the worker. Valid values are: Assigned, Default, Inherited
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assignment_From;
    /**
     * Constructor method for Organization_Role_Assignment_for_Worker_DataType
     * @uses Organization_Role_Assignment_for_Worker_DataType::setRole_Assigner_Reference()
     * @uses Organization_Role_Assignment_for_Worker_DataType::setEffective_Date()
     * @uses Organization_Role_Assignment_for_Worker_DataType::setAssignment_From()
     * @param \StructType\Role_AssignerObjectType $role_Assigner_Reference
     * @param string $effective_Date
     * @param string $assignment_From
     */
    public function __construct(\StructType\Role_AssignerObjectType $role_Assigner_Reference = null, $effective_Date = null, $assignment_From = null)
    {
        $this
            ->setRole_Assigner_Reference($role_Assigner_Reference)
            ->setEffective_Date($effective_Date)
            ->setAssignment_From($assignment_From);
    }
    /**
     * Get Role_Assigner_Reference value
     * @return \StructType\Role_AssignerObjectType|null
     */
    public function getRole_Assigner_Reference()
    {
        return $this->Role_Assigner_Reference;
    }
    /**
     * Set Role_Assigner_Reference value
     * @param \StructType\Role_AssignerObjectType $role_Assigner_Reference
     * @return \StructType\Organization_Role_Assignment_for_Worker_DataType
     */
    public function setRole_Assigner_Reference(\StructType\Role_AssignerObjectType $role_Assigner_Reference = null)
    {
        $this->Role_Assigner_Reference = $role_Assigner_Reference;
        return $this;
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
     * @return \StructType\Organization_Role_Assignment_for_Worker_DataType
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
     * Get Assignment_From value
     * @return string|null
     */
    public function getAssignment_From()
    {
        return $this->Assignment_From;
    }
    /**
     * Set Assignment_From value
     * @param string $assignment_From
     * @return \StructType\Organization_Role_Assignment_for_Worker_DataType
     */
    public function setAssignment_From($assignment_From = null)
    {
        // validation for constraint: string
        if (!is_null($assignment_From) && !is_string($assignment_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignment_From, true), gettype($assignment_From)), __LINE__);
        }
        $this->Assignment_From = $assignment_From;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Role_Assignment_for_Worker_DataType
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
