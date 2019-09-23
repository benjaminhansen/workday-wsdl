<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Time_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Position Time Type.
 * @subpackage Structs
 */
class Position_Time_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Time_Type_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Position Time Type must exist for the given value of Time Type Description. | Unique attribute name/description identifying a valid instance of Position Time Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Time_Type_Description;
    /**
     * Constructor method for Position_Time_Type_ReferenceType
     * @uses Position_Time_Type_ReferenceType::setTime_Type_Description()
     * @param string $time_Type_Description
     */
    public function __construct($time_Type_Description = null)
    {
        $this
            ->setTime_Type_Description($time_Type_Description);
    }
    /**
     * Get Time_Type_Description value
     * @return string|null
     */
    public function getTime_Type_Description()
    {
        return $this->Time_Type_Description;
    }
    /**
     * Set Time_Type_Description value
     * @param string $time_Type_Description
     * @return \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType
     */
    public function setTime_Type_Description($time_Type_Description = null)
    {
        // validation for constraint: string
        if (!is_null($time_Type_Description) && !is_string($time_Type_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_Type_Description, true), gettype($time_Type_Description)), __LINE__);
        }
        $this->Time_Type_Description = $time_Type_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType
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
