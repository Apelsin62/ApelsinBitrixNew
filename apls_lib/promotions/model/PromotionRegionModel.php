<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/apls_lib/promotions/model/PromotionCityModel.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/apls_lib/main/geolocation/model/GeolocationRegionsContacts.php";

class PromotionRegionModel extends PromotionModelAbstract
{
    protected static $tableName = "apls_promotions_region";
    protected static $privateFields = array('default');
    protected static $requiredFields = array('region','alias');
    protected static $optionalFields = array('sort','head_html','longitude','latitude','zoom');
    protected static $userRegion = null;

    const DEFAULT_FIELD = 'default';

    /**
     * Список магазинов этого региона
     * @param $ask - сортировать по возрастанию или по убыванию
     * @return array
     */
    public function getContacts(bool $ask = true) {
        $orderByObj = new MySQLOrderByString();
        if($ask) {
            $orderByObj->add('sort',MySQLOrderByString::ASC);
        } else {
            $orderByObj->add('sort',MySQLOrderByString::DESC);
        }
        return GeolocationRegionsContacts::getElementList(
            MySQLWhereElementString::getBinaryOperationString(
                'region',
                MySQLWhereElementString::OPERATOR_B_EQUAL,
                $this->id
            ),
            null,
            null,
            $orderByObj
        );
    }

    /**
     * Добавить адрес магазина
     * @param string $name - название контакта
     * @param array $fields - массив ключ значение с дополнительными полями
     * @return bool|int|string - идентификатор созданной записи или false в случае ошибки
     */
    public function addContacts(string $name, array $fields = array())
    {
        $fields['name'] = $name;
        $fields['region'] = $this->id;
        return GeolocationRegionsContacts::createElement($fields);
    }

    /**
     * Удалить адрес магазина
     * @param string $contactId - идентификатор записи контакта
     * @return bool
     */
    public function deleteContacts(string $contactId): bool
    {
        if (GeolocationRegionsContacts::isContactInRegion($contactId, $this->id)) {
            return GeolocationRegionsContacts::deleteElement($contactId);
        }
        return false;
    }

    /**
     * Список городов этого региона
     * @return array
     */
    public function getCities()
    {
        return PromotionCityModel::getElementList(
            MySQLWhereElementString::getBinaryOperationString(
                'region',
                MySQLWhereElementString::OPERATOR_B_EQUAL,
                $this->id
            )
        );
    }

    /**
     * Добавить город
     * @param $city - название города
     * @return bool|int|string - идентификатор созданной записи или false в случае ошибки
     */
    public function addCity(string $city)
    {
        return PromotionCityModel::createElement(
            array(
                'city' => $city,
                'region' => $this->id
            )
        );
    }

    /**
     * Удалить город
     * @param string $cityId - идентификатор записи города
     * @return bool
     */
    public function deleteCity(string $cityId): bool
    {
        if (PromotionCityModel::isCityInRegion($cityId, $this->id)) {
            return PromotionCityModel::deleteElement($cityId);
        }
        return false;
    }

    /**
     * Изменить город
     * @param string $cityId - идентификатор записи города
     * @param string $city - название города
     * @return bool
     */
    public function editCity(string $cityId, string $city): bool
    {
        if (PromotionCityModel::isCityInRegion($cityId, $this->id)) {
            return PromotionCityModel::updateElement($cityId, array('city' => $city));
        }
        return false;
    }

    /**
     * Установить этот регион как регион по умолчанию
     * @return bool
     */
    public function setDefault(): bool
    {
        return static::setDefaultRegion($this->id);
    }

    /**
     * Установить регион как регион по умолчанию
     * @param $id - идентификатор записи
     * @return bool
     */
    public static function setDefaultRegion($id): bool
    {
        if (static::issetElement($id)) {
            static::getConnection()->queryExecute("UPDATE `" . static::$tableName . "` SET `default`='0'");
            static::getConnection()->queryExecute(
                "UPDATE `" . static::$tableName . "` SET `" . self::DEFAULT_FIELD . "`='1' WHERE `" . static::$pk . "`='$id'"
            );
            return true;
        }
        return false;
    }

    /**
     * Вернет регион по умолчанию или регион который имеет наименьшее значение поля sort
     * Если ен существует ни одного региона вернет упстой объект PromotionRegionModel
     * @return PromotionRegionModel
     */
    public static function getDefaultRegion(): PromotionRegionModel
    {
        $arr = PromotionRegionModel::getElementList(
            MySQLWhereElementString::getBinaryOperationString(
                self::DEFAULT_FIELD,
                MySQLWhereElementString::OPERATOR_B_EQUAL,
                '1'
            )
        );
        if (!empty($arr)) {
            return array_shift($arr);
        } else {
            $orderByObj = new MySQLOrderByString();
            $orderByObj->add('sort', MySQLOrderByString::ASC);
            $arr = PromotionRegionModel::getElementList(
                null,
                1,
                null,
                $orderByObj
            );
            if (!empty($arr)) {
                return array_shift($arr);
            } else {
                return new PromotionRegionModel("");
            }
        }
    }

    public static function getUserRegion(): PromotionRegionModel {
        if(static::$userRegion === null) {
            static::$userRegion = static::getDefaultRegion();
        }
        return static::$userRegion;
    }
}