<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of a Former Worker and its associated data.
 * @subpackage Structs
 */
class Former_Worker_Response_DataType extends AbstractStructBase
{
    /**
     * The Former_Worker
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Former_WorkerType[]
     */
    public $Former_Worker;
    /**
     * Constructor method for Former_Worker_Response_DataType
     * @uses Former_Worker_Response_DataType::setFormer_Worker()
     * @param \StructType\Former_WorkerType[] $former_Worker
     */
    public function __construct(array $former_Worker = array())
    {
        $this
            ->setFormer_Worker($former_Worker);
    }
    /**
     * Get Former_Worker value
     * @return \StructType\Former_WorkerType[]|null
     */
    public function getFormer_Worker()
    {
        return $this->Former_Worker;
    }
    /**
     * This method is responsible for validating the values passed to the setFormer_Worker method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormer_Worker method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormer_WorkerForArrayConstraintsFromSetFormer_Worker(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Response_DataTypeFormer_WorkerItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Response_DataTypeFormer_WorkerItem instanceof \StructType\Former_WorkerType) {
                $invalidValues[] = is_object($former_Worker_Response_DataTypeFormer_WorkerItem) ? get_class($former_Worker_Response_DataTypeFormer_WorkerItem) : sprintf('%s(%s)', gettype($former_Worker_Response_DataTypeFormer_WorkerItem), var_export($former_Worker_Response_DataTypeFormer_WorkerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Former_Worker property can only contain items of type \StructType\Former_WorkerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Former_Worker value
     * @throws \InvalidArgumentException
     * @param \StructType\Former_WorkerType[] $former_Worker
     * @return \StructType\Former_Worker_Response_DataType
     */
    public function setFormer_Worker(array $former_Worker = array())
    {
        // validation for constraint: array
        if ('' !== ($former_WorkerArrayErrorMessage = self::validateFormer_WorkerForArrayConstraintsFromSetFormer_Worker($former_Worker))) {
            throw new \InvalidArgumentException($former_WorkerArrayErrorMessage, __LINE__);
        }
        $this->Former_Worker = $former_Worker;
        return $this;
    }
    /**
     * Add item to Former_Worker value
     * @throws \InvalidArgumentException
     * @param \StructType\Former_WorkerType $item
     * @return \StructType\Former_Worker_Response_DataType
     */
    public function addToFormer_Worker(\StructType\Former_WorkerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Former_WorkerType) {
            throw new \InvalidArgumentException(sprintf('The Former_Worker property can only contain items of type \StructType\Former_WorkerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Former_Worker[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_Response_DataType
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
