<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Emergency_Contact_Priority_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Emergency Contact Priority.
 * @subpackage Structs
 */
class Emergency_Contact_Priority_ReferenceType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_Priority
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Emergency Contact Priority.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Emergency_Contact_Priority;
    /**
     * Constructor method for Emergency_Contact_Priority_ReferenceType
     * @uses Emergency_Contact_Priority_ReferenceType::setEmergency_Contact_Priority()
     * @param string $emergency_Contact_Priority
     */
    public function __construct($emergency_Contact_Priority = null)
    {
        $this
            ->setEmergency_Contact_Priority($emergency_Contact_Priority);
    }
    /**
     * Get Emergency_Contact_Priority value
     * @return string|null
     */
    public function getEmergency_Contact_Priority()
    {
        return $this->Emergency_Contact_Priority;
    }
    /**
     * Set Emergency_Contact_Priority value
     * @param string $emergency_Contact_Priority
     * @return \StructType\Emergency_Contact_Priority_ReferenceType
     */
    public function setEmergency_Contact_Priority($emergency_Contact_Priority = null)
    {
        // validation for constraint: string
        if (!is_null($emergency_Contact_Priority) && !is_string($emergency_Contact_Priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergency_Contact_Priority, true), gettype($emergency_Contact_Priority)), __LINE__);
        }
        $this->Emergency_Contact_Priority = $emergency_Contact_Priority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Emergency_Contact_Priority_ReferenceType
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
