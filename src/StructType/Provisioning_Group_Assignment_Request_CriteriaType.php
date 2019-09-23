<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_Assignment_Request_CriteriaType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request Criteria element to search for provisioning group assignments to specific workers or persons.
 * @subpackage Structs
 */
class Provisioning_Group_Assignment_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a person
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[]
     */
    public $Person_Reference;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a worker
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Worker_Reference;
    /**
     * Constructor method for Provisioning_Group_Assignment_Request_CriteriaType
     * @uses Provisioning_Group_Assignment_Request_CriteriaType::setPerson_Reference()
     * @uses Provisioning_Group_Assignment_Request_CriteriaType::setWorker_Reference()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[] $person_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $worker_Reference
     */
    public function __construct(array $person_Reference = array(), array $worker_Reference = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setWorker_Reference($worker_Reference);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[]|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_ReferenceForArrayConstraintsFromSetPerson_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem) {
            // validation for constraint: itemType
            if (!$provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem instanceof \WorkdayWsdl\\StructType\Unique_IdentifierObjectType) {
                $invalidValues[] = is_object($provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem) ? get_class($provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem) : sprintf('%s(%s)', gettype($provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem), var_export($provisioning_Group_Assignment_Request_CriteriaTypePerson_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Reference property can only contain items of type \WorkdayWsdl\\StructType\Unique_IdentifierObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[] $person_Reference
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Request_CriteriaType
     */
    public function setPerson_Reference(array $person_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($person_ReferenceArrayErrorMessage = self::validatePerson_ReferenceForArrayConstraintsFromSetPerson_Reference($person_Reference))) {
            throw new \InvalidArgumentException($person_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Add item to Person_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $item
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Request_CriteriaType
     */
    public function addToPerson_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Unique_IdentifierObjectType) {
            throw new \InvalidArgumentException(sprintf('The Person_Reference property can only contain items of type \WorkdayWsdl\\StructType\Unique_IdentifierObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Reference[] = $item;
        return $this;
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
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
        foreach ($values as $provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem) ? get_class($provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem), var_export($provisioning_Group_Assignment_Request_CriteriaTypeWorker_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $worker_Reference
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Request_CriteriaType
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
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Request_CriteriaType
     */
    public function addToWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Request_CriteriaType
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
