<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Emergency_Contact_Data_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Emergency Contact Data: ID subelements of Integration ID Data cannot reference multiple Emergency Contacts. | Encapsulating element containing all Emergency Contact data.
 * @subpackage Structs
 */
class Emergency_Contact_Data_WWSType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Language_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Language_ReferenceType[]
     */
    public $Language_Reference;
    /**
     * The Emergency_Contact_Priority_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType[]
     */
    public $Emergency_Contact_Priority_Reference;
    /**
     * Constructor method for Emergency_Contact_Data_WWSType
     * @uses Emergency_Contact_Data_WWSType::setIntegration_ID_Data()
     * @uses Emergency_Contact_Data_WWSType::setLanguage_Reference()
     * @uses Emergency_Contact_Data_WWSType::setEmergency_Contact_Priority_Reference()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \WorkdayWsdl\\StructType\Language_ReferenceType[] $language_Reference
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType[] $emergency_Contact_Priority_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $language_Reference = array(), array $emergency_Contact_Priority_Reference = array())
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setLanguage_Reference($language_Reference)
            ->setEmergency_Contact_Priority_Reference($emergency_Contact_Priority_Reference);
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Language_Reference value
     * @return \WorkdayWsdl\\StructType\Language_ReferenceType[]|null
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
        foreach ($values as $emergency_Contact_Data_WWSTypeLanguage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$emergency_Contact_Data_WWSTypeLanguage_ReferenceItem instanceof \WorkdayWsdl\\StructType\Language_ReferenceType) {
                $invalidValues[] = is_object($emergency_Contact_Data_WWSTypeLanguage_ReferenceItem) ? get_class($emergency_Contact_Data_WWSTypeLanguage_ReferenceItem) : sprintf('%s(%s)', gettype($emergency_Contact_Data_WWSTypeLanguage_ReferenceItem), var_export($emergency_Contact_Data_WWSTypeLanguage_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language_Reference property can only contain items of type \WorkdayWsdl\\StructType\Language_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Language_ReferenceType[] $language_Reference
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
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
     * @param \WorkdayWsdl\\StructType\Language_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
     */
    public function addToLanguage_Reference(\WorkdayWsdl\\StructType\Language_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Language_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Language_Reference property can only contain items of type \WorkdayWsdl\\StructType\Language_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language_Reference[] = $item;
        return $this;
    }
    /**
     * Get Emergency_Contact_Priority_Reference value
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType[]|null
     */
    public function getEmergency_Contact_Priority_Reference()
    {
        return $this->Emergency_Contact_Priority_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEmergency_Contact_Priority_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmergency_Contact_Priority_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmergency_Contact_Priority_ReferenceForArrayConstraintsFromSetEmergency_Contact_Priority_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem) {
            // validation for constraint: itemType
            if (!$emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem instanceof \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType) {
                $invalidValues[] = is_object($emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem) ? get_class($emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem) : sprintf('%s(%s)', gettype($emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem), var_export($emergency_Contact_Data_WWSTypeEmergency_Contact_Priority_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Emergency_Contact_Priority_Reference property can only contain items of type \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Emergency_Contact_Priority_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType[] $emergency_Contact_Priority_Reference
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
     */
    public function setEmergency_Contact_Priority_Reference(array $emergency_Contact_Priority_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($emergency_Contact_Priority_ReferenceArrayErrorMessage = self::validateEmergency_Contact_Priority_ReferenceForArrayConstraintsFromSetEmergency_Contact_Priority_Reference($emergency_Contact_Priority_Reference))) {
            throw new \InvalidArgumentException($emergency_Contact_Priority_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Emergency_Contact_Priority_Reference = $emergency_Contact_Priority_Reference;
        return $this;
    }
    /**
     * Add item to Emergency_Contact_Priority_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
     */
    public function addToEmergency_Contact_Priority_Reference(\WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Emergency_Contact_Priority_Reference property can only contain items of type \WorkdayWsdl\\StructType\Emergency_Contact_Priority_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Emergency_Contact_Priority_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
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
