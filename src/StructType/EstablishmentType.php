<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstablishmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Establishments Data wrapper
 * @subpackage Structs
 */
class EstablishmentType extends AbstractStructBase
{
    /**
     * The Establishment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Establishment Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EstablishmentObjectType
     */
    public $Establishment_Reference;
    /**
     * The Establishment_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Establishment_DataType[]
     */
    public $Establishment_Data;
    /**
     * Constructor method for EstablishmentType
     * @uses EstablishmentType::setEstablishment_Reference()
     * @uses EstablishmentType::setEstablishment_Data()
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @param \WorkdayWsdl\\StructType\Establishment_DataType[] $establishment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null, array $establishment_Data = array())
    {
        $this
            ->setEstablishment_Reference($establishment_Reference)
            ->setEstablishment_Data($establishment_Data);
    }
    /**
     * Get Establishment_Reference value
     * @return \WorkdayWsdl\\StructType\EstablishmentObjectType|null
     */
    public function getEstablishment_Reference()
    {
        return $this->Establishment_Reference;
    }
    /**
     * Set Establishment_Reference value
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @return \WorkdayWsdl\\StructType\EstablishmentType
     */
    public function setEstablishment_Reference(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null)
    {
        $this->Establishment_Reference = $establishment_Reference;
        return $this;
    }
    /**
     * Get Establishment_Data value
     * @return \WorkdayWsdl\\StructType\Establishment_DataType[]|null
     */
    public function getEstablishment_Data()
    {
        return $this->Establishment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEstablishment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstablishment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstablishment_DataForArrayConstraintsFromSetEstablishment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $establishmentTypeEstablishment_DataItem) {
            // validation for constraint: itemType
            if (!$establishmentTypeEstablishment_DataItem instanceof \WorkdayWsdl\\StructType\Establishment_DataType) {
                $invalidValues[] = is_object($establishmentTypeEstablishment_DataItem) ? get_class($establishmentTypeEstablishment_DataItem) : sprintf('%s(%s)', gettype($establishmentTypeEstablishment_DataItem), var_export($establishmentTypeEstablishment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Establishment_Data property can only contain items of type \WorkdayWsdl\\StructType\Establishment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Establishment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Establishment_DataType[] $establishment_Data
     * @return \WorkdayWsdl\\StructType\EstablishmentType
     */
    public function setEstablishment_Data(array $establishment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($establishment_DataArrayErrorMessage = self::validateEstablishment_DataForArrayConstraintsFromSetEstablishment_Data($establishment_Data))) {
            throw new \InvalidArgumentException($establishment_DataArrayErrorMessage, __LINE__);
        }
        $this->Establishment_Data = $establishment_Data;
        return $this;
    }
    /**
     * Add item to Establishment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Establishment_DataType $item
     * @return \WorkdayWsdl\\StructType\EstablishmentType
     */
    public function addToEstablishment_Data(\WorkdayWsdl\\StructType\Establishment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Establishment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Establishment_Data property can only contain items of type \WorkdayWsdl\\StructType\Establishment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Establishment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\EstablishmentType
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
