<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointee_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointee Response Data
 * @subpackage Structs
 */
class Academic_Appointee_Response_DataType extends AbstractStructBase
{
    /**
     * The Academic_Appointee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Academic_AppointeeType[]
     */
    public $Academic_Appointee;
    /**
     * Constructor method for Academic_Appointee_Response_DataType
     * @uses Academic_Appointee_Response_DataType::setAcademic_Appointee()
     * @param \StructType\Academic_AppointeeType[] $academic_Appointee
     */
    public function __construct(array $academic_Appointee = array())
    {
        $this
            ->setAcademic_Appointee($academic_Appointee);
    }
    /**
     * Get Academic_Appointee value
     * @return \StructType\Academic_AppointeeType[]|null
     */
    public function getAcademic_Appointee()
    {
        return $this->Academic_Appointee;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Appointee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Appointee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_AppointeeForArrayConstraintsFromSetAcademic_Appointee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointee_Response_DataTypeAcademic_AppointeeItem) {
            // validation for constraint: itemType
            if (!$academic_Appointee_Response_DataTypeAcademic_AppointeeItem instanceof \StructType\Academic_AppointeeType) {
                $invalidValues[] = is_object($academic_Appointee_Response_DataTypeAcademic_AppointeeItem) ? get_class($academic_Appointee_Response_DataTypeAcademic_AppointeeItem) : sprintf('%s(%s)', gettype($academic_Appointee_Response_DataTypeAcademic_AppointeeItem), var_export($academic_Appointee_Response_DataTypeAcademic_AppointeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Appointee property can only contain items of type \StructType\Academic_AppointeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Appointee value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_AppointeeType[] $academic_Appointee
     * @return \StructType\Academic_Appointee_Response_DataType
     */
    public function setAcademic_Appointee(array $academic_Appointee = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_AppointeeArrayErrorMessage = self::validateAcademic_AppointeeForArrayConstraintsFromSetAcademic_Appointee($academic_Appointee))) {
            throw new \InvalidArgumentException($academic_AppointeeArrayErrorMessage, __LINE__);
        }
        $this->Academic_Appointee = $academic_Appointee;
        return $this;
    }
    /**
     * Add item to Academic_Appointee value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_AppointeeType $item
     * @return \StructType\Academic_Appointee_Response_DataType
     */
    public function addToAcademic_Appointee(\StructType\Academic_AppointeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_AppointeeType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Appointee property can only contain items of type \StructType\Academic_AppointeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Appointee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointee_Response_DataType
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
