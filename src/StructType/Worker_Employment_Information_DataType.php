<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Employment_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's employment information, such as their position and job information.Security Note: This element is secured to the following domains: Self-Service: Current Staffing Information, Worker Data: Current Staffing
 * Information
 * @subpackage Structs
 */
class Worker_Employment_Information_DataType extends AbstractStructBase
{
    /**
     * The Worker_Job_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_Job_DataType[]
     */
    public $Worker_Job_Data;
    /**
     * The Worker_Status_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Status data for a Worker.
     * - minOccurs: 0
     * @var \StructType\Worker_Status_Detail_DataType
     */
    public $Worker_Status_Data;
    /**
     * The Worker_Contract_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Contract data for a Worker.
     * - minOccurs: 0
     * @var \StructType\Worker_Contract_Detail_DataType
     */
    public $Worker_Contract_Data;
    /**
     * The International_Assignment_Summary_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\International_Assignment_Summary_DataType
     */
    public $International_Assignment_Summary_Data;
    /**
     * Constructor method for Worker_Employment_Information_DataType
     * @uses Worker_Employment_Information_DataType::setWorker_Job_Data()
     * @uses Worker_Employment_Information_DataType::setWorker_Status_Data()
     * @uses Worker_Employment_Information_DataType::setWorker_Contract_Data()
     * @uses Worker_Employment_Information_DataType::setInternational_Assignment_Summary_Data()
     * @param \StructType\Worker_Job_DataType[] $worker_Job_Data
     * @param \StructType\Worker_Status_Detail_DataType $worker_Status_Data
     * @param \StructType\Worker_Contract_Detail_DataType $worker_Contract_Data
     * @param \StructType\International_Assignment_Summary_DataType $international_Assignment_Summary_Data
     */
    public function __construct(array $worker_Job_Data = array(), \StructType\Worker_Status_Detail_DataType $worker_Status_Data = null, \StructType\Worker_Contract_Detail_DataType $worker_Contract_Data = null, \StructType\International_Assignment_Summary_DataType $international_Assignment_Summary_Data = null)
    {
        $this
            ->setWorker_Job_Data($worker_Job_Data)
            ->setWorker_Status_Data($worker_Status_Data)
            ->setWorker_Contract_Data($worker_Contract_Data)
            ->setInternational_Assignment_Summary_Data($international_Assignment_Summary_Data);
    }
    /**
     * Get Worker_Job_Data value
     * @return \StructType\Worker_Job_DataType[]|null
     */
    public function getWorker_Job_Data()
    {
        return $this->Worker_Job_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Job_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Job_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Job_DataForArrayConstraintsFromSetWorker_Job_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Employment_Information_DataTypeWorker_Job_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Employment_Information_DataTypeWorker_Job_DataItem instanceof \StructType\Worker_Job_DataType) {
                $invalidValues[] = is_object($worker_Employment_Information_DataTypeWorker_Job_DataItem) ? get_class($worker_Employment_Information_DataTypeWorker_Job_DataItem) : sprintf('%s(%s)', gettype($worker_Employment_Information_DataTypeWorker_Job_DataItem), var_export($worker_Employment_Information_DataTypeWorker_Job_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Job_Data property can only contain items of type \StructType\Worker_Job_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Job_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Job_DataType[] $worker_Job_Data
     * @return \StructType\Worker_Employment_Information_DataType
     */
    public function setWorker_Job_Data(array $worker_Job_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Job_DataArrayErrorMessage = self::validateWorker_Job_DataForArrayConstraintsFromSetWorker_Job_Data($worker_Job_Data))) {
            throw new \InvalidArgumentException($worker_Job_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Job_Data = $worker_Job_Data;
        return $this;
    }
    /**
     * Add item to Worker_Job_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Job_DataType $item
     * @return \StructType\Worker_Employment_Information_DataType
     */
    public function addToWorker_Job_Data(\StructType\Worker_Job_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_Job_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Job_Data property can only contain items of type \StructType\Worker_Job_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Job_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Status_Data value
     * @return \StructType\Worker_Status_Detail_DataType|null
     */
    public function getWorker_Status_Data()
    {
        return $this->Worker_Status_Data;
    }
    /**
     * Set Worker_Status_Data value
     * @param \StructType\Worker_Status_Detail_DataType $worker_Status_Data
     * @return \StructType\Worker_Employment_Information_DataType
     */
    public function setWorker_Status_Data(\StructType\Worker_Status_Detail_DataType $worker_Status_Data = null)
    {
        $this->Worker_Status_Data = $worker_Status_Data;
        return $this;
    }
    /**
     * Get Worker_Contract_Data value
     * @return \StructType\Worker_Contract_Detail_DataType|null
     */
    public function getWorker_Contract_Data()
    {
        return $this->Worker_Contract_Data;
    }
    /**
     * Set Worker_Contract_Data value
     * @param \StructType\Worker_Contract_Detail_DataType $worker_Contract_Data
     * @return \StructType\Worker_Employment_Information_DataType
     */
    public function setWorker_Contract_Data(\StructType\Worker_Contract_Detail_DataType $worker_Contract_Data = null)
    {
        $this->Worker_Contract_Data = $worker_Contract_Data;
        return $this;
    }
    /**
     * Get International_Assignment_Summary_Data value
     * @return \StructType\International_Assignment_Summary_DataType|null
     */
    public function getInternational_Assignment_Summary_Data()
    {
        return $this->International_Assignment_Summary_Data;
    }
    /**
     * Set International_Assignment_Summary_Data value
     * @param \StructType\International_Assignment_Summary_DataType $international_Assignment_Summary_Data
     * @return \StructType\Worker_Employment_Information_DataType
     */
    public function setInternational_Assignment_Summary_Data(\StructType\International_Assignment_Summary_DataType $international_Assignment_Summary_Data = null)
    {
        $this->International_Assignment_Summary_Data = $international_Assignment_Summary_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Employment_Information_DataType
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
