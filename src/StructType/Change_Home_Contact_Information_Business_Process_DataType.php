<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Home_Contact_Information_Business_Process_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Only Home Contact Information can be maintained through this web service. Please remove the Work usage type from all Usage Type elements. To maintain Work Contact Information, use the Change Work Contact Information web service. |
 * Wrapper element for the Home Contact Change business process web service
 * @subpackage Structs
 */
class Change_Home_Contact_Information_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique person reference for the person whose contact information is being updated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique universal identifier reference for the person whose contact information is being updated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_IdentifierObjectType
     */
    public $Universal_ID_Reference;
    /**
     * The Event_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Date that the contact information change will be effective
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Event_Effective_Date;
    /**
     * The Person_Contact_Information_Data
     * @var \WorkdayWsdl\\StructType\Person_Contact_Information_DataType
     */
    public $Person_Contact_Information_Data;
    /**
     * Constructor method for Change_Home_Contact_Information_Business_Process_DataType
     * @uses Change_Home_Contact_Information_Business_Process_DataType::setPerson_Reference()
     * @uses Change_Home_Contact_Information_Business_Process_DataType::setUniversal_ID_Reference()
     * @uses Change_Home_Contact_Information_Business_Process_DataType::setEvent_Effective_Date()
     * @uses Change_Home_Contact_Information_Business_Process_DataType::setPerson_Contact_Information_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @param string $event_Effective_Date
     * @param \WorkdayWsdl\\StructType\Person_Contact_Information_DataType $person_Contact_Information_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null, $event_Effective_Date = null, \WorkdayWsdl\\StructType\Person_Contact_Information_DataType $person_Contact_Information_Data = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference)
            ->setEvent_Effective_Date($event_Effective_Date)
            ->setPerson_Contact_Information_Data($person_Contact_Information_Data);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @return \WorkdayWsdl\\StructType\Change_Home_Contact_Information_Business_Process_DataType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Universal_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierObjectType|null
     */
    public function getUniversal_ID_Reference()
    {
        return $this->Universal_ID_Reference;
    }
    /**
     * Set Universal_ID_Reference value
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference
     * @return \WorkdayWsdl\\StructType\Change_Home_Contact_Information_Business_Process_DataType
     */
    public function setUniversal_ID_Reference(\WorkdayWsdl\\StructType\Universal_IdentifierObjectType $universal_ID_Reference = null)
    {
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Get Event_Effective_Date value
     * @return string|null
     */
    public function getEvent_Effective_Date()
    {
        return $this->Event_Effective_Date;
    }
    /**
     * Set Event_Effective_Date value
     * @param string $event_Effective_Date
     * @return \WorkdayWsdl\\StructType\Change_Home_Contact_Information_Business_Process_DataType
     */
    public function setEvent_Effective_Date($event_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($event_Effective_Date) && !is_string($event_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event_Effective_Date, true), gettype($event_Effective_Date)), __LINE__);
        }
        $this->Event_Effective_Date = $event_Effective_Date;
        return $this;
    }
    /**
     * Get Person_Contact_Information_Data value
     * @return \WorkdayWsdl\\StructType\Person_Contact_Information_DataType|null
     */
    public function getPerson_Contact_Information_Data()
    {
        return $this->Person_Contact_Information_Data;
    }
    /**
     * Set Person_Contact_Information_Data value
     * @param \WorkdayWsdl\\StructType\Person_Contact_Information_DataType $person_Contact_Information_Data
     * @return \WorkdayWsdl\\StructType\Change_Home_Contact_Information_Business_Process_DataType
     */
    public function setPerson_Contact_Information_Data(\WorkdayWsdl\\StructType\Person_Contact_Information_DataType $person_Contact_Information_Data = null)
    {
        $this->Person_Contact_Information_Data = $person_Contact_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Home_Contact_Information_Business_Process_DataType
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
