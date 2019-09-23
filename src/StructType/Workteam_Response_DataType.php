<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workteam_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Workteam Response Data.
 * @subpackage Structs
 */
class Workteam_Response_DataType extends AbstractStructBase
{
    /**
     * The Workteam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WorkteamType[]
     */
    public $Workteam;
    /**
     * Constructor method for Workteam_Response_DataType
     * @uses Workteam_Response_DataType::setWorkteam()
     * @param \StructType\WorkteamType[] $workteam
     */
    public function __construct(array $workteam = array())
    {
        $this
            ->setWorkteam($workteam);
    }
    /**
     * Get Workteam value
     * @return \StructType\WorkteamType[]|null
     */
    public function getWorkteam()
    {
        return $this->Workteam;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkteam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkteam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkteamForArrayConstraintsFromSetWorkteam(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workteam_Response_DataTypeWorkteamItem) {
            // validation for constraint: itemType
            if (!$workteam_Response_DataTypeWorkteamItem instanceof \StructType\WorkteamType) {
                $invalidValues[] = is_object($workteam_Response_DataTypeWorkteamItem) ? get_class($workteam_Response_DataTypeWorkteamItem) : sprintf('%s(%s)', gettype($workteam_Response_DataTypeWorkteamItem), var_export($workteam_Response_DataTypeWorkteamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workteam property can only contain items of type \StructType\WorkteamType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workteam value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkteamType[] $workteam
     * @return \StructType\Workteam_Response_DataType
     */
    public function setWorkteam(array $workteam = array())
    {
        // validation for constraint: array
        if ('' !== ($workteamArrayErrorMessage = self::validateWorkteamForArrayConstraintsFromSetWorkteam($workteam))) {
            throw new \InvalidArgumentException($workteamArrayErrorMessage, __LINE__);
        }
        $this->Workteam = $workteam;
        return $this;
    }
    /**
     * Add item to Workteam value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkteamType $item
     * @return \StructType\Workteam_Response_DataType
     */
    public function addToWorkteam(\StructType\WorkteamType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkteamType) {
            throw new \InvalidArgumentException(sprintf('The Workteam property can only contain items of type \StructType\WorkteamType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workteam[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workteam_Response_DataType
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
