<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instant_Messenger_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type and Use For combination must be valid for Instant Messenger Address. | Encapsulating element for all Instant Messenger data.
 * @subpackage Structs
 */
class Instant_Messenger_DataType extends AbstractStructBase
{
    /**
     * The Instant_Messenger_Address
     * Meta information extracted from the WSDL
     * - documentation: Instant Messenger Address.
     * - maxOccurs: 1
     * @var string
     */
    public $Instant_Messenger_Address;
    /**
     * The Instant_Messenger_Comment
     * Meta information extracted from the WSDL
     * - documentation: Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instant_Messenger_Comment;
    /**
     * The Instant_Messenger_Type_Reference
     * @var \StructType\Instant_Messenger_Type_ReferenceType
     */
    public $Instant_Messenger_Type_Reference;
    /**
     * The Usage_Data
     * @var \StructType\Communication_Method_Usage_DataType
     */
    public $Usage_Data;
    /**
     * Constructor method for Instant_Messenger_DataType
     * @uses Instant_Messenger_DataType::setInstant_Messenger_Address()
     * @uses Instant_Messenger_DataType::setInstant_Messenger_Comment()
     * @uses Instant_Messenger_DataType::setInstant_Messenger_Type_Reference()
     * @uses Instant_Messenger_DataType::setUsage_Data()
     * @param string $instant_Messenger_Address
     * @param string $instant_Messenger_Comment
     * @param \StructType\Instant_Messenger_Type_ReferenceType $instant_Messenger_Type_Reference
     * @param \StructType\Communication_Method_Usage_DataType $usage_Data
     */
    public function __construct($instant_Messenger_Address = null, $instant_Messenger_Comment = null, \StructType\Instant_Messenger_Type_ReferenceType $instant_Messenger_Type_Reference = null, \StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this
            ->setInstant_Messenger_Address($instant_Messenger_Address)
            ->setInstant_Messenger_Comment($instant_Messenger_Comment)
            ->setInstant_Messenger_Type_Reference($instant_Messenger_Type_Reference)
            ->setUsage_Data($usage_Data);
    }
    /**
     * Get Instant_Messenger_Address value
     * @return string|null
     */
    public function getInstant_Messenger_Address()
    {
        return $this->Instant_Messenger_Address;
    }
    /**
     * Set Instant_Messenger_Address value
     * @param string $instant_Messenger_Address
     * @return \StructType\Instant_Messenger_DataType
     */
    public function setInstant_Messenger_Address($instant_Messenger_Address = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_Address) && !is_string($instant_Messenger_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_Address, true), gettype($instant_Messenger_Address)), __LINE__);
        }
        $this->Instant_Messenger_Address = $instant_Messenger_Address;
        return $this;
    }
    /**
     * Get Instant_Messenger_Comment value
     * @return string|null
     */
    public function getInstant_Messenger_Comment()
    {
        return $this->Instant_Messenger_Comment;
    }
    /**
     * Set Instant_Messenger_Comment value
     * @param string $instant_Messenger_Comment
     * @return \StructType\Instant_Messenger_DataType
     */
    public function setInstant_Messenger_Comment($instant_Messenger_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_Comment) && !is_string($instant_Messenger_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_Comment, true), gettype($instant_Messenger_Comment)), __LINE__);
        }
        $this->Instant_Messenger_Comment = $instant_Messenger_Comment;
        return $this;
    }
    /**
     * Get Instant_Messenger_Type_Reference value
     * @return \StructType\Instant_Messenger_Type_ReferenceType|null
     */
    public function getInstant_Messenger_Type_Reference()
    {
        return $this->Instant_Messenger_Type_Reference;
    }
    /**
     * Set Instant_Messenger_Type_Reference value
     * @param \StructType\Instant_Messenger_Type_ReferenceType $instant_Messenger_Type_Reference
     * @return \StructType\Instant_Messenger_DataType
     */
    public function setInstant_Messenger_Type_Reference(\StructType\Instant_Messenger_Type_ReferenceType $instant_Messenger_Type_Reference = null)
    {
        $this->Instant_Messenger_Type_Reference = $instant_Messenger_Type_Reference;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_DataType|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * Set Usage_Data value
     * @param \StructType\Communication_Method_Usage_DataType $usage_Data
     * @return \StructType\Instant_Messenger_DataType
     */
    public function setUsage_Data(\StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Instant_Messenger_DataType
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
