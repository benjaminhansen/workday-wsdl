<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_AssignmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all provisioning group assignment data.
 * @subpackage Structs
 */
class Provisioning_Group_AssignmentType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Assignment_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a provisioning group assignment.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Provisioning_Group_Assignment_Reference;
    /**
     * The Provisioning_Group_Assignment_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType
     */
    public $Provisioning_Group_Assignment_Data;
    /**
     * Constructor method for Provisioning_Group_AssignmentType
     * @uses Provisioning_Group_AssignmentType::setProvisioning_Group_Assignment_Reference()
     * @uses Provisioning_Group_AssignmentType::setProvisioning_Group_Assignment_Data()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $provisioning_Group_Assignment_Reference
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType $provisioning_Group_Assignment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $provisioning_Group_Assignment_Reference = null, \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType $provisioning_Group_Assignment_Data = null)
    {
        $this
            ->setProvisioning_Group_Assignment_Reference($provisioning_Group_Assignment_Reference)
            ->setProvisioning_Group_Assignment_Data($provisioning_Group_Assignment_Data);
    }
    /**
     * Get Provisioning_Group_Assignment_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getProvisioning_Group_Assignment_Reference()
    {
        return $this->Provisioning_Group_Assignment_Reference;
    }
    /**
     * Set Provisioning_Group_Assignment_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $provisioning_Group_Assignment_Reference
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType
     */
    public function setProvisioning_Group_Assignment_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $provisioning_Group_Assignment_Reference = null)
    {
        $this->Provisioning_Group_Assignment_Reference = $provisioning_Group_Assignment_Reference;
        return $this;
    }
    /**
     * Get Provisioning_Group_Assignment_Data value
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType|null
     */
    public function getProvisioning_Group_Assignment_Data()
    {
        return $this->Provisioning_Group_Assignment_Data;
    }
    /**
     * Set Provisioning_Group_Assignment_Data value
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType $provisioning_Group_Assignment_Data
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType
     */
    public function setProvisioning_Group_Assignment_Data(\WorkdayWsdl\\StructType\Provisioning_Group_Assignment_DataType $provisioning_Group_Assignment_Data = null)
    {
        $this->Provisioning_Group_Assignment_Data = $provisioning_Group_Assignment_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType
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
