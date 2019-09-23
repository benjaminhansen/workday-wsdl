<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkteamType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Workteam Response Data.
 * @subpackage Structs
 */
class WorkteamType extends AbstractStructBase
{
    /**
     * The Workteam_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workteam
     * - minOccurs: 0
     * @var \StructType\WorkteamObjectType
     */
    public $Workteam_Reference;
    /**
     * The Workteam_Data
     * Meta information extracted from the WSDL
     * - documentation: Workteam Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workteam_DataType[]
     */
    public $Workteam_Data;
    /**
     * Constructor method for WorkteamType
     * @uses WorkteamType::setWorkteam_Reference()
     * @uses WorkteamType::setWorkteam_Data()
     * @param \StructType\WorkteamObjectType $workteam_Reference
     * @param \StructType\Workteam_DataType[] $workteam_Data
     */
    public function __construct(\StructType\WorkteamObjectType $workteam_Reference = null, array $workteam_Data = array())
    {
        $this
            ->setWorkteam_Reference($workteam_Reference)
            ->setWorkteam_Data($workteam_Data);
    }
    /**
     * Get Workteam_Reference value
     * @return \StructType\WorkteamObjectType|null
     */
    public function getWorkteam_Reference()
    {
        return $this->Workteam_Reference;
    }
    /**
     * Set Workteam_Reference value
     * @param \StructType\WorkteamObjectType $workteam_Reference
     * @return \StructType\WorkteamType
     */
    public function setWorkteam_Reference(\StructType\WorkteamObjectType $workteam_Reference = null)
    {
        $this->Workteam_Reference = $workteam_Reference;
        return $this;
    }
    /**
     * Get Workteam_Data value
     * @return \StructType\Workteam_DataType[]|null
     */
    public function getWorkteam_Data()
    {
        return $this->Workteam_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkteam_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkteam_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkteam_DataForArrayConstraintsFromSetWorkteam_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workteamTypeWorkteam_DataItem) {
            // validation for constraint: itemType
            if (!$workteamTypeWorkteam_DataItem instanceof \StructType\Workteam_DataType) {
                $invalidValues[] = is_object($workteamTypeWorkteam_DataItem) ? get_class($workteamTypeWorkteam_DataItem) : sprintf('%s(%s)', gettype($workteamTypeWorkteam_DataItem), var_export($workteamTypeWorkteam_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workteam_Data property can only contain items of type \StructType\Workteam_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workteam_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_DataType[] $workteam_Data
     * @return \StructType\WorkteamType
     */
    public function setWorkteam_Data(array $workteam_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workteam_DataArrayErrorMessage = self::validateWorkteam_DataForArrayConstraintsFromSetWorkteam_Data($workteam_Data))) {
            throw new \InvalidArgumentException($workteam_DataArrayErrorMessage, __LINE__);
        }
        $this->Workteam_Data = $workteam_Data;
        return $this;
    }
    /**
     * Add item to Workteam_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_DataType $item
     * @return \StructType\WorkteamType
     */
    public function addToWorkteam_Data(\StructType\Workteam_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workteam_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workteam_Data property can only contain items of type \StructType\Workteam_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workteam_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkteamType
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
