<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Emergency_Contact_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Emergency Contact ID field is for updating the value of the Emergency Contact's integration ID. It cannot be the same as the ID on another Emergency Contact. | Wrapper element for the emergency contact
 * @subpackage Structs
 */
class Change_Emergency_Contact_DataType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_ID
     * Meta information extracted from the WSDL
     * - documentation: The new Reference ID for Emergency Contact
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Emergency_Contact_ID;
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Flag to specify the emergency contact is primary or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Primary;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: The order of the priority of the emergency contact
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - totalDigits: 12
     * @var float
     */
    public $Priority;
    /**
     * The Related_Person_Relationship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Relationship of the emergency contact to the person.
     * - maxOccurs: unbounded
     * @var \StructType\Related_Person_RelationshipObjectType[]
     */
    public $Related_Person_Relationship_Reference;
    /**
     * The Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred language for the emergency contact.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LanguageObjectType[]
     */
    public $Language_Reference;
    /**
     * The Emergency_Contact_Personal_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: The name and contact information of the emergency contact
     * - minOccurs: 0
     * @var \StructType\Emergency_Contact_Personal_Information_DataType
     */
    public $Emergency_Contact_Personal_Information_Data;
    /**
     * Constructor method for Change_Emergency_Contact_DataType
     * @uses Change_Emergency_Contact_DataType::setEmergency_Contact_ID()
     * @uses Change_Emergency_Contact_DataType::setPrimary()
     * @uses Change_Emergency_Contact_DataType::setPriority()
     * @uses Change_Emergency_Contact_DataType::setRelated_Person_Relationship_Reference()
     * @uses Change_Emergency_Contact_DataType::setLanguage_Reference()
     * @uses Change_Emergency_Contact_DataType::setEmergency_Contact_Personal_Information_Data()
     * @param string $emergency_Contact_ID
     * @param bool $primary
     * @param float $priority
     * @param \StructType\Related_Person_RelationshipObjectType[] $related_Person_Relationship_Reference
     * @param \StructType\LanguageObjectType[] $language_Reference
     * @param \StructType\Emergency_Contact_Personal_Information_DataType $emergency_Contact_Personal_Information_Data
     */
    public function __construct($emergency_Contact_ID = null, $primary = null, $priority = null, array $related_Person_Relationship_Reference = array(), array $language_Reference = array(), \StructType\Emergency_Contact_Personal_Information_DataType $emergency_Contact_Personal_Information_Data = null)
    {
        $this
            ->setEmergency_Contact_ID($emergency_Contact_ID)
            ->setPrimary($primary)
            ->setPriority($priority)
            ->setRelated_Person_Relationship_Reference($related_Person_Relationship_Reference)
            ->setLanguage_Reference($language_Reference)
            ->setEmergency_Contact_Personal_Information_Data($emergency_Contact_Personal_Information_Data);
    }
    /**
     * Get Emergency_Contact_ID value
     * @return string|null
     */
    public function getEmergency_Contact_ID()
    {
        return $this->Emergency_Contact_ID;
    }
    /**
     * Set Emergency_Contact_ID value
     * @param string $emergency_Contact_ID
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setEmergency_Contact_ID($emergency_Contact_ID = null)
    {
        // validation for constraint: string
        if (!is_null($emergency_Contact_ID) && !is_string($emergency_Contact_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergency_Contact_ID, true), gettype($emergency_Contact_ID)), __LINE__);
        }
        $this->Emergency_Contact_ID = $emergency_Contact_ID;
        return $this;
    }
    /**
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Get Priority value
     * @return float|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param float $priority
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: float
        if (!is_null($priority) && !(is_float($priority) || is_numeric($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($priority) && mb_strlen(mb_substr($priority, mb_strpos($priority, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($priority, true), mb_strlen(mb_substr($priority, mb_strpos($priority, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($priority) && mb_strlen(preg_replace('/(\D)/', '', $priority)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($priority, true), mb_strlen(preg_replace('/(\D)/', '', $priority))), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Related_Person_Relationship_Reference value
     * @return \StructType\Related_Person_RelationshipObjectType[]|null
     */
    public function getRelated_Person_Relationship_Reference()
    {
        return $this->Related_Person_Relationship_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRelated_Person_Relationship_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelated_Person_Relationship_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelated_Person_Relationship_ReferenceForArrayConstraintsFromSetRelated_Person_Relationship_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem instanceof \StructType\Related_Person_RelationshipObjectType) {
                $invalidValues[] = is_object($change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem) ? get_class($change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem) : sprintf('%s(%s)', gettype($change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem), var_export($change_Emergency_Contact_DataTypeRelated_Person_Relationship_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Related_Person_Relationship_Reference property can only contain items of type \StructType\Related_Person_RelationshipObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Related_Person_Relationship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Related_Person_RelationshipObjectType[] $related_Person_Relationship_Reference
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setRelated_Person_Relationship_Reference(array $related_Person_Relationship_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($related_Person_Relationship_ReferenceArrayErrorMessage = self::validateRelated_Person_Relationship_ReferenceForArrayConstraintsFromSetRelated_Person_Relationship_Reference($related_Person_Relationship_Reference))) {
            throw new \InvalidArgumentException($related_Person_Relationship_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Related_Person_Relationship_Reference = $related_Person_Relationship_Reference;
        return $this;
    }
    /**
     * Add item to Related_Person_Relationship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Related_Person_RelationshipObjectType $item
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function addToRelated_Person_Relationship_Reference(\StructType\Related_Person_RelationshipObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Related_Person_RelationshipObjectType) {
            throw new \InvalidArgumentException(sprintf('The Related_Person_Relationship_Reference property can only contain items of type \StructType\Related_Person_RelationshipObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Related_Person_Relationship_Reference[] = $item;
        return $this;
    }
    /**
     * Get Language_Reference value
     * @return \StructType\LanguageObjectType[]|null
     */
    public function getLanguage_Reference()
    {
        return $this->Language_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguage_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguage_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguage_ReferenceForArrayConstraintsFromSetLanguage_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Emergency_Contact_DataTypeLanguage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_Emergency_Contact_DataTypeLanguage_ReferenceItem instanceof \StructType\LanguageObjectType) {
                $invalidValues[] = is_object($change_Emergency_Contact_DataTypeLanguage_ReferenceItem) ? get_class($change_Emergency_Contact_DataTypeLanguage_ReferenceItem) : sprintf('%s(%s)', gettype($change_Emergency_Contact_DataTypeLanguage_ReferenceItem), var_export($change_Emergency_Contact_DataTypeLanguage_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language_Reference property can only contain items of type \StructType\LanguageObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LanguageObjectType[] $language_Reference
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setLanguage_Reference(array $language_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($language_ReferenceArrayErrorMessage = self::validateLanguage_ReferenceForArrayConstraintsFromSetLanguage_Reference($language_Reference))) {
            throw new \InvalidArgumentException($language_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Language_Reference = $language_Reference;
        return $this;
    }
    /**
     * Add item to Language_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LanguageObjectType $item
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function addToLanguage_Reference(\StructType\LanguageObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LanguageObjectType) {
            throw new \InvalidArgumentException(sprintf('The Language_Reference property can only contain items of type \StructType\LanguageObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language_Reference[] = $item;
        return $this;
    }
    /**
     * Get Emergency_Contact_Personal_Information_Data value
     * @return \StructType\Emergency_Contact_Personal_Information_DataType|null
     */
    public function getEmergency_Contact_Personal_Information_Data()
    {
        return $this->Emergency_Contact_Personal_Information_Data;
    }
    /**
     * Set Emergency_Contact_Personal_Information_Data value
     * @param \StructType\Emergency_Contact_Personal_Information_DataType $emergency_Contact_Personal_Information_Data
     * @return \StructType\Change_Emergency_Contact_DataType
     */
    public function setEmergency_Contact_Personal_Information_Data(\StructType\Emergency_Contact_Personal_Information_DataType $emergency_Contact_Personal_Information_Data = null)
    {
        $this->Emergency_Contact_Personal_Information_Data = $emergency_Contact_Personal_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Emergency_Contact_DataType
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
