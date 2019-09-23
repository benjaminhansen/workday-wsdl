<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Succession_Profile_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about all the succession plans that this employee is on.
 * @subpackage Structs
 */
class Succession_Profile_DataType extends AbstractStructBase
{
    /**
     * The Candidate_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Succession_Plan_Candidate_DataType[]
     */
    public $Candidate_Data;
    /**
     * Constructor method for Succession_Profile_DataType
     * @uses Succession_Profile_DataType::setCandidate_Data()
     * @param \StructType\Succession_Plan_Candidate_DataType[] $candidate_Data
     */
    public function __construct(array $candidate_Data = array())
    {
        $this
            ->setCandidate_Data($candidate_Data);
    }
    /**
     * Get Candidate_Data value
     * @return \StructType\Succession_Plan_Candidate_DataType[]|null
     */
    public function getCandidate_Data()
    {
        return $this->Candidate_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCandidate_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCandidate_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCandidate_DataForArrayConstraintsFromSetCandidate_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $succession_Profile_DataTypeCandidate_DataItem) {
            // validation for constraint: itemType
            if (!$succession_Profile_DataTypeCandidate_DataItem instanceof \StructType\Succession_Plan_Candidate_DataType) {
                $invalidValues[] = is_object($succession_Profile_DataTypeCandidate_DataItem) ? get_class($succession_Profile_DataTypeCandidate_DataItem) : sprintf('%s(%s)', gettype($succession_Profile_DataTypeCandidate_DataItem), var_export($succession_Profile_DataTypeCandidate_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Candidate_Data property can only contain items of type \StructType\Succession_Plan_Candidate_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Candidate_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Succession_Plan_Candidate_DataType[] $candidate_Data
     * @return \StructType\Succession_Profile_DataType
     */
    public function setCandidate_Data(array $candidate_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($candidate_DataArrayErrorMessage = self::validateCandidate_DataForArrayConstraintsFromSetCandidate_Data($candidate_Data))) {
            throw new \InvalidArgumentException($candidate_DataArrayErrorMessage, __LINE__);
        }
        $this->Candidate_Data = $candidate_Data;
        return $this;
    }
    /**
     * Add item to Candidate_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Succession_Plan_Candidate_DataType $item
     * @return \StructType\Succession_Profile_DataType
     */
    public function addToCandidate_Data(\StructType\Succession_Plan_Candidate_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Succession_Plan_Candidate_DataType) {
            throw new \InvalidArgumentException(sprintf('The Candidate_Data property can only contain items of type \StructType\Succession_Plan_Candidate_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Candidate_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Succession_Profile_DataType
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
