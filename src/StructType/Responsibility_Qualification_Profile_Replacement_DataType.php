<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Responsibility_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement Element containing Responsibility Qualifications for the Job Profile.When updating a Job Profile, all Responsibilities for the Job Profile will be replaced by the data in being submitted. If no data is submitted, then the
 * existing Responsibilities are not changed.
 * @subpackage Structs
 */
class Responsibility_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Responsibility_Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the Responsibility.
     * - base: xsd:string
     * - maxOccurs: 1
     * @var string
     */
    public $Responsibility_Description;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Responsibility is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Responsibility_Qualification_Profile_Replacement_DataType
     * @uses Responsibility_Qualification_Profile_Replacement_DataType::setResponsibility_Description()
     * @uses Responsibility_Qualification_Profile_Replacement_DataType::setRequired()
     * @param string $responsibility_Description
     * @param bool $required
     */
    public function __construct($responsibility_Description = null, $required = null)
    {
        $this
            ->setResponsibility_Description($responsibility_Description)
            ->setRequired($required);
    }
    /**
     * Get Responsibility_Description value
     * @return string|null
     */
    public function getResponsibility_Description()
    {
        return $this->Responsibility_Description;
    }
    /**
     * Set Responsibility_Description value
     * @param string $responsibility_Description
     * @return \StructType\Responsibility_Qualification_Profile_Replacement_DataType
     */
    public function setResponsibility_Description($responsibility_Description = null)
    {
        // validation for constraint: string
        if (!is_null($responsibility_Description) && !is_string($responsibility_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responsibility_Description, true), gettype($responsibility_Description)), __LINE__);
        }
        $this->Responsibility_Description = $responsibility_Description;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \StructType\Responsibility_Qualification_Profile_Replacement_DataType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Responsibility_Qualification_Profile_Replacement_DataType
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
