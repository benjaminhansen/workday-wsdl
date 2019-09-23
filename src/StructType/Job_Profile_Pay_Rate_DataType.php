<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Pay_Rate_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Job Profile Pay Rate Data
 * @subpackage Structs
 */
class Job_Profile_Pay_Rate_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Country
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Pay_Rate_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter an active Pay Rate Type. | Reference element representing a unique instance of Pay Rate Type.
     * - minOccurs: 0
     * @var \StructType\Pay_Rate_TypeObjectType
     */
    public $Pay_Rate_Type_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the Job Profile Pay Rate for the supplied country reference will be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Profile_Pay_Rate_DataType
     * @uses Job_Profile_Pay_Rate_DataType::setCountry_Reference()
     * @uses Job_Profile_Pay_Rate_DataType::setPay_Rate_Type_Reference()
     * @uses Job_Profile_Pay_Rate_DataType::setDelete()
     * @param \StructType\CountryObjectType $country_Reference
     * @param \StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\CountryObjectType $country_Reference = null, \StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null, $delete = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setPay_Rate_Type_Reference($pay_Rate_Type_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Job_Profile_Pay_Rate_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Pay_Rate_Type_Reference value
     * @return \StructType\Pay_Rate_TypeObjectType|null
     */
    public function getPay_Rate_Type_Reference()
    {
        return $this->Pay_Rate_Type_Reference;
    }
    /**
     * Set Pay_Rate_Type_Reference value
     * @param \StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @return \StructType\Job_Profile_Pay_Rate_DataType
     */
    public function setPay_Rate_Type_Reference(\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null)
    {
        $this->Pay_Rate_Type_Reference = $pay_Rate_Type_Reference;
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
     * @return \StructType\Job_Profile_Pay_Rate_DataType
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
     * @return \StructType\Job_Profile_Pay_Rate_DataType
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
