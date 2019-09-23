<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Content_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg a brief summary of Organization data.
 * @subpackage Structs
 */
class Organization_Content_DataType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Organization_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Code. A new effective-dated organization name is automatically created if value for this field is different as of specified effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_ID;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Type_Reference_DataType[]
     */
    public $Organization_Type_Reference;
    /**
     * The Organization_Subtype_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Subtype_Reference_DataType[]
     */
    public $Organization_Subtype_Reference;
    /**
     * Constructor method for Organization_Content_DataType
     * @uses Organization_Content_DataType::setIntegration_ID_Data()
     * @uses Organization_Content_DataType::setOrganization_ID()
     * @uses Organization_Content_DataType::setOrganization_Name()
     * @uses Organization_Content_DataType::setOrganization_Type_Reference()
     * @uses Organization_Content_DataType::setOrganization_Subtype_Reference()
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $organization_ID
     * @param string $organization_Name
     * @param \StructType\Organization_Type_Reference_DataType[] $organization_Type_Reference
     * @param \StructType\Organization_Subtype_Reference_DataType[] $organization_Subtype_Reference
     */
    public function __construct(\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $organization_ID = null, $organization_Name = null, array $organization_Type_Reference = array(), array $organization_Subtype_Reference = array())
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setOrganization_ID($organization_ID)
            ->setOrganization_Name($organization_Name)
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setOrganization_Subtype_Reference($organization_Subtype_Reference);
    }
    /**
     * Get Integration_ID_Data value
     * @return \StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \StructType\Organization_Content_DataType
     */
    public function setIntegration_ID_Data(\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Organization_ID value
     * @return string|null
     */
    public function getOrganization_ID()
    {
        return $this->Organization_ID;
    }
    /**
     * Set Organization_ID value
     * @param string $organization_ID
     * @return \StructType\Organization_Content_DataType
     */
    public function setOrganization_ID($organization_ID = null)
    {
        // validation for constraint: string
        if (!is_null($organization_ID) && !is_string($organization_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_ID, true), gettype($organization_ID)), __LINE__);
        }
        $this->Organization_ID = $organization_ID;
        return $this;
    }
    /**
     * Get Organization_Name value
     * @return string|null
     */
    public function getOrganization_Name()
    {
        return $this->Organization_Name;
    }
    /**
     * Set Organization_Name value
     * @param string $organization_Name
     * @return \StructType\Organization_Content_DataType
     */
    public function setOrganization_Name($organization_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name) && !is_string($organization_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name, true), gettype($organization_Name)), __LINE__);
        }
        $this->Organization_Name = $organization_Name;
        return $this;
    }
    /**
     * Get Organization_Type_Reference value
     * @return \StructType\Organization_Type_Reference_DataType[]|null
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
        foreach ($values as $organization_Content_DataTypeOrganization_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Content_DataTypeOrganization_Type_ReferenceItem instanceof \StructType\Organization_Type_Reference_DataType) {
                $invalidValues[] = is_object($organization_Content_DataTypeOrganization_Type_ReferenceItem) ? get_class($organization_Content_DataTypeOrganization_Type_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Content_DataTypeOrganization_Type_ReferenceItem), var_export($organization_Content_DataTypeOrganization_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Type_Reference property can only contain items of type \StructType\Organization_Type_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Type_Reference_DataType[] $organization_Type_Reference
     * @return \StructType\Organization_Content_DataType
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
     * @param \StructType\Organization_Type_Reference_DataType $item
     * @return \StructType\Organization_Content_DataType
     */
    public function addToOrganization_Type_Reference(\StructType\Organization_Type_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Type_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Type_Reference property can only contain items of type \StructType\Organization_Type_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Organization_Subtype_Reference value
     * @return \StructType\Organization_Subtype_Reference_DataType[]|null
     */
    public function getOrganization_Subtype_Reference()
    {
        return $this->Organization_Subtype_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Subtype_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Subtype_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Subtype_ReferenceForArrayConstraintsFromSetOrganization_Subtype_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Content_DataTypeOrganization_Subtype_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Content_DataTypeOrganization_Subtype_ReferenceItem instanceof \StructType\Organization_Subtype_Reference_DataType) {
                $invalidValues[] = is_object($organization_Content_DataTypeOrganization_Subtype_ReferenceItem) ? get_class($organization_Content_DataTypeOrganization_Subtype_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Content_DataTypeOrganization_Subtype_ReferenceItem), var_export($organization_Content_DataTypeOrganization_Subtype_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Subtype_Reference property can only contain items of type \StructType\Organization_Subtype_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Subtype_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Subtype_Reference_DataType[] $organization_Subtype_Reference
     * @return \StructType\Organization_Content_DataType
     */
    public function setOrganization_Subtype_Reference(array $organization_Subtype_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Subtype_ReferenceArrayErrorMessage = self::validateOrganization_Subtype_ReferenceForArrayConstraintsFromSetOrganization_Subtype_Reference($organization_Subtype_Reference))) {
            throw new \InvalidArgumentException($organization_Subtype_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Subtype_Reference = $organization_Subtype_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Subtype_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Subtype_Reference_DataType $item
     * @return \StructType\Organization_Content_DataType
     */
    public function addToOrganization_Subtype_Reference(\StructType\Organization_Subtype_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Subtype_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Subtype_Reference property can only contain items of type \StructType\Organization_Subtype_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Subtype_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Content_DataType
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
