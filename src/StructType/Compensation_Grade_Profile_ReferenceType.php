<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Grade_Profile_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Profile within the Compensation Grade to assign. Does not default for Request Compensation Change.
 * @subpackage Structs
 */
class Compensation_Grade_Profile_ReferenceType extends AbstractStructBase
{
    /**
     * The Compensation_Profile_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Grade Profile must exist for the given value of Compensation Profile Name and Compensation Grade Reference. | Along with Compensation Grade Reference, unique attribute name/description identifying a
     * valid instance of Compensation Grade Profile.
     * - maxOccurs: 1
     * @var string
     */
    public $Compensation_Profile_Name;
    /**
     * The Compensation_Grade_Reference
     * @var \StructType\Compensation_Grade_ReferenceType
     */
    public $Compensation_Grade_Reference;
    /**
     * Constructor method for Compensation_Grade_Profile_ReferenceType
     * @uses Compensation_Grade_Profile_ReferenceType::setCompensation_Profile_Name()
     * @uses Compensation_Grade_Profile_ReferenceType::setCompensation_Grade_Reference()
     * @param string $compensation_Profile_Name
     * @param \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference
     */
    public function __construct($compensation_Profile_Name = null, \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference = null)
    {
        $this
            ->setCompensation_Profile_Name($compensation_Profile_Name)
            ->setCompensation_Grade_Reference($compensation_Grade_Reference);
    }
    /**
     * Get Compensation_Profile_Name value
     * @return string|null
     */
    public function getCompensation_Profile_Name()
    {
        return $this->Compensation_Profile_Name;
    }
    /**
     * Set Compensation_Profile_Name value
     * @param string $compensation_Profile_Name
     * @return \StructType\Compensation_Grade_Profile_ReferenceType
     */
    public function setCompensation_Profile_Name($compensation_Profile_Name = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Profile_Name) && !is_string($compensation_Profile_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Profile_Name, true), gettype($compensation_Profile_Name)), __LINE__);
        }
        $this->Compensation_Profile_Name = $compensation_Profile_Name;
        return $this;
    }
    /**
     * Get Compensation_Grade_Reference value
     * @return \StructType\Compensation_Grade_ReferenceType|null
     */
    public function getCompensation_Grade_Reference()
    {
        return $this->Compensation_Grade_Reference;
    }
    /**
     * Set Compensation_Grade_Reference value
     * @param \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference
     * @return \StructType\Compensation_Grade_Profile_ReferenceType
     */
    public function setCompensation_Grade_Reference(\StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference = null)
    {
        $this->Compensation_Grade_Reference = $compensation_Grade_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Compensation_Grade_Profile_ReferenceType
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
