<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointee_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointee Request Criteria
 * @subpackage Structs
 */
class Academic_Appointee_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The By_Academic_Track_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Track Type Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[]
     */
    public $By_Academic_Track_Type_Reference;
    /**
     * The By_Worker
     * Meta information extracted from the WSDL
     * - documentation: By Worker
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $By_Worker;
    /**
     * The By_Affiliate
     * Meta information extracted from the WSDL
     * - documentation: By Affiliate
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $By_Affiliate;
    /**
     * The By_Student
     * Meta information extracted from the WSDL
     * - documentation: By Student
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $By_Student;
    /**
     * The By_Active_Role
     * Meta information extracted from the WSDL
     * - documentation: Active appointees have current appointments
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $By_Active_Role;
    /**
     * Constructor method for Academic_Appointee_Request_CriteriaType
     * @uses Academic_Appointee_Request_CriteriaType::setBy_Academic_Track_Type_Reference()
     * @uses Academic_Appointee_Request_CriteriaType::setBy_Worker()
     * @uses Academic_Appointee_Request_CriteriaType::setBy_Affiliate()
     * @uses Academic_Appointee_Request_CriteriaType::setBy_Student()
     * @uses Academic_Appointee_Request_CriteriaType::setBy_Active_Role()
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[] $by_Academic_Track_Type_Reference
     * @param bool $by_Worker
     * @param bool $by_Affiliate
     * @param bool $by_Student
     * @param bool $by_Active_Role
     */
    public function __construct(array $by_Academic_Track_Type_Reference = array(), $by_Worker = null, $by_Affiliate = null, $by_Student = null, $by_Active_Role = null)
    {
        $this
            ->setBy_Academic_Track_Type_Reference($by_Academic_Track_Type_Reference)
            ->setBy_Worker($by_Worker)
            ->setBy_Affiliate($by_Affiliate)
            ->setBy_Student($by_Student)
            ->setBy_Active_Role($by_Active_Role);
    }
    /**
     * Get By_Academic_Track_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[]|null
     */
    public function getBy_Academic_Track_Type_Reference()
    {
        return $this->By_Academic_Track_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setBy_Academic_Track_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBy_Academic_Track_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBy_Academic_Track_Type_ReferenceForArrayConstraintsFromSetBy_Academic_Track_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType) {
                $invalidValues[] = is_object($academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem) ? get_class($academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem), var_export($academic_Appointee_Request_CriteriaTypeBy_Academic_Track_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The By_Academic_Track_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set By_Academic_Track_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType[] $by_Academic_Track_Type_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function setBy_Academic_Track_Type_Reference(array $by_Academic_Track_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($by_Academic_Track_Type_ReferenceArrayErrorMessage = self::validateBy_Academic_Track_Type_ReferenceForArrayConstraintsFromSetBy_Academic_Track_Type_Reference($by_Academic_Track_Type_Reference))) {
            throw new \InvalidArgumentException($by_Academic_Track_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->By_Academic_Track_Type_Reference = $by_Academic_Track_Type_Reference;
        return $this;
    }
    /**
     * Add item to By_Academic_Track_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function addToBy_Academic_Track_Type_Reference(\WorkdayWsdl\\StructType\Academic_Track_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The By_Academic_Track_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Track_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->By_Academic_Track_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get By_Worker value
     * @return bool|null
     */
    public function getBy_Worker()
    {
        return $this->By_Worker;
    }
    /**
     * Set By_Worker value
     * @param bool $by_Worker
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function setBy_Worker($by_Worker = null)
    {
        // validation for constraint: boolean
        if (!is_null($by_Worker) && !is_bool($by_Worker)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($by_Worker, true), gettype($by_Worker)), __LINE__);
        }
        $this->By_Worker = $by_Worker;
        return $this;
    }
    /**
     * Get By_Affiliate value
     * @return bool|null
     */
    public function getBy_Affiliate()
    {
        return $this->By_Affiliate;
    }
    /**
     * Set By_Affiliate value
     * @param bool $by_Affiliate
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function setBy_Affiliate($by_Affiliate = null)
    {
        // validation for constraint: boolean
        if (!is_null($by_Affiliate) && !is_bool($by_Affiliate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($by_Affiliate, true), gettype($by_Affiliate)), __LINE__);
        }
        $this->By_Affiliate = $by_Affiliate;
        return $this;
    }
    /**
     * Get By_Student value
     * @return bool|null
     */
    public function getBy_Student()
    {
        return $this->By_Student;
    }
    /**
     * Set By_Student value
     * @param bool $by_Student
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function setBy_Student($by_Student = null)
    {
        // validation for constraint: boolean
        if (!is_null($by_Student) && !is_bool($by_Student)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($by_Student, true), gettype($by_Student)), __LINE__);
        }
        $this->By_Student = $by_Student;
        return $this;
    }
    /**
     * Get By_Active_Role value
     * @return bool|null
     */
    public function getBy_Active_Role()
    {
        return $this->By_Active_Role;
    }
    /**
     * Set By_Active_Role value
     * @param bool $by_Active_Role
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
     */
    public function setBy_Active_Role($by_Active_Role = null)
    {
        // validation for constraint: boolean
        if (!is_null($by_Active_Role) && !is_bool($by_Active_Role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($by_Active_Role, true), gettype($by_Active_Role)), __LINE__);
        }
        $this->By_Active_Role = $by_Active_Role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_Request_CriteriaType
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
