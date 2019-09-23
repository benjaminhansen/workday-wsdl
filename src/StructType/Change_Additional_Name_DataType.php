<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Additional_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Additional Name Change web service.
 * @subpackage Structs
 */
class Change_Additional_Name_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Worker that the additional name data will be applied to.
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not to replace existing additional names for the worker. When true, existing additional names are removed before the data in this web service request is processed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Replace_All;
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Additional_Name_DataType[]
     */
    public $Name_Data;
    /**
     * Constructor method for Change_Additional_Name_DataType
     * @uses Change_Additional_Name_DataType::setWorker_Reference()
     * @uses Change_Additional_Name_DataType::setReplace_All()
     * @uses Change_Additional_Name_DataType::setName_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param bool $replace_All
     * @param \StructType\Additional_Name_DataType[] $name_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, $replace_All = null, array $name_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setReplace_All($replace_All)
            ->setName_Data($name_Data);
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Change_Additional_Name_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Change_Additional_Name_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Get Name_Data value
     * @return \StructType\Additional_Name_DataType[]|null
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
        foreach ($values as $change_Additional_Name_DataTypeName_DataItem) {
            // validation for constraint: itemType
            if (!$change_Additional_Name_DataTypeName_DataItem instanceof \StructType\Additional_Name_DataType) {
                $invalidValues[] = is_object($change_Additional_Name_DataTypeName_DataItem) ? get_class($change_Additional_Name_DataTypeName_DataItem) : sprintf('%s(%s)', gettype($change_Additional_Name_DataTypeName_DataItem), var_export($change_Additional_Name_DataTypeName_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name_Data property can only contain items of type \StructType\Additional_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Additional_Name_DataType[] $name_Data
     * @return \StructType\Change_Additional_Name_DataType
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
     * @param \StructType\Additional_Name_DataType $item
     * @return \StructType\Change_Additional_Name_DataType
     */
    public function addToName_Data(\StructType\Additional_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Additional_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Name_Data property can only contain items of type \StructType\Additional_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Name_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Additional_Name_DataType
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
