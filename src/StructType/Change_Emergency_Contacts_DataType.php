<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Emergency_Contacts_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Please mark another emergency contact as Primary. One and only one emergency contact must be specified as Primary. | Emergency Contact Reference is required when deleting a emergency contact entry. | Alternate emergency contacts must
 * have priority greater than 1 | Primary emergency contact must have numeric priority of 1. | The emergency contact reference does not belong to the Person reference. | Primary Emergency Contact cannot be deleted. | Either a phone number, or an email
 * address must be specified for an emergency contact. | Please specify the Related Person Relationship. | Please Specify a Contact Name | Wrapper element to hold reference and data for an emergency contact.
 * @subpackage Structs
 */
class Change_Emergency_Contacts_DataType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the emergency contact that the data will be applied to
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Emergency_ContactObjectType
     */
    public $Emergency_Contact_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the referenced data should be deleted.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The Emergency_Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType
     */
    public $Emergency_Contact_Data;
    /**
     * Constructor method for Change_Emergency_Contacts_DataType
     * @uses Change_Emergency_Contacts_DataType::setEmergency_Contact_Reference()
     * @uses Change_Emergency_Contacts_DataType::setDelete()
     * @uses Change_Emergency_Contacts_DataType::setEmergency_Contact_Data()
     * @param \WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference
     * @param bool $delete
     * @param \WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType $emergency_Contact_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference = null, $delete = null, \WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType $emergency_Contact_Data = null)
    {
        $this
            ->setEmergency_Contact_Reference($emergency_Contact_Reference)
            ->setDelete($delete)
            ->setEmergency_Contact_Data($emergency_Contact_Data);
    }
    /**
     * Get Emergency_Contact_Reference value
     * @return \WorkdayWsdl\\StructType\Emergency_ContactObjectType|null
     */
    public function getEmergency_Contact_Reference()
    {
        return $this->Emergency_Contact_Reference;
    }
    /**
     * Set Emergency_Contact_Reference value
     * @param \WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_DataType
     */
    public function setEmergency_Contact_Reference(\WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference = null)
    {
        $this->Emergency_Contact_Reference = $emergency_Contact_Reference;
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
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_DataType
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
     * Get Emergency_Contact_Data value
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType|null
     */
    public function getEmergency_Contact_Data()
    {
        return $this->Emergency_Contact_Data;
    }
    /**
     * Set Emergency_Contact_Data value
     * @param \WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType $emergency_Contact_Data
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_DataType
     */
    public function setEmergency_Contact_Data(\WorkdayWsdl\\StructType\Change_Emergency_Contact_DataType $emergency_Contact_Data = null)
    {
        $this->Emergency_Contact_Data = $emergency_Contact_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_DataType
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
