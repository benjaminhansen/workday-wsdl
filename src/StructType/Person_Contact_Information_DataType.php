<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Contact_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for tracking a person's contact information.
 * @subpackage Structs
 */
class Person_Contact_Information_DataType extends AbstractStructBase
{
    /**
     * The Person_Address_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element that tracks all addresses.
     * - minOccurs: 0
     * @var \StructType\Person_Address_Information_DataType
     */
    public $Person_Address_Information_Data;
    /**
     * The Person_Phone_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element that tracks all phones.
     * - minOccurs: 0
     * @var \StructType\Person_Phone_Information_DataType
     */
    public $Person_Phone_Information_Data;
    /**
     * The Person_Email_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element that tracks all emails.
     * - minOccurs: 0
     * @var \StructType\Person_Email_Information_DataType
     */
    public $Person_Email_Information_Data;
    /**
     * The Person_Instant_Messenger_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element that tracks all instant messengers.
     * - minOccurs: 0
     * @var \StructType\Person_Instant_Messenger_Information_DataType
     */
    public $Person_Instant_Messenger_Information_Data;
    /**
     * The Person_Web_Address_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element that tracks all web addresses.
     * - minOccurs: 0
     * @var \StructType\Person_Web_Address_Information_DataType
     */
    public $Person_Web_Address_Information_Data;
    /**
     * Constructor method for Person_Contact_Information_DataType
     * @uses Person_Contact_Information_DataType::setPerson_Address_Information_Data()
     * @uses Person_Contact_Information_DataType::setPerson_Phone_Information_Data()
     * @uses Person_Contact_Information_DataType::setPerson_Email_Information_Data()
     * @uses Person_Contact_Information_DataType::setPerson_Instant_Messenger_Information_Data()
     * @uses Person_Contact_Information_DataType::setPerson_Web_Address_Information_Data()
     * @param \StructType\Person_Address_Information_DataType $person_Address_Information_Data
     * @param \StructType\Person_Phone_Information_DataType $person_Phone_Information_Data
     * @param \StructType\Person_Email_Information_DataType $person_Email_Information_Data
     * @param \StructType\Person_Instant_Messenger_Information_DataType $person_Instant_Messenger_Information_Data
     * @param \StructType\Person_Web_Address_Information_DataType $person_Web_Address_Information_Data
     */
    public function __construct(\StructType\Person_Address_Information_DataType $person_Address_Information_Data = null, \StructType\Person_Phone_Information_DataType $person_Phone_Information_Data = null, \StructType\Person_Email_Information_DataType $person_Email_Information_Data = null, \StructType\Person_Instant_Messenger_Information_DataType $person_Instant_Messenger_Information_Data = null, \StructType\Person_Web_Address_Information_DataType $person_Web_Address_Information_Data = null)
    {
        $this
            ->setPerson_Address_Information_Data($person_Address_Information_Data)
            ->setPerson_Phone_Information_Data($person_Phone_Information_Data)
            ->setPerson_Email_Information_Data($person_Email_Information_Data)
            ->setPerson_Instant_Messenger_Information_Data($person_Instant_Messenger_Information_Data)
            ->setPerson_Web_Address_Information_Data($person_Web_Address_Information_Data);
    }
    /**
     * Get Person_Address_Information_Data value
     * @return \StructType\Person_Address_Information_DataType|null
     */
    public function getPerson_Address_Information_Data()
    {
        return $this->Person_Address_Information_Data;
    }
    /**
     * Set Person_Address_Information_Data value
     * @param \StructType\Person_Address_Information_DataType $person_Address_Information_Data
     * @return \StructType\Person_Contact_Information_DataType
     */
    public function setPerson_Address_Information_Data(\StructType\Person_Address_Information_DataType $person_Address_Information_Data = null)
    {
        $this->Person_Address_Information_Data = $person_Address_Information_Data;
        return $this;
    }
    /**
     * Get Person_Phone_Information_Data value
     * @return \StructType\Person_Phone_Information_DataType|null
     */
    public function getPerson_Phone_Information_Data()
    {
        return $this->Person_Phone_Information_Data;
    }
    /**
     * Set Person_Phone_Information_Data value
     * @param \StructType\Person_Phone_Information_DataType $person_Phone_Information_Data
     * @return \StructType\Person_Contact_Information_DataType
     */
    public function setPerson_Phone_Information_Data(\StructType\Person_Phone_Information_DataType $person_Phone_Information_Data = null)
    {
        $this->Person_Phone_Information_Data = $person_Phone_Information_Data;
        return $this;
    }
    /**
     * Get Person_Email_Information_Data value
     * @return \StructType\Person_Email_Information_DataType|null
     */
    public function getPerson_Email_Information_Data()
    {
        return $this->Person_Email_Information_Data;
    }
    /**
     * Set Person_Email_Information_Data value
     * @param \StructType\Person_Email_Information_DataType $person_Email_Information_Data
     * @return \StructType\Person_Contact_Information_DataType
     */
    public function setPerson_Email_Information_Data(\StructType\Person_Email_Information_DataType $person_Email_Information_Data = null)
    {
        $this->Person_Email_Information_Data = $person_Email_Information_Data;
        return $this;
    }
    /**
     * Get Person_Instant_Messenger_Information_Data value
     * @return \StructType\Person_Instant_Messenger_Information_DataType|null
     */
    public function getPerson_Instant_Messenger_Information_Data()
    {
        return $this->Person_Instant_Messenger_Information_Data;
    }
    /**
     * Set Person_Instant_Messenger_Information_Data value
     * @param \StructType\Person_Instant_Messenger_Information_DataType $person_Instant_Messenger_Information_Data
     * @return \StructType\Person_Contact_Information_DataType
     */
    public function setPerson_Instant_Messenger_Information_Data(\StructType\Person_Instant_Messenger_Information_DataType $person_Instant_Messenger_Information_Data = null)
    {
        $this->Person_Instant_Messenger_Information_Data = $person_Instant_Messenger_Information_Data;
        return $this;
    }
    /**
     * Get Person_Web_Address_Information_Data value
     * @return \StructType\Person_Web_Address_Information_DataType|null
     */
    public function getPerson_Web_Address_Information_Data()
    {
        return $this->Person_Web_Address_Information_Data;
    }
    /**
     * Set Person_Web_Address_Information_Data value
     * @param \StructType\Person_Web_Address_Information_DataType $person_Web_Address_Information_Data
     * @return \StructType\Person_Contact_Information_DataType
     */
    public function setPerson_Web_Address_Information_Data(\StructType\Person_Web_Address_Information_DataType $person_Web_Address_Information_Data = null)
    {
        $this->Person_Web_Address_Information_Data = $person_Web_Address_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Contact_Information_DataType
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
