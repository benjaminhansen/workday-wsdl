<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ethnicity_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Ethnicity must exist for the given value of Ethnicity Name and Location Context. The Location Context is derived from the person's location country. | Reference element representing a unique instance of Ethnicity.
 * Ethnicity is a singular relationship with Demographic Data as of 8. For certain tenants, especially US Public Sector Higher Education, Ethnicity may be a non-singluar relationship (as of V13).
 * @subpackage Structs
 */
class Ethnicity_ReferenceType extends AbstractStructBase
{
    /**
     * The Ethnicity_Name
     * Meta information extracted from the WSDL
     * - documentation: Along with Organization (defines Regulatory Region), unique attribute name/description identifying a valid instance of Ethnicity.
     * - maxOccurs: 1
     * @var string
     */
    public $Ethnicity_Name;
    /**
     * The Regulatory_Region_Organization_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_ReferenceType
     */
    public $Regulatory_Region_Organization_Reference;
    /**
     * Constructor method for Ethnicity_ReferenceType
     * @uses Ethnicity_ReferenceType::setEthnicity_Name()
     * @uses Ethnicity_ReferenceType::setRegulatory_Region_Organization_Reference()
     * @param string $ethnicity_Name
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference
     */
    public function __construct($ethnicity_Name = null, \WorkdayWsdl\\StructType\Organization_ReferenceType $regulatory_Region_Organization_Reference = null)
    {
        $this
            ->setEthnicity_Name($ethnicity_Name)
            ->setRegulatory_Region_Organization_Reference($regulatory_Region_Organization_Reference);
    }
    /**
     * Get Ethnicity_Name value
     * @return string|null
     */
    public function getEthnicity_Name()
    {
        return $this->Ethnicity_Name;
    }
    /**
     * Set Ethnicity_Name value
     * @param string $ethnicity_Name
     * @return \WorkdayWsdl\\StructType\Ethnicity_ReferenceType
     */
    public function setEthnicity_Name($ethnicity_Name = null)
    {
        // validation for constraint: string
        if (!is_null($ethnicity_Name) && !is_string($ethnicity_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ethnicity_Name, true), gettype($ethnicity_Name)), __LINE__);
        }
        $this->Ethnicity_Name = $ethnicity_Name;
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
     * @return \WorkdayWsdl\\StructType\Ethnicity_ReferenceType
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
     * @return \WorkdayWsdl\\StructType\Ethnicity_ReferenceType
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
