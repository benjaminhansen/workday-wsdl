<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Review_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the latest completed performance review for the employee.
 * @subpackage Structs
 */
class Employee_Review_DataType extends AbstractStructBase
{
    /**
     * The Performance_Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the latest completed performance review for the employee.
     * - minOccurs: 0
     * @var \StructType\Performance_Review_DataType
     */
    public $Performance_Review_Data;
    /**
     * The Performance_Improvement_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the latest completed performance improvement plan for the employee.
     * - minOccurs: 0
     * @var \StructType\Performance_Improvement_Plan_DataType
     */
    public $Performance_Improvement_Plan_Data;
    /**
     * The Development_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the latest completed development plan for the employee.
     * - minOccurs: 0
     * @var \StructType\Development_Plan_DataType
     */
    public $Development_Plan_Data;
    /**
     * The Disciplinary_Action_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the latest completed disciplinary action for the employee.
     * - minOccurs: 0
     * @var \StructType\Disciplinary_Action_DataType
     */
    public $Disciplinary_Action_Data;
    /**
     * Constructor method for Employee_Review_DataType
     * @uses Employee_Review_DataType::setPerformance_Review_Data()
     * @uses Employee_Review_DataType::setPerformance_Improvement_Plan_Data()
     * @uses Employee_Review_DataType::setDevelopment_Plan_Data()
     * @uses Employee_Review_DataType::setDisciplinary_Action_Data()
     * @param \StructType\Performance_Review_DataType $performance_Review_Data
     * @param \StructType\Performance_Improvement_Plan_DataType $performance_Improvement_Plan_Data
     * @param \StructType\Development_Plan_DataType $development_Plan_Data
     * @param \StructType\Disciplinary_Action_DataType $disciplinary_Action_Data
     */
    public function __construct(\StructType\Performance_Review_DataType $performance_Review_Data = null, \StructType\Performance_Improvement_Plan_DataType $performance_Improvement_Plan_Data = null, \StructType\Development_Plan_DataType $development_Plan_Data = null, \StructType\Disciplinary_Action_DataType $disciplinary_Action_Data = null)
    {
        $this
            ->setPerformance_Review_Data($performance_Review_Data)
            ->setPerformance_Improvement_Plan_Data($performance_Improvement_Plan_Data)
            ->setDevelopment_Plan_Data($development_Plan_Data)
            ->setDisciplinary_Action_Data($disciplinary_Action_Data);
    }
    /**
     * Get Performance_Review_Data value
     * @return \StructType\Performance_Review_DataType|null
     */
    public function getPerformance_Review_Data()
    {
        return $this->Performance_Review_Data;
    }
    /**
     * Set Performance_Review_Data value
     * @param \StructType\Performance_Review_DataType $performance_Review_Data
     * @return \StructType\Employee_Review_DataType
     */
    public function setPerformance_Review_Data(\StructType\Performance_Review_DataType $performance_Review_Data = null)
    {
        $this->Performance_Review_Data = $performance_Review_Data;
        return $this;
    }
    /**
     * Get Performance_Improvement_Plan_Data value
     * @return \StructType\Performance_Improvement_Plan_DataType|null
     */
    public function getPerformance_Improvement_Plan_Data()
    {
        return $this->Performance_Improvement_Plan_Data;
    }
    /**
     * Set Performance_Improvement_Plan_Data value
     * @param \StructType\Performance_Improvement_Plan_DataType $performance_Improvement_Plan_Data
     * @return \StructType\Employee_Review_DataType
     */
    public function setPerformance_Improvement_Plan_Data(\StructType\Performance_Improvement_Plan_DataType $performance_Improvement_Plan_Data = null)
    {
        $this->Performance_Improvement_Plan_Data = $performance_Improvement_Plan_Data;
        return $this;
    }
    /**
     * Get Development_Plan_Data value
     * @return \StructType\Development_Plan_DataType|null
     */
    public function getDevelopment_Plan_Data()
    {
        return $this->Development_Plan_Data;
    }
    /**
     * Set Development_Plan_Data value
     * @param \StructType\Development_Plan_DataType $development_Plan_Data
     * @return \StructType\Employee_Review_DataType
     */
    public function setDevelopment_Plan_Data(\StructType\Development_Plan_DataType $development_Plan_Data = null)
    {
        $this->Development_Plan_Data = $development_Plan_Data;
        return $this;
    }
    /**
     * Get Disciplinary_Action_Data value
     * @return \StructType\Disciplinary_Action_DataType|null
     */
    public function getDisciplinary_Action_Data()
    {
        return $this->Disciplinary_Action_Data;
    }
    /**
     * Set Disciplinary_Action_Data value
     * @param \StructType\Disciplinary_Action_DataType $disciplinary_Action_Data
     * @return \StructType\Employee_Review_DataType
     */
    public function setDisciplinary_Action_Data(\StructType\Disciplinary_Action_DataType $disciplinary_Action_Data = null)
    {
        $this->Disciplinary_Action_Data = $disciplinary_Action_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Review_DataType
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
