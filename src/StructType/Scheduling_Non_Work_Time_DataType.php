<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Scheduling_Non_Work_Time_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing meal times for the Work Schedule Calendar Event.
 * @subpackage Structs
 */
class Scheduling_Non_Work_Time_DataType extends AbstractStructBase
{
    /**
     * The Meal_In
     * Meta information extracted from the WSDL
     * - documentation: Meal In Time for the Work Schedule Calendar Event.
     * - maxOccurs: 1
     * @var string
     */
    public $Meal_In;
    /**
     * The Meal_Out
     * Meta information extracted from the WSDL
     * - documentation: Meal Out Time for the Work Schedule Calendar Event.
     * - maxOccurs: 1
     * @var string
     */
    public $Meal_Out;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Meal.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Scheduling_Non_Work_Time_DataType
     * @uses Scheduling_Non_Work_Time_DataType::setMeal_In()
     * @uses Scheduling_Non_Work_Time_DataType::setMeal_Out()
     * @uses Scheduling_Non_Work_Time_DataType::setID()
     * @param string $meal_In
     * @param string $meal_Out
     * @param string $iD
     */
    public function __construct($meal_In = null, $meal_Out = null, $iD = null)
    {
        $this
            ->setMeal_In($meal_In)
            ->setMeal_Out($meal_Out)
            ->setID($iD);
    }
    /**
     * Get Meal_In value
     * @return string|null
     */
    public function getMeal_In()
    {
        return $this->Meal_In;
    }
    /**
     * Set Meal_In value
     * @param string $meal_In
     * @return \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType
     */
    public function setMeal_In($meal_In = null)
    {
        // validation for constraint: string
        if (!is_null($meal_In) && !is_string($meal_In)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meal_In, true), gettype($meal_In)), __LINE__);
        }
        $this->Meal_In = $meal_In;
        return $this;
    }
    /**
     * Get Meal_Out value
     * @return string|null
     */
    public function getMeal_Out()
    {
        return $this->Meal_Out;
    }
    /**
     * Set Meal_Out value
     * @param string $meal_Out
     * @return \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType
     */
    public function setMeal_Out($meal_Out = null)
    {
        // validation for constraint: string
        if (!is_null($meal_Out) && !is_string($meal_Out)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meal_Out, true), gettype($meal_Out)), __LINE__);
        }
        $this->Meal_Out = $meal_Out;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType
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
