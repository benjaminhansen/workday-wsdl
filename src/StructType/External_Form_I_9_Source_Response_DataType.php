<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Source_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: External Form I-9 Source Response Data
 * @subpackage Structs
 */
class External_Form_I_9_Source_Response_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Source
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_SourceType[]
     */
    public $External_Form_I_9_Source;
    /**
     * Constructor method for External_Form_I-9_Source_Response_DataType
     * @uses External_Form_I_9_Source_Response_DataType::setExternal_Form_I_9_Source()
     * @param \StructType\External_Form_I_9_SourceType[] $external_Form_I_9_Source
     */
    public function __construct(array $external_Form_I_9_Source = array())
    {
        $this
            ->setExternal_Form_I_9_Source($external_Form_I_9_Source);
    }
    /**
     * Get external_Form_I_Source value
     * @return external_Form_I_Source
     */
    public function getExternal_Form_I_9_Source()
    {
        return $this->{'External_Form_I-9_Source'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9_Source method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9_Source method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9_SourceForArrayConstraintsFromSetExternal_Form_I_9_Source(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem) {
            // validation for constraint: itemType
            if (!$external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem instanceof \StructType\External_Form_I_9_SourceType) {
                $invalidValues[] = is_object($external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem) ? get_class($external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem) : sprintf('%s(%s)', gettype($external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem), var_export($external_Form_I_9_Source_Response_DataTypeExternal_Form_I_9_SourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9_Source property can only contain items of type \StructType\External_Form_I_9_SourceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I_Source value
     * @param external_Form_I_Source $external_Form_I_Source
     * @return \StructType\External_Form_I_9_Source_Response_DataType
     */
    public function setExternal_Form_I_9_Source(array $external_Form_I_9_Source = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9_SourceArrayErrorMessage = self::validateExternal_Form_I_9_SourceForArrayConstraintsFromSetExternal_Form_I_9_Source($external_Form_I_9_Source))) {
            throw new \InvalidArgumentException($external_Form_I_9_SourceArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9_Source = $this->{'External_Form_I-9_Source'} = $external_Form_I_9_Source;
        return $this;
    }
    /**
     * Add item to External_Form_I_9_Source value
     * @throws \InvalidArgumentException
     * @param \StructType\External_Form_I_9_SourceType $item
     * @return \StructType\External_Form_I_9_Source_Response_DataType
     */
    public function addToExternal_Form_I_9_Source(\StructType\External_Form_I_9_SourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\External_Form_I_9_SourceType) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9_Source property can only contain items of type \StructType\External_Form_I_9_SourceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9_Source[] = $this->{'External_Form_I-9_Source'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Form_I_9_Source_Response_DataType
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
