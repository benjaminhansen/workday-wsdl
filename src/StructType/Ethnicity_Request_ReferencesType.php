<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ethnicity_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Ethnicity and its associated data.
 * @subpackage Structs
 */
class Ethnicity_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Ethnicity.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\EthnicityObjectType[]
     */
    public $Ethnicity_Reference;
    /**
     * Constructor method for Ethnicity_Request_ReferencesType
     * @uses Ethnicity_Request_ReferencesType::setEthnicity_Reference()
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType[] $ethnicity_Reference
     */
    public function __construct(array $ethnicity_Reference = array())
    {
        $this
            ->setEthnicity_Reference($ethnicity_Reference);
    }
    /**
     * Get Ethnicity_Reference value
     * @return \WorkdayWsdl\\StructType\EthnicityObjectType[]|null
     */
    public function getEthnicity_Reference()
    {
        return $this->Ethnicity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEthnicity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEthnicity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEthnicity_ReferenceForArrayConstraintsFromSetEthnicity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem instanceof \WorkdayWsdl\\StructType\EthnicityObjectType) {
                $invalidValues[] = is_object($ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem) ? get_class($ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem) : sprintf('%s(%s)', gettype($ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem), var_export($ethnicity_Request_ReferencesTypeEthnicity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ethnicity_Reference property can only contain items of type \WorkdayWsdl\\StructType\EthnicityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType[] $ethnicity_Reference
     * @return \WorkdayWsdl\\StructType\Ethnicity_Request_ReferencesType
     */
    public function setEthnicity_Reference(array $ethnicity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($ethnicity_ReferenceArrayErrorMessage = self::validateEthnicity_ReferenceForArrayConstraintsFromSetEthnicity_Reference($ethnicity_Reference))) {
            throw new \InvalidArgumentException($ethnicity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Ethnicity_Reference = $ethnicity_Reference;
        return $this;
    }
    /**
     * Add item to Ethnicity_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EthnicityObjectType $item
     * @return \WorkdayWsdl\\StructType\Ethnicity_Request_ReferencesType
     */
    public function addToEthnicity_Reference(\WorkdayWsdl\\StructType\EthnicityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EthnicityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Ethnicity_Reference property can only contain items of type \WorkdayWsdl\\StructType\EthnicityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ethnicity_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Ethnicity_Request_ReferencesType
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
