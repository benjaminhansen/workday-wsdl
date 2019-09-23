<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Get_Change_Veteran_Status_Identification_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Worker and its associated data.
 * @subpackage Structs
 */
class Get_Change_Veteran_Status_Identification_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the worker. The ID consists of a type attribute, which should be set to "Employee_ID" or "Contingent_Worker_ID", and a value attribute, such as "04345". If Skip Non Existing Instances value is set to true.
     * When a reference id value that does not meet the entry date criteria is passed, the non existent reference id will be ignored.
     * - maxOccurs: unbounded
     * @var \StructType\WorkerObjectType[]
     */
    public $Worker_Reference;
    /**
     * Constructor method for
     * Get_Change_Veteran_Status_Identification_Request_ReferencesType
     * @uses Get_Change_Veteran_Status_Identification_Request_ReferencesType::setWorker_Reference()
     * @param \StructType\WorkerObjectType[] $worker_Reference
     */
    public function __construct(array $worker_Reference = array())
    {
        $this
            ->setWorker_Reference($worker_Reference);
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
        foreach ($values as $get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem instanceof \StructType\WorkerObjectType) {
                $invalidValues[] = is_object($get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem) ? get_class($get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem), var_export($get_Change_Veteran_Status_Identification_Request_ReferencesTypeWorker_ReferenceItem, true));
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
     * @return \StructType\Get_Change_Veteran_Status_Identification_Request_ReferencesType
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
     * @return \StructType\Get_Change_Veteran_Status_Identification_Request_ReferencesType
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
     * @return \StructType\Get_Change_Veteran_Status_Identification_Request_ReferencesType
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
