<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone_Device_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Phone Device Type.
 * @subpackage Structs
 */
class Phone_Device_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Phone_Device_Type_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Phone Device Type must exist for the given value of Phone Device Type Description. | Unique attribute name/description identifying a valid instance of Phone Device Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Phone_Device_Type_Description;
    /**
     * Constructor method for Phone_Device_Type_ReferenceType
     * @uses Phone_Device_Type_ReferenceType::setPhone_Device_Type_Description()
     * @param string $phone_Device_Type_Description
     */
    public function __construct($phone_Device_Type_Description = null)
    {
        $this
            ->setPhone_Device_Type_Description($phone_Device_Type_Description);
    }
    /**
     * Get Phone_Device_Type_Description value
     * @return string|null
     */
    public function getPhone_Device_Type_Description()
    {
        return $this->Phone_Device_Type_Description;
    }
    /**
     * Set Phone_Device_Type_Description value
     * @param string $phone_Device_Type_Description
     * @return \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType
     */
    public function setPhone_Device_Type_Description($phone_Device_Type_Description = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Device_Type_Description) && !is_string($phone_Device_Type_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Device_Type_Description, true), gettype($phone_Device_Type_Description)), __LINE__);
        }
        $this->Phone_Device_Type_Description = $phone_Device_Type_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType
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
