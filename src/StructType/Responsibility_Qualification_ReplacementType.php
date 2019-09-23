<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Responsibility_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Responsibility Qualifications. Allows all responsibility qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing qualifications with those sent in the web service.
 * @subpackage Structs
 */
class Responsibility_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Responsibility_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Responsibility_Qualification_Profile_Replacement_DataType[]
     */
    public $Responsibility_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes all responsibility qualifications for the position restriction or job profile, and doesn't send any additional responsibility qualifications.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Responsibility_Qualification_ReplacementType
     * @uses Responsibility_Qualification_ReplacementType::setResponsibility_Qualification_Replacement_Data()
     * @uses Responsibility_Qualification_ReplacementType::setDelete()
     * @param \StructType\Responsibility_Qualification_Profile_Replacement_DataType[] $responsibility_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $responsibility_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setResponsibility_Qualification_Replacement_Data($responsibility_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Responsibility_Qualification_Replacement_Data value
     * @return \StructType\Responsibility_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getResponsibility_Qualification_Replacement_Data()
    {
        return $this->Responsibility_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setResponsibility_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponsibility_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponsibility_Qualification_Replacement_DataForArrayConstraintsFromSetResponsibility_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem instanceof \StructType\Responsibility_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem) ? get_class($responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem), var_export($responsibility_Qualification_ReplacementTypeResponsibility_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Responsibility_Qualification_Replacement_Data property can only contain items of type \StructType\Responsibility_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Responsibility_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Responsibility_Qualification_Profile_Replacement_DataType[] $responsibility_Qualification_Replacement_Data
     * @return \StructType\Responsibility_Qualification_ReplacementType
     */
    public function setResponsibility_Qualification_Replacement_Data(array $responsibility_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($responsibility_Qualification_Replacement_DataArrayErrorMessage = self::validateResponsibility_Qualification_Replacement_DataForArrayConstraintsFromSetResponsibility_Qualification_Replacement_Data($responsibility_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($responsibility_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Responsibility_Qualification_Replacement_Data = $responsibility_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Responsibility_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Responsibility_Qualification_Profile_Replacement_DataType $item
     * @return \StructType\Responsibility_Qualification_ReplacementType
     */
    public function addToResponsibility_Qualification_Replacement_Data(\StructType\Responsibility_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Responsibility_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Responsibility_Qualification_Replacement_Data property can only contain items of type \StructType\Responsibility_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Responsibility_Qualification_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Responsibility_Qualification_ReplacementType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Responsibility_Qualification_ReplacementType
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
