<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request Criteria element to limit the Former Workers returned based on the specific criteria. Former Workers that are returned must meet all of the criteria specified.
 * @subpackage Structs
 */
class Former_Worker_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Updated_From_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the earliest moment (e.g. datetime) data was entered into the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Updated_From_Moment;
    /**
     * The Update_To_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Update_To_Moment;
    /**
     * The Terminated_From_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the earliest termination date to return.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Terminated_From_Date;
    /**
     * The Terminated_To_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest termination date to return.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Terminated_To_Date;
    /**
     * The National_ID_Criteria_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_by_National_ID_Request_CriteriaType[]
     */
    public $National_ID_Criteria_Data;
    /**
     * Constructor method for Former_Worker_Request_CriteriaType
     * @uses Former_Worker_Request_CriteriaType::setUpdated_From_Moment()
     * @uses Former_Worker_Request_CriteriaType::setUpdate_To_Moment()
     * @uses Former_Worker_Request_CriteriaType::setTerminated_From_Date()
     * @uses Former_Worker_Request_CriteriaType::setTerminated_To_Date()
     * @uses Former_Worker_Request_CriteriaType::setNational_ID_Criteria_Data()
     * @param string $updated_From_Moment
     * @param string $update_To_Moment
     * @param string $terminated_From_Date
     * @param string $terminated_To_Date
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType[] $national_ID_Criteria_Data
     */
    public function __construct($updated_From_Moment = null, $update_To_Moment = null, $terminated_From_Date = null, $terminated_To_Date = null, array $national_ID_Criteria_Data = array())
    {
        $this
            ->setUpdated_From_Moment($updated_From_Moment)
            ->setUpdate_To_Moment($update_To_Moment)
            ->setTerminated_From_Date($terminated_From_Date)
            ->setTerminated_To_Date($terminated_To_Date)
            ->setNational_ID_Criteria_Data($national_ID_Criteria_Data);
    }
    /**
     * Get Updated_From_Moment value
     * @return string|null
     */
    public function getUpdated_From_Moment()
    {
        return $this->Updated_From_Moment;
    }
    /**
     * Set Updated_From_Moment value
     * @param string $updated_From_Moment
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function setUpdated_From_Moment($updated_From_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($updated_From_Moment) && !is_string($updated_From_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updated_From_Moment, true), gettype($updated_From_Moment)), __LINE__);
        }
        $this->Updated_From_Moment = $updated_From_Moment;
        return $this;
    }
    /**
     * Get Update_To_Moment value
     * @return string|null
     */
    public function getUpdate_To_Moment()
    {
        return $this->Update_To_Moment;
    }
    /**
     * Set Update_To_Moment value
     * @param string $update_To_Moment
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function setUpdate_To_Moment($update_To_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($update_To_Moment) && !is_string($update_To_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($update_To_Moment, true), gettype($update_To_Moment)), __LINE__);
        }
        $this->Update_To_Moment = $update_To_Moment;
        return $this;
    }
    /**
     * Get Terminated_From_Date value
     * @return string|null
     */
    public function getTerminated_From_Date()
    {
        return $this->Terminated_From_Date;
    }
    /**
     * Set Terminated_From_Date value
     * @param string $terminated_From_Date
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function setTerminated_From_Date($terminated_From_Date = null)
    {
        // validation for constraint: string
        if (!is_null($terminated_From_Date) && !is_string($terminated_From_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminated_From_Date, true), gettype($terminated_From_Date)), __LINE__);
        }
        $this->Terminated_From_Date = $terminated_From_Date;
        return $this;
    }
    /**
     * Get Terminated_To_Date value
     * @return string|null
     */
    public function getTerminated_To_Date()
    {
        return $this->Terminated_To_Date;
    }
    /**
     * Set Terminated_To_Date value
     * @param string $terminated_To_Date
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function setTerminated_To_Date($terminated_To_Date = null)
    {
        // validation for constraint: string
        if (!is_null($terminated_To_Date) && !is_string($terminated_To_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminated_To_Date, true), gettype($terminated_To_Date)), __LINE__);
        }
        $this->Terminated_To_Date = $terminated_To_Date;
        return $this;
    }
    /**
     * Get National_ID_Criteria_Data value
     * @return \StructType\Worker_by_National_ID_Request_CriteriaType[]|null
     */
    public function getNational_ID_Criteria_Data()
    {
        return $this->National_ID_Criteria_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setNational_ID_Criteria_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNational_ID_Criteria_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNational_ID_Criteria_DataForArrayConstraintsFromSetNational_ID_Criteria_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem instanceof \StructType\Worker_by_National_ID_Request_CriteriaType) {
                $invalidValues[] = is_object($former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) ? get_class($former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) : sprintf('%s(%s)', gettype($former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem), var_export($former_Worker_Request_CriteriaTypeNational_ID_Criteria_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The National_ID_Criteria_Data property can only contain items of type \StructType\Worker_by_National_ID_Request_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set National_ID_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType[] $national_ID_Criteria_Data
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function setNational_ID_Criteria_Data(array $national_ID_Criteria_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($national_ID_Criteria_DataArrayErrorMessage = self::validateNational_ID_Criteria_DataForArrayConstraintsFromSetNational_ID_Criteria_Data($national_ID_Criteria_Data))) {
            throw new \InvalidArgumentException($national_ID_Criteria_DataArrayErrorMessage, __LINE__);
        }
        $this->National_ID_Criteria_Data = $national_ID_Criteria_Data;
        return $this;
    }
    /**
     * Add item to National_ID_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType $item
     * @return \StructType\Former_Worker_Request_CriteriaType
     */
    public function addToNational_ID_Criteria_Data(\StructType\Worker_by_National_ID_Request_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_by_National_ID_Request_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The National_ID_Criteria_Data property can only contain items of type \StructType\Worker_by_National_ID_Request_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->National_ID_Criteria_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_Request_CriteriaType
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
