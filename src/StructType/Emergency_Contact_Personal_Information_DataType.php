<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Emergency_Contact_Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element to hold the name and contact information of the emergency contact
 * @subpackage Structs
 */
class Emergency_Contact_Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Person_Name_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_Name_DataType[]
     */
    public $Person_Name_Data;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Contact_Information_DataType[]
     */
    public $Contact_Information_Data;
    /**
     * Constructor method for Emergency_Contact_Personal_Information_DataType
     * @uses Emergency_Contact_Personal_Information_DataType::setPerson_Name_Data()
     * @uses Emergency_Contact_Personal_Information_DataType::setContact_Information_Data()
     * @param \StructType\Person_Name_DataType[] $person_Name_Data
     * @param \StructType\Contact_Information_DataType[] $contact_Information_Data
     */
    public function __construct(array $person_Name_Data = array(), array $contact_Information_Data = array())
    {
        $this
            ->setPerson_Name_Data($person_Name_Data)
            ->setContact_Information_Data($contact_Information_Data);
    }
    /**
     * Get Person_Name_Data value
     * @return \StructType\Person_Name_DataType[]|null
     */
    public function getPerson_Name_Data()
    {
        return $this->Person_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_Name_DataForArrayConstraintsFromSetPerson_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem) {
            // validation for constraint: itemType
            if (!$emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem instanceof \StructType\Person_Name_DataType) {
                $invalidValues[] = is_object($emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem) ? get_class($emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem) : sprintf('%s(%s)', gettype($emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem), var_export($emergency_Contact_Personal_Information_DataTypePerson_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Name_Data property can only contain items of type \StructType\Person_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Name_DataType[] $person_Name_Data
     * @return \StructType\Emergency_Contact_Personal_Information_DataType
     */
    public function setPerson_Name_Data(array $person_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($person_Name_DataArrayErrorMessage = self::validatePerson_Name_DataForArrayConstraintsFromSetPerson_Name_Data($person_Name_Data))) {
            throw new \InvalidArgumentException($person_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Person_Name_Data = $person_Name_Data;
        return $this;
    }
    /**
     * Add item to Person_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Name_DataType $item
     * @return \StructType\Emergency_Contact_Personal_Information_DataType
     */
    public function addToPerson_Name_Data(\StructType\Person_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Person_Name_Data property can only contain items of type \StructType\Person_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Name_Data[] = $item;
        return $this;
    }
    /**
     * Get Contact_Information_Data value
     * @return \StructType\Contact_Information_DataType[]|null
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
        foreach ($values as $emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem) {
            // validation for constraint: itemType
            if (!$emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem instanceof \StructType\Contact_Information_DataType) {
                $invalidValues[] = is_object($emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem) ? get_class($emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem) : sprintf('%s(%s)', gettype($emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem), var_export($emergency_Contact_Personal_Information_DataTypeContact_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact_Information_Data property can only contain items of type \StructType\Contact_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Contact_Information_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact_Information_DataType[] $contact_Information_Data
     * @return \StructType\Emergency_Contact_Personal_Information_DataType
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
     * @param \StructType\Contact_Information_DataType $item
     * @return \StructType\Emergency_Contact_Personal_Information_DataType
     */
    public function addToContact_Information_Data(\StructType\Contact_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contact_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Contact_Information_Data property can only contain items of type \StructType\Contact_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\Emergency_Contact_Personal_Information_DataType
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
