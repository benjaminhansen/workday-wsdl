<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_External_Form_I-9_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The element containing all necessary information to put/get an External Form I-9 for a Worker.
 * @subpackage Structs
 */
class Change_External_Form_I_9_Response_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_External_Form_I_9Type[]
     */
    public $External_Form_I_9;
    /**
     * Constructor method for Change_External_Form_I-9_Response_DataType
     * @uses Change_External_Form_I_9_Response_DataType::setExternal_Form_I_9()
     * @param \WorkdayWsdl\\StructType\Change_External_Form_I_9Type[] $external_Form_I_9
     */
    public function __construct(array $external_Form_I_9 = array())
    {
        $this
            ->setExternal_Form_I_9($external_Form_I_9);
    }
    /**
     * Get external_Form_I value
     * @return external_Form_I
     */
    public function getExternal_Form_I_9()
    {
        return $this->{'External_Form_I-9'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9ForArrayConstraintsFromSetExternal_Form_I_9(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item) {
            // validation for constraint: itemType
            if (!$change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item instanceof \WorkdayWsdl\\StructType\Change_External_Form_I_9Type) {
                $invalidValues[] = is_object($change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item) ? get_class($change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item) : sprintf('%s(%s)', gettype($change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item), var_export($change_External_Form_I_9_Response_DataTypeExternal_Form_I_9Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9 property can only contain items of type \WorkdayWsdl\\StructType\Change_External_Form_I_9Type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I value
     * @param external_Form_I $external_Form_I
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Response_DataType
     */
    public function setExternal_Form_I_9(array $external_Form_I_9 = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9ArrayErrorMessage = self::validateExternal_Form_I_9ForArrayConstraintsFromSetExternal_Form_I_9($external_Form_I_9))) {
            throw new \InvalidArgumentException($external_Form_I_9ArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9 = $this->{'External_Form_I-9'} = $external_Form_I_9;
        return $this;
    }
    /**
     * Add item to External_Form_I_9 value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_External_Form_I_9Type $item
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Response_DataType
     */
    public function addToExternal_Form_I_9(\WorkdayWsdl\\StructType\Change_External_Form_I_9Type $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_External_Form_I_9Type) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9 property can only contain items of type \WorkdayWsdl\\StructType\Change_External_Form_I_9Type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9[] = $this->{'External_Form_I-9'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_External_Form_I_9_Response_DataType
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
