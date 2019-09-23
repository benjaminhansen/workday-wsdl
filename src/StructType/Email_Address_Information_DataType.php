<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email_Address_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Email ID field is for updating the value of the Email Reference. It cannot be the same as another existing email. | Invalid Email Reference or the email with this Email Reference has been deleted. | Primary Email Address can't be
 * deleted when there are additional email addresses with the same Usage Type or the email address reference does not belong to the processing record. | You can't change the Usage Type of an existing email address. | You can't change a primary email to
 * an additional email or an additional email to a primary email. | When Do Not Replace All is False for all email elements, Delete can't be True. | When Do Not Replace All is False for all email elements, you can't pass an Email Reference. | Email
 * Address is required unless you are deleting an email address. | Usage Data is required unless you are deleting an email address. | Email Reference is required when you delete an email address | Invalid Usage Type and Use For combination for Email
 * Address. | Email Address Information
 * @subpackage Structs
 */
class Email_Address_Information_DataType extends AbstractStructBase
{
    /**
     * The Email_Address
     * Meta information extracted from the WSDL
     * - documentation: Email Address Information
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email_Address;
    /**
     * The Email_Comment
     * Meta information extracted from the WSDL
     * - documentation: Email comments.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email_Comment;
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
     * - documentation: The email Reference ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Email_ReferenceObjectType
     */
    public $Email_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in email address updates. The ID cannot already be in use by another email address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced email. If this flag is set, the Reference ID field becomes required, and all other email fields that would otherwise be required will be optional and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Do_Not_Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary email address data will be replaced. A value of true means only the referenced email address will be updated, or created if it does not exist or no reference was provided. This
     * behavior is used if the flag is set to true for ANY email address in the request.
     * @var bool
     */
    public $Do_Not_Replace_All;
    /**
     * Constructor method for Email_Address_Information_DataType
     * @uses Email_Address_Information_DataType::setEmail_Address()
     * @uses Email_Address_Information_DataType::setEmail_Comment()
     * @uses Email_Address_Information_DataType::setUsage_Data()
     * @uses Email_Address_Information_DataType::setEmail_Reference()
     * @uses Email_Address_Information_DataType::setID()
     * @uses Email_Address_Information_DataType::setDelete()
     * @uses Email_Address_Information_DataType::setDo_Not_Replace_All()
     * @param string $email_Address
     * @param string $email_Comment
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference
     * @param string $iD
     * @param bool $delete
     * @param bool $do_Not_Replace_All
     */
    public function __construct($email_Address = null, $email_Comment = null, array $usage_Data = array(), \WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference = null, $iD = null, $delete = null, $do_Not_Replace_All = null)
    {
        $this
            ->setEmail_Address($email_Address)
            ->setEmail_Comment($email_Comment)
            ->setUsage_Data($usage_Data)
            ->setEmail_Reference($email_Reference)
            ->setID($iD)
            ->setDelete($delete)
            ->setDo_Not_Replace_All($do_Not_Replace_All);
    }
    /**
     * Get Email_Address value
     * @return string|null
     */
    public function getEmail_Address()
    {
        return $this->Email_Address;
    }
    /**
     * Set Email_Address value
     * @param string $email_Address
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
     */
    public function setEmail_Address($email_Address = null)
    {
        // validation for constraint: string
        if (!is_null($email_Address) && !is_string($email_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email_Address, true), gettype($email_Address)), __LINE__);
        }
        $this->Email_Address = $email_Address;
        return $this;
    }
    /**
     * Get Email_Comment value
     * @return string|null
     */
    public function getEmail_Comment()
    {
        return $this->Email_Comment;
    }
    /**
     * Set Email_Comment value
     * @param string $email_Comment
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
     */
    public function setEmail_Comment($email_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($email_Comment) && !is_string($email_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email_Comment, true), gettype($email_Comment)), __LINE__);
        }
        $this->Email_Comment = $email_Comment;
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
        foreach ($values as $email_Address_Information_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$email_Address_Information_DataTypeUsage_DataItem instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($email_Address_Information_DataTypeUsage_DataItem) ? get_class($email_Address_Information_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($email_Address_Information_DataTypeUsage_DataItem), var_export($email_Address_Information_DataTypeUsage_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
     */
    public function setEmail_Reference(\WorkdayWsdl\\StructType\Email_ReferenceObjectType $email_Reference = null)
    {
        $this->Email_Reference = $email_Reference;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
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
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
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
     * Get Do_Not_Replace_All value
     * @return bool|null
     */
    public function getDo_Not_Replace_All()
    {
        return $this->Do_Not_Replace_All;
    }
    /**
     * Set Do_Not_Replace_All value
     * @param bool $do_Not_Replace_All
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
     */
    public function setDo_Not_Replace_All($do_Not_Replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_Not_Replace_All) && !is_bool($do_Not_Replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($do_Not_Replace_All, true), gettype($do_Not_Replace_All)), __LINE__);
        }
        $this->Do_Not_Replace_All = $do_Not_Replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Email_Address_Information_DataType
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
