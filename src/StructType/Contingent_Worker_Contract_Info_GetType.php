<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_Worker_Contract_Info_GetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following Reference element (and other optional attributes) to retrieve an instance of Contingent Worker and his/her Contract Information.
 * @subpackage Structs
 */
class Contingent_Worker_Contract_Info_GetType extends AbstractStructBase
{
    /**
     * The Contingent_Worker_Reference
     * @var \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Find" operations, the "As Of Date" determines what data to be used within the search logic. For "Get" operations, the response
     * element will only include data that is the most effective as of the "As Of Date".
     * @var string
     */
    public $As_Of_Date;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Find" operations, the "As Of Moment" determines what data to be used within the search logic. For "Get" operations, the response element will
     * only include data entered into Workday before the "As Of Moment".
     * @var string
     */
    public $As_Of_Moment;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Contingent_Worker_Contract_Info_GetType
     * @uses Contingent_Worker_Contract_Info_GetType::setContingent_Worker_Reference()
     * @uses Contingent_Worker_Contract_Info_GetType::setAs_Of_Date()
     * @uses Contingent_Worker_Contract_Info_GetType::setAs_Of_Moment()
     * @uses Contingent_Worker_Contract_Info_GetType::setVersion()
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null, $as_Of_Date = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setContingent_Worker_Reference($contingent_Worker_Reference)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment)
            ->setVersion($version);
    }
    /**
     * Get Contingent_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType|null
     */
    public function getContingent_Worker_Reference()
    {
        return $this->Contingent_Worker_Reference;
    }
    /**
     * Set Contingent_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Contract_Info_GetType
     */
    public function setContingent_Worker_Reference(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this->Contingent_Worker_Reference = $contingent_Worker_Reference;
        return $this;
    }
    /**
     * Get As_Of_Date value
     * @return string|null
     */
    public function getAs_Of_Date()
    {
        return $this->As_Of_Date;
    }
    /**
     * Set As_Of_Date value
     * @param string $as_Of_Date
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Contract_Info_GetType
     */
    public function setAs_Of_Date($as_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Date) && !is_string($as_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Date, true), gettype($as_Of_Date)), __LINE__);
        }
        $this->As_Of_Date = $as_Of_Date;
        return $this;
    }
    /**
     * Get As_Of_Moment value
     * @return string|null
     */
    public function getAs_Of_Moment()
    {
        return $this->As_Of_Moment;
    }
    /**
     * Set As_Of_Moment value
     * @param string $as_Of_Moment
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Contract_Info_GetType
     */
    public function setAs_Of_Moment($as_Of_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Moment) && !is_string($as_Of_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Moment, true), gettype($as_Of_Moment)), __LINE__);
        }
        $this->As_Of_Moment = $as_Of_Moment;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Contract_Info_GetType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Contract_Info_GetType
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
