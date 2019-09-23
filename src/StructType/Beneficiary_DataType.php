<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Beneficiary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the details about the beneficiary.
 * @subpackage Structs
 */
class Beneficiary_DataType extends AbstractStructBase
{
    /**
     * The Beneficiary_ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the beneficiary.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Beneficiary_ID;
    /**
     * The Irrevocable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the beneficiary is revocable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Irrevocable;
    /**
     * The Inactive_Date
     * Meta information extracted from the WSDL
     * - documentation: If inactive, the date from which the beneficiary is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Inactive_Date;
    /**
     * The Court_Order
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]
     */
    public $Court_Order;
    /**
     * Constructor method for Beneficiary_DataType
     * @uses Beneficiary_DataType::setBeneficiary_ID()
     * @uses Beneficiary_DataType::setIrrevocable()
     * @uses Beneficiary_DataType::setInactive_Date()
     * @uses Beneficiary_DataType::setCourt_Order()
     * @param string $beneficiary_ID
     * @param bool $irrevocable
     * @param string $inactive_Date
     * @param \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order
     */
    public function __construct($beneficiary_ID = null, $irrevocable = null, $inactive_Date = null, array $court_Order = array())
    {
        $this
            ->setBeneficiary_ID($beneficiary_ID)
            ->setIrrevocable($irrevocable)
            ->setInactive_Date($inactive_Date)
            ->setCourt_Order($court_Order);
    }
    /**
     * Get Beneficiary_ID value
     * @return string|null
     */
    public function getBeneficiary_ID()
    {
        return $this->Beneficiary_ID;
    }
    /**
     * Set Beneficiary_ID value
     * @param string $beneficiary_ID
     * @return \StructType\Beneficiary_DataType
     */
    public function setBeneficiary_ID($beneficiary_ID = null)
    {
        // validation for constraint: string
        if (!is_null($beneficiary_ID) && !is_string($beneficiary_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beneficiary_ID, true), gettype($beneficiary_ID)), __LINE__);
        }
        $this->Beneficiary_ID = $beneficiary_ID;
        return $this;
    }
    /**
     * Get Irrevocable value
     * @return bool|null
     */
    public function getIrrevocable()
    {
        return $this->Irrevocable;
    }
    /**
     * Set Irrevocable value
     * @param bool $irrevocable
     * @return \StructType\Beneficiary_DataType
     */
    public function setIrrevocable($irrevocable = null)
    {
        // validation for constraint: boolean
        if (!is_null($irrevocable) && !is_bool($irrevocable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($irrevocable, true), gettype($irrevocable)), __LINE__);
        }
        $this->Irrevocable = $irrevocable;
        return $this;
    }
    /**
     * Get Inactive_Date value
     * @return string|null
     */
    public function getInactive_Date()
    {
        return $this->Inactive_Date;
    }
    /**
     * Set Inactive_Date value
     * @param string $inactive_Date
     * @return \StructType\Beneficiary_DataType
     */
    public function setInactive_Date($inactive_Date = null)
    {
        // validation for constraint: string
        if (!is_null($inactive_Date) && !is_string($inactive_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inactive_Date, true), gettype($inactive_Date)), __LINE__);
        }
        $this->Inactive_Date = $inactive_Date;
        return $this;
    }
    /**
     * Get Court_Order value
     * @return \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]|null
     */
    public function getCourt_Order()
    {
        return $this->Court_Order;
    }
    /**
     * This method is responsible for validating the values passed to the setCourt_Order method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourt_Order method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourt_OrderForArrayConstraintsFromSetCourt_Order(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $beneficiary_DataTypeCourt_OrderItem) {
            // validation for constraint: itemType
            if (!$beneficiary_DataTypeCourt_OrderItem instanceof \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
                $invalidValues[] = is_object($beneficiary_DataTypeCourt_OrderItem) ? get_class($beneficiary_DataTypeCourt_OrderItem) : sprintf('%s(%s)', gettype($beneficiary_DataTypeCourt_OrderItem), var_export($beneficiary_DataTypeCourt_OrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Court_Order property can only contain items of type \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Court_Order value
     * @throws \InvalidArgumentException
     * @param \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order
     * @return \StructType\Beneficiary_DataType
     */
    public function setCourt_Order(array $court_Order = array())
    {
        // validation for constraint: array
        if ('' !== ($court_OrderArrayErrorMessage = self::validateCourt_OrderForArrayConstraintsFromSetCourt_Order($court_Order))) {
            throw new \InvalidArgumentException($court_OrderArrayErrorMessage, __LINE__);
        }
        $this->Court_Order = $court_Order;
        return $this;
    }
    /**
     * Add item to Court_Order value
     * @throws \InvalidArgumentException
     * @param \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item
     * @return \StructType\Beneficiary_DataType
     */
    public function addToCourt_Order(\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Court_Order property can only contain items of type \StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Court_Order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Beneficiary_DataType
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
