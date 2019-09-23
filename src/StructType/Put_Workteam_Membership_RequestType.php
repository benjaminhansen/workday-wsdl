<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workteam_Membership_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Add a new Membership to the Workteam.
 * @subpackage Structs
 */
class Put_Workteam_Membership_RequestType extends AbstractStructBase
{
    /**
     * The Workteam_Reference
     * Meta information extracted from the WSDL
     * - documentation: The workteam to which a new member should be added.
     * @var \StructType\WorkteamObjectType
     */
    public $Workteam_Reference;
    /**
     * The Workteam_Membership_Data
     * Meta information extracted from the WSDL
     * - documentation: Information required for the workteam membership.
     * - maxOccurs: unbounded
     * @var \StructType\Workteam_Membership_DataType[]
     */
    public $Workteam_Membership_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Workteam_Membership_RequestType
     * @uses Put_Workteam_Membership_RequestType::setWorkteam_Reference()
     * @uses Put_Workteam_Membership_RequestType::setWorkteam_Membership_Data()
     * @uses Put_Workteam_Membership_RequestType::setVersion()
     * @param \StructType\WorkteamObjectType $workteam_Reference
     * @param \StructType\Workteam_Membership_DataType[] $workteam_Membership_Data
     * @param string $version
     */
    public function __construct(\StructType\WorkteamObjectType $workteam_Reference = null, array $workteam_Membership_Data = array(), $version = null)
    {
        $this
            ->setWorkteam_Reference($workteam_Reference)
            ->setWorkteam_Membership_Data($workteam_Membership_Data)
            ->setVersion($version);
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
     * @return \StructType\Put_Workteam_Membership_RequestType
     */
    public function setWorkteam_Reference(\StructType\WorkteamObjectType $workteam_Reference = null)
    {
        $this->Workteam_Reference = $workteam_Reference;
        return $this;
    }
    /**
     * Get Workteam_Membership_Data value
     * @return \StructType\Workteam_Membership_DataType[]|null
     */
    public function getWorkteam_Membership_Data()
    {
        return $this->Workteam_Membership_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkteam_Membership_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkteam_Membership_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkteam_Membership_DataForArrayConstraintsFromSetWorkteam_Membership_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem) {
            // validation for constraint: itemType
            if (!$put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem instanceof \StructType\Workteam_Membership_DataType) {
                $invalidValues[] = is_object($put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem) ? get_class($put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem) : sprintf('%s(%s)', gettype($put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem), var_export($put_Workteam_Membership_RequestTypeWorkteam_Membership_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workteam_Membership_Data property can only contain items of type \StructType\Workteam_Membership_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workteam_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_Membership_DataType[] $workteam_Membership_Data
     * @return \StructType\Put_Workteam_Membership_RequestType
     */
    public function setWorkteam_Membership_Data(array $workteam_Membership_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workteam_Membership_DataArrayErrorMessage = self::validateWorkteam_Membership_DataForArrayConstraintsFromSetWorkteam_Membership_Data($workteam_Membership_Data))) {
            throw new \InvalidArgumentException($workteam_Membership_DataArrayErrorMessage, __LINE__);
        }
        $this->Workteam_Membership_Data = $workteam_Membership_Data;
        return $this;
    }
    /**
     * Add item to Workteam_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_Membership_DataType $item
     * @return \StructType\Put_Workteam_Membership_RequestType
     */
    public function addToWorkteam_Membership_Data(\StructType\Workteam_Membership_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workteam_Membership_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workteam_Membership_Data property can only contain items of type \StructType\Workteam_Membership_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workteam_Membership_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Workteam_Membership_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Workteam_Membership_RequestType
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
