<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Company Insider Type must exist for the given value of Company Insider Type Name. | Reference element representing a unique instance of Company Insider Type.
 * @subpackage Structs
 */
class Company_Insider_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Company Insider Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Company_Insider_Type_Name;
    /**
     * Constructor method for Company_Insider_Type_ReferenceType
     * @uses Company_Insider_Type_ReferenceType::setCompany_Insider_Type_Name()
     * @param string $company_Insider_Type_Name
     */
    public function __construct($company_Insider_Type_Name = null)
    {
        $this
            ->setCompany_Insider_Type_Name($company_Insider_Type_Name);
    }
    /**
     * Get Company_Insider_Type_Name value
     * @return string|null
     */
    public function getCompany_Insider_Type_Name()
    {
        return $this->Company_Insider_Type_Name;
    }
    /**
     * Set Company_Insider_Type_Name value
     * @param string $company_Insider_Type_Name
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType
     */
    public function setCompany_Insider_Type_Name($company_Insider_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($company_Insider_Type_Name) && !is_string($company_Insider_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company_Insider_Type_Name, true), gettype($company_Insider_Type_Name)), __LINE__);
        }
        $this->Company_Insider_Type_Name = $company_Insider_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType
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
