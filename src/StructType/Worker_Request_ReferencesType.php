<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Worker and its associated data.
 * @subpackage Structs
 */
class Worker_Request_ReferencesType extends AbstractStructBase
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
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * The Ignore_Invalid_References
     * @var bool
     */
    public $Ignore_Invalid_References;
    /**
     * Constructor method for Worker_Request_ReferencesType
     * @uses Worker_Request_ReferencesType::setWorker_Reference()
     * @uses Worker_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @uses Worker_Request_ReferencesType::setIgnore_Invalid_References()
     * @param \StructType\WorkerObjectType[] $worker_Reference
     * @param bool $skip_Non_Existing_Instances
     * @param bool $ignore_Invalid_References
     */
    public function __construct(array $worker_Reference = array(), $skip_Non_Existing_Instances = null, $ignore_Invalid_References = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances)
            ->setIgnore_Invalid_References($ignore_Invalid_References);
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
        foreach ($values as $worker_Request_ReferencesTypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_ReferencesTypeWorker_ReferenceItem instanceof \StructType\WorkerObjectType) {
                $invalidValues[] = is_object($worker_Request_ReferencesTypeWorker_ReferenceItem) ? get_class($worker_Request_ReferencesTypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_ReferencesTypeWorker_ReferenceItem), var_export($worker_Request_ReferencesTypeWorker_ReferenceItem, true));
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
     * @return \StructType\Worker_Request_ReferencesType
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
     * @return \StructType\Worker_Request_ReferencesType
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
     * Get Skip_Non_Existing_Instances value
     * @return bool|null
     */
    public function getSkip_Non_Existing_Instances()
    {
        return $this->Skip_Non_Existing_Instances;
    }
    /**
     * Set Skip_Non_Existing_Instances value
     * @param bool $skip_Non_Existing_Instances
     * @return \StructType\Worker_Request_ReferencesType
     */
    public function setSkip_Non_Existing_Instances($skip_Non_Existing_Instances = null)
    {
        // validation for constraint: boolean
        if (!is_null($skip_Non_Existing_Instances) && !is_bool($skip_Non_Existing_Instances)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skip_Non_Existing_Instances, true), gettype($skip_Non_Existing_Instances)), __LINE__);
        }
        $this->Skip_Non_Existing_Instances = $skip_Non_Existing_Instances;
        return $this;
    }
    /**
     * Get Ignore_Invalid_References value
     * @return bool|null
     */
    public function getIgnore_Invalid_References()
    {
        return $this->Ignore_Invalid_References;
    }
    /**
     * Set Ignore_Invalid_References value
     * @param bool $ignore_Invalid_References
     * @return \StructType\Worker_Request_ReferencesType
     */
    public function setIgnore_Invalid_References($ignore_Invalid_References = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignore_Invalid_References) && !is_bool($ignore_Invalid_References)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignore_Invalid_References, true), gettype($ignore_Invalid_References)), __LINE__);
        }
        $this->Ignore_Invalid_References = $ignore_Invalid_References;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Request_ReferencesType
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
