<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_NameType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Organization Name Data
 * @subpackage Structs
 */
class Organization_NameType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Reference
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Organization Name Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Name_DataType[]
     */
    public $Organization_Name_Data;
    /**
     * Constructor method for Organization_NameType
     * @uses Organization_NameType::setOrganization_Reference()
     * @uses Organization_NameType::setOrganization_Name_Data()
     * @param \StructType\OrganizationObjectType $organization_Reference
     * @param \StructType\Organization_Name_DataType[] $organization_Name_Data
     */
    public function __construct(\StructType\OrganizationObjectType $organization_Reference = null, array $organization_Name_Data = array())
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Name_Data($organization_Name_Data);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \StructType\OrganizationObjectType $organization_Reference
     * @return \StructType\Organization_NameType
     */
    public function setOrganization_Reference(\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Name_Data value
     * @return \StructType\Organization_Name_DataType[]|null
     */
    public function getOrganization_Name_Data()
    {
        return $this->Organization_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Name_DataForArrayConstraintsFromSetOrganization_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_NameTypeOrganization_Name_DataItem) {
            // validation for constraint: itemType
            if (!$organization_NameTypeOrganization_Name_DataItem instanceof \StructType\Organization_Name_DataType) {
                $invalidValues[] = is_object($organization_NameTypeOrganization_Name_DataItem) ? get_class($organization_NameTypeOrganization_Name_DataItem) : sprintf('%s(%s)', gettype($organization_NameTypeOrganization_Name_DataItem), var_export($organization_NameTypeOrganization_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Name_Data property can only contain items of type \StructType\Organization_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Name_DataType[] $organization_Name_Data
     * @return \StructType\Organization_NameType
     */
    public function setOrganization_Name_Data(array $organization_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Name_DataArrayErrorMessage = self::validateOrganization_Name_DataForArrayConstraintsFromSetOrganization_Name_Data($organization_Name_Data))) {
            throw new \InvalidArgumentException($organization_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Name_Data = $organization_Name_Data;
        return $this;
    }
    /**
     * Add item to Organization_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Name_DataType $item
     * @return \StructType\Organization_NameType
     */
    public function addToOrganization_Name_Data(\StructType\Organization_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Name_Data property can only contain items of type \StructType\Organization_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Name_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_NameType
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
