<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workday_Account_for_Worker_AddType StructType
 * Meta information extracted from the WSDL
 * - documentation: Worker Reference or Non Worker Reference must be omitted. | A Workday Account cannot already exist for the referenced Worker. | Either Password or Generate_Random_Password must have a value when creating a new Workday Account |
 * Utilize the following data element to add a new User Account into the Workday system.
 * @subpackage Structs
 */
class Workday_Account_for_Worker_AddType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_ReferenceType
     */
    public $Worker_Reference;
    /**
     * The Non_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the person (non employee or contingent worker) for whom you are updating the account
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Non_Worker_Reference;
    /**
     * The Workday_Account_for_Worker_Data
     * @var \WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType
     */
    public $Workday_Account_for_Worker_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Workday_Account_for_Worker_AddType
     * @uses Workday_Account_for_Worker_AddType::setWorker_Reference()
     * @uses Workday_Account_for_Worker_AddType::setNon_Worker_Reference()
     * @uses Workday_Account_for_Worker_AddType::setWorkday_Account_for_Worker_Data()
     * @uses Workday_Account_for_Worker_AddType::setVersion()
     * @param \WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference
     * @param \WorkdayWsdl\\StructType\RoleObjectType $non_Worker_Reference
     * @param \WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType $workday_Account_for_Worker_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference = null, \WorkdayWsdl\\StructType\RoleObjectType $non_Worker_Reference = null, \WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType $workday_Account_for_Worker_Data = null, $version = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setNon_Worker_Reference($non_Worker_Reference)
            ->setWorkday_Account_for_Worker_Data($workday_Account_for_Worker_Data)
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
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_AddType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\Worker_ReferenceType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Non_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getNon_Worker_Reference()
    {
        return $this->Non_Worker_Reference;
    }
    /**
     * Set Non_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $non_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_AddType
     */
    public function setNon_Worker_Reference(\WorkdayWsdl\\StructType\RoleObjectType $non_Worker_Reference = null)
    {
        $this->Non_Worker_Reference = $non_Worker_Reference;
        return $this;
    }
    /**
     * Get Workday_Account_for_Worker_Data value
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType|null
     */
    public function getWorkday_Account_for_Worker_Data()
    {
        return $this->Workday_Account_for_Worker_Data;
    }
    /**
     * Set Workday_Account_for_Worker_Data value
     * @param \WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType $workday_Account_for_Worker_Data
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_AddType
     */
    public function setWorkday_Account_for_Worker_Data(\WorkdayWsdl\\StructType\Workday_Account_for_Worker_DataType $workday_Account_for_Worker_Data = null)
    {
        $this->Workday_Account_for_Worker_Data = $workday_Account_for_Worker_Data;
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
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_AddType
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
     * @return \WorkdayWsdl\\StructType\Workday_Account_for_Worker_AddType
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
