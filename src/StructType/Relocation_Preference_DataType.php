<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Relocation_Preference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the information about the employee's willingness to relocate as part of their job.
 * @subpackage Structs
 */
class Relocation_Preference_DataType extends AbstractStructBase
{
    /**
     * The Short_Term_Relocation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if an employee is willing to relocate in the short term to another geographic location as part of their job.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType
     */
    public $Short_Term_Relocation_Reference;
    /**
     * The Short_Term_Relocation_Area__Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the geographic area that the employee is willing to relocate to as part of their job. This is only valid when the employee is willing to relocate (Willing to Relocate = Yes or Maybe).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relocation_AreaObjectType[]
     */
    public $Short_Term_Relocation_Area__Reference;
    /**
     * The Long_Term_Relocation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if an employee is willing to relocate in the long term to another geographic location as part of their job.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType
     */
    public $Long_Term_Relocation_Reference;
    /**
     * The Long_Term_Relocation_Area__Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the geographic area that the employee is willing to relocate to as part of their job. This is only valid when the employee is willing to relocate (Willing to Relocate = Yes or Maybe).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relocation_AreaObjectType[]
     */
    public $Long_Term_Relocation_Area__Reference;
    /**
     * The Additional_Information
     * Meta information extracted from the WSDL
     * - documentation: More information about why (or why not) the employee is willing to relocate as part of their job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Additional_Information;
    /**
     * Constructor method for Relocation_Preference_DataType
     * @uses Relocation_Preference_DataType::setShort_Term_Relocation_Reference()
     * @uses Relocation_Preference_DataType::setShort_Term_Relocation_Area__Reference()
     * @uses Relocation_Preference_DataType::setLong_Term_Relocation_Reference()
     * @uses Relocation_Preference_DataType::setLong_Term_Relocation_Area__Reference()
     * @uses Relocation_Preference_DataType::setAdditional_Information()
     * @param \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $short_Term_Relocation_Reference
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType[] $short_Term_Relocation_Area__Reference
     * @param \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $long_Term_Relocation_Reference
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType[] $long_Term_Relocation_Area__Reference
     * @param string $additional_Information
     */
    public function __construct(\WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $short_Term_Relocation_Reference = null, array $short_Term_Relocation_Area__Reference = array(), \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $long_Term_Relocation_Reference = null, array $long_Term_Relocation_Area__Reference = array(), $additional_Information = null)
    {
        $this
            ->setShort_Term_Relocation_Reference($short_Term_Relocation_Reference)
            ->setShort_Term_Relocation_Area__Reference($short_Term_Relocation_Area__Reference)
            ->setLong_Term_Relocation_Reference($long_Term_Relocation_Reference)
            ->setLong_Term_Relocation_Area__Reference($long_Term_Relocation_Area__Reference)
            ->setAdditional_Information($additional_Information);
    }
    /**
     * Get Short_Term_Relocation_Reference value
     * @return \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType|null
     */
    public function getShort_Term_Relocation_Reference()
    {
        return $this->Short_Term_Relocation_Reference;
    }
    /**
     * Set Short_Term_Relocation_Reference value
     * @param \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $short_Term_Relocation_Reference
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function setShort_Term_Relocation_Reference(\WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $short_Term_Relocation_Reference = null)
    {
        $this->Short_Term_Relocation_Reference = $short_Term_Relocation_Reference;
        return $this;
    }
    /**
     * Get Short_Term_Relocation_Area__Reference value
     * @return \WorkdayWsdl\\StructType\Relocation_AreaObjectType[]|null
     */
    public function getShort_Term_Relocation_Area__Reference()
    {
        return $this->Short_Term_Relocation_Area__Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setShort_Term_Relocation_Area__Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShort_Term_Relocation_Area__Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShort_Term_Relocation_Area__ReferenceForArrayConstraintsFromSetShort_Term_Relocation_Area__Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem) {
            // validation for constraint: itemType
            if (!$relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem instanceof \WorkdayWsdl\\StructType\Relocation_AreaObjectType) {
                $invalidValues[] = is_object($relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem) ? get_class($relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem) : sprintf('%s(%s)', gettype($relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem), var_export($relocation_Preference_DataTypeShort_Term_Relocation_Area__ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Short_Term_Relocation_Area__Reference property can only contain items of type \WorkdayWsdl\\StructType\Relocation_AreaObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Short_Term_Relocation_Area__Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType[] $short_Term_Relocation_Area__Reference
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function setShort_Term_Relocation_Area__Reference(array $short_Term_Relocation_Area__Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($short_Term_Relocation_Area__ReferenceArrayErrorMessage = self::validateShort_Term_Relocation_Area__ReferenceForArrayConstraintsFromSetShort_Term_Relocation_Area__Reference($short_Term_Relocation_Area__Reference))) {
            throw new \InvalidArgumentException($short_Term_Relocation_Area__ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Short_Term_Relocation_Area__Reference = $short_Term_Relocation_Area__Reference;
        return $this;
    }
    /**
     * Add item to Short_Term_Relocation_Area__Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType $item
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function addToShort_Term_Relocation_Area__Reference(\WorkdayWsdl\\StructType\Relocation_AreaObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Relocation_AreaObjectType) {
            throw new \InvalidArgumentException(sprintf('The Short_Term_Relocation_Area__Reference property can only contain items of type \WorkdayWsdl\\StructType\Relocation_AreaObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Short_Term_Relocation_Area__Reference[] = $item;
        return $this;
    }
    /**
     * Get Long_Term_Relocation_Reference value
     * @return \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType|null
     */
    public function getLong_Term_Relocation_Reference()
    {
        return $this->Long_Term_Relocation_Reference;
    }
    /**
     * Set Long_Term_Relocation_Reference value
     * @param \WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $long_Term_Relocation_Reference
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function setLong_Term_Relocation_Reference(\WorkdayWsdl\\StructType\Common_Boolean_EnumerationObjectType $long_Term_Relocation_Reference = null)
    {
        $this->Long_Term_Relocation_Reference = $long_Term_Relocation_Reference;
        return $this;
    }
    /**
     * Get Long_Term_Relocation_Area__Reference value
     * @return \WorkdayWsdl\\StructType\Relocation_AreaObjectType[]|null
     */
    public function getLong_Term_Relocation_Area__Reference()
    {
        return $this->Long_Term_Relocation_Area__Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLong_Term_Relocation_Area__Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLong_Term_Relocation_Area__Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLong_Term_Relocation_Area__ReferenceForArrayConstraintsFromSetLong_Term_Relocation_Area__Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem) {
            // validation for constraint: itemType
            if (!$relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem instanceof \WorkdayWsdl\\StructType\Relocation_AreaObjectType) {
                $invalidValues[] = is_object($relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem) ? get_class($relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem) : sprintf('%s(%s)', gettype($relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem), var_export($relocation_Preference_DataTypeLong_Term_Relocation_Area__ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Long_Term_Relocation_Area__Reference property can only contain items of type \WorkdayWsdl\\StructType\Relocation_AreaObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Long_Term_Relocation_Area__Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType[] $long_Term_Relocation_Area__Reference
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function setLong_Term_Relocation_Area__Reference(array $long_Term_Relocation_Area__Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($long_Term_Relocation_Area__ReferenceArrayErrorMessage = self::validateLong_Term_Relocation_Area__ReferenceForArrayConstraintsFromSetLong_Term_Relocation_Area__Reference($long_Term_Relocation_Area__Reference))) {
            throw new \InvalidArgumentException($long_Term_Relocation_Area__ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Long_Term_Relocation_Area__Reference = $long_Term_Relocation_Area__Reference;
        return $this;
    }
    /**
     * Add item to Long_Term_Relocation_Area__Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relocation_AreaObjectType $item
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function addToLong_Term_Relocation_Area__Reference(\WorkdayWsdl\\StructType\Relocation_AreaObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Relocation_AreaObjectType) {
            throw new \InvalidArgumentException(sprintf('The Long_Term_Relocation_Area__Reference property can only contain items of type \WorkdayWsdl\\StructType\Relocation_AreaObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Long_Term_Relocation_Area__Reference[] = $item;
        return $this;
    }
    /**
     * Get Additional_Information value
     * @return string|null
     */
    public function getAdditional_Information()
    {
        return $this->Additional_Information;
    }
    /**
     * Set Additional_Information value
     * @param string $additional_Information
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public function setAdditional_Information($additional_Information = null)
    {
        // validation for constraint: string
        if (!is_null($additional_Information) && !is_string($additional_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_Information, true), gettype($additional_Information)), __LINE__);
        }
        $this->Additional_Information = $additional_Information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType
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
