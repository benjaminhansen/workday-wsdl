<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Web_Address_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Subject person must have exactly one primary home web address in order to have non-primary entries. | Subject person must have exactly one primary work web address in order to have non-primary entries. | When Replace All is True, you
 * can't pass a Web Address Reference. | Only one home Web Address can be marked as Primary. | When Replace All is True, Delete can't be True. | The Web Address ID field is for updating the value of the Web Address Reference. It cannot be the same as
 * another existing web address. | Only one work Web Address can be marked as Primary. | Encapsulating element that tracks all web addresses.
 * @subpackage Structs
 */
class Person_Web_Address_Information_DataType extends AbstractStructBase
{
    /**
     * The Person_Web_Address_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_Web_Address_DataType[]
     */
    public $Person_Web_Address_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary web address data will be replaced. A value of true means all non-primary web addresses will be deleted and new web address instances will be created regardless of whether a
     * reference is used.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Person_Web_Address_Information_DataType
     * @uses Person_Web_Address_Information_DataType::setPerson_Web_Address_Data()
     * @uses Person_Web_Address_Information_DataType::setReplace_All()
     * @param \StructType\Person_Web_Address_DataType[] $person_Web_Address_Data
     * @param bool $replace_All
     */
    public function __construct(array $person_Web_Address_Data = array(), $replace_All = null)
    {
        $this
            ->setPerson_Web_Address_Data($person_Web_Address_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Person_Web_Address_Data value
     * @return \StructType\Person_Web_Address_DataType[]|null
     */
    public function getPerson_Web_Address_Data()
    {
        return $this->Person_Web_Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Web_Address_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Web_Address_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_Web_Address_DataForArrayConstraintsFromSetPerson_Web_Address_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Web_Address_Information_DataTypePerson_Web_Address_DataItem) {
            // validation for constraint: itemType
            if (!$person_Web_Address_Information_DataTypePerson_Web_Address_DataItem instanceof \StructType\Person_Web_Address_DataType) {
                $invalidValues[] = is_object($person_Web_Address_Information_DataTypePerson_Web_Address_DataItem) ? get_class($person_Web_Address_Information_DataTypePerson_Web_Address_DataItem) : sprintf('%s(%s)', gettype($person_Web_Address_Information_DataTypePerson_Web_Address_DataItem), var_export($person_Web_Address_Information_DataTypePerson_Web_Address_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Web_Address_Data property can only contain items of type \StructType\Person_Web_Address_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Web_Address_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Web_Address_DataType[] $person_Web_Address_Data
     * @return \StructType\Person_Web_Address_Information_DataType
     */
    public function setPerson_Web_Address_Data(array $person_Web_Address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($person_Web_Address_DataArrayErrorMessage = self::validatePerson_Web_Address_DataForArrayConstraintsFromSetPerson_Web_Address_Data($person_Web_Address_Data))) {
            throw new \InvalidArgumentException($person_Web_Address_DataArrayErrorMessage, __LINE__);
        }
        $this->Person_Web_Address_Data = $person_Web_Address_Data;
        return $this;
    }
    /**
     * Add item to Person_Web_Address_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Web_Address_DataType $item
     * @return \StructType\Person_Web_Address_Information_DataType
     */
    public function addToPerson_Web_Address_Data(\StructType\Person_Web_Address_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_Web_Address_DataType) {
            throw new \InvalidArgumentException(sprintf('The Person_Web_Address_Data property can only contain items of type \StructType\Person_Web_Address_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Web_Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Person_Web_Address_Information_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Web_Address_Information_DataType
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
