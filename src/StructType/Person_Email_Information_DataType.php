<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Email_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Subject worker must have exactly one primary home email address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have
 * exactly one primary work email address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Only one work Email Address can be marked as Primary. | The Email ID
 * field is for updating the value of the Email Reference. It cannot be the same as another existing email address. | Only one home Email Address can be marked as Primary. | When Replace All is True, you can't pass an Email Reference. | When Replace All
 * is True, Delete can't be True. | Encapsulating element that tracks all emails.
 * @subpackage Structs
 */
class Person_Email_Information_DataType extends AbstractStructBase
{
    /**
     * The Email_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for updating a single email address.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Email_DataType[]
     */
    public $Email_Information_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary address data will be replaced. A value of true means all non-primary addresses will be deleted and new address instances will be created regardless of whether a reference is
     * used.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Person_Email_Information_DataType
     * @uses Person_Email_Information_DataType::setEmail_Information_Data()
     * @uses Person_Email_Information_DataType::setReplace_All()
     * @param \WorkdayWsdl\\StructType\Person_Email_DataType[] $email_Information_Data
     * @param bool $replace_All
     */
    public function __construct(array $email_Information_Data = array(), $replace_All = null)
    {
        $this
            ->setEmail_Information_Data($email_Information_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Email_Information_Data value
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType[]|null
     */
    public function getEmail_Information_Data()
    {
        return $this->Email_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmail_Information_DataForArrayConstraintsFromSetEmail_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Email_Information_DataTypeEmail_Information_DataItem) {
            // validation for constraint: itemType
            if (!$person_Email_Information_DataTypeEmail_Information_DataItem instanceof \WorkdayWsdl\\StructType\Person_Email_DataType) {
                $invalidValues[] = is_object($person_Email_Information_DataTypeEmail_Information_DataItem) ? get_class($person_Email_Information_DataTypeEmail_Information_DataItem) : sprintf('%s(%s)', gettype($person_Email_Information_DataTypeEmail_Information_DataItem), var_export($person_Email_Information_DataTypeEmail_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Person_Email_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Email_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Person_Email_DataType[] $email_Information_Data
     * @return \WorkdayWsdl\\StructType\Person_Email_Information_DataType
     */
    public function setEmail_Information_Data(array $email_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($email_Information_DataArrayErrorMessage = self::validateEmail_Information_DataForArrayConstraintsFromSetEmail_Information_Data($email_Information_Data))) {
            throw new \InvalidArgumentException($email_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Email_Information_Data = $email_Information_Data;
        return $this;
    }
    /**
     * Add item to Email_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Person_Email_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Email_Information_DataType
     */
    public function addToEmail_Information_Data(\WorkdayWsdl\\StructType\Person_Email_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Person_Email_DataType) {
            throw new \InvalidArgumentException(sprintf('The Email_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Person_Email_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Email_Information_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Person_Email_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Person_Email_Information_DataType
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
