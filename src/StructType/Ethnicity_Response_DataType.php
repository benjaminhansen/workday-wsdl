<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ethnicity_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Get Ethnicities
 * @subpackage Structs
 */
class Ethnicity_Response_DataType extends AbstractStructBase
{
    /**
     * The Ethnicity
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Ethnicity data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EthnicityType[]
     */
    public $Ethnicity;
    /**
     * Constructor method for Ethnicity_Response_DataType
     * @uses Ethnicity_Response_DataType::setEthnicity()
     * @param \WorkdayWsdl\\StructType\EthnicityType[] $ethnicity
     */
    public function __construct(array $ethnicity = array())
    {
        $this
            ->setEthnicity($ethnicity);
    }
    /**
     * Get Ethnicity value
     * @return \WorkdayWsdl\\StructType\EthnicityType[]|null
     */
    public function getEthnicity()
    {
        return $this->Ethnicity;
    }
    /**
     * This method is responsible for validating the values passed to the setEthnicity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEthnicity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEthnicityForArrayConstraintsFromSetEthnicity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ethnicity_Response_DataTypeEthnicityItem) {
            // validation for constraint: itemType
            if (!$ethnicity_Response_DataTypeEthnicityItem instanceof \WorkdayWsdl\\StructType\EthnicityType) {
                $invalidValues[] = is_object($ethnicity_Response_DataTypeEthnicityItem) ? get_class($ethnicity_Response_DataTypeEthnicityItem) : sprintf('%s(%s)', gettype($ethnicity_Response_DataTypeEthnicityItem), var_export($ethnicity_Response_DataTypeEthnicityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ethnicity property can only contain items of type \WorkdayWsdl\\StructType\EthnicityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Ethnicity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EthnicityType[] $ethnicity
     * @return \WorkdayWsdl\\StructType\Ethnicity_Response_DataType
     */
    public function setEthnicity(array $ethnicity = array())
    {
        // validation for constraint: array
        if ('' !== ($ethnicityArrayErrorMessage = self::validateEthnicityForArrayConstraintsFromSetEthnicity($ethnicity))) {
            throw new \InvalidArgumentException($ethnicityArrayErrorMessage, __LINE__);
        }
        $this->Ethnicity = $ethnicity;
        return $this;
    }
    /**
     * Add item to Ethnicity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EthnicityType $item
     * @return \WorkdayWsdl\\StructType\Ethnicity_Response_DataType
     */
    public function addToEthnicity(\WorkdayWsdl\\StructType\EthnicityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EthnicityType) {
            throw new \InvalidArgumentException(sprintf('The Ethnicity property can only contain items of type \WorkdayWsdl\\StructType\EthnicityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ethnicity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Ethnicity_Response_DataType
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
