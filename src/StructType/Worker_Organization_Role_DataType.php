<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Organization_Role_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the organization role and the organizations that the worker supports that role for.
 * @subpackage Structs
 */
class Worker_Organization_Role_DataType extends AbstractStructBase
{
    /**
     * The Organization_Role
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Role_for_Worker_DataType[]
     */
    public $Organization_Role;
    /**
     * Constructor method for Worker_Organization_Role_DataType
     * @uses Worker_Organization_Role_DataType::setOrganization_Role()
     * @param \StructType\Organization_Role_for_Worker_DataType[] $organization_Role
     */
    public function __construct(array $organization_Role = array())
    {
        $this
            ->setOrganization_Role($organization_Role);
    }
    /**
     * Get Organization_Role value
     * @return \StructType\Organization_Role_for_Worker_DataType[]|null
     */
    public function getOrganization_Role()
    {
        return $this->Organization_Role;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Role method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Role method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_RoleForArrayConstraintsFromSetOrganization_Role(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Organization_Role_DataTypeOrganization_RoleItem) {
            // validation for constraint: itemType
            if (!$worker_Organization_Role_DataTypeOrganization_RoleItem instanceof \StructType\Organization_Role_for_Worker_DataType) {
                $invalidValues[] = is_object($worker_Organization_Role_DataTypeOrganization_RoleItem) ? get_class($worker_Organization_Role_DataTypeOrganization_RoleItem) : sprintf('%s(%s)', gettype($worker_Organization_Role_DataTypeOrganization_RoleItem), var_export($worker_Organization_Role_DataTypeOrganization_RoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Role property can only contain items of type \StructType\Organization_Role_for_Worker_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Role value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Role_for_Worker_DataType[] $organization_Role
     * @return \StructType\Worker_Organization_Role_DataType
     */
    public function setOrganization_Role(array $organization_Role = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_RoleArrayErrorMessage = self::validateOrganization_RoleForArrayConstraintsFromSetOrganization_Role($organization_Role))) {
            throw new \InvalidArgumentException($organization_RoleArrayErrorMessage, __LINE__);
        }
        $this->Organization_Role = $organization_Role;
        return $this;
    }
    /**
     * Add item to Organization_Role value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Role_for_Worker_DataType $item
     * @return \StructType\Worker_Organization_Role_DataType
     */
    public function addToOrganization_Role(\StructType\Organization_Role_for_Worker_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Role_for_Worker_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Role property can only contain items of type \StructType\Organization_Role_for_Worker_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Role[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Organization_Role_DataType
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
