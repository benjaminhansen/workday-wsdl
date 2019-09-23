<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Role_Assignment_WWS_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about organization role assignments.
 * @subpackage Structs
 */
class Organization_Role_Assignment_WWS_DataType extends AbstractStructBase
{
    /**
     * The Role_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the organization role.
     * - minOccurs: 0
     * @var \StructType\Assignable_RoleObjectType
     */
    public $Role_Reference;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that can be used to reference a worker(s) that fills the organization role.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType[]
     */
    public $Worker_Reference;
    /**
     * Constructor method for Organization_Role_Assignment_WWS_DataType
     * @uses Organization_Role_Assignment_WWS_DataType::setRole_Reference()
     * @uses Organization_Role_Assignment_WWS_DataType::setWorker_Reference()
     * @param \StructType\Assignable_RoleObjectType $role_Reference
     * @param \StructType\WorkerObjectType[] $worker_Reference
     */
    public function __construct(\StructType\Assignable_RoleObjectType $role_Reference = null, array $worker_Reference = array())
    {
        $this
            ->setRole_Reference($role_Reference)
            ->setWorker_Reference($worker_Reference);
    }
    /**
     * Get Role_Reference value
     * @return \StructType\Assignable_RoleObjectType|null
     */
    public function getRole_Reference()
    {
        return $this->Role_Reference;
    }
    /**
     * Set Role_Reference value
     * @param \StructType\Assignable_RoleObjectType $role_Reference
     * @return \StructType\Organization_Role_Assignment_WWS_DataType
     */
    public function setRole_Reference(\StructType\Assignable_RoleObjectType $role_Reference = null)
    {
        $this->Role_Reference = $role_Reference;
        return $this;
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType[]|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_ReferenceForArrayConstraintsFromSetWorker_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem instanceof \StructType\WorkerObjectType) {
                $invalidValues[] = is_object($organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem) ? get_class($organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem), var_export($organization_Role_Assignment_WWS_DataTypeWorker_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Reference property can only contain items of type \StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerObjectType[] $worker_Reference
     * @return \StructType\Organization_Role_Assignment_WWS_DataType
     */
    public function setWorker_Reference(array $worker_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_ReferenceArrayErrorMessage = self::validateWorker_ReferenceForArrayConstraintsFromSetWorker_Reference($worker_Reference))) {
            throw new \InvalidArgumentException($worker_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Add item to Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerObjectType $item
     * @return \StructType\Organization_Role_Assignment_WWS_DataType
     */
    public function addToWorker_Reference(\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Reference property can only contain items of type \StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Role_Assignment_WWS_DataType
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
