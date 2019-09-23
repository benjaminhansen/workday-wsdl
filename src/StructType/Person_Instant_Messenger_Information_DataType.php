<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Instant_Messenger_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Subject person must have exactly one primary home Instant Messenger in order to have non-primary entries. | Subject person must have exactly one primary work Instant Messenger in order to have non-primary entries. | Only one home
 * Instant Messenger can be marked as Primary. | When Replace All is True, you can't pass an Instant Messenger Reference | The Instant Messenger ID field is for update the value of the Instant Messenger Reference. It cannot be the same as another
 * existing Instant Messenger. | Only one work Instant Messenger can be marked as Primary. | When Replace All is True, Delete can't be True. | Encapsulating element for an instant messenger instance.
 * @subpackage Structs
 */
class Person_Instant_Messenger_Information_DataType extends AbstractStructBase
{
    /**
     * The Person_Instant_Messenger_Data
     * Meta information extracted from the WSDL
     * - documentation: An instant messenger data element.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType[]
     */
    public $Person_Instant_Messenger_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary instant messenger data will be replaced. A value of true means all non-primary instant messengers will be deleted and new instant messenger instances will be created regardless
     * of whether a reference is used.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Person_Instant_Messenger_Information_DataType
     * @uses Person_Instant_Messenger_Information_DataType::setPerson_Instant_Messenger_Data()
     * @uses Person_Instant_Messenger_Information_DataType::setReplace_All()
     * @param \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType[] $person_Instant_Messenger_Data
     * @param bool $replace_All
     */
    public function __construct(array $person_Instant_Messenger_Data = array(), $replace_All = null)
    {
        $this
            ->setPerson_Instant_Messenger_Data($person_Instant_Messenger_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Person_Instant_Messenger_Data value
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType[]|null
     */
    public function getPerson_Instant_Messenger_Data()
    {
        return $this->Person_Instant_Messenger_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Instant_Messenger_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Instant_Messenger_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_Instant_Messenger_DataForArrayConstraintsFromSetPerson_Instant_Messenger_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem) {
            // validation for constraint: itemType
            if (!$person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem instanceof \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType) {
                $invalidValues[] = is_object($person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem) ? get_class($person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem) : sprintf('%s(%s)', gettype($person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem), var_export($person_Instant_Messenger_Information_DataTypePerson_Instant_Messenger_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Instant_Messenger_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType[] $person_Instant_Messenger_Data
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_Information_DataType
     */
    public function setPerson_Instant_Messenger_Data(array $person_Instant_Messenger_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($person_Instant_Messenger_DataArrayErrorMessage = self::validatePerson_Instant_Messenger_DataForArrayConstraintsFromSetPerson_Instant_Messenger_Data($person_Instant_Messenger_Data))) {
            throw new \InvalidArgumentException($person_Instant_Messenger_DataArrayErrorMessage, __LINE__);
        }
        $this->Person_Instant_Messenger_Data = $person_Instant_Messenger_Data;
        return $this;
    }
    /**
     * Add item to Person_Instant_Messenger_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_Information_DataType
     */
    public function addToPerson_Instant_Messenger_Data(\WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType) {
            throw new \InvalidArgumentException(sprintf('The Person_Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Instant_Messenger_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_Information_DataType
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
