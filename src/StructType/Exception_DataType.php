<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Exception_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Exception (Errors and Warning) associated with the transaction.
 * @subpackage Structs
 */
class Exception_DataType extends AbstractStructBase
{
    /**
     * The Classification
     * Meta information extracted from the WSDL
     * - documentation: Exception Classification (Error or Warning)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Classification;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Exception Detail
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * Constructor method for Exception_DataType
     * @uses Exception_DataType::setClassification()
     * @uses Exception_DataType::setMessage()
     * @param string $classification
     * @param string $message
     */
    public function __construct($classification = null, $message = null)
    {
        $this
            ->setClassification($classification)
            ->setMessage($message);
    }
    /**
     * Get Classification value
     * @return string|null
     */
    public function getClassification()
    {
        return $this->Classification;
    }
    /**
     * Set Classification value
     * @param string $classification
     * @return \WorkdayWsdl\\StructType\Exception_DataType
     */
    public function setClassification($classification = null)
    {
        // validation for constraint: string
        if (!is_null($classification) && !is_string($classification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classification, true), gettype($classification)), __LINE__);
        }
        $this->Classification = $classification;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Exception_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Exception_DataType
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
