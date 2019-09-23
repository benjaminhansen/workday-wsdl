<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Corrected_Or_Rescinded_Transaction_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Transaction Data for an event that has been rescinded or corrected.
 * @subpackage Structs
 */
class Corrected_Or_Rescinded_Transaction_DataType extends AbstractStructBase
{
    /**
     * The Main_Transaction_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Main_Transaction_Log_Entry_DataType[]
     */
    public $Main_Transaction_Data;
    /**
     * The Correction_Or_Rescind_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType[]
     */
    public $Correction_Or_Rescind_Data;
    /**
     * Constructor method for Corrected_Or_Rescinded_Transaction_DataType
     * @uses Corrected_Or_Rescinded_Transaction_DataType::setMain_Transaction_Data()
     * @uses Corrected_Or_Rescinded_Transaction_DataType::setCorrection_Or_Rescind_Data()
     * @param \StructType\Main_Transaction_Log_Entry_DataType[] $main_Transaction_Data
     * @param \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType[] $correction_Or_Rescind_Data
     */
    public function __construct(array $main_Transaction_Data = array(), array $correction_Or_Rescind_Data = array())
    {
        $this
            ->setMain_Transaction_Data($main_Transaction_Data)
            ->setCorrection_Or_Rescind_Data($correction_Or_Rescind_Data);
    }
    /**
     * Get Main_Transaction_Data value
     * @return \StructType\Main_Transaction_Log_Entry_DataType[]|null
     */
    public function getMain_Transaction_Data()
    {
        return $this->Main_Transaction_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMain_Transaction_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMain_Transaction_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMain_Transaction_DataForArrayConstraintsFromSetMain_Transaction_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem) {
            // validation for constraint: itemType
            if (!$corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem instanceof \StructType\Main_Transaction_Log_Entry_DataType) {
                $invalidValues[] = is_object($corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem) ? get_class($corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem) : sprintf('%s(%s)', gettype($corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem), var_export($corrected_Or_Rescinded_Transaction_DataTypeMain_Transaction_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Main_Transaction_Data property can only contain items of type \StructType\Main_Transaction_Log_Entry_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Main_Transaction_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Main_Transaction_Log_Entry_DataType[] $main_Transaction_Data
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType
     */
    public function setMain_Transaction_Data(array $main_Transaction_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($main_Transaction_DataArrayErrorMessage = self::validateMain_Transaction_DataForArrayConstraintsFromSetMain_Transaction_Data($main_Transaction_Data))) {
            throw new \InvalidArgumentException($main_Transaction_DataArrayErrorMessage, __LINE__);
        }
        $this->Main_Transaction_Data = $main_Transaction_Data;
        return $this;
    }
    /**
     * Add item to Main_Transaction_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Main_Transaction_Log_Entry_DataType $item
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType
     */
    public function addToMain_Transaction_Data(\StructType\Main_Transaction_Log_Entry_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Main_Transaction_Log_Entry_DataType) {
            throw new \InvalidArgumentException(sprintf('The Main_Transaction_Data property can only contain items of type \StructType\Main_Transaction_Log_Entry_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Main_Transaction_Data[] = $item;
        return $this;
    }
    /**
     * Get Correction_Or_Rescind_Data value
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType[]|null
     */
    public function getCorrection_Or_Rescind_Data()
    {
        return $this->Correction_Or_Rescind_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCorrection_Or_Rescind_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorrection_Or_Rescind_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorrection_Or_Rescind_DataForArrayConstraintsFromSetCorrection_Or_Rescind_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem) {
            // validation for constraint: itemType
            if (!$corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem instanceof \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType) {
                $invalidValues[] = is_object($corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem) ? get_class($corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem) : sprintf('%s(%s)', gettype($corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem), var_export($corrected_Or_Rescinded_Transaction_DataTypeCorrection_Or_Rescind_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Correction_Or_Rescind_Data property can only contain items of type \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Correction_Or_Rescind_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType[] $correction_Or_Rescind_Data
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType
     */
    public function setCorrection_Or_Rescind_Data(array $correction_Or_Rescind_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($correction_Or_Rescind_DataArrayErrorMessage = self::validateCorrection_Or_Rescind_DataForArrayConstraintsFromSetCorrection_Or_Rescind_Data($correction_Or_Rescind_Data))) {
            throw new \InvalidArgumentException($correction_Or_Rescind_DataArrayErrorMessage, __LINE__);
        }
        $this->Correction_Or_Rescind_Data = $correction_Or_Rescind_Data;
        return $this;
    }
    /**
     * Add item to Correction_Or_Rescind_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType $item
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType
     */
    public function addToCorrection_Or_Rescind_Data(\StructType\Transaction_Log_Rescind_And_Correct_Event_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType) {
            throw new \InvalidArgumentException(sprintf('The Correction_Or_Rescind_Data property can only contain items of type \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Correction_Or_Rescind_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Corrected_Or_Rescinded_Transaction_DataType
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
