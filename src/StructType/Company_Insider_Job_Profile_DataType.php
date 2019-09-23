<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_Job_Profile_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Company Insider Type data for a job profile.
 * @subpackage Structs
 */
class Company_Insider_Job_Profile_DataType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a company insider type.
     * @var \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType
     */
    public $Company_Insider_Type_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the Company Insider Type will be removed from this Job Profile as of the effective date.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Company_Insider_Job_Profile_DataType
     * @uses Company_Insider_Job_Profile_DataType::setCompany_Insider_Type_Reference()
     * @uses Company_Insider_Job_Profile_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null, $delete = null)
    {
        $this
            ->setCompany_Insider_Type_Reference($company_Insider_Type_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Company_Insider_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType|null
     */
    public function getCompany_Insider_Type_Reference()
    {
        return $this->Company_Insider_Type_Reference;
    }
    /**
     * Set Company_Insider_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference
     * @return \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType
     */
    public function setCompany_Insider_Type_Reference(\WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null)
    {
        $this->Company_Insider_Type_Reference = $company_Insider_Type_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType
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
