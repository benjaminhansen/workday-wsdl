<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_Code_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing reference instance for a Workers' Compensation Code
 * @subpackage Structs
 */
class Workers_Compensation_Code_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Workers' Compensation Code
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeObjectType[]
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * Constructor method for Workers_Compensation_Code_Request_ReferencesType
     * @uses Workers_Compensation_Code_Request_ReferencesType::setWorkers_Compensation_Code_Reference()
     * @param \StructType\Workers_Compensation_CodeObjectType[] $workers_Compensation_Code_Reference
     */
    public function __construct(array $workers_Compensation_Code_Reference = array())
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference);
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \StructType\Workers_Compensation_CodeObjectType[]|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Compensation_Code_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Compensation_Code_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Compensation_Code_ReferenceForArrayConstraintsFromSetWorkers_Compensation_Code_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem instanceof \StructType\Workers_Compensation_CodeObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem) ? get_class($workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem), var_export($workers_Compensation_Code_Request_ReferencesTypeWorkers_Compensation_Code_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Compensation_Code_Reference property can only contain items of type \StructType\Workers_Compensation_CodeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeObjectType[] $workers_Compensation_Code_Reference
     * @return \StructType\Workers_Compensation_Code_Request_ReferencesType
     */
    public function setWorkers_Compensation_Code_Reference(array $workers_Compensation_Code_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Compensation_Code_ReferenceArrayErrorMessage = self::validateWorkers_Compensation_Code_ReferenceForArrayConstraintsFromSetWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference))) {
            throw new \InvalidArgumentException($workers_Compensation_Code_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Add item to Workers_Compensation_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeObjectType $item
     * @return \StructType\Workers_Compensation_Code_Request_ReferencesType
     */
    public function addToWorkers_Compensation_Code_Reference(\StructType\Workers_Compensation_CodeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workers_Compensation_CodeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Compensation_Code_Reference property can only contain items of type \StructType\Workers_Compensation_CodeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Compensation_Code_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workers_Compensation_Code_Request_ReferencesType
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
