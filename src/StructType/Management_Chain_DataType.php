<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Management_Chain_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the organization reference and details about an organization.
 * @subpackage Structs
 */
class Management_Chain_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Manager_Reference
     * Meta information extracted from the WSDL
     * - documentation: Returns the reference(s) to the supervisory organization's manager(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Manager_Reference;
    /**
     * The Manager
     * Meta information extracted from the WSDL
     * - documentation: Returns the reference(s) to the supervisory organization's manager(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Basic_DataType[]
     */
    public $Manager;
    /**
     * Constructor method for Management_Chain_DataType
     * @uses Management_Chain_DataType::setOrganization_Reference()
     * @uses Management_Chain_DataType::setManager_Reference()
     * @uses Management_Chain_DataType::setManager()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $manager_Reference
     * @param \WorkdayWsdl\\StructType\Worker_Basic_DataType[] $manager
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null, array $manager_Reference = array(), array $manager = array())
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setManager_Reference($manager_Reference)
            ->setManager($manager);
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
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Manager_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getManager_Reference()
    {
        return $this->Manager_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setManager_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManager_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManager_ReferenceForArrayConstraintsFromSetManager_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $management_Chain_DataTypeManager_ReferenceItem) {
            // validation for constraint: itemType
            if (!$management_Chain_DataTypeManager_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($management_Chain_DataTypeManager_ReferenceItem) ? get_class($management_Chain_DataTypeManager_ReferenceItem) : sprintf('%s(%s)', gettype($management_Chain_DataTypeManager_ReferenceItem), var_export($management_Chain_DataTypeManager_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manager_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manager_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $manager_Reference
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
     */
    public function setManager_Reference(array $manager_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($manager_ReferenceArrayErrorMessage = self::validateManager_ReferenceForArrayConstraintsFromSetManager_Reference($manager_Reference))) {
            throw new \InvalidArgumentException($manager_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Manager_Reference = $manager_Reference;
        return $this;
    }
    /**
     * Add item to Manager_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
     */
    public function addToManager_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Manager_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manager_Reference[] = $item;
        return $this;
    }
    /**
     * Get Manager value
     * @return \WorkdayWsdl\\StructType\Worker_Basic_DataType[]|null
     */
    public function getManager()
    {
        return $this->Manager;
    }
    /**
     * This method is responsible for validating the values passed to the setManager method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManager method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManagerForArrayConstraintsFromSetManager(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $management_Chain_DataTypeManagerItem) {
            // validation for constraint: itemType
            if (!$management_Chain_DataTypeManagerItem instanceof \WorkdayWsdl\\StructType\Worker_Basic_DataType) {
                $invalidValues[] = is_object($management_Chain_DataTypeManagerItem) ? get_class($management_Chain_DataTypeManagerItem) : sprintf('%s(%s)', gettype($management_Chain_DataTypeManagerItem), var_export($management_Chain_DataTypeManagerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manager property can only contain items of type \WorkdayWsdl\\StructType\Worker_Basic_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manager value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Basic_DataType[] $manager
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
     */
    public function setManager(array $manager = array())
    {
        // validation for constraint: array
        if ('' !== ($managerArrayErrorMessage = self::validateManagerForArrayConstraintsFromSetManager($manager))) {
            throw new \InvalidArgumentException($managerArrayErrorMessage, __LINE__);
        }
        $this->Manager = $manager;
        return $this;
    }
    /**
     * Add item to Manager value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Basic_DataType $item
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
     */
    public function addToManager(\WorkdayWsdl\\StructType\Worker_Basic_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Basic_DataType) {
            throw new \InvalidArgumentException(sprintf('The Manager property can only contain items of type \WorkdayWsdl\\StructType\Worker_Basic_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manager[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Management_Chain_DataType
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
