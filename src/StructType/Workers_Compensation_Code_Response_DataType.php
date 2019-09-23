<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_Code_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper Element for Worker Compensation Code Data
 * @subpackage Structs
 */
class Workers_Compensation_Code_Response_DataType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code
     * Meta information extracted from the WSDL
     * - documentation: Element contains Worker Compensation Code data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeType[]
     */
    public $Workers_Compensation_Code;
    /**
     * Constructor method for Workers_Compensation_Code_Response_DataType
     * @uses Workers_Compensation_Code_Response_DataType::setWorkers_Compensation_Code()
     * @param \StructType\Workers_Compensation_CodeType[] $workers_Compensation_Code
     */
    public function __construct(array $workers_Compensation_Code = array())
    {
        $this
            ->setWorkers_Compensation_Code($workers_Compensation_Code);
    }
    /**
     * Get Workers_Compensation_Code value
     * @return \StructType\Workers_Compensation_CodeType[]|null
     */
    public function getWorkers_Compensation_Code()
    {
        return $this->Workers_Compensation_Code;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Compensation_Code method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Compensation_Code method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Compensation_CodeForArrayConstraintsFromSetWorkers_Compensation_Code(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem instanceof \StructType\Workers_Compensation_CodeType) {
                $invalidValues[] = is_object($workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem) ? get_class($workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem), var_export($workers_Compensation_Code_Response_DataTypeWorkers_Compensation_CodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Compensation_Code property can only contain items of type \StructType\Workers_Compensation_CodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Compensation_Code value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeType[] $workers_Compensation_Code
     * @return \StructType\Workers_Compensation_Code_Response_DataType
     */
    public function setWorkers_Compensation_Code(array $workers_Compensation_Code = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Compensation_CodeArrayErrorMessage = self::validateWorkers_Compensation_CodeForArrayConstraintsFromSetWorkers_Compensation_Code($workers_Compensation_Code))) {
            throw new \InvalidArgumentException($workers_Compensation_CodeArrayErrorMessage, __LINE__);
        }
        $this->Workers_Compensation_Code = $workers_Compensation_Code;
        return $this;
    }
    /**
     * Add item to Workers_Compensation_Code value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeType $item
     * @return \StructType\Workers_Compensation_Code_Response_DataType
     */
    public function addToWorkers_Compensation_Code(\StructType\Workers_Compensation_CodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workers_Compensation_CodeType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Compensation_Code property can only contain items of type \StructType\Workers_Compensation_CodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Compensation_Code[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workers_Compensation_Code_Response_DataType
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
