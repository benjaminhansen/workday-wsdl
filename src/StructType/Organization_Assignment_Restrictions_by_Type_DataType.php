<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Assignment_Restrictions_by_Type_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Assignment Restrictions or Defaults cannot be specified for this organization type. | Organization Assignment Restrictions by Type Data
 * @subpackage Structs
 */
class Organization_Assignment_Restrictions_by_Type_DataType extends AbstractStructBase
{
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Type Reference. Can not be duplicated within 1 request.
     * @var \StructType\Organization_TypeObjectType
     */
    public $Organization_Type_Reference;
    /**
     * The Allowed_Organization_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Staff_Allowed_DataType[]
     */
    public $Allowed_Organization_Data;
    /**
     * The Default_Organization_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Staff_Default_DataType[]
     */
    public $Default_Organization_Data;
    /**
     * Constructor method for Organization_Assignment_Restrictions_by_Type_DataType
     * @uses Organization_Assignment_Restrictions_by_Type_DataType::setOrganization_Type_Reference()
     * @uses Organization_Assignment_Restrictions_by_Type_DataType::setAllowed_Organization_Data()
     * @uses Organization_Assignment_Restrictions_by_Type_DataType::setDefault_Organization_Data()
     * @param \StructType\Organization_TypeObjectType $organization_Type_Reference
     * @param \StructType\Staff_Allowed_DataType[] $allowed_Organization_Data
     * @param \StructType\Staff_Default_DataType[] $default_Organization_Data
     */
    public function __construct(\StructType\Organization_TypeObjectType $organization_Type_Reference = null, array $allowed_Organization_Data = array(), array $default_Organization_Data = array())
    {
        $this
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setAllowed_Organization_Data($allowed_Organization_Data)
            ->setDefault_Organization_Data($default_Organization_Data);
    }
    /**
     * Get Organization_Type_Reference value
     * @return \StructType\Organization_TypeObjectType|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * Set Organization_Type_Reference value
     * @param \StructType\Organization_TypeObjectType $organization_Type_Reference
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
     */
    public function setOrganization_Type_Reference(\StructType\Organization_TypeObjectType $organization_Type_Reference = null)
    {
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Get Allowed_Organization_Data value
     * @return \StructType\Staff_Allowed_DataType[]|null
     */
    public function getAllowed_Organization_Data()
    {
        return $this->Allowed_Organization_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowed_Organization_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowed_Organization_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowed_Organization_DataForArrayConstraintsFromSetAllowed_Organization_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem instanceof \StructType\Staff_Allowed_DataType) {
                $invalidValues[] = is_object($organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem) ? get_class($organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem) : sprintf('%s(%s)', gettype($organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem), var_export($organization_Assignment_Restrictions_by_Type_DataTypeAllowed_Organization_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowed_Organization_Data property can only contain items of type \StructType\Staff_Allowed_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowed_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Staff_Allowed_DataType[] $allowed_Organization_Data
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
     */
    public function setAllowed_Organization_Data(array $allowed_Organization_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($allowed_Organization_DataArrayErrorMessage = self::validateAllowed_Organization_DataForArrayConstraintsFromSetAllowed_Organization_Data($allowed_Organization_Data))) {
            throw new \InvalidArgumentException($allowed_Organization_DataArrayErrorMessage, __LINE__);
        }
        $this->Allowed_Organization_Data = $allowed_Organization_Data;
        return $this;
    }
    /**
     * Add item to Allowed_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Staff_Allowed_DataType $item
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
     */
    public function addToAllowed_Organization_Data(\StructType\Staff_Allowed_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Staff_Allowed_DataType) {
            throw new \InvalidArgumentException(sprintf('The Allowed_Organization_Data property can only contain items of type \StructType\Staff_Allowed_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowed_Organization_Data[] = $item;
        return $this;
    }
    /**
     * Get Default_Organization_Data value
     * @return \StructType\Staff_Default_DataType[]|null
     */
    public function getDefault_Organization_Data()
    {
        return $this->Default_Organization_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDefault_Organization_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefault_Organization_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefault_Organization_DataForArrayConstraintsFromSetDefault_Organization_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem instanceof \StructType\Staff_Default_DataType) {
                $invalidValues[] = is_object($organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem) ? get_class($organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem) : sprintf('%s(%s)', gettype($organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem), var_export($organization_Assignment_Restrictions_by_Type_DataTypeDefault_Organization_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Default_Organization_Data property can only contain items of type \StructType\Staff_Default_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Default_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Staff_Default_DataType[] $default_Organization_Data
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
     */
    public function setDefault_Organization_Data(array $default_Organization_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($default_Organization_DataArrayErrorMessage = self::validateDefault_Organization_DataForArrayConstraintsFromSetDefault_Organization_Data($default_Organization_Data))) {
            throw new \InvalidArgumentException($default_Organization_DataArrayErrorMessage, __LINE__);
        }
        $this->Default_Organization_Data = $default_Organization_Data;
        return $this;
    }
    /**
     * Add item to Default_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Staff_Default_DataType $item
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
     */
    public function addToDefault_Organization_Data(\StructType\Staff_Default_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Staff_Default_DataType) {
            throw new \InvalidArgumentException(sprintf('The Default_Organization_Data property can only contain items of type \StructType\Staff_Default_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Default_Organization_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType
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
