<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary address on Ship-To location must have a use of that maps to Shipping. | Either a phone number, or an email address must be specified for an emergency contact. | At least one Primary Phone must be specified in order to add an
 * Additional Phone | One and only one home email address must be marked as primary. | One and only one work email address must be marked as primary. | One and only one home phone must be marked as primary. | One and only one business email address must
 * be marked as primary. | One and only one work phone must be marked as primary. | At least one Primary Email must be specified in order to add an Additional Email | One and only one business phone must be marked as primary. | Only one address of type
 * work from home is allowed. | Only one address of type International Assignment is allowed for a country. | One and only one Institutional web address must be marked as primary. | One and only one Institutional instant messenger address must be marked
 * as primary. | One and only one Institutional address must be marked as primary. | One and only one Institutional phone must be marked as primary. | One and only one Institutional email address must be marked as primary. | One and only one business
 * address must be marked as primary. | Only one Primary Address change is allowed per request. However, the one Primary Address can share both home and work usage types. | Subject worker must have exactly one primary business phone number in order to
 * submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work phone number in order to submit non-primary entries. The primary contact
 * information may be either previously entered or included within this request | Subject worker must have exactly one primary home phone number in order to submit non-primary entries. The primary contact information may be either previously entered or
 * included within this request. | Subject worker must have exactly one primary business instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request |
 * Subject worker must have exactly one primary work instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly
 * one primary home instant messenger address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary lockbox address in
 * order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary business address in order to submit non-primary entries. The primary
 * contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work address in order to submit non-primary entries. The primary contact information may be either previously entered
 * or included within this request | Subject worker must have exactly one primary home address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must
 * have exactly one primary business email address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work email address
 * in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary home email address in order to submit non-primary entries. The
 * primary contact information may be either previously entered or included within this request | Subject worker must have exactly one primary work web address in order to submit non-primary entries. The primary contact information may be either
 * previously entered or included within this request | Subject worker must have exactly one primary business web address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this
 * request | Subject worker must have exactly one primary home web address in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | One and only one lockbox address must
 * be marked as primary. | One and only one home address must be marked as primary. | One and only one work address must be marked as primary. | One and only one business instant messenger address must be marked as primary. | One and only one home
 * instant messenger address must be marked as primary. | One and only one work instant messenger address must be marked as primary. | One and only one business web address must be marked as primary. | One and only one home web address must be marked as
 * primary. | One and only one work web address must be marked as primary. | All of the person's contact data (address, phone, email, instant messenger, web address).
 * @subpackage Structs
 */
