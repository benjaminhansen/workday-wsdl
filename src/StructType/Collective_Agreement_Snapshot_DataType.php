<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Snapshot_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating Element containing the Collective Agreement Classification Parameter Data.
 * @subpackage Structs
 */
class Collective_Agreement_Snapshot_DataType extends AbstractStructBase
{
    /**
     * The Collective_Agreement_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement Reference.
     * - minOccurs: 0
     * @var \StructType\Collective_AgreementObjectType
     */
    public $Collective_Agreement_Reference;
    /**
     * The Collective_Agreement_Factor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_Factor_Parameter_DataType[]
     */
    public $Collective_Agreement_Factor;
    /**
     * Constructor method for Collective_Agreement_Snapshot_DataType
     * @uses Collective_Agreement_Snapshot_DataType::setCollective_Agreement_Reference()
     * @uses Collective_Agreement_Snapshot_DataType::setCollective_Agreement_Factor()
     * @param \StructType\Collective_AgreementObjectType $collective_Agreement_Reference
     * @param \StructType\Collective_Agreement_Factor_Parameter_DataType[] $collective_Agreement_Factor
     */
    public function __construct(\StructType\Collective_AgreementObjectType $collective_Agreement_Reference = null, array $collective_Agreement_Factor = array())
    {
        $this
            ->setCollective_Agreement_Reference($collective_Agreement_Reference)
            ->setCollective_Agreement_Factor($collective_Agreement_Factor);
    }
    /**
     * Get Collective_Agreement_Reference value
     * @return \StructType\Collective_AgreementObjectType|null
     */
    public function getCollective_Agreement_Reference()
    {
        return $this->Collective_Agreement_Reference;
    }
    /**
     * Set Collective_Agreement_Reference value
     * @param \StructType\Collective_AgreementObjectType $collective_Agreement_Reference
     * @return \StructType\Collective_Agreement_Snapshot_DataType
     */
    public function setCollective_Agreement_Reference(\StructType\Collective_AgreementObjectType $collective_Agreement_Reference = null)
    {
        $this->Collective_Agreement_Reference = $collective_Agreement_Reference;
        return $this;
    }
    /**
     * Get Collective_Agreement_Factor value
     * @return \StructType\Collective_Agreement_Factor_Parameter_DataType[]|null
     */
    public function getCollective_Agreement_Factor()
    {
        return $this->Collective_Agreement_Factor;
    }
    /**
     * This method is responsible for validating the values passed to the setCollective_Agreement_Factor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollective_Agreement_Factor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollective_Agreement_FactorForArrayConstraintsFromSetCollective_Agreement_Factor(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem) {
            // validation for constraint: itemType
            if (!$collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem instanceof \StructType\Collective_Agreement_Factor_Parameter_DataType) {
                $invalidValues[] = is_object($collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem) ? get_class($collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem) : sprintf('%s(%s)', gettype($collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem), var_export($collective_Agreement_Snapshot_DataTypeCollective_Agreement_FactorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Collective_Agreement_Factor property can only contain items of type \StructType\Collective_Agreement_Factor_Parameter_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Collective_Agreement_Factor value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Factor_Parameter_DataType[] $collective_Agreement_Factor
     * @return \StructType\Collective_Agreement_Snapshot_DataType
     */
    public function setCollective_Agreement_Factor(array $collective_Agreement_Factor = array())
    {
        // validation for constraint: array
        if ('' !== ($collective_Agreement_FactorArrayErrorMessage = self::validateCollective_Agreement_FactorForArrayConstraintsFromSetCollective_Agreement_Factor($collective_Agreement_Factor))) {
            throw new \InvalidArgumentException($collective_Agreement_FactorArrayErrorMessage, __LINE__);
        }
        $this->Collective_Agreement_Factor = $collective_Agreement_Factor;
        return $this;
    }
    /**
     * Add item to Collective_Agreement_Factor value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Factor_Parameter_DataType $item
     * @return \StructType\Collective_Agreement_Snapshot_DataType
     */
    public function addToCollective_Agreement_Factor(\StructType\Collective_Agreement_Factor_Parameter_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Collective_Agreement_Factor_Parameter_DataType) {
            throw new \InvalidArgumentException(sprintf('The Collective_Agreement_Factor property can only contain items of type \StructType\Collective_Agreement_Factor_Parameter_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Collective_Agreement_Factor[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Collective_Agreement_Snapshot_DataType
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
