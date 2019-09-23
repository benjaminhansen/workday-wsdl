<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Factor_Parameter_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating Element for the Collective Agreement Snapshot Data.
 * @subpackage Structs
 */
class Collective_Agreement_Factor_Parameter_DataType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: The Order of the Collective Agreement Factor Parameter. | Specifies the order of evaluation of the Work Status Rules | The order this period has | Order for the Orderable Item.
     * - base: xsd:string
     * - maxLength: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Order;
    /**
     * The Collective_Agreement_Factor_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement Factor for this Collective Agreement Factor Parameter.
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_FactorObjectType
     */
    public $Collective_Agreement_Factor_Reference;
    /**
     * The Collective_Agreement_Factor_Option_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement Factor Option for this Collective Agreement Factor Parameter.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_Factor_OptionObjectType[]
     */
    public $Collective_Agreement_Factor_Option_Reference;
    /**
     * Constructor method for Collective_Agreement_Factor_Parameter_DataType
     * @uses Collective_Agreement_Factor_Parameter_DataType::setOrder()
     * @uses Collective_Agreement_Factor_Parameter_DataType::setCollective_Agreement_Factor_Reference()
     * @uses Collective_Agreement_Factor_Parameter_DataType::setCollective_Agreement_Factor_Option_Reference()
     * @param string $order
     * @param \StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_Reference
     * @param \StructType\Collective_Agreement_Factor_OptionObjectType[] $collective_Agreement_Factor_Option_Reference
     */
    public function __construct($order = null, \StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_Reference = null, array $collective_Agreement_Factor_Option_Reference = array())
    {
        $this
            ->setOrder($order)
            ->setCollective_Agreement_Factor_Reference($collective_Agreement_Factor_Reference)
            ->setCollective_Agreement_Factor_Option_Reference($collective_Agreement_Factor_Option_Reference);
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param string $order
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($order) && mb_strlen($order) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get Collective_Agreement_Factor_Reference value
     * @return \StructType\Collective_Agreement_FactorObjectType|null
     */
    public function getCollective_Agreement_Factor_Reference()
    {
        return $this->Collective_Agreement_Factor_Reference;
    }
    /**
     * Set Collective_Agreement_Factor_Reference value
     * @param \StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_Reference
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType
     */
    public function setCollective_Agreement_Factor_Reference(\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_Reference = null)
    {
        $this->Collective_Agreement_Factor_Reference = $collective_Agreement_Factor_Reference;
        return $this;
    }
    /**
     * Get Collective_Agreement_Factor_Option_Reference value
     * @return \StructType\Collective_Agreement_Factor_OptionObjectType[]|null
     */
    public function getCollective_Agreement_Factor_Option_Reference()
    {
        return $this->Collective_Agreement_Factor_Option_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCollective_Agreement_Factor_Option_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollective_Agreement_Factor_Option_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollective_Agreement_Factor_Option_ReferenceForArrayConstraintsFromSetCollective_Agreement_Factor_Option_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem) {
            // validation for constraint: itemType
            if (!$collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem instanceof \StructType\Collective_Agreement_Factor_OptionObjectType) {
                $invalidValues[] = is_object($collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem) ? get_class($collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem) : sprintf('%s(%s)', gettype($collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem), var_export($collective_Agreement_Factor_Parameter_DataTypeCollective_Agreement_Factor_Option_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Collective_Agreement_Factor_Option_Reference property can only contain items of type \StructType\Collective_Agreement_Factor_OptionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Collective_Agreement_Factor_Option_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Factor_OptionObjectType[] $collective_Agreement_Factor_Option_Reference
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType
     */
    public function setCollective_Agreement_Factor_Option_Reference(array $collective_Agreement_Factor_Option_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($collective_Agreement_Factor_Option_ReferenceArrayErrorMessage = self::validateCollective_Agreement_Factor_Option_ReferenceForArrayConstraintsFromSetCollective_Agreement_Factor_Option_Reference($collective_Agreement_Factor_Option_Reference))) {
            throw new \InvalidArgumentException($collective_Agreement_Factor_Option_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Collective_Agreement_Factor_Option_Reference = $collective_Agreement_Factor_Option_Reference;
        return $this;
    }
    /**
     * Add item to Collective_Agreement_Factor_Option_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Factor_OptionObjectType $item
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType
     */
    public function addToCollective_Agreement_Factor_Option_Reference(\StructType\Collective_Agreement_Factor_OptionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Collective_Agreement_Factor_OptionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Collective_Agreement_Factor_Option_Reference property can only contain items of type \StructType\Collective_Agreement_Factor_OptionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Collective_Agreement_Factor_Option_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType
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
