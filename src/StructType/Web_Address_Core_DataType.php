<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Web_Address_Core_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Invalid HTTP address entered. HTTP addresses must be in one of the following formats: - http://... - https://... | Web Address core data.
 * @subpackage Structs
 */
class Web_Address_Core_DataType extends AbstractStructBase
{
    /**
     * The Web_Address
     * Meta information extracted from the WSDL
     * - documentation: Web address (Example: URL).
     * - maxOccurs: 1
     * @var string
     */
    public $Web_Address;
    /**
     * The Web_Address_Comment
     * Meta information extracted from the WSDL
     * - documentation: Web Address Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Web_Address_Comment;
    /**
     * Constructor method for Web_Address_Core_DataType
     * @uses Web_Address_Core_DataType::setWeb_Address()
     * @uses Web_Address_Core_DataType::setWeb_Address_Comment()
     * @param string $web_Address
     * @param string $web_Address_Comment
     */
    public function __construct($web_Address = null, $web_Address_Comment = null)
    {
        $this
            ->setWeb_Address($web_Address)
            ->setWeb_Address_Comment($web_Address_Comment);
    }
    /**
     * Get Web_Address value
     * @return string|null
     */
    public function getWeb_Address()
    {
        return $this->Web_Address;
    }
    /**
     * Set Web_Address value
     * @param string $web_Address
     * @return \StructType\Web_Address_Core_DataType
     */
    public function setWeb_Address($web_Address = null)
    {
        // validation for constraint: string
        if (!is_null($web_Address) && !is_string($web_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_Address, true), gettype($web_Address)), __LINE__);
        }
        $this->Web_Address = $web_Address;
        return $this;
    }
    /**
     * Get Web_Address_Comment value
     * @return string|null
     */
    public function getWeb_Address_Comment()
    {
        return $this->Web_Address_Comment;
    }
    /**
     * Set Web_Address_Comment value
     * @param string $web_Address_Comment
     * @return \StructType\Web_Address_Core_DataType
     */
    public function setWeb_Address_Comment($web_Address_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($web_Address_Comment) && !is_string($web_Address_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_Address_Comment, true), gettype($web_Address_Comment)), __LINE__);
        }
        $this->Web_Address_Comment = $web_Address_Comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Web_Address_Core_DataType
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
