<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Support_RoleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the organization role refeference and the information about that role.
 * @subpackage Structs
 */
class Organization_Support_RoleType extends AbstractStructBase
{
    /**
     * The Organization_Support_Role
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType[]
     */
    public $Organization_Support_Role;
    /**
     * Constructor method for Organization_Support_RoleType
     * @uses Organization_Support_RoleType::setOrganization_Support_Role()
     * @param \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType[] $organization_Support_Role
     */
    public function __construct(array $organization_Support_Role = array())
    {
        $this
            ->setOrganization_Support_Role($organization_Support_Role);
    }
    /**
     * Get Organization_Support_Role value
     * @return \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType[]|null
     */
    public function getOrganization_Support_Role()
    {
        return $this->Organization_Support_Role;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Support_Role method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Support_Role method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Support_RoleForArrayConstraintsFromSetOrganization_Support_Role(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Support_RoleTypeOrganization_Support_RoleItem) {
            // validation for constraint: itemType
            if (!$organization_Support_RoleTypeOrganization_Support_RoleItem instanceof \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType) {
                $invalidValues[] = is_object($organization_Support_RoleTypeOrganization_Support_RoleItem) ? get_class($organization_Support_RoleTypeOrganization_Support_RoleItem) : sprintf('%s(%s)', gettype($organization_Support_RoleTypeOrganization_Support_RoleItem), var_export($organization_Support_RoleTypeOrganization_Support_RoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Support_Role property can only contain items of type \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Support_Role value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType[] $organization_Support_Role
     * @return \WorkdayWsdl\\StructType\Organization_Support_RoleType
     */
    public function setOrganization_Support_Role(array $organization_Support_Role = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Support_RoleArrayErrorMessage = self::validateOrganization_Support_RoleForArrayConstraintsFromSetOrganization_Support_Role($organization_Support_Role))) {
            throw new \InvalidArgumentException($organization_Support_RoleArrayErrorMessage, __LINE__);
        }
        $this->Organization_Support_Role = $organization_Support_Role;
        return $this;
    }
    /**
     * Add item to Organization_Support_Role value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType $item
     * @return \WorkdayWsdl\\StructType\Organization_Support_RoleType
     */
    public function addToOrganization_Support_Role(\WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Support_Role property can only contain items of type \WorkdayWsdl\\StructType\Organization_Supporting_Role_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Support_Role[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Support_RoleType
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
