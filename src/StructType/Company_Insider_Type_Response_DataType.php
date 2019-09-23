<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_Type_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that includes Company Insider reference instance and Company Insider Type data.
 * @subpackage Structs
 */
class Company_Insider_Type_Response_DataType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_TypeType[]
     */
    public $Company_Insider_Type;
    /**
     * Constructor method for Company_Insider_Type_Response_DataType
     * @uses Company_Insider_Type_Response_DataType::setCompany_Insider_Type()
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeType[] $company_Insider_Type
     */
    public function __construct(array $company_Insider_Type = array())
    {
        $this
            ->setCompany_Insider_Type($company_Insider_Type);
    }
    /**
     * Get Company_Insider_Type value
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeType[]|null
     */
    public function getCompany_Insider_Type()
    {
        return $this->Company_Insider_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_TypeForArrayConstraintsFromSetCompany_Insider_Type(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem) {
            // validation for constraint: itemType
            if (!$company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem instanceof \WorkdayWsdl\\StructType\Company_Insider_TypeType) {
                $invalidValues[] = is_object($company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem) ? get_class($company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem) : sprintf('%s(%s)', gettype($company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem), var_export($company_Insider_Type_Response_DataTypeCompany_Insider_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Type property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_TypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Type value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeType[] $company_Insider_Type
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_Response_DataType
     */
    public function setCompany_Insider_Type(array $company_Insider_Type = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_TypeArrayErrorMessage = self::validateCompany_Insider_TypeForArrayConstraintsFromSetCompany_Insider_Type($company_Insider_Type))) {
            throw new \InvalidArgumentException($company_Insider_TypeArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Type = $company_Insider_Type;
        return $this;
    }
    /**
     * Add item to Company_Insider_Type value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeType $item
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_Response_DataType
     */
    public function addToCompany_Insider_Type(\WorkdayWsdl\\StructType\Company_Insider_TypeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Company_Insider_TypeType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Type property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_TypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Type[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_Response_DataType
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
