<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_WorkerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Contingent Worker and its associated data.
 * @subpackage Structs
 */
class Contingent_WorkerType extends AbstractStructBase
{
    /**
     * The Contingent_Worker_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference;
    /**
     * The Contingent_Worker_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contingent_Worker_DataType
     */
    public $Contingent_Worker_Data;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Request" elements, the "As Of Date" determines what data is to be used within search logic or returned in a response. For
     * "Response" elements, this element will echo "As Of Date" entered in the "Request" element or the default "As Of Date" if omitted..
     * @var string
     */
    public $As_Of_Date;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Request" elements, the "As Of Moment" determines what data is to be used within search logic or returned in a response. For "Response" elements,
     * this element will echo "As Of Moment" entered in the "Request" element or the default "As Of Moment" if omitted.
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
     * Constructor method for Contingent_WorkerType
     * @uses Contingent_WorkerType::setContingent_Worker_Reference()
     * @uses Contingent_WorkerType::setContingent_Worker_Data()
     * @uses Contingent_WorkerType::setAs_Of_Date()
     * @uses Contingent_WorkerType::setAs_Of_Moment()
     * @uses Contingent_WorkerType::setVersion()
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_DataType $contingent_Worker_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null, \WorkdayWsdl\\StructType\Contingent_Worker_DataType $contingent_Worker_Data = null, $as_Of_Date = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setContingent_Worker_Reference($contingent_Worker_Reference)
            ->setContingent_Worker_Data($contingent_Worker_Data)
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
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
     */
    public function setContingent_Worker_Reference(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this->Contingent_Worker_Reference = $contingent_Worker_Reference;
        return $this;
    }
    /**
     * Get Contingent_Worker_Data value
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_DataType|null
     */
    public function getContingent_Worker_Data()
    {
        return $this->Contingent_Worker_Data;
    }
    /**
     * Set Contingent_Worker_Data value
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_DataType $contingent_Worker_Data
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
     */
    public function setContingent_Worker_Data(\WorkdayWsdl\\StructType\Contingent_Worker_DataType $contingent_Worker_Data = null)
    {
        $this->Contingent_Worker_Data = $contingent_Worker_Data;
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
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
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
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
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
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
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
     * @return \WorkdayWsdl\\StructType\Contingent_WorkerType
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
