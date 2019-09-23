<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Internal_Project_ExperienceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Internal Project Experience information.
 * @subpackage Structs
 */
class Internal_Project_ExperienceType extends AbstractStructBase
{
    /**
     * The Internal_Project_Experience_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Internal Project Experience.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType
     */
    public $Internal_Project_Experience_Reference;
    /**
     * The Internal_Project_Experience_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Internal Project Experience information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType[]
     */
    public $Internal_Project_Experience_Data;
    /**
     * Constructor method for Internal_Project_ExperienceType
     * @uses Internal_Project_ExperienceType::setInternal_Project_Experience_Reference()
     * @uses Internal_Project_ExperienceType::setInternal_Project_Experience_Data()
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType $internal_Project_Experience_Reference
     * @param \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType[] $internal_Project_Experience_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType $internal_Project_Experience_Reference = null, array $internal_Project_Experience_Data = array())
    {
        $this
            ->setInternal_Project_Experience_Reference($internal_Project_Experience_Reference)
            ->setInternal_Project_Experience_Data($internal_Project_Experience_Data);
    }
    /**
     * Get Internal_Project_Experience_Reference value
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType|null
     */
    public function getInternal_Project_Experience_Reference()
    {
        return $this->Internal_Project_Experience_Reference;
    }
    /**
     * Set Internal_Project_Experience_Reference value
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType $internal_Project_Experience_Reference
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceType
     */
    public function setInternal_Project_Experience_Reference(\WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType $internal_Project_Experience_Reference = null)
    {
        $this->Internal_Project_Experience_Reference = $internal_Project_Experience_Reference;
        return $this;
    }
    /**
     * Get Internal_Project_Experience_Data value
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType[]|null
     */
    public function getInternal_Project_Experience_Data()
    {
        return $this->Internal_Project_Experience_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInternal_Project_Experience_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternal_Project_Experience_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternal_Project_Experience_DataForArrayConstraintsFromSetInternal_Project_Experience_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internal_Project_ExperienceTypeInternal_Project_Experience_DataItem) {
            // validation for constraint: itemType
            if (!$internal_Project_ExperienceTypeInternal_Project_Experience_DataItem instanceof \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType) {
                $invalidValues[] = is_object($internal_Project_ExperienceTypeInternal_Project_Experience_DataItem) ? get_class($internal_Project_ExperienceTypeInternal_Project_Experience_DataItem) : sprintf('%s(%s)', gettype($internal_Project_ExperienceTypeInternal_Project_Experience_DataItem), var_export($internal_Project_ExperienceTypeInternal_Project_Experience_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Internal_Project_Experience_Data property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Internal_Project_Experience_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType[] $internal_Project_Experience_Data
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceType
     */
    public function setInternal_Project_Experience_Data(array $internal_Project_Experience_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($internal_Project_Experience_DataArrayErrorMessage = self::validateInternal_Project_Experience_DataForArrayConstraintsFromSetInternal_Project_Experience_Data($internal_Project_Experience_Data))) {
            throw new \InvalidArgumentException($internal_Project_Experience_DataArrayErrorMessage, __LINE__);
        }
        $this->Internal_Project_Experience_Data = $internal_Project_Experience_Data;
        return $this;
    }
    /**
     * Add item to Internal_Project_Experience_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType $item
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceType
     */
    public function addToInternal_Project_Experience_Data(\WorkdayWsdl\\StructType\Internal_Project_Experience_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType) {
            throw new \InvalidArgumentException(sprintf('The Internal_Project_Experience_Data property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Internal_Project_Experience_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceType
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
