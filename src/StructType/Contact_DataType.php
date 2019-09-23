<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only one Primary Address change is allowed per request. However, the one Primary Address can share both home and work usage types. | Subject worker must have exactly one primary business phone number in order to submit non-primary
 * entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work phone number in order to submit non-primary entries. The primary contact information may be
 * either previously entered or included within this request | Subject worker must have exactly one primary home phone number in order to submit non-primary entries. The primary contact information may be either previously entered or included within
 * this request. | Subject worker must have exactly one primary business instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker
 * must have exactly one primary work instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary home
 * instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary lockbox address in order to submit
 * non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary business address in order to submit non-primary entries. The primary contact
 * information may be either previously entered or included within this request | Subject worker must have exactly one primary work address in order to submit non-primary entries. The primary contact information may be either previously entered or
 * included within this request | Subject worker must have exactly one primary home address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must
 * have exactly one primary business email address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work email address
 * in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary home email address in order to submit non-primary entries. The
 * primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work web address in order to submit non-primary entries. The primary contact information may be either
 * previously entered or included within this request | Subject worker must have exactly one primary business web address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this
 * request | Subject worker must have exactly one primary home web address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | One and only one lockbox address must
 * be marked as primary. | One and only one business address must be marked as primary. | One and only one home address must be marked as primary. | One and only one work address must be marked as primary. | One and only one business instant messenger
 * address must be marked as primary. | One and only one home instant messenger address must be marked as primary. | One and only one work instant messenger address must be marked as primary. | One and only one business web address must be marked as
 * primary. | One and only one home web address must be marked as primary. | One and only one work web address must be marked as primary. | One and only one business phone must be marked as primary. | One and only one home phone must be marked as
 * primary. | One and only one work phone must be marked as primary. | One and only one home email address must be marked as primary. | One and only one business email address must be marked as primary. | One and only one work email address must be
 * marked as primary. | Encapsulating element for all of the contact methods for the person. Contact methods in workday represents methods to contact an entity. For example these methods include: Address (via post), Phone, Email, Instant Messenger
 * and/or Web.
 * @subpackage Structs
 */
