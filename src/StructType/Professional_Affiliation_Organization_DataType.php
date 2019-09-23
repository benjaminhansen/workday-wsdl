<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Professional_Affiliation_Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Not XORs Membership Org text field and Professional Affiliation Type Reference. Ensures that If text is specified, an ad hoc Professional Affiliation is being specified. | XORs Affiliation Reference and Membership Org because exactly
 * one of the two must be specified. | XORs Relationship Type Reference and Affiliation because exactly one of the two must be specified. | Only one change can be in progress (the event in progress and not complete or canceled) for a membership for a
 * particular worker. | Wrapper element for the Organization Professional Affiliation information.
 * @subpackage Structs
 */
class Professional_Affiliation_Organization_DataType extends AbstractStructBase
{
    /**
     * The Professional_Affiliation_ID
     * Meta information extracted from the WSDL
     * - documentation: Membership ID. If no value is provided, a new membership will be created. If a value is passed in an a corresponding membership is not found, a new membership will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Professional_Affiliation_ID;
    /**
     * The Remove_Professional_Affiliation
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the membership should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Professional_Affiliation;
    /**
     * The Professional_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Professional Affiliation that this achievement is representing a relationship with.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType
     */
    public $Professional_Affiliation_Reference;
    /**
     * The Professional_Affiliation
     * Meta information extracted from the WSDL
     * - documentation: The name of the organization the person is an affiliate of. Required unless the professional affiliation is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Professional_Affiliation;
    /**
     * The Professional_Affiliation_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of Professional Affiliation.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType
     */
    public $Professional_Affiliation_Type_Reference;
    /**
     * The Affiliation
     * Meta information extracted from the WSDL
     * - documentation: Any organization that the membership is affiliated to.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Affiliation;
    /**
     * The Professional_Affiliation_Relationship_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Relationship that this Person has to this Organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType
     */
    public $Professional_Affiliation_Relationship_Type_Reference;
    /**
     * The Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The date when the membership was started.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Begin_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date when the membership was ended.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_Information_DataType[]
     */
    public $Contact_Information_Data;
    /**
     * Constructor method for Professional_Affiliation_Organization_DataType
     * @uses Professional_Affiliation_Organization_DataType::setProfessional_Affiliation_ID()
     * @uses Professional_Affiliation_Organization_DataType::setRemove_Professional_Affiliation()
     * @uses Professional_Affiliation_Organization_DataType::setProfessional_Affiliation_Reference()
     * @uses Professional_Affiliation_Organization_DataType::setProfessional_Affiliation()
     * @uses Professional_Affiliation_Organization_DataType::setProfessional_Affiliation_Type_Reference()
     * @uses Professional_Affiliation_Organization_DataType::setAffiliation()
     * @uses Professional_Affiliation_Organization_DataType::setProfessional_Affiliation_Relationship_Type_Reference()
     * @uses Professional_Affiliation_Organization_DataType::setBegin_Date()
     * @uses Professional_Affiliation_Organization_DataType::setEnd_Date()
     * @uses Professional_Affiliation_Organization_DataType::setContact_Information_Data()
     * @param string $professional_Affiliation_ID
     * @param bool $remove_Professional_Affiliation
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType $professional_Affiliation_Reference
     * @param string $professional_Affiliation
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType $professional_Affiliation_Type_Reference
     * @param string $affiliation
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType $professional_Affiliation_Relationship_Type_Reference
     * @param string $begin_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType[] $contact_Information_Data
     */
    public function __construct($professional_Affiliation_ID = null, $remove_Professional_Affiliation = null, \WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType $professional_Affiliation_Reference = null, $professional_Affiliation = null, \WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType $professional_Affiliation_Type_Reference = null, $affiliation = null, \WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType $professional_Affiliation_Relationship_Type_Reference = null, $begin_Date = null, $end_Date = null, array $contact_Information_Data = array())
    {
        $this
            ->setProfessional_Affiliation_ID($professional_Affiliation_ID)
            ->setRemove_Professional_Affiliation($remove_Professional_Affiliation)
            ->setProfessional_Affiliation_Reference($professional_Affiliation_Reference)
            ->setProfessional_Affiliation($professional_Affiliation)
            ->setProfessional_Affiliation_Type_Reference($professional_Affiliation_Type_Reference)
            ->setAffiliation($affiliation)
            ->setProfessional_Affiliation_Relationship_Type_Reference($professional_Affiliation_Relationship_Type_Reference)
            ->setBegin_Date($begin_Date)
            ->setEnd_Date($end_Date)
            ->setContact_Information_Data($contact_Information_Data);
    }
    /**
     * Get Professional_Affiliation_ID value
     * @return string|null
     */
    public function getProfessional_Affiliation_ID()
    {
        return $this->Professional_Affiliation_ID;
    }
    /**
     * Set Professional_Affiliation_ID value
     * @param string $professional_Affiliation_ID
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setProfessional_Affiliation_ID($professional_Affiliation_ID = null)
    {
        // validation for constraint: string
        if (!is_null($professional_Affiliation_ID) && !is_string($professional_Affiliation_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professional_Affiliation_ID, true), gettype($professional_Affiliation_ID)), __LINE__);
        }
        $this->Professional_Affiliation_ID = $professional_Affiliation_ID;
        return $this;
    }
    /**
     * Get Remove_Professional_Affiliation value
     * @return bool|null
     */
    public function getRemove_Professional_Affiliation()
    {
        return $this->Remove_Professional_Affiliation;
    }
    /**
     * Set Remove_Professional_Affiliation value
     * @param bool $remove_Professional_Affiliation
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setRemove_Professional_Affiliation($remove_Professional_Affiliation = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Professional_Affiliation) && !is_bool($remove_Professional_Affiliation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Professional_Affiliation, true), gettype($remove_Professional_Affiliation)), __LINE__);
        }
        $this->Remove_Professional_Affiliation = $remove_Professional_Affiliation;
        return $this;
    }
    /**
     * Get Professional_Affiliation_Reference value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType|null
     */
    public function getProfessional_Affiliation_Reference()
    {
        return $this->Professional_Affiliation_Reference;
    }
    /**
     * Set Professional_Affiliation_Reference value
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType $professional_Affiliation_Reference
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setProfessional_Affiliation_Reference(\WorkdayWsdl\\StructType\Professional_Affiliation_ReferenceObjectType $professional_Affiliation_Reference = null)
    {
        $this->Professional_Affiliation_Reference = $professional_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Professional_Affiliation value
     * @return string|null
     */
    public function getProfessional_Affiliation()
    {
        return $this->Professional_Affiliation;
    }
    /**
     * Set Professional_Affiliation value
     * @param string $professional_Affiliation
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setProfessional_Affiliation($professional_Affiliation = null)
    {
        // validation for constraint: string
        if (!is_null($professional_Affiliation) && !is_string($professional_Affiliation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professional_Affiliation, true), gettype($professional_Affiliation)), __LINE__);
        }
        $this->Professional_Affiliation = $professional_Affiliation;
        return $this;
    }
    /**
     * Get Professional_Affiliation_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType|null
     */
    public function getProfessional_Affiliation_Type_Reference()
    {
        return $this->Professional_Affiliation_Type_Reference;
    }
    /**
     * Set Professional_Affiliation_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType $professional_Affiliation_Type_Reference
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setProfessional_Affiliation_Type_Reference(\WorkdayWsdl\\StructType\Professional_Affiliation_Type__All_ObjectType $professional_Affiliation_Type_Reference = null)
    {
        $this->Professional_Affiliation_Type_Reference = $professional_Affiliation_Type_Reference;
        return $this;
    }
    /**
     * Get Affiliation value
     * @return string|null
     */
    public function getAffiliation()
    {
        return $this->Affiliation;
    }
    /**
     * Set Affiliation value
     * @param string $affiliation
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setAffiliation($affiliation = null)
    {
        // validation for constraint: string
        if (!is_null($affiliation) && !is_string($affiliation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliation, true), gettype($affiliation)), __LINE__);
        }
        $this->Affiliation = $affiliation;
        return $this;
    }
    /**
     * Get Professional_Affiliation_Relationship_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType|null
     */
    public function getProfessional_Affiliation_Relationship_Type_Reference()
    {
        return $this->Professional_Affiliation_Relationship_Type_Reference;
    }
    /**
     * Set Professional_Affiliation_Relationship_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType $professional_Affiliation_Relationship_Type_Reference
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setProfessional_Affiliation_Relationship_Type_Reference(\WorkdayWsdl\\StructType\Professional_Affiliation_Relationship_TypeObjectType $professional_Affiliation_Relationship_Type_Reference = null)
    {
        $this->Professional_Affiliation_Relationship_Type_Reference = $professional_Affiliation_Relationship_Type_Reference;
        return $this;
    }
    /**
     * Get Begin_Date value
     * @return string|null
     */
    public function getBegin_Date()
    {
        return $this->Begin_Date;
    }
    /**
     * Set Begin_Date value
     * @param string $begin_Date
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setBegin_Date($begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($begin_Date) && !is_string($begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin_Date, true), gettype($begin_Date)), __LINE__);
        }
        $this->Begin_Date = $begin_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get Contact_Information_Data value
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType[]|null
     */
    public function getContact_Information_Data()
    {
        return $this->Contact_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setContact_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContact_Information_DataForArrayConstraintsFromSetContact_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $professional_Affiliation_Organization_DataTypeContact_Information_DataItem) {
            // validation for constraint: itemType
            if (!$professional_Affiliation_Organization_DataTypeContact_Information_DataItem instanceof \WorkdayWsdl\\StructType\Contact_Information_DataType) {
                $invalidValues[] = is_object($professional_Affiliation_Organization_DataTypeContact_Information_DataItem) ? get_class($professional_Affiliation_Organization_DataTypeContact_Information_DataItem) : sprintf('%s(%s)', gettype($professional_Affiliation_Organization_DataTypeContact_Information_DataItem), var_export($professional_Affiliation_Organization_DataTypeContact_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Contact_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Contact_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType[] $contact_Information_Data
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function setContact_Information_Data(array $contact_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($contact_Information_DataArrayErrorMessage = self::validateContact_Information_DataForArrayConstraintsFromSetContact_Information_Data($contact_Information_Data))) {
            throw new \InvalidArgumentException($contact_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Contact_Information_Data = $contact_Information_Data;
        return $this;
    }
    /**
     * Add item to Contact_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
     */
    public function addToContact_Information_Data(\WorkdayWsdl\\StructType\Contact_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Contact_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Contact_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Contact_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contact_Information_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType
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