class Contact_Information_DataType extends AbstractStructBase
{
    /**
     * The Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Address information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_Information_DataType[]
     */
    public $Address_Data;
    /**
     * The Phone_Data
     * Meta information extracted from the WSDL
     * - documentation: Phone Information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Phone_Information_DataType[]
     */
    public $Phone_Data;
    /**
     * The Email_Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Email Address Information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Email_Address_Information_DataType[]
     */
    public $Email_Address_Data;
    /**
     * The Instant_Messenger_Data
     * Meta information extracted from the WSDL
     * - documentation: Instant Messenger Information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType[]
     */
    public $Instant_Messenger_Data;
    /**
     * The Web_Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Web Address Information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Web_Address_Information_DataType[]
     */
    public $Web_Address_Data;
    /**
     * Constructor method for Contact_Information_DataType
     * @uses Contact_Information_DataType::setAddress_Data()
     * @uses Contact_Information_DataType::setPhone_Data()
     * @uses Contact_Information_DataType::setEmail_Address_Data()
     * @uses Contact_Information_DataType::setInstant_Messenger_Data()
     * @uses Contact_Information_DataType::setWeb_Address_Data()
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType[] $address_Data
     * @param \WorkdayWsdl\\StructType\Phone_Information_DataType[] $phone_Data
     * @param \WorkdayWsdl\\StructType\Email_Address_Information_DataType[] $email_Address_Data
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType[] $instant_Messenger_Data
     * @param \WorkdayWsdl\\StructType\Web_Address_Information_DataType[] $web_Address_Data
     */
    public function __construct(array $address_Data = array(), array $phone_Data = array(), array $email_Address_Data = array(), array $instant_Messenger_Data = array(), array $web_Address_Data = array())
    {
        $this
            ->setAddress_Data($address_Data)
            ->setPhone_Data($phone_Data)
            ->setEmail_Address_Data($email_Address_Data)
            ->setInstant_Messenger_Data($instant_Messenger_Data)
            ->setWeb_Address_Data($web_Address_Data);
    }
    /**
     * Get Address_Data value
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType[]|null
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
        foreach ($values as $contact_Information_DataTypeAddress_DataItem) {
            // validation for constraint: itemType
            if (!$contact_Information_DataTypeAddress_DataItem instanceof \WorkdayWsdl\\StructType\Address_Information_DataType) {
                $invalidValues[] = is_object($contact_Information_DataTypeAddress_DataItem) ? get_class($contact_Information_DataTypeAddress_DataItem) : sprintf('%s(%s)', gettype($contact_Information_DataTypeAddress_DataItem), var_export($contact_Information_DataTypeAddress_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType[] $address_Data
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
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
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function addToAddress_Data(\WorkdayWsdl\\StructType\Address_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Address_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Phone_Data value
     * @return \WorkdayWsdl\\StructType\Phone_Information_DataType[]|null
     */
    public function getPhone_Data()
    {
        return $this->Phone_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhone_DataForArrayConstraintsFromSetPhone_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_Information_DataTypePhone_DataItem) {
            // validation for constraint: itemType
            if (!$contact_Information_DataTypePhone_DataItem instanceof \WorkdayWsdl\\StructType\Phone_Information_DataType) {
                $invalidValues[] = is_object($contact_Information_DataTypePhone_DataItem) ? get_class($contact_Information_DataTypePhone_DataItem) : sprintf('%s(%s)', gettype($contact_Information_DataTypePhone_DataItem), var_export($contact_Information_DataTypePhone_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone_Data property can only contain items of type \WorkdayWsdl\\StructType\Phone_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Phone_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Phone_Information_DataType[] $phone_Data
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function setPhone_Data(array $phone_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($phone_DataArrayErrorMessage = self::validatePhone_DataForArrayConstraintsFromSetPhone_Data($phone_Data))) {
            throw new \InvalidArgumentException($phone_DataArrayErrorMessage, __LINE__);
        }
        $this->Phone_Data = $phone_Data;
        return $this;
    }
    /**
     * Add item to Phone_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Phone_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function addToPhone_Data(\WorkdayWsdl\\StructType\Phone_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Phone_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Phone_Data property can only contain items of type \WorkdayWsdl\\StructType\Phone_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Phone_Data[] = $item;
        return $this;
    }
    /**
     * Get Email_Address_Data value
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType[]|null
     */
    public function getEmail_Address_Data()
    {
        return $this->Email_Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail_Address_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail_Address_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmail_Address_DataForArrayConstraintsFromSetEmail_Address_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contact_Information_DataTypeEmail_Address_DataItem) {
            // validation for constraint: itemType
            if (!$contact_Information_DataTypeEmail_Address_DataItem instanceof \WorkdayWsdl\\StructType\Email_Address_Information_DataType) {
                $invalidValues[] = is_object($contact_Information_DataTypeEmail_Address_DataItem) ? get_class($contact_Information_DataTypeEmail_Address_DataItem) : sprintf('%s(%s)', gettype($contact_Information_DataTypeEmail_Address_DataItem), var_export($contact_Information_DataTypeEmail_Address_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Email_Address_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Email_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Email_Address_Information_DataType[] $email_Address_Data
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function setEmail_Address_Data(array $email_Address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($email_Address_DataArrayErrorMessage = self::validateEmail_Address_DataForArrayConstraintsFromSetEmail_Address_Data($email_Address_Data))) {
            throw new \InvalidArgumentException($email_Address_DataArrayErrorMessage, __LINE__);
        }
        $this->Email_Address_Data = $email_Address_Data;
        return $this;
    }
    /**
     * Add item to Email_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Email_Address_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function addToEmail_Address_Data(\WorkdayWsdl\\StructType\Email_Address_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Email_Address_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Email_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Email_Address_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Email_Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Instant_Messenger_Data value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType[]|null
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
        foreach ($values as $contact_Information_DataTypeInstant_Messenger_DataItem) {
            // validation for constraint: itemType
            if (!$contact_Information_DataTypeInstant_Messenger_DataItem instanceof \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType) {
                $invalidValues[] = is_object($contact_Information_DataTypeInstant_Messenger_DataItem) ? get_class($contact_Information_DataTypeInstant_Messenger_DataItem) : sprintf('%s(%s)', gettype($contact_Information_DataTypeInstant_Messenger_DataItem), var_export($contact_Information_DataTypeInstant_Messenger_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Instant_Messenger_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType[] $instant_Messenger_Data
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
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
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function addToInstant_Messenger_Data(\WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Instant_Messenger_Data property can only contain items of type \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Instant_Messenger_Data[] = $item;
        return $this;
    }
    /**
     * Get Web_Address_Data value
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType[]|null
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
        foreach ($values as $contact_Information_DataTypeWeb_Address_DataItem) {
            // validation for constraint: itemType
            if (!$contact_Information_DataTypeWeb_Address_DataItem instanceof \WorkdayWsdl\\StructType\Web_Address_Information_DataType) {
                $invalidValues[] = is_object($contact_Information_DataTypeWeb_Address_DataItem) ? get_class($contact_Information_DataTypeWeb_Address_DataItem) : sprintf('%s(%s)', gettype($contact_Information_DataTypeWeb_Address_DataItem), var_export($contact_Information_DataTypeWeb_Address_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Web_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Web_Address_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Web_Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Web_Address_Information_DataType[] $web_Address_Data
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
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
     * @param \WorkdayWsdl\\StructType\Web_Address_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public function addToWeb_Address_Data(\WorkdayWsdl\\StructType\Web_Address_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Web_Address_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Web_Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Web_Address_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Web_Address_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType
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
