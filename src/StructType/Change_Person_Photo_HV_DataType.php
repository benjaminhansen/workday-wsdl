<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Person_Photo_HV_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Person Photo HV Data
 * @subpackage Structs
 */
class Change_Person_Photo_HV_DataType extends AbstractStructBase
{
    /**
     * The Person_Photo_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Person_Photo_DataType[]
     */
    public $Person_Photo_Data;
    /**
     * Constructor method for Change_Person_Photo_HV_DataType
     * @uses Change_Person_Photo_HV_DataType::setPerson_Photo_Data()
     * @param \StructType\Change_Person_Photo_DataType[] $person_Photo_Data
     */
    public function __construct(array $person_Photo_Data = array())
    {
        $this
            ->setPerson_Photo_Data($person_Photo_Data);
    }
    /**
     * Get Person_Photo_Data value
     * @return \StructType\Change_Person_Photo_DataType[]|null
     */
    public function getPerson_Photo_Data()
    {
        return $this->Person_Photo_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Photo_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Photo_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_Photo_DataForArrayConstraintsFromSetPerson_Photo_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Person_Photo_HV_DataTypePerson_Photo_DataItem) {
            // validation for constraint: itemType
            if (!$change_Person_Photo_HV_DataTypePerson_Photo_DataItem instanceof \StructType\Change_Person_Photo_DataType) {
                $invalidValues[] = is_object($change_Person_Photo_HV_DataTypePerson_Photo_DataItem) ? get_class($change_Person_Photo_HV_DataTypePerson_Photo_DataItem) : sprintf('%s(%s)', gettype($change_Person_Photo_HV_DataTypePerson_Photo_DataItem), var_export($change_Person_Photo_HV_DataTypePerson_Photo_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Photo_Data property can only contain items of type \StructType\Change_Person_Photo_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Photo_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Person_Photo_DataType[] $person_Photo_Data
     * @return \StructType\Change_Person_Photo_HV_DataType
     */
    public function setPerson_Photo_Data(array $person_Photo_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($person_Photo_DataArrayErrorMessage = self::validatePerson_Photo_DataForArrayConstraintsFromSetPerson_Photo_Data($person_Photo_Data))) {
            throw new \InvalidArgumentException($person_Photo_DataArrayErrorMessage, __LINE__);
        }
        $this->Person_Photo_Data = $person_Photo_Data;
        return $this;
    }
    /**
     * Add item to Person_Photo_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Person_Photo_DataType $item
     * @return \StructType\Change_Person_Photo_HV_DataType
     */
    public function addToPerson_Photo_Data(\StructType\Change_Person_Photo_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Person_Photo_DataType) {
            throw new \InvalidArgumentException(sprintf('The Person_Photo_Data property can only contain items of type \StructType\Change_Person_Photo_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Photo_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Person_Photo_HV_DataType
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
