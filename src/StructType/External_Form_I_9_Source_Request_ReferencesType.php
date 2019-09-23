<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Source_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: External Form I-9 Source Request References
 * @subpackage Structs
 */
class External_Form_I_9_Source_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType[]
     */
    public $External_Form_I_9_Source_Reference;
    /**
     * Constructor method for External_Form_I-9_Source_Request_ReferencesType
     * @uses External_Form_I_9_Source_Request_ReferencesType::setExternal_Form_I_9_Source_Reference()
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType[] $external_Form_I_9_Source_Reference
     */
    public function __construct(array $external_Form_I_9_Source_Reference = array())
    {
        $this
            ->setExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference);
    }
    /**
     * Get external_Form_I_Source_Reference value
     * @return external_Form_I_Source_Reference
     */
    public function getExternal_Form_I_9_Source_Reference()
    {
        return $this->{'External_Form_I-9_Source_Reference'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9_Source_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9_Source_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9_Source_ReferenceForArrayConstraintsFromSetExternal_Form_I_9_Source_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem) {
            // validation for constraint: itemType
            if (!$external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem instanceof \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType) {
                $invalidValues[] = is_object($external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem) ? get_class($external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem) : sprintf('%s(%s)', gettype($external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem), var_export($external_Form_I_9_Source_Request_ReferencesTypeExternal_Form_I_9_Source_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9_Source_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I_Source_Reference value
     * @param external_Form_I_Source_Reference $external_Form_I_Source_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_Request_ReferencesType
     */
    public function setExternal_Form_I_9_Source_Reference(array $external_Form_I_9_Source_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9_Source_ReferenceArrayErrorMessage = self::validateExternal_Form_I_9_Source_ReferenceForArrayConstraintsFromSetExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference))) {
            throw new \InvalidArgumentException($external_Form_I_9_Source_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9_Source_Reference = $this->{'External_Form_I-9_Source_Reference'} = $external_Form_I_9_Source_Reference;
        return $this;
    }
    /**
     * Add item to External_Form_I_9_Source_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $item
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_Request_ReferencesType
     */
    public function addToExternal_Form_I_9_Source_Reference(\WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9_Source_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9_Source_Reference[] = $this->{'External_Form_I-9_Source_Reference'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_Request_ReferencesType
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
