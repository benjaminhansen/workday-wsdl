<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Photos_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper Element that Contains Worker References and Worker Photo Data
 * @subpackage Structs
 */
class Worker_Photos_Response_DataType extends AbstractStructBase
{
    /**
     * The Worker_Photo
     * Meta information extracted from the WSDL
     * - documentation: Element Containing Worker Reference and Photo Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_PhotoType[]
     */
    public $Worker_Photo;
    /**
     * Constructor method for Worker_Photos_Response_DataType
     * @uses Worker_Photos_Response_DataType::setWorker_Photo()
     * @param \StructType\Worker_PhotoType[] $worker_Photo
     */
    public function __construct(array $worker_Photo = array())
    {
        $this
            ->setWorker_Photo($worker_Photo);
    }
    /**
     * Get Worker_Photo value
     * @return \StructType\Worker_PhotoType[]|null
     */
    public function getWorker_Photo()
    {
        return $this->Worker_Photo;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Photo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Photo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_PhotoForArrayConstraintsFromSetWorker_Photo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Photos_Response_DataTypeWorker_PhotoItem) {
            // validation for constraint: itemType
            if (!$worker_Photos_Response_DataTypeWorker_PhotoItem instanceof \StructType\Worker_PhotoType) {
                $invalidValues[] = is_object($worker_Photos_Response_DataTypeWorker_PhotoItem) ? get_class($worker_Photos_Response_DataTypeWorker_PhotoItem) : sprintf('%s(%s)', gettype($worker_Photos_Response_DataTypeWorker_PhotoItem), var_export($worker_Photos_Response_DataTypeWorker_PhotoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Photo property can only contain items of type \StructType\Worker_PhotoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Photo value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_PhotoType[] $worker_Photo
     * @return \StructType\Worker_Photos_Response_DataType
     */
    public function setWorker_Photo(array $worker_Photo = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_PhotoArrayErrorMessage = self::validateWorker_PhotoForArrayConstraintsFromSetWorker_Photo($worker_Photo))) {
            throw new \InvalidArgumentException($worker_PhotoArrayErrorMessage, __LINE__);
        }
        $this->Worker_Photo = $worker_Photo;
        return $this;
    }
    /**
     * Add item to Worker_Photo value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_PhotoType $item
     * @return \StructType\Worker_Photos_Response_DataType
     */
    public function addToWorker_Photo(\StructType\Worker_PhotoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_PhotoType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Photo property can only contain items of type \StructType\Worker_PhotoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Photo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Photos_Response_DataType
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
