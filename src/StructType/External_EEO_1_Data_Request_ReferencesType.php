<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_EEO-1_Data_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: External EEO-1 Data Request References
 * @subpackage Structs
 */
class External_EEO_1_Data_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The External_EEO_1_Data_Reference
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data Request Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType[]
     */
    public $External_EEO_1_Data_Reference;
    /**
     * Constructor method for External_EEO-1_Data_Request_ReferencesType
     * @uses External_EEO_1_Data_Request_ReferencesType::setExternal_EEO_1_Data_Reference()
     * @param \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType[] $external_EEO_1_Data_Reference
     */
    public function __construct(array $external_EEO_1_Data_Reference = array())
    {
        $this
            ->setExternal_EEO_1_Data_Reference($external_EEO_1_Data_Reference);
    }
    /**
     * Get external_EEO_Data_Reference value
     * @return external_EEO_Data_Reference
     */
    public function getExternal_EEO_1_Data_Reference()
    {
        return $this->{'External_EEO-1_Data_Reference'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_EEO_1_Data_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_EEO_1_Data_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_EEO_1_Data_ReferenceForArrayConstraintsFromSetExternal_EEO_1_Data_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem) {
            // validation for constraint: itemType
            if (!$external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem instanceof \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType) {
                $invalidValues[] = is_object($external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem) ? get_class($external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem) : sprintf('%s(%s)', gettype($external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem), var_export($external_EEO_1_Data_Request_ReferencesTypeExternal_EEO_1_Data_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_EEO_1_Data_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_EEO_Data_Reference value
     * @param external_EEO_Data_Reference $external_EEO_Data_Reference
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_Request_ReferencesType
     */
    public function setExternal_EEO_1_Data_Reference(array $external_EEO_1_Data_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($external_EEO_1_Data_ReferenceArrayErrorMessage = self::validateExternal_EEO_1_Data_ReferenceForArrayConstraintsFromSetExternal_EEO_1_Data_Reference($external_EEO_1_Data_Reference))) {
            throw new \InvalidArgumentException($external_EEO_1_Data_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->External_EEO_1_Data_Reference = $this->{'External_EEO-1_Data_Reference'} = $external_EEO_1_Data_Reference;
        return $this;
    }
    /**
     * Add item to External_EEO_1_Data_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType $item
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_Request_ReferencesType
     */
    public function addToExternal_EEO_1_Data_Reference(\WorkdayWsdl\\StructType\External_EEO_1_DataObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType) {
            throw new \InvalidArgumentException(sprintf('The External_EEO_1_Data_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_EEO_1_Data_Reference[] = $this->{'External_EEO-1_Data_Reference'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_Request_ReferencesType
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
