<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Personal_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type must be valid for Worker. | At least 1 and only 1 Name must be set as Legal. | At least 1 and only 1 Name must be set as Preferred. | Encapsulating element containing all Worker Personal data.
 * @subpackage Structs
 */
class Worker_Personal_DataType extends AbstractStructBase
{
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Name_DataType[]
     */
    public $Name_Data;
    /**
     * The Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contact_DataType
     */
    public $Contact_Data;
    /**
     * The Biographic_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Biographic_DataType[]
     */
    public $Biographic_Data;
    /**
     * The Demographic_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Demographic_DataType[]
     */
    public $Demographic_Data;
    /**
     * Constructor method for Worker_Personal_DataType
     * @uses Worker_Personal_DataType::setName_Data()
     * @uses Worker_Personal_DataType::setContact_Data()
     * @uses Worker_Personal_DataType::setBiographic_Data()
     * @uses Worker_Personal_DataType::setDemographic_Data()
     * @param \StructType\Name_DataType[] $name_Data
     * @param \StructType\Contact_DataType $contact_Data
     * @param \StructType\Biographic_DataType[] $biographic_Data
     * @param \StructType\Demographic_DataType[] $demographic_Data
     */
    public function __construct(array $name_Data = array(), \StructType\Contact_DataType $contact_Data = null, array $biographic_Data = array(), array $demographic_Data = array())
    {
        $this
            ->setName_Data($name_Data)
            ->setContact_Data($contact_Data)
            ->setBiographic_Data($biographic_Data)
            ->setDemographic_Data($demographic_Data);
    }
    /**
     * Get Name_Data value
     * @return \StructType\Name_DataType[]|null
     */
    public function getName_Data()
    {
        return $this->Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setName_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateName_DataForArrayConstraintsFromSetName_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Personal_DataTypeName_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Personal_DataTypeName_DataItem instanceof \StructType\Name_DataType) {
                $invalidValues[] = is_object($worker_Personal_DataTypeName_DataItem) ? get_class($worker_Personal_DataTypeName_DataItem) : sprintf('%s(%s)', gettype($worker_Personal_DataTypeName_DataItem), var_export($worker_Personal_DataTypeName_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name_Data property can only contain items of type \StructType\Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Name_DataType[] $name_Data
     * @return \StructType\Worker_Personal_DataType
     */
    public function setName_Data(array $name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($name_DataArrayErrorMessage = self::validateName_DataForArrayConstraintsFromSetName_Data($name_Data))) {
            throw new \InvalidArgumentException($name_DataArrayErrorMessage, __LINE__);
        }
        $this->Name_Data = $name_Data;
        return $this;
    }
    /**
     * Add item to Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Name_DataType $item
     * @return \StructType\Worker_Personal_DataType
     */
    public function addToName_Data(\StructType\Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Name_Data property can only contain items of type \StructType\Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Name_Data[] = $item;
        return $this;
    }
    /**
     * Get Contact_Data value
     * @return \StructType\Contact_DataType|null
     */
    public function getContact_Data()
    {
        return $this->Contact_Data;
    }
    /**
     * Set Contact_Data value
     * @param \StructType\Contact_DataType $contact_Data
     * @return \StructType\Worker_Personal_DataType
     */
    public function setContact_Data(\StructType\Contact_DataType $contact_Data = null)
    {
        $this->Contact_Data = $contact_Data;
        return $this;
    }
    /**
     * Get Biographic_Data value
     * @return \StructType\Biographic_DataType[]|null
     */
    public function getBiographic_Data()
    {
        return $this->Biographic_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBiographic_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBiographic_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBiographic_DataForArrayConstraintsFromSetBiographic_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Personal_DataTypeBiographic_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Personal_DataTypeBiographic_DataItem instanceof \StructType\Biographic_DataType) {
                $invalidValues[] = is_object($worker_Personal_DataTypeBiographic_DataItem) ? get_class($worker_Personal_DataTypeBiographic_DataItem) : sprintf('%s(%s)', gettype($worker_Personal_DataTypeBiographic_DataItem), var_export($worker_Personal_DataTypeBiographic_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Biographic_Data property can only contain items of type \StructType\Biographic_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Biographic_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Biographic_DataType[] $biographic_Data
     * @return \StructType\Worker_Personal_DataType
     */
    public function setBiographic_Data(array $biographic_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($biographic_DataArrayErrorMessage = self::validateBiographic_DataForArrayConstraintsFromSetBiographic_Data($biographic_Data))) {
            throw new \InvalidArgumentException($biographic_DataArrayErrorMessage, __LINE__);
        }
        $this->Biographic_Data = $biographic_Data;
        return $this;
    }
    /**
     * Add item to Biographic_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Biographic_DataType $item
     * @return \StructType\Worker_Personal_DataType
     */
    public function addToBiographic_Data(\StructType\Biographic_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Biographic_DataType) {
            throw new \InvalidArgumentException(sprintf('The Biographic_Data property can only contain items of type \StructType\Biographic_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Biographic_Data[] = $item;
        return $this;
    }
    /**
     * Get Demographic_Data value
     * @return \StructType\Demographic_DataType[]|null
     */
    public function getDemographic_Data()
    {
        return $this->Demographic_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDemographic_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDemographic_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDemographic_DataForArrayConstraintsFromSetDemographic_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Personal_DataTypeDemographic_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Personal_DataTypeDemographic_DataItem instanceof \StructType\Demographic_DataType) {
                $invalidValues[] = is_object($worker_Personal_DataTypeDemographic_DataItem) ? get_class($worker_Personal_DataTypeDemographic_DataItem) : sprintf('%s(%s)', gettype($worker_Personal_DataTypeDemographic_DataItem), var_export($worker_Personal_DataTypeDemographic_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Demographic_Data property can only contain items of type \StructType\Demographic_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Demographic_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Demographic_DataType[] $demographic_Data
     * @return \StructType\Worker_Personal_DataType
     */
    public function setDemographic_Data(array $demographic_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($demographic_DataArrayErrorMessage = self::validateDemographic_DataForArrayConstraintsFromSetDemographic_Data($demographic_Data))) {
            throw new \InvalidArgumentException($demographic_DataArrayErrorMessage, __LINE__);
        }
        $this->Demographic_Data = $demographic_Data;
        return $this;
    }
    /**
     * Add item to Demographic_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Demographic_DataType $item
     * @return \StructType\Worker_Personal_DataType
     */
    public function addToDemographic_Data(\StructType\Demographic_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Demographic_DataType) {
            throw new \InvalidArgumentException(sprintf('The Demographic_Data property can only contain items of type \StructType\Demographic_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Demographic_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Personal_DataType
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
