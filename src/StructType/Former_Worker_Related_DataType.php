<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Related_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns data that is related to a former worker. Any data entered in this element in the Put Request will be ignored.
 * @subpackage Structs
 */
class Former_Worker_Related_DataType extends AbstractStructBase
{
    /**
     * The Rehired
     * Meta information extracted from the WSDL
     * - documentation: Returns true if the former worker has a completed Hire Employee or Contract Contingent Worker business process.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Rehired;
    /**
     * The Applicant_Reference
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicant used in the Hire or Contract business process.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\ApplicantObjectType
     */
    public $Applicant_Reference;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Returns the workers for the former worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Worker_Reference;
    /**
     * Constructor method for Former_Worker_Related_DataType
     * @uses Former_Worker_Related_DataType::setRehired()
     * @uses Former_Worker_Related_DataType::setApplicant_Reference()
     * @uses Former_Worker_Related_DataType::setWorker_Reference()
     * @param bool $rehired
     * @param \WorkdayWsdl\\StructType\ApplicantObjectType $applicant_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $worker_Reference
     */
    public function __construct($rehired = null, \WorkdayWsdl\\StructType\ApplicantObjectType $applicant_Reference = null, array $worker_Reference = array())
    {
        $this
            ->setRehired($rehired)
            ->setApplicant_Reference($applicant_Reference)
            ->setWorker_Reference($worker_Reference);
    }
    /**
     * Get Rehired value
     * @return bool|null
     */
    public function getRehired()
    {
        return $this->Rehired;
    }
    /**
     * Set Rehired value
     * @param bool $rehired
     * @return \WorkdayWsdl\\StructType\Former_Worker_Related_DataType
     */
    public function setRehired($rehired = null)
    {
        // validation for constraint: boolean
        if (!is_null($rehired) && !is_bool($rehired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rehired, true), gettype($rehired)), __LINE__);
        }
        $this->Rehired = $rehired;
        return $this;
    }
    /**
     * Get Applicant_Reference value
     * @return \WorkdayWsdl\\StructType\ApplicantObjectType|null
     */
    public function getApplicant_Reference()
    {
        return $this->Applicant_Reference;
    }
    /**
     * Set Applicant_Reference value
     * @param \WorkdayWsdl\\StructType\ApplicantObjectType $applicant_Reference
     * @return \WorkdayWsdl\\StructType\Former_Worker_Related_DataType
     */
    public function setApplicant_Reference(\WorkdayWsdl\\StructType\ApplicantObjectType $applicant_Reference = null)
    {
        $this->Applicant_Reference = $applicant_Reference;
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
        foreach ($values as $former_Worker_Related_DataTypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Related_DataTypeWorker_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($former_Worker_Related_DataTypeWorker_ReferenceItem) ? get_class($former_Worker_Related_DataTypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($former_Worker_Related_DataTypeWorker_ReferenceItem), var_export($former_Worker_Related_DataTypeWorker_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Former_Worker_Related_DataType
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
     * @return \WorkdayWsdl\\StructType\Former_Worker_Related_DataType
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
     * @return \WorkdayWsdl\\StructType\Former_Worker_Related_DataType
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
