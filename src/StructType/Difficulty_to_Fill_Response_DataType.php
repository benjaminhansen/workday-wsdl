<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Difficulty_to_Fill_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the difficulty to fill data.
 * @subpackage Structs
 */
class Difficulty_to_Fill_Response_DataType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill
     * Meta information extracted from the WSDL
     * - documentation: Difficulty to Fill
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Difficulty_to_FillType[]
     */
    public $Difficulty_to_Fill;
    /**
     * Constructor method for Difficulty_to_Fill_Response_DataType
     * @uses Difficulty_to_Fill_Response_DataType::setDifficulty_to_Fill()
     * @param \StructType\Difficulty_to_FillType[] $difficulty_to_Fill
     */
    public function __construct(array $difficulty_to_Fill = array())
    {
        $this
            ->setDifficulty_to_Fill($difficulty_to_Fill);
    }
    /**
     * Get Difficulty_to_Fill value
     * @return \StructType\Difficulty_to_FillType[]|null
     */
    public function getDifficulty_to_Fill()
    {
        return $this->Difficulty_to_Fill;
    }
    /**
     * This method is responsible for validating the values passed to the setDifficulty_to_Fill method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDifficulty_to_Fill method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDifficulty_to_FillForArrayConstraintsFromSetDifficulty_to_Fill(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem) {
            // validation for constraint: itemType
            if (!$difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem instanceof \StructType\Difficulty_to_FillType) {
                $invalidValues[] = is_object($difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem) ? get_class($difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem) : sprintf('%s(%s)', gettype($difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem), var_export($difficulty_to_Fill_Response_DataTypeDifficulty_to_FillItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Difficulty_to_Fill property can only contain items of type \StructType\Difficulty_to_FillType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Difficulty_to_Fill value
     * @throws \InvalidArgumentException
     * @param \StructType\Difficulty_to_FillType[] $difficulty_to_Fill
     * @return \StructType\Difficulty_to_Fill_Response_DataType
     */
    public function setDifficulty_to_Fill(array $difficulty_to_Fill = array())
    {
        // validation for constraint: array
        if ('' !== ($difficulty_to_FillArrayErrorMessage = self::validateDifficulty_to_FillForArrayConstraintsFromSetDifficulty_to_Fill($difficulty_to_Fill))) {
            throw new \InvalidArgumentException($difficulty_to_FillArrayErrorMessage, __LINE__);
        }
        $this->Difficulty_to_Fill = $difficulty_to_Fill;
        return $this;
    }
    /**
     * Add item to Difficulty_to_Fill value
     * @throws \InvalidArgumentException
     * @param \StructType\Difficulty_to_FillType $item
     * @return \StructType\Difficulty_to_Fill_Response_DataType
     */
    public function addToDifficulty_to_Fill(\StructType\Difficulty_to_FillType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Difficulty_to_FillType) {
            throw new \InvalidArgumentException(sprintf('The Difficulty_to_Fill property can only contain items of type \StructType\Difficulty_to_FillType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Difficulty_to_Fill[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Difficulty_to_Fill_Response_DataType
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