class Contact_DataType extends AbstractStructBase
{
    /**
     * The Internet_Email_Address_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Internet_Email_Address_DataType[]
     */
    public $Internet_Email_Address_Data;
    /**
     * The Phone_Number_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Phone_Number_DataType[]
     */
    public $Phone_Number_Data;
    /**
     * The Address_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_DataType[]
     */
    public $Address_Data;
    /**
     * The Web_Address_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Web_Address_DataType[]
     */
    public $Web_Address_Data;
    /**
     * The Instant_Messenger_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_DataType[]
     */
    public $Instant_Messenger_Data;
    /**
     * Constructor method for Contact_DataType
     * @uses Contact_DataType::setInternet_Email_Address_Data()
     * @uses Contact_DataType::setPhone_Number_Data()
     * @uses Contact_DataType::setAddress_Data()
     * @uses Contact_DataType::setWeb_Address_Data()
     * @uses Contact_DataType::setInstant_Messenger_Data()
     * @param \WorkdayWsdl\\StructType\Internet_Email_Address_DataType[] $internet_Email_Address_Data
     * @param \WorkdayWsdl\\StructType\Phone_Number_DataType[] $phone_Number_Data
     * @param \WorkdayWsdl\\StructType\Address_DataType[] $address_Data
     * @param \WorkdayWsdl\\StructType\Web_Address_DataType[] $web_Address_Data
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_DataType[] $instant_Messenger_Data
     */
    public function __construct(array $internet_Email_Address_Data = array(), array $phone_Number_Data = array(), array $address_Data = array(), array $web_Address_Data = array(), array $instant_Messenger_Data = array())
    {
        $this
            ->setInternet_Email_Address_Data($internet_Email_Address_Data)
            ->setPhone_Number_Data($phone_Number_Data)
            ->setAddress_Data($address_Data)
            ->setWeb_Address_Data($web_Address_Data)
            ->setInstant_Messenger_Data($instant_Messenger_Data);
    }
    /**
     * Get Internet_Email_Address_Data value
     * @return \WorkdayWsdl\\StructType\Internet_Email_Address_DataType[]|null
     */
    public function getInternet_Email_Address_Data()
    {
        return $this->Internet_Email_Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInternet_Email_Address_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternet_Email_Address_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternet_Email_Address_DataForArrayConstraintsFromSetInternet_Email_Address_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_DataTypeInternet_Email_Address_DataItem) {
            // validation for constraint: itemType
            if (!$contact_DataTypeInternet_Email_Address_DataItem instanceof \WorkdayWsdl\\StructType\Internet_Email_Address_DataType) {
                $invalidValues[] = is_object($contact_DataTypeInternet_Email_Address_DataItem) ? get_class($contact_DataTypeInternet_Email_Address_DataItem) : sprintf('%s(%s)', gettype($contact_DataTypeInternet_Email_Address_DataItem), var_export($contact_DataTypeInternet_Email_Address_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Internet_Email_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Internet_Email_Address_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Internet_Email_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internet_Email_Address_DataType[] $internet_Email_Address_Data
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function setInternet_Email_Address_Data(array $internet_Email_Address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($internet_Email_Address_DataArrayErrorMessage = self::validateInternet_Email_Address_DataForArrayConstraintsFromSetInternet_Email_Address_Data($internet_Email_Address_Data))) {
            throw new \InvalidArgumentException($internet_Email_Address_DataArrayErrorMessage, __LINE__);
        }
        $this->Internet_Email_Address_Data = $internet_Email_Address_Data;
        return $this;
    }
    /**
     * Add item to Internet_Email_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internet_Email_Address_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function addToInternet_Email_Address_Data(\WorkdayWsdl\\StructType\Internet_Email_Address_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Internet_Email_Address_DataType) {
            throw new \InvalidArgumentException(sprintf('The Internet_Email_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Internet_Email_Address_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Internet_Email_Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Phone_Number_Data value
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType[]|null
     */
    public function getPhone_Number_Data()
    {
        return $this->Phone_Number_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone_Number_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone_Number_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhone_Number_DataForArrayConstraintsFromSetPhone_Number_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_DataTypePhone_Number_DataItem) {
            // validation for constraint: itemType
            if (!$contact_DataTypePhone_Number_DataItem instanceof \WorkdayWsdl\\StructType\Phone_Number_DataType) {
                $invalidValues[] = is_object($contact_DataTypePhone_Number_DataItem) ? get_class($contact_DataTypePhone_Number_DataItem) : sprintf('%s(%s)', gettype($contact_DataTypePhone_Number_DataItem), var_export($contact_DataTypePhone_Number_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone_Number_Data property can only contain items of type \WorkdayWsdl\\StructType\Phone_Number_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Phone_Number_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Phone_Number_DataType[] $phone_Number_Data
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function setPhone_Number_Data(array $phone_Number_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($phone_Number_DataArrayErrorMessage = self::validatePhone_Number_DataForArrayConstraintsFromSetPhone_Number_Data($phone_Number_Data))) {
            throw new \InvalidArgumentException($phone_Number_DataArrayErrorMessage, __LINE__);
        }
        $this->Phone_Number_Data = $phone_Number_Data;
        return $this;
    }
    /**
     * Add item to Phone_Number_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Phone_Number_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function addToPhone_Number_Data(\WorkdayWsdl\\StructType\Phone_Number_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Phone_Number_DataType) {
            throw new \InvalidArgumentException(sprintf('The Phone_Number_Data property can only contain items of type \WorkdayWsdl\\StructType\Phone_Number_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Phone_Number_Data[] = $item;
        return $this;
    }
    /**
     * Get Address_Data value
     * @return \WorkdayWsdl\\StructType\Address_DataType[]|null
     */
    public function getAddress_Data()
    {
        return $this->Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddress_DataForArrayConstraintsFromSetAddress_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_DataTypeAddress_DataItem) {
            // validation for constraint: itemType
            if (!$contact_DataTypeAddress_DataItem instanceof \WorkdayWsdl\\StructType\Address_DataType) {
                $invalidValues[] = is_object($contact_DataTypeAddress_DataItem) ? get_class($contact_DataTypeAddress_DataItem) : sprintf('%s(%s)', gettype($contact_DataTypeAddress_DataItem), var_export($contact_DataTypeAddress_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_DataType[] $address_Data
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function setAddress_Data(array $address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($address_DataArrayErrorMessage = self::validateAddress_DataForArrayConstraintsFromSetAddress_Data($address_Data))) {
            throw new \InvalidArgumentException($address_DataArrayErrorMessage, __LINE__);
        }
        $this->Address_Data = $address_Data;
        return $this;
    }
    /**
     * Add item to Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function addToAddress_Data(\WorkdayWsdl\\StructType\Address_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Address_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Web_Address_Data value
     * @return \WorkdayWsdl\\StructType\Web_Address_DataType[]|null
     */
    public function getWeb_Address_Data()
    {
        return $this->Web_Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWeb_Address_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWeb_Address_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWeb_Address_DataForArrayConstraintsFromSetWeb_Address_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_DataTypeWeb_Address_DataItem) {
            // validation for constraint: itemType
            if (!$contact_DataTypeWeb_Address_DataItem instanceof \WorkdayWsdl\\StructType\Web_Address_DataType) {
                $invalidValues[] = is_object($contact_DataTypeWeb_Address_DataItem) ? get_class($contact_DataTypeWeb_Address_DataItem) : sprintf('%s(%s)', gettype($contact_DataTypeWeb_Address_DataItem), var_export($contact_DataTypeWeb_Address_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Web_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Web_Address_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Web_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Web_Address_DataType[] $web_Address_Data
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function setWeb_Address_Data(array $web_Address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($web_Address_DataArrayErrorMessage = self::validateWeb_Address_DataForArrayConstraintsFromSetWeb_Address_Data($web_Address_Data))) {
            throw new \InvalidArgumentException($web_Address_DataArrayErrorMessage, __LINE__);
        }
        $this->Web_Address_Data = $web_Address_Data;
        return $this;
    }
    /**
     * Add item to Web_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Web_Address_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function addToWeb_Address_Data(\WorkdayWsdl\\StructType\Web_Address_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Web_Address_DataType) {
            throw new \InvalidArgumentException(sprintf('The Web_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Web_Address_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Web_Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Instant_Messenger_Data value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_DataType[]|null
     */
    public function getInstant_Messenger_Data()
    {
        return $this->Instant_Messenger_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInstant_Messenger_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInstant_Messenger_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInstant_Messenger_DataForArrayConstraintsFromSetInstant_Messenger_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_DataTypeInstant_Messenger_DataItem) {
            // validation for constraint: itemType
            if (!$contact_DataTypeInstant_Messenger_DataItem instanceof \WorkdayWsdl\\StructType\Instant_Messenger_DataType) {
                $invalidValues[] = is_object($contact_DataTypeInstant_Messenger_DataItem) ? get_class($contact_DataTypeInstant_Messenger_DataItem) : sprintf('%s(%s)', gettype($contact_DataTypeInstant_Messenger_DataItem), var_export($contact_DataTypeInstant_Messenger_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Instant_Messenger_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Instant_Messenger_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_DataType[] $instant_Messenger_Data
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function setInstant_Messenger_Data(array $instant_Messenger_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($instant_Messenger_DataArrayErrorMessage = self::validateInstant_Messenger_DataForArrayConstraintsFromSetInstant_Messenger_Data($instant_Messenger_Data))) {
            throw new \InvalidArgumentException($instant_Messenger_DataArrayErrorMessage, __LINE__);
        }
        $this->Instant_Messenger_Data = $instant_Messenger_Data;
        return $this;
    }
    /**
     * Add item to Instant_Messenger_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_DataType
     */
    public function addToInstant_Messenger_Data(\WorkdayWsdl\\StructType\Instant_Messenger_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Instant_Messenger_DataType) {
            throw new \InvalidArgumentException(sprintf('The Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Instant_Messenger_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Instant_Messenger_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Contact_DataType
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
