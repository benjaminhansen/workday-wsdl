<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Reference_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Reference ID Response Data
 * @subpackage Structs
 */
class Organization_Reference_IDType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Reference ID information is for this Organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType[]
     */
    public $Organization_ID_Data;
    /**
     * Constructor method for Organization_Reference_IDType
     * @uses Organization_Reference_IDType::setOrganization_Reference()
     * @uses Organization_Reference_IDType::setOrganization_ID_Data()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType[] $organization_ID_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null, array $organization_ID_Data = array())
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_ID_Data($organization_ID_Data);
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Reference_IDType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_ID_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType[]|null
     */
    public function getOrganization_ID_Data()
    {
        return $this->Organization_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_ID_DataForArrayConstraintsFromSetOrganization_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Reference_IDTypeOrganization_ID_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Reference_IDTypeOrganization_ID_DataItem instanceof \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType) {
                $invalidValues[] = is_object($organization_Reference_IDTypeOrganization_ID_DataItem) ? get_class($organization_Reference_IDTypeOrganization_ID_DataItem) : sprintf('%s(%s)', gettype($organization_Reference_IDTypeOrganization_ID_DataItem), var_export($organization_Reference_IDTypeOrganization_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_ID_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_ID_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType[] $organization_ID_Data
     * @return \WorkdayWsdl\\StructType\Organization_Reference_IDType
     */
    public function setOrganization_ID_Data(array $organization_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_ID_DataArrayErrorMessage = self::validateOrganization_ID_DataForArrayConstraintsFromSetOrganization_ID_Data($organization_ID_Data))) {
            throw new \InvalidArgumentException($organization_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_ID_Data = $organization_ID_Data;
        return $this;
    }
    /**
     * Add item to Organization_ID_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $item
     * @return \WorkdayWsdl\\StructType\Organization_Reference_IDType
     */
    public function addToOrganization_ID_Data(\WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_ID_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_ID_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Reference_IDType
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
