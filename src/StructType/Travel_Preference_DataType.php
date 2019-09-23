<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Travel_Preference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the information about the employees willingness to travel as part of their job.
 * @subpackage Structs
 */
class Travel_Preference_DataType extends AbstractStructBase
{
    /**
     * The Willing_to_Travel_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to whether an employee is willing to travel as part of their job. The only values allowed are: Yes, No, and Maybe.
     * - minOccurs: 0
     * @var \StructType\Mobility_ChoiceObjectType
     */
    public $Willing_to_Travel_Reference;
    /**
     * The Travel_Amount_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the amount of time that the employee is willing to travel for as part of their job. This is only applicable when the employee is willing to travel (Willing to Travel = Yes or Maybe).
     * - minOccurs: 0
     * @var \StructType\Travel_AmountObjectType
     */
    public $Travel_Amount_Reference;
    /**
     * The Travel_Additional_Information
     * Meta information extracted from the WSDL
     * - documentation: More information about why (or why not) the employee is willing to travel as part of their job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Travel_Additional_Information;
    /**
     * Constructor method for Travel_Preference_DataType
     * @uses Travel_Preference_DataType::setWilling_to_Travel_Reference()
     * @uses Travel_Preference_DataType::setTravel_Amount_Reference()
     * @uses Travel_Preference_DataType::setTravel_Additional_Information()
     * @param \StructType\Mobility_ChoiceObjectType $willing_to_Travel_Reference
     * @param \StructType\Travel_AmountObjectType $travel_Amount_Reference
     * @param string $travel_Additional_Information
     */
    public function __construct(\StructType\Mobility_ChoiceObjectType $willing_to_Travel_Reference = null, \StructType\Travel_AmountObjectType $travel_Amount_Reference = null, $travel_Additional_Information = null)
    {
        $this
            ->setWilling_to_Travel_Reference($willing_to_Travel_Reference)
            ->setTravel_Amount_Reference($travel_Amount_Reference)
            ->setTravel_Additional_Information($travel_Additional_Information);
    }
    /**
     * Get Willing_to_Travel_Reference value
     * @return \StructType\Mobility_ChoiceObjectType|null
     */
    public function getWilling_to_Travel_Reference()
    {
        return $this->Willing_to_Travel_Reference;
    }
    /**
     * Set Willing_to_Travel_Reference value
     * @param \StructType\Mobility_ChoiceObjectType $willing_to_Travel_Reference
     * @return \StructType\Travel_Preference_DataType
     */
    public function setWilling_to_Travel_Reference(\StructType\Mobility_ChoiceObjectType $willing_to_Travel_Reference = null)
    {
        $this->Willing_to_Travel_Reference = $willing_to_Travel_Reference;
        return $this;
    }
    /**
     * Get Travel_Amount_Reference value
     * @return \StructType\Travel_AmountObjectType|null
     */
    public function getTravel_Amount_Reference()
    {
        return $this->Travel_Amount_Reference;
    }
    /**
     * Set Travel_Amount_Reference value
     * @param \StructType\Travel_AmountObjectType $travel_Amount_Reference
     * @return \StructType\Travel_Preference_DataType
     */
    public function setTravel_Amount_Reference(\StructType\Travel_AmountObjectType $travel_Amount_Reference = null)
    {
        $this->Travel_Amount_Reference = $travel_Amount_Reference;
        return $this;
    }
    /**
     * Get Travel_Additional_Information value
     * @return string|null
     */
    public function getTravel_Additional_Information()
    {
        return $this->Travel_Additional_Information;
    }
    /**
     * Set Travel_Additional_Information value
     * @param string $travel_Additional_Information
     * @return \StructType\Travel_Preference_DataType
     */
    public function setTravel_Additional_Information($travel_Additional_Information = null)
    {
        // validation for constraint: string
        if (!is_null($travel_Additional_Information) && !is_string($travel_Additional_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_Additional_Information, true), gettype($travel_Additional_Information)), __LINE__);
        }
        $this->Travel_Additional_Information = $travel_Additional_Information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Travel_Preference_DataType
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
