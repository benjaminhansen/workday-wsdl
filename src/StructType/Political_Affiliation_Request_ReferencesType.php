<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Political_Affiliation_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Political Affiliation and its associated data.
 * @subpackage Structs
 */
class Political_Affiliation_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Political Affiliation.{+3}
     * - maxOccurs: unbounded
     * @var \StructType\Political_AffiliationObjectType[]
     */
    public $Political_Affiliation_Reference;
    /**
     * Constructor method for Political_Affiliation_Request_ReferencesType
     * @uses Political_Affiliation_Request_ReferencesType::setPolitical_Affiliation_Reference()
     * @param \StructType\Political_AffiliationObjectType[] $political_Affiliation_Reference
     */
    public function __construct(array $political_Affiliation_Reference = array())
    {
        $this
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference);
    }
    /**
     * Get Political_Affiliation_Reference value
     * @return \StructType\Political_AffiliationObjectType[]|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPolitical_Affiliation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolitical_Affiliation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolitical_Affiliation_ReferenceForArrayConstraintsFromSetPolitical_Affiliation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem instanceof \StructType\Political_AffiliationObjectType) {
                $invalidValues[] = is_object($political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem) ? get_class($political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem) : sprintf('%s(%s)', gettype($political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem), var_export($political_Affiliation_Request_ReferencesTypePolitical_Affiliation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Political_Affiliation_Reference property can only contain items of type \StructType\Political_AffiliationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Political_AffiliationObjectType[] $political_Affiliation_Reference
     * @return \StructType\Political_Affiliation_Request_ReferencesType
     */
    public function setPolitical_Affiliation_Reference(array $political_Affiliation_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($political_Affiliation_ReferenceArrayErrorMessage = self::validatePolitical_Affiliation_ReferenceForArrayConstraintsFromSetPolitical_Affiliation_Reference($political_Affiliation_Reference))) {
            throw new \InvalidArgumentException($political_Affiliation_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
        return $this;
    }
    /**
     * Add item to Political_Affiliation_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Political_AffiliationObjectType $item
     * @return \StructType\Political_Affiliation_Request_ReferencesType
     */
    public function addToPolitical_Affiliation_Reference(\StructType\Political_AffiliationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Political_AffiliationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Political_Affiliation_Reference property can only contain items of type \StructType\Political_AffiliationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Political_Affiliation_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Political_Affiliation_Request_ReferencesType
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
