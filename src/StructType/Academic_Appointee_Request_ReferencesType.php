<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointee_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointee Request References
 * @subpackage Structs
 */
class Academic_Appointee_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Academic_Appointee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointee Request References
     * - maxOccurs: unbounded
     * @var \StructType\Academic_Appointee_EnabledObjectType[]
     */
    public $Academic_Appointee_Reference;
    /**
     * Constructor method for Academic_Appointee_Request_ReferencesType
     * @uses Academic_Appointee_Request_ReferencesType::setAcademic_Appointee_Reference()
     * @param \StructType\Academic_Appointee_EnabledObjectType[] $academic_Appointee_Reference
     */
    public function __construct(array $academic_Appointee_Reference = array())
    {
        $this
            ->setAcademic_Appointee_Reference($academic_Appointee_Reference);
    }
    /**
     * Get Academic_Appointee_Reference value
     * @return \StructType\Academic_Appointee_EnabledObjectType[]|null
     */
    public function getAcademic_Appointee_Reference()
    {
        return $this->Academic_Appointee_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Appointee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Appointee_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Appointee_ReferenceForArrayConstraintsFromSetAcademic_Appointee_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem instanceof \StructType\Academic_Appointee_EnabledObjectType) {
                $invalidValues[] = is_object($academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem) ? get_class($academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem), var_export($academic_Appointee_Request_ReferencesTypeAcademic_Appointee_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Appointee_Reference property can only contain items of type \StructType\Academic_Appointee_EnabledObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Appointee_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Appointee_EnabledObjectType[] $academic_Appointee_Reference
     * @return \StructType\Academic_Appointee_Request_ReferencesType
     */
    public function setAcademic_Appointee_Reference(array $academic_Appointee_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Appointee_ReferenceArrayErrorMessage = self::validateAcademic_Appointee_ReferenceForArrayConstraintsFromSetAcademic_Appointee_Reference($academic_Appointee_Reference))) {
            throw new \InvalidArgumentException($academic_Appointee_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Appointee_Reference = $academic_Appointee_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Appointee_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Appointee_EnabledObjectType $item
     * @return \StructType\Academic_Appointee_Request_ReferencesType
     */
    public function addToAcademic_Appointee_Reference(\StructType\Academic_Appointee_EnabledObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_Appointee_EnabledObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Appointee_Reference property can only contain items of type \StructType\Academic_Appointee_EnabledObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Appointee_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointee_Request_ReferencesType
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
