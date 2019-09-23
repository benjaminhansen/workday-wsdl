<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Beneficiary_Data_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Beneficiary Data: ID subelements of Integration ID Data cannot reference multiple Beneficiaries. | Encapsulating element containing all Beneficiary data.
 * @subpackage Structs
 */
class Beneficiary_Data_WWSType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Court_Order_Replacement_Data
     * Meta information extracted from the WSDL
     * - documentation: Beneficiary Court Orders
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]
     */
    public $Court_Order_Replacement_Data;
    /**
     * Constructor method for Beneficiary_Data_WWSType
     * @uses Beneficiary_Data_WWSType::setIntegration_ID_Data()
     * @uses Beneficiary_Data_WWSType::setCourt_Order_Replacement_Data()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $court_Order_Replacement_Data = array())
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setCourt_Order_Replacement_Data($court_Order_Replacement_Data);
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Court_Order_Replacement_Data value
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]|null
     */
    public function getCourt_Order_Replacement_Data()
    {
        return $this->Court_Order_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCourt_Order_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourt_Order_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
                $invalidValues[] = is_object($beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem) ? get_class($beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem) : sprintf('%s(%s)', gettype($beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem), var_export($beneficiary_Data_WWSTypeCourt_Order_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     * @return \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType
     */
    public function setCourt_Order_Replacement_Data(array $court_Order_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($court_Order_Replacement_DataArrayErrorMessage = self::validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data($court_Order_Replacement_Data))) {
            throw new \InvalidArgumentException($court_Order_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Court_Order_Replacement_Data = $court_Order_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType
     */
    public function addToCourt_Order_Replacement_Data(\WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Court_Order_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType
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
