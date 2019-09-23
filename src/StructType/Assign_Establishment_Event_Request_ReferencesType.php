<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_Event_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Assign Establishment Event Request References
 * @subpackage Structs
 */
class Assign_Establishment_Event_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Workers_Secured_by_Transaction_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workers Secured by Transaction Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Workers_Secured_by_Transaction_Reference;
    /**
     * Constructor method for Assign_Establishment_Event_Request_ReferencesType
     * @uses Assign_Establishment_Event_Request_ReferencesType::setWorkers_Secured_by_Transaction_Reference()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $workers_Secured_by_Transaction_Reference
     */
    public function __construct(array $workers_Secured_by_Transaction_Reference = array())
    {
        $this
            ->setWorkers_Secured_by_Transaction_Reference($workers_Secured_by_Transaction_Reference);
    }
    /**
     * Get Workers_Secured_by_Transaction_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getWorkers_Secured_by_Transaction_Reference()
    {
        return $this->Workers_Secured_by_Transaction_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Secured_by_Transaction_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Secured_by_Transaction_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Secured_by_Transaction_ReferenceForArrayConstraintsFromSetWorkers_Secured_by_Transaction_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem) ? get_class($assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem) : sprintf('%s(%s)', gettype($assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem), var_export($assign_Establishment_Event_Request_ReferencesTypeWorkers_Secured_by_Transaction_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Secured_by_Transaction_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Secured_by_Transaction_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $workers_Secured_by_Transaction_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Request_ReferencesType
     */
    public function setWorkers_Secured_by_Transaction_Reference(array $workers_Secured_by_Transaction_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Secured_by_Transaction_ReferenceArrayErrorMessage = self::validateWorkers_Secured_by_Transaction_ReferenceForArrayConstraintsFromSetWorkers_Secured_by_Transaction_Reference($workers_Secured_by_Transaction_Reference))) {
            throw new \InvalidArgumentException($workers_Secured_by_Transaction_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workers_Secured_by_Transaction_Reference = $workers_Secured_by_Transaction_Reference;
        return $this;
    }
    /**
     * Add item to Workers_Secured_by_Transaction_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Request_ReferencesType
     */
    public function addToWorkers_Secured_by_Transaction_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Secured_by_Transaction_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Secured_by_Transaction_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Request_ReferencesType
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
