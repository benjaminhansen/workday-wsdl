<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email_Core_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Email addresses must be in the format of 'xxx@yy.com'. Valid examples: john.doe@aol.com, jane@aol.com. | Email Address core data.
 * @subpackage Structs
 */
class Email_Core_DataType extends AbstractStructBase
{
    /**
     * The Email_Address
     * Meta information extracted from the WSDL
     * - documentation: Email Address.
     * - maxOccurs: 1
     * @var string
     */
    public $Email_Address;
    /**
     * The Email_Comment
     * Meta information extracted from the WSDL
     * - documentation: Email Comment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email_Comment;
    /**
     * Constructor method for Email_Core_DataType
     * @uses Email_Core_DataType::setEmail_Address()
     * @uses Email_Core_DataType::setEmail_Comment()
     * @param string $email_Address
     * @param string $email_Comment
     */
    public function __construct($email_Address = null, $email_Comment = null)
    {
        $this
            ->setEmail_Address($email_Address)
            ->setEmail_Comment($email_Comment);
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
     * @return \WorkdayWsdl\\StructType\Email_Core_DataType
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
     * @return \WorkdayWsdl\\StructType\Email_Core_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Email_Core_DataType
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
