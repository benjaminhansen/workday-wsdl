<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Authority_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Authority must exist for the given value of Authority Name and the derived Location Context. For Employees and Contingent Workers, the location context comes from their position's location. For Applicants, it
 * comes from the first position in the position reference. | Reference element representing a unique instance of Authority.
 * @subpackage Structs
 */
class Authority_ReferenceType extends AbstractStructBase
{
    /**
     * The Authority_Name
     * Meta information extracted from the WSDL
     * - documentation: Along with Organization (defines Regulatory Region), unique attribute name/description identifying a valid instance of Authority.
     * - maxOccurs: 1
     * @var string
     */
    public $Authority_Name;
    /**
     * The Regulatory_Region_Organization_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_ReferenceType
     */
    public $Regulatory_Region_Organization_Reference;
    /**
     * Constructor method for Authority_ReferenceType
     * @uses Authority_ReferenceType::setAuthority_Name()
     * @uses Authority_ReferenceType::setRegulatory_Region_Organization_Reference()
     * @param string $authority_Name
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference
     */
    public function __construct($authority_Name = null, \WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference = null)
    {
        $this
            ->setAuthority_Name($authority_Name)
            ->setRegulatory_Region_Organization_Reference($regulatory_Region_Organization_Reference);
    }
    /**
     * Get Authority_Name value
     * @return string|null
     */
    public function getAuthority_Name()
    {
        return $this->Authority_Name;
    }
    /**
     * Set Authority_Name value
     * @param string $authority_Name
     * @return \WorkdayWsdl\\StructType\Authority_ReferenceType
     */
    public function setAuthority_Name($authority_Name = null)
    {
        // validation for constraint: string
        if (!is_null($authority_Name) && !is_string($authority_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authority_Name, true), gettype($authority_Name)), __LINE__);
        }
        $this->Authority_Name = $authority_Name;
        return $this;
    }
    /**
     * Get Regulatory_Region_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_ReferenceType|null
     */
    public function getRegulatory_Region_Organization_Reference()
    {
        return $this->Regulatory_Region_Organization_Reference;
    }
    /**
     * Set Regulatory_Region_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Authority_ReferenceType
     */
    public function setRegulatory_Region_Organization_Reference(\WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference = null)
    {
        $this->Regulatory_Region_Organization_Reference = $regulatory_Region_Organization_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Authority_ReferenceType
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
