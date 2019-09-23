<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Competency_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Competency Qualifications. Allows all competency qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing competency qualifications with those sent in the web service
 * @subpackage Structs
 */
class Competency_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Competency_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Competency_Qualification_Profile_Replacement_DataType[]
     */
    public $Competency_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes all competency qualifications for the position restriction or job profile.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Competency_Qualification_ReplacementType
     * @uses Competency_Qualification_ReplacementType::setCompetency_Qualification_Replacement_Data()
     * @uses Competency_Qualification_ReplacementType::setDelete()
     * @param \StructType\Competency_Qualification_Profile_Replacement_DataType[] $competency_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $competency_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setCompetency_Qualification_Replacement_Data($competency_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Competency_Qualification_Replacement_Data value
     * @return \StructType\Competency_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getCompetency_Qualification_Replacement_Data()
    {
        return $this->Competency_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompetency_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompetency_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompetency_Qualification_Replacement_DataForArrayConstraintsFromSetCompetency_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem instanceof \StructType\Competency_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem) ? get_class($competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem), var_export($competency_Qualification_ReplacementTypeCompetency_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Competency_Qualification_Replacement_Data property can only contain items of type \StructType\Competency_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Competency_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Competency_Qualification_Profile_Replacement_DataType[] $competency_Qualification_Replacement_Data
     * @return \StructType\Competency_Qualification_ReplacementType
     */
    public function setCompetency_Qualification_Replacement_Data(array $competency_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($competency_Qualification_Replacement_DataArrayErrorMessage = self::validateCompetency_Qualification_Replacement_DataForArrayConstraintsFromSetCompetency_Qualification_Replacement_Data($competency_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($competency_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Competency_Qualification_Replacement_Data = $competency_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Competency_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Competency_Qualification_Profile_Replacement_DataType $item
     * @return \StructType\Competency_Qualification_ReplacementType
     */
    public function addToCompetency_Qualification_Replacement_Data(\StructType\Competency_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Competency_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Competency_Qualification_Replacement_Data property can only contain items of type \StructType\Competency_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Competency_Qualification_Replacement_Data[] = $item;
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
     * @return \StructType\Competency_Qualification_ReplacementType
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
     * @return \StructType\Competency_Qualification_ReplacementType
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
