<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Emergency_Contact_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the details about an emergency contact.
 * @subpackage Structs
 */
class Emergency_Contact_DataType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the emergency contact.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Emergency_Contact_ID;
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
     * The Emergency_Contact_Priority_Reference
     * Meta information extracted from the WSDL
     * - documentation: The order of priority for the emergency contact.
     * - minOccurs: 0
     * @var \StructType\Emergency_Contact_PriorityObjectType
     */
    public $Emergency_Contact_Priority_Reference;
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Flag to specify the emergency contact is primary or not.
     * @var bool
     */
    public $Primary;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - totalDigits: 12
     * @var float
     */
    public $Priority;
    /**
     * Constructor method for Emergency_Contact_DataType
     * @uses Emergency_Contact_DataType::setEmergency_Contact_ID()
     * @uses Emergency_Contact_DataType::setLanguage_Reference()
     * @uses Emergency_Contact_DataType::setEmergency_Contact_Priority_Reference()
     * @uses Emergency_Contact_DataType::setPrimary()
     * @uses Emergency_Contact_DataType::setPriority()
     * @param string $emergency_Contact_ID
     * @param \StructType\LanguageObjectType[] $language_Reference
     * @param \StructType\Emergency_Contact_PriorityObjectType $emergency_Contact_Priority_Reference
     * @param bool $primary
     * @param float $priority
     */
    public function __construct($emergency_Contact_ID = null, array $language_Reference = array(), \StructType\Emergency_Contact_PriorityObjectType $emergency_Contact_Priority_Reference = null, $primary = null, $priority = null)
    {
        $this
            ->setEmergency_Contact_ID($emergency_Contact_ID)
            ->setLanguage_Reference($language_Reference)
            ->setEmergency_Contact_Priority_Reference($emergency_Contact_Priority_Reference)
            ->setPrimary($primary)
            ->setPriority($priority);
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
     * @return \StructType\Emergency_Contact_DataType
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
        foreach ($values as $emergency_Contact_DataTypeLanguage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$emergency_Contact_DataTypeLanguage_ReferenceItem instanceof \StructType\LanguageObjectType) {
                $invalidValues[] = is_object($emergency_Contact_DataTypeLanguage_ReferenceItem) ? get_class($emergency_Contact_DataTypeLanguage_ReferenceItem) : sprintf('%s(%s)', gettype($emergency_Contact_DataTypeLanguage_ReferenceItem), var_export($emergency_Contact_DataTypeLanguage_ReferenceItem, true));
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
     * @return \StructType\Emergency_Contact_DataType
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
     * @return \StructType\Emergency_Contact_DataType
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
     * Get Emergency_Contact_Priority_Reference value
     * @return \StructType\Emergency_Contact_PriorityObjectType|null
     */
    public function getEmergency_Contact_Priority_Reference()
    {
        return $this->Emergency_Contact_Priority_Reference;
    }
    /**
     * Set Emergency_Contact_Priority_Reference value
     * @param \StructType\Emergency_Contact_PriorityObjectType $emergency_Contact_Priority_Reference
     * @return \StructType\Emergency_Contact_DataType
     */
    public function setEmergency_Contact_Priority_Reference(\StructType\Emergency_Contact_PriorityObjectType $emergency_Contact_Priority_Reference = null)
    {
        $this->Emergency_Contact_Priority_Reference = $emergency_Contact_Priority_Reference;
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
     * @return \StructType\Emergency_Contact_DataType
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
     * @return \StructType\Emergency_Contact_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Emergency_Contact_DataType
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
