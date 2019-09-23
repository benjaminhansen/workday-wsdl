<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_External_Form_I-9_Section_3Type StructType
 * Meta information extracted from the WSDL
 * - documentation: The element containing all necessary information to put/get an External Form I-9 Section 3 for a Worker.
 * @subpackage Structs
 */
class Change_External_Form_I_9_Section_3Type extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Worker Reference to extract External Form I-9 Section 3 for Workers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Worker_Reference;
    /**
     * The External_Form_I_9_Section_3_Data
     * Meta information extracted from the WSDL
     * - documentation: The element containing all necessary information to put/get an External Form I-9 Section 3 for a Worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType[]
     */
    public $External_Form_I_9_Section_3_Data;
    /**
     * Constructor method for Change_External_Form_I-9_Section_3Type
     * @uses Change_External_Form_I_9_Section_3Type::setWorker_Reference()
     * @uses Change_External_Form_I_9_Section_3Type::setExternal_Form_I_9_Section_3_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $worker_Reference
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType[] $external_Form_I_9_Section_3_Data
     */
    public function __construct(array $worker_Reference = array(), array $external_Form_I_9_Section_3_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setExternal_Form_I_9_Section_3_Data($external_Form_I_9_Section_3_Data);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_ReferenceForArrayConstraintsFromSetWorker_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_External_Form_I_9_Section_3TypeWorker_ReferenceItem) {
            // validation for constraint: itemType
            if (!$change_External_Form_I_9_Section_3TypeWorker_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($change_External_Form_I_9_Section_3TypeWorker_ReferenceItem) ? get_class($change_External_Form_I_9_Section_3TypeWorker_ReferenceItem) : sprintf('%s(%s)', gettype($change_External_Form_I_9_Section_3TypeWorker_ReferenceItem), var_export($change_External_Form_I_9_Section_3TypeWorker_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $worker_Reference
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Section_3Type
     */
    public function setWorker_Reference(array $worker_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_ReferenceArrayErrorMessage = self::validateWorker_ReferenceForArrayConstraintsFromSetWorker_Reference($worker_Reference))) {
            throw new \InvalidArgumentException($worker_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Add item to Worker_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Section_3Type
     */
    public function addToWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Reference[] = $item;
        return $this;
    }
    /**
     * Get external_Form_I_Section_Data value
     * @return external_Form_I_Section_Data
     */
    public function getExternal_Form_I_9_Section_3_Data()
    {
        return $this->{'External_Form_I-9_Section_3_Data'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9_Section_3_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9_Section_3_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9_Section_3_DataForArrayConstraintsFromSetExternal_Form_I_9_Section_3_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem) {
            // validation for constraint: itemType
            if (!$change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType) {
                $invalidValues[] = is_object($change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem) ? get_class($change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem) : sprintf('%s(%s)', gettype($change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem), var_export($change_External_Form_I_9_Section_3TypeExternal_Form_I_9_Section_3_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9_Section_3_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I_Section_Data value
     * @param external_Form_I_Section_Data $external_Form_I_Section_Data
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Section_3Type
     */
    public function setExternal_Form_I_9_Section_3_Data(array $external_Form_I_9_Section_3_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9_Section_3_DataArrayErrorMessage = self::validateExternal_Form_I_9_Section_3_DataForArrayConstraintsFromSetExternal_Form_I_9_Section_3_Data($external_Form_I_9_Section_3_Data))) {
            throw new \InvalidArgumentException($external_Form_I_9_Section_3_DataArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9_Section_3_Data = $this->{'External_Form_I-9_Section_3_Data'} = $external_Form_I_9_Section_3_Data;
        return $this;
    }
    /**
     * Add item to External_Form_I_9_Section_3_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType $item
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Section_3Type
     */
    public function addToExternal_Form_I_9_Section_3_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9_Section_3_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9_Section_3_Data[] = $this->{'External_Form_I-9_Section_3_Data'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Section_3Type
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
