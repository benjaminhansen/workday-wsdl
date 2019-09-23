<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Training_Room_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Training Room data.
 * @subpackage Structs
 */
class Location_Training_Room_DataType extends AbstractStructBase
{
    /**
     * The Link
     * Meta information extracted from the WSDL
     * - documentation: A URL link that directs you to the training room location such as a map or PDF.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Link;
    /**
     * The Capacity
     * Meta information extracted from the WSDL
     * - documentation: The number of people that the training room can accommodate.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 6
     * @var float
     */
    public $Capacity;
    /**
     * The Directions
     * Meta information extracted from the WSDL
     * - documentation: The directions to the training room location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Directions;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: The equipment available in the training room.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Equipment;
    /**
     * The Reservation_Details
     * Meta information extracted from the WSDL
     * - documentation: The details required to reserve the training room. Example: A contact person or information about a room booking system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reservation_Details;
    /**
     * The Video_Conference_Details
     * Meta information extracted from the WSDL
     * - documentation: The video conferencing details such as the meeting ID, URL, and telephone numbers.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Video_Conference_Details;
    /**
     * The Additional_Details
     * Meta information extracted from the WSDL
     * - documentation: Additional details about the training room location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Additional_Details;
    /**
     * Constructor method for Location_Training_Room_DataType
     * @uses Location_Training_Room_DataType::setLink()
     * @uses Location_Training_Room_DataType::setCapacity()
     * @uses Location_Training_Room_DataType::setDirections()
     * @uses Location_Training_Room_DataType::setEquipment()
     * @uses Location_Training_Room_DataType::setReservation_Details()
     * @uses Location_Training_Room_DataType::setVideo_Conference_Details()
     * @uses Location_Training_Room_DataType::setAdditional_Details()
     * @param string $link
     * @param float $capacity
     * @param string $directions
     * @param string $equipment
     * @param string $reservation_Details
     * @param string $video_Conference_Details
     * @param string $additional_Details
     */
    public function __construct($link = null, $capacity = null, $directions = null, $equipment = null, $reservation_Details = null, $video_Conference_Details = null, $additional_Details = null)
    {
        $this
            ->setLink($link)
            ->setCapacity($capacity)
            ->setDirections($directions)
            ->setEquipment($equipment)
            ->setReservation_Details($reservation_Details)
            ->setVideo_Conference_Details($video_Conference_Details)
            ->setAdditional_Details($additional_Details);
    }
    /**
     * Get Link value
     * @return string|null
     */
    public function getLink()
    {
        return $this->Link;
    }
    /**
     * Set Link value
     * @param string $link
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setLink($link = null)
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->Link = $link;
        return $this;
    }
    /**
     * Get Capacity value
     * @return float|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param float $capacity
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: float
        if (!is_null($capacity) && !(is_float($capacity) || is_numeric($capacity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($capacity) && mb_strlen(mb_substr($capacity, mb_strpos($capacity, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($capacity, true), mb_strlen(mb_substr($capacity, mb_strpos($capacity, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($capacity) && $capacity < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($capacity, true)), __LINE__);
        }
        // validation for constraint: totalDigits(6)
        if (!is_null($capacity) && mb_strlen(preg_replace('/(\D)/', '', $capacity)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 6 digits, "%d" given', var_export($capacity, true), mb_strlen(preg_replace('/(\D)/', '', $capacity))), __LINE__);
        }
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get Directions value
     * @return string|null
     */
    public function getDirections()
    {
        return $this->Directions;
    }
    /**
     * Set Directions value
     * @param string $directions
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setDirections($directions = null)
    {
        // validation for constraint: string
        if (!is_null($directions) && !is_string($directions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directions, true), gettype($directions)), __LINE__);
        }
        $this->Directions = $directions;
        return $this;
    }
    /**
     * Get Equipment value
     * @return string|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param string $equipment
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setEquipment($equipment = null)
    {
        // validation for constraint: string
        if (!is_null($equipment) && !is_string($equipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipment, true), gettype($equipment)), __LINE__);
        }
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Get Reservation_Details value
     * @return string|null
     */
    public function getReservation_Details()
    {
        return $this->Reservation_Details;
    }
    /**
     * Set Reservation_Details value
     * @param string $reservation_Details
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setReservation_Details($reservation_Details = null)
    {
        // validation for constraint: string
        if (!is_null($reservation_Details) && !is_string($reservation_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservation_Details, true), gettype($reservation_Details)), __LINE__);
        }
        $this->Reservation_Details = $reservation_Details;
        return $this;
    }
    /**
     * Get Video_Conference_Details value
     * @return string|null
     */
    public function getVideo_Conference_Details()
    {
        return $this->Video_Conference_Details;
    }
    /**
     * Set Video_Conference_Details value
     * @param string $video_Conference_Details
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setVideo_Conference_Details($video_Conference_Details = null)
    {
        // validation for constraint: string
        if (!is_null($video_Conference_Details) && !is_string($video_Conference_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($video_Conference_Details, true), gettype($video_Conference_Details)), __LINE__);
        }
        $this->Video_Conference_Details = $video_Conference_Details;
        return $this;
    }
    /**
     * Get Additional_Details value
     * @return string|null
     */
    public function getAdditional_Details()
    {
        return $this->Additional_Details;
    }
    /**
     * Set Additional_Details value
     * @param string $additional_Details
     * @return \StructType\Location_Training_Room_DataType
     */
    public function setAdditional_Details($additional_Details = null)
    {
        // validation for constraint: string
        if (!is_null($additional_Details) && !is_string($additional_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_Details, true), gettype($additional_Details)), __LINE__);
        }
        $this->Additional_Details = $additional_Details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Training_Room_DataType
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
