<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Related_Persons_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the person's that are related to the worker as a dependent, beneficiary or emergency contact.Security Note: This element is secured to the following domains: Self Service: Benefit Elections; Worker Data: Benefit Elections
 * @subpackage Structs
 */
class Worker_Related_Persons_DataType extends AbstractStructBase
{
    /**
     * The Number_of_Payroll_Dependents
     * Meta information extracted from the WSDL
     * - documentation: The number of dependents, for this worker, that are used for payroll purposes.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Payroll_Dependents;
    /**
     * The Related_Person
     * Meta information extracted from the WSDL
     * - documentation: Contains the dependent, beneficiary, and emergency contact information for the related person.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Related_PersonType[]
     */
    public $Related_Person;
    /**
     * Constructor method for Worker_Related_Persons_DataType
     * @uses Worker_Related_Persons_DataType::setNumber_of_Payroll_Dependents()
     * @uses Worker_Related_Persons_DataType::setRelated_Person()
     * @param float $number_of_Payroll_Dependents
     * @param \WorkdayWsdl\\StructType\Related_PersonType[] $related_Person
     */
    public function __construct($number_of_Payroll_Dependents = null, array $related_Person = array())
    {
        $this
            ->setNumber_of_Payroll_Dependents($number_of_Payroll_Dependents)
            ->setRelated_Person($related_Person);
    }
    /**
     * Get Number_of_Payroll_Dependents value
     * @return float|null
     */
    public function getNumber_of_Payroll_Dependents()
    {
        return $this->Number_of_Payroll_Dependents;
    }
    /**
     * Set Number_of_Payroll_Dependents value
     * @param float $number_of_Payroll_Dependents
     * @return \WorkdayWsdl\\StructType\Worker_Related_Persons_DataType
     */
    public function setNumber_of_Payroll_Dependents($number_of_Payroll_Dependents = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Payroll_Dependents) && !(is_float($number_of_Payroll_Dependents) || is_numeric($number_of_Payroll_Dependents))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Payroll_Dependents, true), gettype($number_of_Payroll_Dependents)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Payroll_Dependents) && mb_strlen(mb_substr($number_of_Payroll_Dependents, mb_strpos($number_of_Payroll_Dependents, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Payroll_Dependents, true), mb_strlen(mb_substr($number_of_Payroll_Dependents, mb_strpos($number_of_Payroll_Dependents, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Payroll_Dependents) && $number_of_Payroll_Dependents < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Payroll_Dependents, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Payroll_Dependents) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Payroll_Dependents)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Payroll_Dependents, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Payroll_Dependents))), __LINE__);
        }
        $this->Number_of_Payroll_Dependents = $number_of_Payroll_Dependents;
        return $this;
    }
    /**
     * Get Related_Person value
     * @return \WorkdayWsdl\\StructType\Related_PersonType[]|null
     */
    public function getRelated_Person()
    {
        return $this->Related_Person;
    }
    /**
     * This method is responsible for validating the values passed to the setRelated_Person method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelated_Person method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelated_PersonForArrayConstraintsFromSetRelated_Person(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Related_Persons_DataTypeRelated_PersonItem) {
            // validation for constraint: itemType
            if (!$worker_Related_Persons_DataTypeRelated_PersonItem instanceof \WorkdayWsdl\\StructType\Related_PersonType) {
                $invalidValues[] = is_object($worker_Related_Persons_DataTypeRelated_PersonItem) ? get_class($worker_Related_Persons_DataTypeRelated_PersonItem) : sprintf('%s(%s)', gettype($worker_Related_Persons_DataTypeRelated_PersonItem), var_export($worker_Related_Persons_DataTypeRelated_PersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Related_Person property can only contain items of type \WorkdayWsdl\\StructType\Related_PersonType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Related_Person value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Related_PersonType[] $related_Person
     * @return \WorkdayWsdl\\StructType\Worker_Related_Persons_DataType
     */
    public function setRelated_Person(array $related_Person = array())
    {
        // validation for constraint: array
        if ('' !== ($related_PersonArrayErrorMessage = self::validateRelated_PersonForArrayConstraintsFromSetRelated_Person($related_Person))) {
            throw new \InvalidArgumentException($related_PersonArrayErrorMessage, __LINE__);
        }
        $this->Related_Person = $related_Person;
        return $this;
    }
    /**
     * Add item to Related_Person value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Related_PersonType $item
     * @return \WorkdayWsdl\\StructType\Worker_Related_Persons_DataType
     */
    public function addToRelated_Person(\WorkdayWsdl\\StructType\Related_PersonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Related_PersonType) {
            throw new \InvalidArgumentException(sprintf('The Related_Person property can only contain items of type \WorkdayWsdl\\StructType\Related_PersonType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Related_Person[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Related_Persons_DataType
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
