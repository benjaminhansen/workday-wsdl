<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Career_Preferences_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Employees Career Interest Data.
 * @subpackage Structs
 */
class Career_Preferences_DataType extends AbstractStructBase
{
    /**
     * The Career_Interest_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if an employee has career preference.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Career_PreferenceObjectType[]
     */
    public $Career_Interest_Reference;
    /**
     * The Career_Interests
     * Meta information extracted from the WSDL
     * - documentation: Indicates Employee's career preference.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Career_Interests;
    /**
     * Constructor method for Career_Preferences_DataType
     * @uses Career_Preferences_DataType::setCareer_Interest_Reference()
     * @uses Career_Preferences_DataType::setCareer_Interests()
     * @param \StructType\Career_PreferenceObjectType[] $career_Interest_Reference
     * @param string $career_Interests
     */
    public function __construct(array $career_Interest_Reference = array(), $career_Interests = null)
    {
        $this
            ->setCareer_Interest_Reference($career_Interest_Reference)
            ->setCareer_Interests($career_Interests);
    }
    /**
     * Get Career_Interest_Reference value
     * @return \StructType\Career_PreferenceObjectType[]|null
     */
    public function getCareer_Interest_Reference()
    {
        return $this->Career_Interest_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCareer_Interest_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCareer_Interest_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCareer_Interest_ReferenceForArrayConstraintsFromSetCareer_Interest_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $career_Preferences_DataTypeCareer_Interest_ReferenceItem) {
            // validation for constraint: itemType
            if (!$career_Preferences_DataTypeCareer_Interest_ReferenceItem instanceof \StructType\Career_PreferenceObjectType) {
                $invalidValues[] = is_object($career_Preferences_DataTypeCareer_Interest_ReferenceItem) ? get_class($career_Preferences_DataTypeCareer_Interest_ReferenceItem) : sprintf('%s(%s)', gettype($career_Preferences_DataTypeCareer_Interest_ReferenceItem), var_export($career_Preferences_DataTypeCareer_Interest_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Career_Interest_Reference property can only contain items of type \StructType\Career_PreferenceObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Career_Interest_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Career_PreferenceObjectType[] $career_Interest_Reference
     * @return \StructType\Career_Preferences_DataType
     */
    public function setCareer_Interest_Reference(array $career_Interest_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($career_Interest_ReferenceArrayErrorMessage = self::validateCareer_Interest_ReferenceForArrayConstraintsFromSetCareer_Interest_Reference($career_Interest_Reference))) {
            throw new \InvalidArgumentException($career_Interest_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Career_Interest_Reference = $career_Interest_Reference;
        return $this;
    }
    /**
     * Add item to Career_Interest_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Career_PreferenceObjectType $item
     * @return \StructType\Career_Preferences_DataType
     */
    public function addToCareer_Interest_Reference(\StructType\Career_PreferenceObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Career_PreferenceObjectType) {
            throw new \InvalidArgumentException(sprintf('The Career_Interest_Reference property can only contain items of type \StructType\Career_PreferenceObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Career_Interest_Reference[] = $item;
        return $this;
    }
    /**
     * Get Career_Interests value
     * @return string|null
     */
    public function getCareer_Interests()
    {
        return $this->Career_Interests;
    }
    /**
     * Set Career_Interests value
     * @param string $career_Interests
     * @return \StructType\Career_Preferences_DataType
     */
    public function setCareer_Interests($career_Interests = null)
    {
        // validation for constraint: string
        if (!is_null($career_Interests) && !is_string($career_Interests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($career_Interests, true), gettype($career_Interests)), __LINE__);
        }
        $this->Career_Interests = $career_Interests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Career_Preferences_DataType
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
