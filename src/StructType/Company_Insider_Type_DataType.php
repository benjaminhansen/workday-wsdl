<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_Type_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing all company insider type data.
 * @subpackage Structs
 */
class Company_Insider_Type_DataType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_ID
     * Meta information extracted from the WSDL
     * - documentation: Company Insider Type ID. This is the unique identifier for a company insider type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company_Insider_Type_ID;
    /**
     * The Company_Insider_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Company Insider Type Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company_Insider_Type_Name;
    /**
     * The Company_Insider_Type_Description
     * Meta information extracted from the WSDL
     * - documentation: Company Insider Type description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company_Insider_Type_Description;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean that indicates if a Company Insider Type is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Company_Insider_Type_DataType
     * @uses Company_Insider_Type_DataType::setCompany_Insider_Type_ID()
     * @uses Company_Insider_Type_DataType::setCompany_Insider_Type_Name()
     * @uses Company_Insider_Type_DataType::setCompany_Insider_Type_Description()
     * @uses Company_Insider_Type_DataType::setInactive()
     * @param string $company_Insider_Type_ID
     * @param string $company_Insider_Type_Name
     * @param string $company_Insider_Type_Description
     * @param bool $inactive
     */
    public function __construct($company_Insider_Type_ID = null, $company_Insider_Type_Name = null, $company_Insider_Type_Description = null, $inactive = null)
    {
        $this
            ->setCompany_Insider_Type_ID($company_Insider_Type_ID)
            ->setCompany_Insider_Type_Name($company_Insider_Type_Name)
            ->setCompany_Insider_Type_Description($company_Insider_Type_Description)
            ->setInactive($inactive);
    }
    /**
     * Get Company_Insider_Type_ID value
     * @return string|null
     */
    public function getCompany_Insider_Type_ID()
    {
        return $this->Company_Insider_Type_ID;
    }
    /**
     * Set Company_Insider_Type_ID value
     * @param string $company_Insider_Type_ID
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType
     */
    public function setCompany_Insider_Type_ID($company_Insider_Type_ID = null)
    {
        // validation for constraint: string
        if (!is_null($company_Insider_Type_ID) && !is_string($company_Insider_Type_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company_Insider_Type_ID, true), gettype($company_Insider_Type_ID)), __LINE__);
        }
        $this->Company_Insider_Type_ID = $company_Insider_Type_ID;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType
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
     * Get Company_Insider_Type_Description value
     * @return string|null
     */
    public function getCompany_Insider_Type_Description()
    {
        return $this->Company_Insider_Type_Description;
    }
    /**
     * Set Company_Insider_Type_Description value
     * @param string $company_Insider_Type_Description
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType
     */
    public function setCompany_Insider_Type_Description($company_Insider_Type_Description = null)
    {
        // validation for constraint: string
        if (!is_null($company_Insider_Type_Description) && !is_string($company_Insider_Type_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company_Insider_Type_Description, true), gettype($company_Insider_Type_Description)), __LINE__);
        }
        $this->Company_Insider_Type_Description = $company_Insider_Type_Description;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType
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
