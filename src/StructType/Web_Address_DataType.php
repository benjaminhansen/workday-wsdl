<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Web_Address_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type and Use For combination must be valid for Web Address. | Encapsulating element for all Web Address data.
 * @subpackage Structs
 */
class Web_Address_DataType extends AbstractStructBase
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
     * - documentation: Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Web_Address_Comment;
    /**
     * The Usage_Data
     * @var \StructType\Communication_Method_Usage_DataType
     */
    public $Usage_Data;
    /**
     * Constructor method for Web_Address_DataType
     * @uses Web_Address_DataType::setWeb_Address()
     * @uses Web_Address_DataType::setWeb_Address_Comment()
     * @uses Web_Address_DataType::setUsage_Data()
     * @param string $web_Address
     * @param string $web_Address_Comment
     * @param \StructType\Communication_Method_Usage_DataType $usage_Data
     */
    public function __construct($web_Address = null, $web_Address_Comment = null, \StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this
            ->setWeb_Address($web_Address)
            ->setWeb_Address_Comment($web_Address_Comment)
            ->setUsage_Data($usage_Data);
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
     * @return \StructType\Web_Address_DataType
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
     * @return \StructType\Web_Address_DataType
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
     * @return \StructType\Web_Address_DataType
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
     * @return \StructType\Web_Address_DataType
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
