<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Company_Insider_Type_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing reference instance for a Company Insider Type
 * @subpackage Structs
 */
class Company_Insider_Type_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Company_Insider_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a company insider type.
     * - maxOccurs: unbounded
     * @var \StructType\Company_Insider_TypeObjectType[]
     */
    public $Company_Insider_Type_Reference;
    /**
     * Constructor method for Company_Insider_Type_Request_ReferencesType
     * @uses Company_Insider_Type_Request_ReferencesType::setCompany_Insider_Type_Reference()
     * @param \StructType\Company_Insider_TypeObjectType[] $company_Insider_Type_Reference
     */
    public function __construct(array $company_Insider_Type_Reference = array())
    {
        $this
            ->setCompany_Insider_Type_Reference($company_Insider_Type_Reference);
    }
    /**
     * Get Company_Insider_Type_Reference value
     * @return \StructType\Company_Insider_TypeObjectType[]|null
     */
    public function getCompany_Insider_Type_Reference()
    {
        return $this->Company_Insider_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_Type_ReferenceForArrayConstraintsFromSetCompany_Insider_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem instanceof \StructType\Company_Insider_TypeObjectType) {
                $invalidValues[] = is_object($company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem) ? get_class($company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem) : sprintf('%s(%s)', gettype($company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem), var_export($company_Insider_Type_Request_ReferencesTypeCompany_Insider_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Type_Reference property can only contain items of type \StructType\Company_Insider_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Company_Insider_TypeObjectType[] $company_Insider_Type_Reference
     * @return \StructType\Company_Insider_Type_Request_ReferencesType
     */
    public function setCompany_Insider_Type_Reference(array $company_Insider_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_Type_ReferenceArrayErrorMessage = self::validateCompany_Insider_Type_ReferenceForArrayConstraintsFromSetCompany_Insider_Type_Reference($company_Insider_Type_Reference))) {
            throw new \InvalidArgumentException($company_Insider_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Type_Reference = $company_Insider_Type_Reference;
        return $this;
    }
    /**
     * Add item to Company_Insider_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Company_Insider_TypeObjectType $item
     * @return \StructType\Company_Insider_Type_Request_ReferencesType
     */
    public function addToCompany_Insider_Type_Reference(\StructType\Company_Insider_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Company_Insider_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Type_Reference property can only contain items of type \StructType\Company_Insider_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Company_Insider_Type_Request_ReferencesType
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
