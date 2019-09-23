<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Disability must exist for the given value of Disability Name and the person's location. | Reference element representing a unique instance of Disability. Does not support the update of Disability Status. Use Put
 * Applicant web service to update the Disability Status for a Person.
 * @subpackage Structs
 */
class Disability_ReferenceType extends AbstractStructBase
{
    /**
     * The Disability_Name
     * Meta information extracted from the WSDL
     * - documentation: Disability for a Person. Creates a new Disability Status without a Disability Status Date. To update the Disability Status Date for a Person, use the Put Applicant web service.
     * - maxOccurs: 1
     * @var string
     */
    public $Disability_Name;
    /**
     * The Regulatory_Region_Organization_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_ReferenceType[]
     */
    public $Regulatory_Region_Organization_Reference;
    /**
     * Constructor method for Disability_ReferenceType
     * @uses Disability_ReferenceType::setDisability_Name()
     * @uses Disability_ReferenceType::setRegulatory_Region_Organization_Reference()
     * @param string $disability_Name
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType[] $regulatory_Region_Organization_Reference
     */
    public function __construct($disability_Name = null, array $regulatory_Region_Organization_Reference = array())
    {
        $this
            ->setDisability_Name($disability_Name)
            ->setRegulatory_Region_Organization_Reference($regulatory_Region_Organization_Reference);
    }
    /**
     * Get Disability_Name value
     * @return string|null
     */
    public function getDisability_Name()
    {
        return $this->Disability_Name;
    }
    /**
     * Set Disability_Name value
     * @param string $disability_Name
     * @return \WorkdayWsdl\\StructType\Disability_ReferenceType
     */
    public function setDisability_Name($disability_Name = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Name) && !is_string($disability_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Name, true), gettype($disability_Name)), __LINE__);
        }
        $this->Disability_Name = $disability_Name;
        return $this;
    }
    /**
     * Get Regulatory_Region_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_ReferenceType[]|null
     */
    public function getRegulatory_Region_Organization_Reference()
    {
        return $this->Regulatory_Region_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRegulatory_Region_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegulatory_Region_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegulatory_Region_Organization_ReferenceForArrayConstraintsFromSetRegulatory_Region_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\Organization_ReferenceType) {
                $invalidValues[] = is_object($disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem) ? get_class($disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem), var_export($disability_ReferenceTypeRegulatory_Region_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Regulatory_Region_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Organization_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Regulatory_Region_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType[] $regulatory_Region_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Disability_ReferenceType
     */
    public function setRegulatory_Region_Organization_Reference(array $regulatory_Region_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($regulatory_Region_Organization_ReferenceArrayErrorMessage = self::validateRegulatory_Region_Organization_ReferenceForArrayConstraintsFromSetRegulatory_Region_Organization_Reference($regulatory_Region_Organization_Reference))) {
            throw new \InvalidArgumentException($regulatory_Region_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Regulatory_Region_Organization_Reference = $regulatory_Region_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Regulatory_Region_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Disability_ReferenceType
     */
    public function addToRegulatory_Region_Organization_Reference(\WorkdayWsdl\\StructType\Organization_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Regulatory_Region_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Organization_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Regulatory_Region_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Disability_ReferenceType
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
