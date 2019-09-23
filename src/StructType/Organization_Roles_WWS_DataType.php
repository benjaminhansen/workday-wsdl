<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Roles_WWS_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about role assignments for an organization.
 * @subpackage Structs
 */
class Organization_Roles_WWS_DataType extends AbstractStructBase
{
    /**
     * The Organization_Role_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains information about an Organization Role and incumbent worker(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Role_Assignment_WWS_DataType[]
     */
    public $Organization_Role_Data;
    /**
     * Constructor method for Organization_Roles_WWS_DataType
     * @uses Organization_Roles_WWS_DataType::setOrganization_Role_Data()
     * @param \StructType\Organization_Role_Assignment_WWS_DataType[] $organization_Role_Data
     */
    public function __construct(array $organization_Role_Data = array())
    {
        $this
            ->setOrganization_Role_Data($organization_Role_Data);
    }
    /**
     * Get Organization_Role_Data value
     * @return \StructType\Organization_Role_Assignment_WWS_DataType[]|null
     */
    public function getOrganization_Role_Data()
    {
        return $this->Organization_Role_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Role_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Role_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Role_DataForArrayConstraintsFromSetOrganization_Role_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Roles_WWS_DataTypeOrganization_Role_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Roles_WWS_DataTypeOrganization_Role_DataItem instanceof \StructType\Organization_Role_Assignment_WWS_DataType) {
                $invalidValues[] = is_object($organization_Roles_WWS_DataTypeOrganization_Role_DataItem) ? get_class($organization_Roles_WWS_DataTypeOrganization_Role_DataItem) : sprintf('%s(%s)', gettype($organization_Roles_WWS_DataTypeOrganization_Role_DataItem), var_export($organization_Roles_WWS_DataTypeOrganization_Role_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Role_Data property can only contain items of type \StructType\Organization_Role_Assignment_WWS_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Role_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Role_Assignment_WWS_DataType[] $organization_Role_Data
     * @return \StructType\Organization_Roles_WWS_DataType
     */
    public function setOrganization_Role_Data(array $organization_Role_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Role_DataArrayErrorMessage = self::validateOrganization_Role_DataForArrayConstraintsFromSetOrganization_Role_Data($organization_Role_Data))) {
            throw new \InvalidArgumentException($organization_Role_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Role_Data = $organization_Role_Data;
        return $this;
    }
    /**
     * Add item to Organization_Role_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Role_Assignment_WWS_DataType $item
     * @return \StructType\Organization_Roles_WWS_DataType
     */
    public function addToOrganization_Role_Data(\StructType\Organization_Role_Assignment_WWS_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Role_Assignment_WWS_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Role_Data property can only contain items of type \StructType\Organization_Role_Assignment_WWS_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Role_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Roles_WWS_DataType
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
