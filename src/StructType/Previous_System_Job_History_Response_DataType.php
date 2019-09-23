<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Previous_System_Job_History_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each Worker and their job history from a previous system.
 * @subpackage Structs
 */
class Previous_System_Job_History_Response_DataType extends AbstractStructBase
{
    /**
     * The Previous_System_Job_History
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Previous_System_Job_History_Get_DataType[]
     */
    public $Previous_System_Job_History;
    /**
     * Constructor method for Previous_System_Job_History_Response_DataType
     * @uses Previous_System_Job_History_Response_DataType::setPrevious_System_Job_History()
     * @param \StructType\Previous_System_Job_History_Get_DataType[] $previous_System_Job_History
     */
    public function __construct(array $previous_System_Job_History = array())
    {
        $this
            ->setPrevious_System_Job_History($previous_System_Job_History);
    }
    /**
     * Get Previous_System_Job_History value
     * @return \StructType\Previous_System_Job_History_Get_DataType[]|null
     */
    public function getPrevious_System_Job_History()
    {
        return $this->Previous_System_Job_History;
    }
    /**
     * This method is responsible for validating the values passed to the setPrevious_System_Job_History method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrevious_System_Job_History method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrevious_System_Job_HistoryForArrayConstraintsFromSetPrevious_System_Job_History(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem) {
            // validation for constraint: itemType
            if (!$previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem instanceof \StructType\Previous_System_Job_History_Get_DataType) {
                $invalidValues[] = is_object($previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem) ? get_class($previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem) : sprintf('%s(%s)', gettype($previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem), var_export($previous_System_Job_History_Response_DataTypePrevious_System_Job_HistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Previous_System_Job_History property can only contain items of type \StructType\Previous_System_Job_History_Get_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Previous_System_Job_History value
     * @throws \InvalidArgumentException
     * @param \StructType\Previous_System_Job_History_Get_DataType[] $previous_System_Job_History
     * @return \StructType\Previous_System_Job_History_Response_DataType
     */
    public function setPrevious_System_Job_History(array $previous_System_Job_History = array())
    {
        // validation for constraint: array
        if ('' !== ($previous_System_Job_HistoryArrayErrorMessage = self::validatePrevious_System_Job_HistoryForArrayConstraintsFromSetPrevious_System_Job_History($previous_System_Job_History))) {
            throw new \InvalidArgumentException($previous_System_Job_HistoryArrayErrorMessage, __LINE__);
        }
        $this->Previous_System_Job_History = $previous_System_Job_History;
        return $this;
    }
    /**
     * Add item to Previous_System_Job_History value
     * @throws \InvalidArgumentException
     * @param \StructType\Previous_System_Job_History_Get_DataType $item
     * @return \StructType\Previous_System_Job_History_Response_DataType
     */
    public function addToPrevious_System_Job_History(\StructType\Previous_System_Job_History_Get_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Previous_System_Job_History_Get_DataType) {
            throw new \InvalidArgumentException(sprintf('The Previous_System_Job_History property can only contain items of type \StructType\Previous_System_Job_History_Get_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Previous_System_Job_History[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Previous_System_Job_History_Response_DataType
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
