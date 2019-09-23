<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Company_Insider_Type_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Put Company Insider Type Response Data
 * @subpackage Structs
 */
class Put_Company_Insider_Type_ResponseType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a company insider type.
     * - minOccurs: 0
     * @var \StructType\Company_Insider_TypeObjectType
     */
    public $Company_Insider_Type_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Company_Insider_Type_ResponseType
     * @uses Put_Company_Insider_Type_ResponseType::setCompany_Insider_Type_Reference()
     * @uses Put_Company_Insider_Type_ResponseType::setVersion()
     * @param \StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference
     * @param string $version
     */
    public function __construct(\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null, $version = null)
    {
        $this
            ->setCompany_Insider_Type_Reference($company_Insider_Type_Reference)
            ->setVersion($version);
    }
    /**
     * Get Company_Insider_Type_Reference value
     * @return \StructType\Company_Insider_TypeObjectType|null
     */
    public function getCompany_Insider_Type_Reference()
    {
        return $this->Company_Insider_Type_Reference;
    }
    /**
     * Set Company_Insider_Type_Reference value
     * @param \StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference
     * @return \StructType\Put_Company_Insider_Type_ResponseType
     */
    public function setCompany_Insider_Type_Reference(\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null)
    {
        $this->Company_Insider_Type_Reference = $company_Insider_Type_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Company_Insider_Type_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Company_Insider_Type_ResponseType
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
