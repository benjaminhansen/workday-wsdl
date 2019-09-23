<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Political_Affiliation_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The "Response Data" element contains the core data results based on the inbound request that was processed.
 * @subpackage Structs
 */
class Political_Affiliation_Response_DataType extends AbstractStructBase
{
    /**
     * The Political_Affiliation
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Political Affiliation
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Political_AffiliationType[]
     */
    public $Political_Affiliation;
    /**
     * Constructor method for Political_Affiliation_Response_DataType
     * @uses Political_Affiliation_Response_DataType::setPolitical_Affiliation()
     * @param \WorkdayWsdl\\StructType\Political_AffiliationType[] $political_Affiliation
     */
    public function __construct(array $political_Affiliation = array())
    {
        $this
            ->setPolitical_Affiliation($political_Affiliation);
    }
    /**
     * Get Political_Affiliation value
     * @return \WorkdayWsdl\\StructType\Political_AffiliationType[]|null
     */
    public function getPolitical_Affiliation()
    {
        return $this->Political_Affiliation;
    }
    /**
     * This method is responsible for validating the values passed to the setPolitical_Affiliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolitical_Affiliation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolitical_AffiliationForArrayConstraintsFromSetPolitical_Affiliation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $political_Affiliation_Response_DataTypePolitical_AffiliationItem) {
            // validation for constraint: itemType
            if (!$political_Affiliation_Response_DataTypePolitical_AffiliationItem instanceof \WorkdayWsdl\\StructType\Political_AffiliationType) {
                $invalidValues[] = is_object($political_Affiliation_Response_DataTypePolitical_AffiliationItem) ? get_class($political_Affiliation_Response_DataTypePolitical_AffiliationItem) : sprintf('%s(%s)', gettype($political_Affiliation_Response_DataTypePolitical_AffiliationItem), var_export($political_Affiliation_Response_DataTypePolitical_AffiliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Political_Affiliation property can only contain items of type \WorkdayWsdl\\StructType\Political_AffiliationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Political_Affiliation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Political_AffiliationType[] $political_Affiliation
     * @return \WorkdayWsdl\\StructType\Political_Affiliation_Response_DataType
     */
    public function setPolitical_Affiliation(array $political_Affiliation = array())
    {
        // validation for constraint: array
        if ('' !== ($political_AffiliationArrayErrorMessage = self::validatePolitical_AffiliationForArrayConstraintsFromSetPolitical_Affiliation($political_Affiliation))) {
            throw new \InvalidArgumentException($political_AffiliationArrayErrorMessage, __LINE__);
        }
        $this->Political_Affiliation = $political_Affiliation;
        return $this;
    }
    /**
     * Add item to Political_Affiliation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Political_AffiliationType $item
     * @return \WorkdayWsdl\\StructType\Political_Affiliation_Response_DataType
     */
    public function addToPolitical_Affiliation(\WorkdayWsdl\\StructType\Political_AffiliationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Political_AffiliationType) {
            throw new \InvalidArgumentException(sprintf('The Political_Affiliation property can only contain items of type \WorkdayWsdl\\StructType\Political_AffiliationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Political_Affiliation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Political_Affiliation_Response_DataType
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
