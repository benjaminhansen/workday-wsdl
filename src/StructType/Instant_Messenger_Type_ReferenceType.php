<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instant_Messenger_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Instant Messenger Type.
 * @subpackage Structs
 */
class Instant_Messenger_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Instant_Messenger_Provider
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Instant Messenger Type must exist for the given value of Instant Messenger Provider. | Unique attribute name/description identifying a valid instance of Instant Messenger Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Instant_Messenger_Provider;
    /**
     * Constructor method for Instant_Messenger_Type_ReferenceType
     * @uses Instant_Messenger_Type_ReferenceType::setInstant_Messenger_Provider()
     * @param string $instant_Messenger_Provider
     */
    public function __construct($instant_Messenger_Provider = null)
    {
        $this
            ->setInstant_Messenger_Provider($instant_Messenger_Provider);
    }
    /**
     * Get Instant_Messenger_Provider value
     * @return string|null
     */
    public function getInstant_Messenger_Provider()
    {
        return $this->Instant_Messenger_Provider;
    }
    /**
     * Set Instant_Messenger_Provider value
     * @param string $instant_Messenger_Provider
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Type_ReferenceType
     */
    public function setInstant_Messenger_Provider($instant_Messenger_Provider = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_Provider) && !is_string($instant_Messenger_Provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_Provider, true), gettype($instant_Messenger_Provider)), __LINE__);
        }
        $this->Instant_Messenger_Provider = $instant_Messenger_Provider;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Type_ReferenceType
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
