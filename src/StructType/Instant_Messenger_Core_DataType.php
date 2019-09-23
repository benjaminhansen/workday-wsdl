<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instant_Messenger_Core_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Instant Messenger core data.
 * @subpackage Structs
 */
class Instant_Messenger_Core_DataType extends AbstractStructBase
{
    /**
     * The Instant_Messenger_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the instant messenger type.
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType
     */
    public $Instant_Messenger_Type_Reference;
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
     * - documentation: Instant messenger comment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instant_Messenger_Comment;
    /**
     * Constructor method for Instant_Messenger_Core_DataType
     * @uses Instant_Messenger_Core_DataType::setInstant_Messenger_Type_Reference()
     * @uses Instant_Messenger_Core_DataType::setInstant_Messenger_Address()
     * @uses Instant_Messenger_Core_DataType::setInstant_Messenger_Comment()
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference
     * @param string $instant_Messenger_Address
     * @param string $instant_Messenger_Comment
     */
    public function __construct(\WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference = null, $instant_Messenger_Address = null, $instant_Messenger_Comment = null)
    {
        $this
            ->setInstant_Messenger_Type_Reference($instant_Messenger_Type_Reference)
            ->setInstant_Messenger_Address($instant_Messenger_Address)
            ->setInstant_Messenger_Comment($instant_Messenger_Comment);
    }
    /**
     * Get Instant_Messenger_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType|null
     */
    public function getInstant_Messenger_Type_Reference()
    {
        return $this->Instant_Messenger_Type_Reference;
    }
    /**
     * Set Instant_Messenger_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType
     */
    public function setInstant_Messenger_Type_Reference(\WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference = null)
    {
        $this->Instant_Messenger_Type_Reference = $instant_Messenger_Type_Reference;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType
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
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType
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
