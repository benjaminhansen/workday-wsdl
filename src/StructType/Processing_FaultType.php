<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Processing_FaultType StructType
 * @subpackage Structs
 */
class Processing_FaultType extends AbstractStructBase
{
    /**
     * The Detail_Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Detail_Message;
    /**
     * Constructor method for Processing_FaultType
     * @uses Processing_FaultType::setDetail_Message()
     * @param string $detail_Message
     */
    public function __construct($detail_Message = null)
    {
        $this
            ->setDetail_Message($detail_Message);
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
     * @return \StructType\Processing_FaultType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Processing_FaultType
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
