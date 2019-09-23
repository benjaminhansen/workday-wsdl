<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Document_Data_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for documents associated with a worker.
 * @subpackage Structs
 */
class Worker_Document_Data_WWSType extends AbstractStructBase
{
    /**
     * The Worker_Document
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Document_WWSType[]
     */
    public $Worker_Document;
    /**
     * Constructor method for Worker_Document_Data_WWSType
     * @uses Worker_Document_Data_WWSType::setWorker_Document()
     * @param \WorkdayWsdl\\StructType\Worker_Document_WWSType[] $worker_Document
     */
    public function __construct(array $worker_Document = array())
    {
        $this
            ->setWorker_Document($worker_Document);
    }
    /**
     * Get Worker_Document value
     * @return \WorkdayWsdl\\StructType\Worker_Document_WWSType[]|null
     */
    public function getWorker_Document()
    {
        return $this->Worker_Document;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Document method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Document method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_DocumentForArrayConstraintsFromSetWorker_Document(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Document_Data_WWSTypeWorker_DocumentItem) {
            // validation for constraint: itemType
            if (!$worker_Document_Data_WWSTypeWorker_DocumentItem instanceof \WorkdayWsdl\\StructType\Worker_Document_WWSType) {
                $invalidValues[] = is_object($worker_Document_Data_WWSTypeWorker_DocumentItem) ? get_class($worker_Document_Data_WWSTypeWorker_DocumentItem) : sprintf('%s(%s)', gettype($worker_Document_Data_WWSTypeWorker_DocumentItem), var_export($worker_Document_Data_WWSTypeWorker_DocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Document property can only contain items of type \WorkdayWsdl\\StructType\Worker_Document_WWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Document value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Document_WWSType[] $worker_Document
     * @return \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType
     */
    public function setWorker_Document(array $worker_Document = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_DocumentArrayErrorMessage = self::validateWorker_DocumentForArrayConstraintsFromSetWorker_Document($worker_Document))) {
            throw new \InvalidArgumentException($worker_DocumentArrayErrorMessage, __LINE__);
        }
        $this->Worker_Document = $worker_Document;
        return $this;
    }
    /**
     * Add item to Worker_Document value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Document_WWSType $item
     * @return \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType
     */
    public function addToWorker_Document(\WorkdayWsdl\\StructType\Worker_Document_WWSType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Document_WWSType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Document property can only contain items of type \WorkdayWsdl\\StructType\Worker_Document_WWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType
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
