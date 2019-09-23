<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Set of Organization Reference elements.
 * @subpackage Structs
 */
class Organization_ReferencesType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing an object within the Workday system. The sub-elements and attributes within this element are used to return one and only one instance of the identifying object.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Reference_WWSType[]
     */
    public $Organization_Reference;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Request" elements, the "As Of Date" determines what data is to be used within search logic or returned in a response. For
     * "Response" elements, this element will echo "As Of Date" entered in the "Request" element or the default "As Of Date" if omitted..
     * @var string
     */
    public $As_Of_Date;
    /**
     * Constructor method for Organization_ReferencesType
     * @uses Organization_ReferencesType::setOrganization_Reference()
     * @uses Organization_ReferencesType::setAs_Of_Date()
     * @param \StructType\Organization_Reference_WWSType[] $organization_Reference
     * @param string $as_Of_Date
     */
    public function __construct(array $organization_Reference = array(), $as_Of_Date = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setAs_Of_Date($as_Of_Date);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\Organization_Reference_WWSType[]|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_ReferencesTypeOrganization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_ReferencesTypeOrganization_ReferenceItem instanceof \StructType\Organization_Reference_WWSType) {
                $invalidValues[] = is_object($organization_ReferencesTypeOrganization_ReferenceItem) ? get_class($organization_ReferencesTypeOrganization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_ReferencesTypeOrganization_ReferenceItem), var_export($organization_ReferencesTypeOrganization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference property can only contain items of type \StructType\Organization_Reference_WWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Reference_WWSType[] $organization_Reference
     * @return \StructType\Organization_ReferencesType
     */
    public function setOrganization_Reference(array $organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_ReferenceArrayErrorMessage = self::validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference($organization_Reference))) {
            throw new \InvalidArgumentException($organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Reference_WWSType $item
     * @return \StructType\Organization_ReferencesType
     */
    public function addToOrganization_Reference(\StructType\Organization_Reference_WWSType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Reference_WWSType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference property can only contain items of type \StructType\Organization_Reference_WWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get As_Of_Date value
     * @return string|null
     */
    public function getAs_Of_Date()
    {
        return $this->As_Of_Date;
    }
    /**
     * Set As_Of_Date value
     * @param string $as_Of_Date
     * @return \StructType\Organization_ReferencesType
     */
    public function setAs_Of_Date($as_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Date) && !is_string($as_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Date, true), gettype($as_Of_Date)), __LINE__);
        }
        $this->As_Of_Date = $as_Of_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_ReferencesType
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
