<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Email_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary Email Address can't be deleted when there are additional email addresses with the same Usage Type or the email address reference does not belong to the processing record. | Email Address Reference must match an existing (and
 * not deleted) email address in use by the person subject of this request. | You cannot specify the same usage type more than once for a contact instance. | Email Reference is required when you delete an email address | You can't change a primary email
 * to an additional email or an additional email to a primary email. | Invalid Usage Type and Use For combination for Email Address. | Email Data and Usage Data elements are required unless email is being deleted. | A email address instance.
 * @subpackage Structs
 */
class Person_Email_DataType extends AbstractStructBase
{
    /**
     * The Email_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all core Email Address data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Email_Core_DataType[]
     */
    public $Email_Data;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]
     */
    public $Usage_Data;
    /**
     * The Email_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Email Address Reference ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Email_ReferenceObjectType
     */
    public $Email_Reference;
    /**
     * The Email_ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in email address updates. The ID cannot already be in use by another email address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email_ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Person_Email_DataType
     * @uses Person_Email_DataType::setEmail_Data()
     * @uses Person_Email_DataType::setUsage_Data()
     * @uses Person_Email_DataType::setEmail_Reference()
     * @uses Person_Email_DataType::setEmail_ID()
     * @uses Person_Email_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Email_Core_DataType[] $email_Data
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference
     * @param string $email_ID
     * @param bool $delete
     */
    public function __construct(array $email_Data = array(), array $usage_Data = array(), \WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference = null, $email_ID = null, $delete = null)
    {
        $this
            ->setEmail_Data($email_Data)
            ->setUsage_Data($usage_Data)
            ->setEmail_Reference($email_Reference)
            ->setEmail_ID($email_ID)
            ->setDelete($delete);
    }
    /**
     * Get Email_Data value
     * @return \WorkdayWsdl\\StructType\Email_Core_DataType[]|null
     */
    public function getEmail_Data()
    {
        return $this->Email_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmail_DataForArrayConstraintsFromSetEmail_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Email_DataTypeEmail_DataItem) {
            // validation for constraint: itemType
            if (!$person_Email_DataTypeEmail_DataItem instanceof \WorkdayWsdl\\StructType\Email_Core_DataType) {
                $invalidValues[] = is_object($person_Email_DataTypeEmail_DataItem) ? get_class($person_Email_DataTypeEmail_DataItem) : sprintf('%s(%s)', gettype($person_Email_DataTypeEmail_DataItem), var_export($person_Email_DataTypeEmail_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email_Data property can only contain items of type \WorkdayWsdl\\StructType\Email_Core_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Email_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Email_Core_DataType[] $email_Data
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function setEmail_Data(array $email_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($email_DataArrayErrorMessage = self::validateEmail_DataForArrayConstraintsFromSetEmail_Data($email_Data))) {
            throw new \InvalidArgumentException($email_DataArrayErrorMessage, __LINE__);
        }
        $this->Email_Data = $email_Data;
        return $this;
    }
    /**
     * Add item to Email_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Email_Core_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function addToEmail_Data(\WorkdayWsdl\\StructType\Email_Core_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Email_Core_DataType) {
            throw new \InvalidArgumentException(sprintf('The Email_Data property can only contain items of type \WorkdayWsdl\\StructType\Email_Core_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Email_Data[] = $item;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUsage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsage_DataForArrayConstraintsFromSetUsage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Email_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$person_Email_DataTypeUsage_DataItem instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($person_Email_DataTypeUsage_DataItem) ? get_class($person_Email_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($person_Email_DataTypeUsage_DataItem), var_export($person_Email_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function setUsage_Data(array $usage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($usage_DataArrayErrorMessage = self::validateUsage_DataForArrayConstraintsFromSetUsage_Data($usage_Data))) {
            throw new \InvalidArgumentException($usage_DataArrayErrorMessage, __LINE__);
        }
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Add item to Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function addToUsage_Data(\WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage_Data[] = $item;
        return $this;
    }
    /**
     * Get Email_Reference value
     * @return \WorkdayWsdl\\StructType\Email_ReferenceObjectType|null
     */
    public function getEmail_Reference()
    {
        return $this->Email_Reference;
    }
    /**
     * Set Email_Reference value
     * @param \WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function setEmail_Reference(\WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference = null)
    {
        $this->Email_Reference = $email_Reference;
        return $this;
    }
    /**
     * Get Email_ID value
     * @return string|null
     */
    public function getEmail_ID()
    {
        return $this->Email_ID;
    }
    /**
     * Set Email_ID value
     * @param string $email_ID
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function setEmail_ID($email_ID = null)
    {
        // validation for constraint: string
        if (!is_null($email_ID) && !is_string($email_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email_ID, true), gettype($email_ID)), __LINE__);
        }
        $this->Email_ID = $email_ID;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Email_DataType
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
