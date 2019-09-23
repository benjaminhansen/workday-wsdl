<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Validation_ErrorType StructType
 * @subpackage Structs
 */
class Validation_ErrorType extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Detail_Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Detail_Message;
    /**
     * The Xpath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Xpath;
    /**
     * Constructor method for Validation_ErrorType
     * @uses Validation_ErrorType::setMessage()
     * @uses Validation_ErrorType::setDetail_Message()
     * @uses Validation_ErrorType::setXpath()
     * @param string $message
     * @param string $detail_Message
     * @param string $xpath
     */
    public function __construct($message = null, $detail_Message = null, $xpath = null)
    {
        $this
            ->setMessage($message)
            ->setDetail_Message($detail_Message)
            ->setXpath($xpath);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\Validation_ErrorType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Detail_Message value
     * @return string|null
     */
    public function getDetail_Message()
    {
        return $this->Detail_Message;
    }
    /**
     * Set Detail_Message value
     * @param string $detail_Message
     * @return \StructType\Validation_ErrorType
     */
    public function setDetail_Message($detail_Message = null)
    {
        // validation for constraint: string
        if (!is_null($detail_Message) && !is_string($detail_Message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detail_Message, true), gettype($detail_Message)), __LINE__);
        }
        $this->Detail_Message = $detail_Message;
        return $this;
    }
    /**
     * Get Xpath value
     * @return string|null
     */
    public function getXpath()
    {
        return $this->Xpath;
    }
    /**
     * Set Xpath value
     * @param string $xpath
     * @return \StructType\Validation_ErrorType
     */
    public function setXpath($xpath = null)
    {
        // validation for constraint: string
        if (!is_null($xpath) && !is_string($xpath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xpath, true), gettype($xpath)), __LINE__);
        }
        $this->Xpath = $xpath;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Validation_ErrorType
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
