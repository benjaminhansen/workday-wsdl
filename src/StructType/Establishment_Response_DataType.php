<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Establishment_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Data
 * @subpackage Structs
 */
class Establishment_Response_DataType extends AbstractStructBase
{
    /**
     * The Establishment
     * Meta information extracted from the WSDL
     * - documentation: Establishment Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EstablishmentType[]
     */
    public $Establishment;
    /**
     * Constructor method for Establishment_Response_DataType
     * @uses Establishment_Response_DataType::setEstablishment()
     * @param \WorkdayWsdl\\StructType\EstablishmentType[] $establishment
     */
    public function __construct(array $establishment = array())
    {
        $this
            ->setEstablishment($establishment);
    }
    /**
     * Get Establishment value
     * @return \WorkdayWsdl\\StructType\EstablishmentType[]|null
     */
    public function getEstablishment()
    {
        return $this->Establishment;
    }
    /**
     * This method is responsible for validating the values passed to the setEstablishment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstablishment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstablishmentForArrayConstraintsFromSetEstablishment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $establishment_Response_DataTypeEstablishmentItem) {
            // validation for constraint: itemType
            if (!$establishment_Response_DataTypeEstablishmentItem instanceof \WorkdayWsdl\\StructType\EstablishmentType) {
                $invalidValues[] = is_object($establishment_Response_DataTypeEstablishmentItem) ? get_class($establishment_Response_DataTypeEstablishmentItem) : sprintf('%s(%s)', gettype($establishment_Response_DataTypeEstablishmentItem), var_export($establishment_Response_DataTypeEstablishmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Establishment property can only contain items of type \WorkdayWsdl\\StructType\EstablishmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Establishment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EstablishmentType[] $establishment
     * @return \WorkdayWsdl\\StructType\Establishment_Response_DataType
     */
    public function setEstablishment(array $establishment = array())
    {
        // validation for constraint: array
        if ('' !== ($establishmentArrayErrorMessage = self::validateEstablishmentForArrayConstraintsFromSetEstablishment($establishment))) {
            throw new \InvalidArgumentException($establishmentArrayErrorMessage, __LINE__);
        }
        $this->Establishment = $establishment;
        return $this;
    }
    /**
     * Add item to Establishment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EstablishmentType $item
     * @return \WorkdayWsdl\\StructType\Establishment_Response_DataType
     */
    public function addToEstablishment(\WorkdayWsdl\\StructType\EstablishmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EstablishmentType) {
            throw new \InvalidArgumentException(sprintf('The Establishment property can only contain items of type \WorkdayWsdl\\StructType\EstablishmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Establishment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Establishment_Response_DataType
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
