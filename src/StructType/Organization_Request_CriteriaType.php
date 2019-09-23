<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains criteria to filter the Organizations returned.
 * @subpackage Structs
 */
class Organization_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: This element allows you to subset the Organizations returned by type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_TypeObjectType[]
     */
    public $Organization_Type_Reference;
    /**
     * The Include_Inactive
     * Meta information extracted from the WSDL
     * - documentation: Set this attributes to true to include Inactive Organizations in your results. Default is not to include Inactive Organizations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Inactive;
    /**
     * The Transaction_Log_Criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType[]
     */
    public $Transaction_Log_Criteria;
    /**
     * The Field_And_Parameter_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType
     */
    public $Field_And_Parameter_Criteria_Data;
    /**
     * Constructor method for Organization_Request_CriteriaType
     * @uses Organization_Request_CriteriaType::setOrganization_Type_Reference()
     * @uses Organization_Request_CriteriaType::setInclude_Inactive()
     * @uses Organization_Request_CriteriaType::setTransaction_Log_Criteria()
     * @uses Organization_Request_CriteriaType::setField_And_Parameter_Criteria_Data()
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType[] $organization_Type_Reference
     * @param bool $include_Inactive
     * @param \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType[] $transaction_Log_Criteria
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     */
    public function __construct(array $organization_Type_Reference = array(), $include_Inactive = null, array $transaction_Log_Criteria = array(), \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setInclude_Inactive($include_Inactive)
            ->setTransaction_Log_Criteria($transaction_Log_Criteria)
            ->setField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data);
    }
    /**
     * Get Organization_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_TypeObjectType[]|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Type_ReferenceForArrayConstraintsFromSetOrganization_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Request_CriteriaTypeOrganization_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Request_CriteriaTypeOrganization_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Organization_TypeObjectType) {
                $invalidValues[] = is_object($organization_Request_CriteriaTypeOrganization_Type_ReferenceItem) ? get_class($organization_Request_CriteriaTypeOrganization_Type_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Request_CriteriaTypeOrganization_Type_ReferenceItem), var_export($organization_Request_CriteriaTypeOrganization_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Organization_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType[] $organization_Type_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function setOrganization_Type_Reference(array $organization_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Type_ReferenceArrayErrorMessage = self::validateOrganization_Type_ReferenceForArrayConstraintsFromSetOrganization_Type_Reference($organization_Type_Reference))) {
            throw new \InvalidArgumentException($organization_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function addToOrganization_Type_Reference(\WorkdayWsdl\\StructType\Organization_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Organization_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Include_Inactive value
     * @return bool|null
     */
    public function getInclude_Inactive()
    {
        return $this->Include_Inactive;
    }
    /**
     * Set Include_Inactive value
     * @param bool $include_Inactive
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function setInclude_Inactive($include_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Inactive) && !is_bool($include_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Inactive, true), gettype($include_Inactive)), __LINE__);
        }
        $this->Include_Inactive = $include_Inactive;
        return $this;
    }
    /**
     * Get Transaction_Log_Criteria value
     * @return \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType[]|null
     */
    public function getTransaction_Log_Criteria()
    {
        return $this->Transaction_Log_Criteria;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Log_Criteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Log_Criteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Log_CriteriaForArrayConstraintsFromSetTransaction_Log_Criteria(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Request_CriteriaTypeTransaction_Log_CriteriaItem) {
            // validation for constraint: itemType
            if (!$organization_Request_CriteriaTypeTransaction_Log_CriteriaItem instanceof \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType) {
                $invalidValues[] = is_object($organization_Request_CriteriaTypeTransaction_Log_CriteriaItem) ? get_class($organization_Request_CriteriaTypeTransaction_Log_CriteriaItem) : sprintf('%s(%s)', gettype($organization_Request_CriteriaTypeTransaction_Log_CriteriaItem), var_export($organization_Request_CriteriaTypeTransaction_Log_CriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Log_Criteria property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Log_Criteria value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType[] $transaction_Log_Criteria
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function setTransaction_Log_Criteria(array $transaction_Log_Criteria = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Log_CriteriaArrayErrorMessage = self::validateTransaction_Log_CriteriaForArrayConstraintsFromSetTransaction_Log_Criteria($transaction_Log_Criteria))) {
            throw new \InvalidArgumentException($transaction_Log_CriteriaArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Log_Criteria = $transaction_Log_Criteria;
        return $this;
    }
    /**
     * Add item to Transaction_Log_Criteria value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType $item
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function addToTransaction_Log_Criteria(\WorkdayWsdl\\StructType\Transaction_Log_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Log_Criteria property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Log_Criteria[] = $item;
        return $this;
    }
    /**
     * Get Field_And_Parameter_Criteria_Data value
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType|null
     */
    public function getField_And_Parameter_Criteria_Data()
    {
        return $this->Field_And_Parameter_Criteria_Data;
    }
    /**
     * Set Field_And_Parameter_Criteria_Data value
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
     */
    public function setField_And_Parameter_Criteria_Data(\WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this->Field_And_Parameter_Criteria_Data = $field_And_Parameter_Criteria_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Request_CriteriaType
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
