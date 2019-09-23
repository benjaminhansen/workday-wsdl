<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Event_Target_Transaction_Log_Rescind_And_Correct_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing transaction log entries that have been rescinded or corrected.
 * @subpackage Structs
 */
class Event_Target_Transaction_Log_Rescind_And_Correct_DataType extends AbstractStructBase
{
    /**
     * The Corrected_Or_Rescinded_Transaction_Log_Data
     * Meta information extracted from the WSDL
     * - documentation: The details of the transaction that has been rescinded or corrected.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Corrected_Or_Rescinded_Transaction_DataType[]
     */
    public $Corrected_Or_Rescinded_Transaction_Log_Data;
    /**
     * Constructor method for Event_Target_Transaction_Log_Rescind_And_Correct_DataType
     * @uses Event_Target_Transaction_Log_Rescind_And_Correct_DataType::setCorrected_Or_Rescinded_Transaction_Log_Data()
     * @param \StructType\Corrected_Or_Rescinded_Transaction_DataType[] $corrected_Or_Rescinded_Transaction_Log_Data
     */
    public function __construct(array $corrected_Or_Rescinded_Transaction_Log_Data = array())
    {
        $this
            ->setCorrected_Or_Rescinded_Transaction_Log_Data($corrected_Or_Rescinded_Transaction_Log_Data);
    }
    /**
     * Get Corrected_Or_Rescinded_Transaction_Log_Data value
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType[]|null
     */
    public function getCorrected_Or_Rescinded_Transaction_Log_Data()
    {
        return $this->Corrected_Or_Rescinded_Transaction_Log_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCorrected_Or_Rescinded_Transaction_Log_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorrected_Or_Rescinded_Transaction_Log_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorrected_Or_Rescinded_Transaction_Log_DataForArrayConstraintsFromSetCorrected_Or_Rescinded_Transaction_Log_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem) {
            // validation for constraint: itemType
            if (!$event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem instanceof \StructType\Corrected_Or_Rescinded_Transaction_DataType) {
                $invalidValues[] = is_object($event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem) ? get_class($event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem) : sprintf('%s(%s)', gettype($event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem), var_export($event_Target_Transaction_Log_Rescind_And_Correct_DataTypeCorrected_Or_Rescinded_Transaction_Log_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Corrected_Or_Rescinded_Transaction_Log_Data property can only contain items of type \StructType\Corrected_Or_Rescinded_Transaction_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Corrected_Or_Rescinded_Transaction_Log_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Corrected_Or_Rescinded_Transaction_DataType[] $corrected_Or_Rescinded_Transaction_Log_Data
     * @return \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType
     */
    public function setCorrected_Or_Rescinded_Transaction_Log_Data(array $corrected_Or_Rescinded_Transaction_Log_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($corrected_Or_Rescinded_Transaction_Log_DataArrayErrorMessage = self::validateCorrected_Or_Rescinded_Transaction_Log_DataForArrayConstraintsFromSetCorrected_Or_Rescinded_Transaction_Log_Data($corrected_Or_Rescinded_Transaction_Log_Data))) {
            throw new \InvalidArgumentException($corrected_Or_Rescinded_Transaction_Log_DataArrayErrorMessage, __LINE__);
        }
        $this->Corrected_Or_Rescinded_Transaction_Log_Data = $corrected_Or_Rescinded_Transaction_Log_Data;
        return $this;
    }
    /**
     * Add item to Corrected_Or_Rescinded_Transaction_Log_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Corrected_Or_Rescinded_Transaction_DataType $item
     * @return \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType
     */
    public function addToCorrected_Or_Rescinded_Transaction_Log_Data(\StructType\Corrected_Or_Rescinded_Transaction_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Corrected_Or_Rescinded_Transaction_DataType) {
            throw new \InvalidArgumentException(sprintf('The Corrected_Or_Rescinded_Transaction_Log_Data property can only contain items of type \StructType\Corrected_Or_Rescinded_Transaction_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Corrected_Or_Rescinded_Transaction_Log_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType
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
