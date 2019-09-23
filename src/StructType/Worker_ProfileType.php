<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_ProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Worker and his/her summarized Personal and Employment/Contract information.
 * @subpackage Structs
 */
class Worker_ProfileType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * @var \WorkdayWsdl\\StructType\Worker_ReferenceType
     */
    public $Worker_Reference;
    /**
     * The Worker_Profile_Data
     * @var \WorkdayWsdl\\StructType\Worker_Profile_DataType
     */
    public $Worker_Profile_Data;
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
     * Constructor method for Worker_ProfileType
     * @uses Worker_ProfileType::setWorker_Reference()
     * @uses Worker_ProfileType::setWorker_Profile_Data()
     * @uses Worker_ProfileType::setAs_Of_Date()
     * @uses Worker_ProfileType::setAs_Of_Moment()
     * @uses Worker_ProfileType::setVersion()
     * @param \WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Worker_Profile_DataType $worker_Profile_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference = null, \WorkdayWsdl\\StructType\Worker_Profile_DataType $worker_Profile_Data = null, $as_Of_Date = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Profile_Data($worker_Profile_Data)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment)
            ->setVersion($version);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Worker_ReferenceType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Worker_Profile_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Profile_DataType|null
     */
    public function getWorker_Profile_Data()
    {
        return $this->Worker_Profile_Data;
    }
    /**
     * Set Worker_Profile_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Profile_DataType $worker_Profile_Data
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
     */
    public function setWorker_Profile_Data(\WorkdayWsdl\\StructType\Worker_Profile_DataType $worker_Profile_Data = null)
    {
        $this->Worker_Profile_Data = $worker_Profile_Data;
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
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
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
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
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
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
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
     * @return \WorkdayWsdl\\StructType\Worker_ProfileType
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
