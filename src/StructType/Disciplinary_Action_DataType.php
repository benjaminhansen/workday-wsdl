<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disciplinary_Action_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the latest completed disciplinary action for the employee.
 * @subpackage Structs
 */
class Disciplinary_Action_DataType extends AbstractStructBase
{
    /**
     * The Disciplinary_Action_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains a reference to latest completed disciplinary action for the employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType
     */
    public $Disciplinary_Action_Reference;
    /**
     * The Disciplinary_Action_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reason why the disciplinary action was taken.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType[]
     */
    public $Disciplinary_Action_Reason_Reference;
    /**
     * The Disciplinary_Action_Related_To_Reference
     * Meta information extracted from the WSDL
     * - documentation: The prior disciplinary action(s) that this is related to.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType[]
     */
    public $Disciplinary_Action_Related_To_Reference;
    /**
     * The Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the information about the disciplinary action for the employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Review_Details_DataType
     */
    public $Review_Data;
    /**
     * Constructor method for Disciplinary_Action_DataType
     * @uses Disciplinary_Action_DataType::setDisciplinary_Action_Reference()
     * @uses Disciplinary_Action_DataType::setDisciplinary_Action_Reason_Reference()
     * @uses Disciplinary_Action_DataType::setDisciplinary_Action_Related_To_Reference()
     * @uses Disciplinary_Action_DataType::setReview_Data()
     * @param \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $disciplinary_Action_Reference
     * @param \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType[] $disciplinary_Action_Reason_Reference
     * @param \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType[] $disciplinary_Action_Related_To_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $disciplinary_Action_Reference = null, array $disciplinary_Action_Reason_Reference = array(), array $disciplinary_Action_Related_To_Reference = array(), \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this
            ->setDisciplinary_Action_Reference($disciplinary_Action_Reference)
            ->setDisciplinary_Action_Reason_Reference($disciplinary_Action_Reason_Reference)
            ->setDisciplinary_Action_Related_To_Reference($disciplinary_Action_Related_To_Reference)
            ->setReview_Data($review_Data);
    }
    /**
     * Get Disciplinary_Action_Reference value
     * @return \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType|null
     */
    public function getDisciplinary_Action_Reference()
    {
        return $this->Disciplinary_Action_Reference;
    }
    /**
     * Set Disciplinary_Action_Reference value
     * @param \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $disciplinary_Action_Reference
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function setDisciplinary_Action_Reference(\WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $disciplinary_Action_Reference = null)
    {
        $this->Disciplinary_Action_Reference = $disciplinary_Action_Reference;
        return $this;
    }
    /**
     * Get Disciplinary_Action_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType[]|null
     */
    public function getDisciplinary_Action_Reason_Reference()
    {
        return $this->Disciplinary_Action_Reason_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDisciplinary_Action_Reason_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisciplinary_Action_Reason_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisciplinary_Action_Reason_ReferenceForArrayConstraintsFromSetDisciplinary_Action_Reason_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem) {
            // validation for constraint: itemType
            if (!$disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem instanceof \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType) {
                $invalidValues[] = is_object($disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem) ? get_class($disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem) : sprintf('%s(%s)', gettype($disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem), var_export($disciplinary_Action_DataTypeDisciplinary_Action_Reason_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disciplinary_Action_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disciplinary_Action_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType[] $disciplinary_Action_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function setDisciplinary_Action_Reason_Reference(array $disciplinary_Action_Reason_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($disciplinary_Action_Reason_ReferenceArrayErrorMessage = self::validateDisciplinary_Action_Reason_ReferenceForArrayConstraintsFromSetDisciplinary_Action_Reason_Reference($disciplinary_Action_Reason_Reference))) {
            throw new \InvalidArgumentException($disciplinary_Action_Reason_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Disciplinary_Action_Reason_Reference = $disciplinary_Action_Reason_Reference;
        return $this;
    }
    /**
     * Add item to Disciplinary_Action_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType $item
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function addToDisciplinary_Action_Reason_Reference(\WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType) {
            throw new \InvalidArgumentException(sprintf('The Disciplinary_Action_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Disciplinary_Action_ReasonObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disciplinary_Action_Reason_Reference[] = $item;
        return $this;
    }
    /**
     * Get Disciplinary_Action_Related_To_Reference value
     * @return \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType[]|null
     */
    public function getDisciplinary_Action_Related_To_Reference()
    {
        return $this->Disciplinary_Action_Related_To_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDisciplinary_Action_Related_To_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisciplinary_Action_Related_To_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisciplinary_Action_Related_To_ReferenceForArrayConstraintsFromSetDisciplinary_Action_Related_To_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem) {
            // validation for constraint: itemType
            if (!$disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem instanceof \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType) {
                $invalidValues[] = is_object($disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem) ? get_class($disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem) : sprintf('%s(%s)', gettype($disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem), var_export($disciplinary_Action_DataTypeDisciplinary_Action_Related_To_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disciplinary_Action_Related_To_Reference property can only contain items of type \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disciplinary_Action_Related_To_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType[] $disciplinary_Action_Related_To_Reference
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function setDisciplinary_Action_Related_To_Reference(array $disciplinary_Action_Related_To_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($disciplinary_Action_Related_To_ReferenceArrayErrorMessage = self::validateDisciplinary_Action_Related_To_ReferenceForArrayConstraintsFromSetDisciplinary_Action_Related_To_Reference($disciplinary_Action_Related_To_Reference))) {
            throw new \InvalidArgumentException($disciplinary_Action_Related_To_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Disciplinary_Action_Related_To_Reference = $disciplinary_Action_Related_To_Reference;
        return $this;
    }
    /**
     * Add item to Disciplinary_Action_Related_To_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $item
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function addToDisciplinary_Action_Related_To_Reference(\WorkdayWsdl\\StructType\Disciplinary_ActionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Disciplinary_Action_Related_To_Reference property can only contain items of type \WorkdayWsdl\\StructType\Disciplinary_ActionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disciplinary_Action_Related_To_Reference[] = $item;
        return $this;
    }
    /**
     * Get Review_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Review_Details_DataType|null
     */
    public function getReview_Data()
    {
        return $this->Review_Data;
    }
    /**
     * Set Review_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
     */
    public function setReview_Data(\WorkdayWsdl\\StructType\Employee_Review_Details_DataType $review_Data = null)
    {
        $this->Review_Data = $review_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Disciplinary_Action_DataType
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
