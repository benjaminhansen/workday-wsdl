<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workteam_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Workteam references.
 * @subpackage Structs
 */
class Workteam_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Workteam_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workteam Request References
     * - maxOccurs: unbounded
     * @var \StructType\WorkteamObjectType[]
     */
    public $Workteam_Reference;
    /**
     * Constructor method for Workteam_Request_ReferencesType
     * @uses Workteam_Request_ReferencesType::setWorkteam_Reference()
     * @param \StructType\WorkteamObjectType[] $workteam_Reference
     */
    public function __construct(array $workteam_Reference = array())
    {
        $this
            ->setWorkteam_Reference($workteam_Reference);
    }
    /**
     * Get Workteam_Reference value
     * @return \StructType\WorkteamObjectType[]|null
     */
    public function getWorkteam_Reference()
    {
        return $this->Workteam_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkteam_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkteam_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkteam_ReferenceForArrayConstraintsFromSetWorkteam_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workteam_Request_ReferencesTypeWorkteam_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workteam_Request_ReferencesTypeWorkteam_ReferenceItem instanceof \StructType\WorkteamObjectType) {
                $invalidValues[] = is_object($workteam_Request_ReferencesTypeWorkteam_ReferenceItem) ? get_class($workteam_Request_ReferencesTypeWorkteam_ReferenceItem) : sprintf('%s(%s)', gettype($workteam_Request_ReferencesTypeWorkteam_ReferenceItem), var_export($workteam_Request_ReferencesTypeWorkteam_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workteam_Reference property can only contain items of type \StructType\WorkteamObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workteam_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkteamObjectType[] $workteam_Reference
     * @return \StructType\Workteam_Request_ReferencesType
     */
    public function setWorkteam_Reference(array $workteam_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workteam_ReferenceArrayErrorMessage = self::validateWorkteam_ReferenceForArrayConstraintsFromSetWorkteam_Reference($workteam_Reference))) {
            throw new \InvalidArgumentException($workteam_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workteam_Reference = $workteam_Reference;
        return $this;
    }
    /**
     * Add item to Workteam_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkteamObjectType $item
     * @return \StructType\Workteam_Request_ReferencesType
     */
    public function addToWorkteam_Reference(\StructType\WorkteamObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkteamObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workteam_Reference property can only contain items of type \StructType\WorkteamObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workteam_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workteam_Request_ReferencesType
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
