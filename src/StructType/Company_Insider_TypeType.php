<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_TypeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing company insider type reference and data.
 * @subpackage Structs
 */
class Company_Insider_TypeType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a company insider type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType
     */
    public $Company_Insider_Type_Reference;
    /**
     * The Company_Insider_Type_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_Type_DataType[]
     */
    public $Company_Insider_Type_Data;
    /**
     * Constructor method for Company_Insider_TypeType
     * @uses Company_Insider_TypeType::setCompany_Insider_Type_Reference()
     * @uses Company_Insider_TypeType::setCompany_Insider_Type_Data()
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_DataType[] $company_Insider_Type_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null, array $company_Insider_Type_Data = array())
    {
        $this
            ->setCompany_Insider_Type_Reference($company_Insider_Type_Reference)
            ->setCompany_Insider_Type_Data($company_Insider_Type_Data);
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
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeType
     */
    public function setCompany_Insider_Type_Reference(\WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $company_Insider_Type_Reference = null)
    {
        $this->Company_Insider_Type_Reference = $company_Insider_Type_Reference;
        return $this;
    }
    /**
     * Get Company_Insider_Type_Data value
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_DataType[]|null
     */
    public function getCompany_Insider_Type_Data()
    {
        return $this->Company_Insider_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_Type_DataForArrayConstraintsFromSetCompany_Insider_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $company_Insider_TypeTypeCompany_Insider_Type_DataItem) {
            // validation for constraint: itemType
            if (!$company_Insider_TypeTypeCompany_Insider_Type_DataItem instanceof \WorkdayWsdl\\StructType\Company_Insider_Type_DataType) {
                $invalidValues[] = is_object($company_Insider_TypeTypeCompany_Insider_Type_DataItem) ? get_class($company_Insider_TypeTypeCompany_Insider_Type_DataItem) : sprintf('%s(%s)', gettype($company_Insider_TypeTypeCompany_Insider_Type_DataItem), var_export($company_Insider_TypeTypeCompany_Insider_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_DataType[] $company_Insider_Type_Data
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeType
     */
    public function setCompany_Insider_Type_Data(array $company_Insider_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_Type_DataArrayErrorMessage = self::validateCompany_Insider_Type_DataForArrayConstraintsFromSetCompany_Insider_Type_Data($company_Insider_Type_Data))) {
            throw new \InvalidArgumentException($company_Insider_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Type_Data = $company_Insider_Type_Data;
        return $this;
    }
    /**
     * Add item to Company_Insider_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_DataType $item
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeType
     */
    public function addToCompany_Insider_Type_Data(\WorkdayWsdl\\StructType\Company_Insider_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Company_Insider_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Type_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeType
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
