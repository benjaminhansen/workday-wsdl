<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leave_of_Absence_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Leave of Absence Type.
 * @subpackage Structs
 */
class Leave_of_Absence_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Leave_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Leave of Absence Type must exist for the given value of Leave Type Name. | Unique attribute name/description identifying a valid instance of Leave of Absence Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Leave_Type_Name;
    /**
     * Constructor method for Leave_of_Absence_Type_ReferenceType
     * @uses Leave_of_Absence_Type_ReferenceType::setLeave_Type_Name()
     * @param string $leave_Type_Name
     */
    public function __construct($leave_Type_Name = null)
    {
        $this
            ->setLeave_Type_Name($leave_Type_Name);
    }
    /**
     * Get Leave_Type_Name value
     * @return string|null
     */
    public function getLeave_Type_Name()
    {
        return $this->Leave_Type_Name;
    }
    /**
     * Set Leave_Type_Name value
     * @param string $leave_Type_Name
     * @return \StructType\Leave_of_Absence_Type_ReferenceType
     */
    public function setLeave_Type_Name($leave_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($leave_Type_Name) && !is_string($leave_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave_Type_Name, true), gettype($leave_Type_Name)), __LINE__);
        }
        $this->Leave_Type_Name = $leave_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Leave_of_Absence_Type_ReferenceType
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
