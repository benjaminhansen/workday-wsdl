<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * External_Disability_Self-Identification_Record_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of a Record and its data
 * @subpackage Structs
 */
class External_Disability_Self_Identification_Record_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The External_Disability_Self_Identification_Record_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an External Disability Self-Identification Record
     * - maxOccurs: unbounded
     * @var \StructType\External_Disability_Self_Identification_RecordObjectType[]
     */
    public $External_Disability_Self_Identification_Record_Reference;
    /**
     * Constructor method for
     * External_Disability_Self-Identification_Record_Request_ReferencesType
     * @uses External_Disability_Self_Identification_Record_Request_ReferencesType::setExternal_Disability_Self_Identification_Record_Reference()
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType[] $external_Disability_Self_Identification_Record_Reference
     */
    public function __construct(array $external_Disability_Self_Identification_Record_Reference = array())
    {
        $this
            ->setExternal_Disability_Self_Identification_Record_Reference($external_Disability_Self_Identification_Record_Reference);
    }
    /**
     * Get External_Disability_Self_Identification_Record_Reference value
     * @return \StructType\External_Disability_Self_Identification_RecordObjectType[]|null
     */
    public function getExternal_Disability_Self_Identification_Record_Reference()
    {
        return $this->External_Disability_Self_Identification_Record_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Disability_Self_Identification_Record_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Disability_Self_Identification_Record_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Disability_Self_Identification_Record_ReferenceForArrayConstraintsFromSetExternal_Disability_Self_Identification_Record_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem) {
            // validation for constraint: itemType
            if (!$external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem instanceof \StructType\External_Disability_Self_Identification_RecordObjectType) {
                $invalidValues[] = is_object($external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem) ? get_class($external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem) : sprintf('%s(%s)', gettype($external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem), var_export($external_Disability_Self_Identification_Record_Request_ReferencesTypeExternal_Disability_Self_Identification_Record_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Disability_Self_Identification_Record_Reference property can only contain items of type \StructType\External_Disability_Self_Identification_RecordObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set External_Disability_Self_Identification_Record_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType[] $external_Disability_Self_Identification_Record_Reference
     * @return \StructType\External_Disability_Self_Identification_Record_Request_ReferencesType
     */
    public function setExternal_Disability_Self_Identification_Record_Reference(array $external_Disability_Self_Identification_Record_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Disability_Self_Identification_Record_ReferenceArrayErrorMessage = self::validateExternal_Disability_Self_Identification_Record_ReferenceForArrayConstraintsFromSetExternal_Disability_Self_Identification_Record_Reference($external_Disability_Self_Identification_Record_Reference))) {
            throw new \InvalidArgumentException($external_Disability_Self_Identification_Record_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->External_Disability_Self_Identification_Record_Reference = $external_Disability_Self_Identification_Record_Reference;
        return $this;
    }
    /**
     * Add item to External_Disability_Self_Identification_Record_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType $item
     * @return \StructType\External_Disability_Self_Identification_Record_Request_ReferencesType
     */
    public function addToExternal_Disability_Self_Identification_Record_Reference(\StructType\External_Disability_Self_Identification_RecordObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\External_Disability_Self_Identification_RecordObjectType) {
            throw new \InvalidArgumentException(sprintf('The External_Disability_Self_Identification_Record_Reference property can only contain items of type \StructType\External_Disability_Self_Identification_RecordObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Disability_Self_Identification_Record_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Disability_Self_Identification_Record_Request_ReferencesType
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
