<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The "Response Data" element contains the core data results based on the inbound request that was processed.
 * @subpackage Structs
 */
class Disability_Response_DataType extends AbstractStructBase
{
    /**
     * The Disability
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Disability. Does not support the update of Disability Status. Use Put Applicant web service to update the Disability Status for a Person.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisabilityType[]
     */
    public $Disability;
    /**
     * Constructor method for Disability_Response_DataType
     * @uses Disability_Response_DataType::setDisability()
     * @param \StructType\DisabilityType[] $disability
     */
    public function __construct(array $disability = array())
    {
        $this
            ->setDisability($disability);
    }
    /**
     * Get Disability value
     * @return \StructType\DisabilityType[]|null
     */
    public function getDisability()
    {
        return $this->Disability;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabilityForArrayConstraintsFromSetDisability(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disability_Response_DataTypeDisabilityItem) {
            // validation for constraint: itemType
            if (!$disability_Response_DataTypeDisabilityItem instanceof \StructType\DisabilityType) {
                $invalidValues[] = is_object($disability_Response_DataTypeDisabilityItem) ? get_class($disability_Response_DataTypeDisabilityItem) : sprintf('%s(%s)', gettype($disability_Response_DataTypeDisabilityItem), var_export($disability_Response_DataTypeDisabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability property can only contain items of type \StructType\DisabilityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability value
     * @throws \InvalidArgumentException
     * @param \StructType\DisabilityType[] $disability
     * @return \StructType\Disability_Response_DataType
     */
    public function setDisability(array $disability = array())
    {
        // validation for constraint: array
        if ('' !== ($disabilityArrayErrorMessage = self::validateDisabilityForArrayConstraintsFromSetDisability($disability))) {
            throw new \InvalidArgumentException($disabilityArrayErrorMessage, __LINE__);
        }
        $this->Disability = $disability;
        return $this;
    }
    /**
     * Add item to Disability value
     * @throws \InvalidArgumentException
     * @param \StructType\DisabilityType $item
     * @return \StructType\Disability_Response_DataType
     */
    public function addToDisability(\StructType\DisabilityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisabilityType) {
            throw new \InvalidArgumentException(sprintf('The Disability property can only contain items of type \StructType\DisabilityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Disability_Response_DataType
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
