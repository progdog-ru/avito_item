<?php
/**
 * StatisticsPeriodGrouping
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Объявления
 *
 * API для получение статистики по объявлениям, применения дополнительных услуг, а также просмотр статусов объявлений  **Авито API для бизнеса предоставляется согласно [Условиям   использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**
 *
 * OpenAPI spec version: 1
 * Contact: supportautoload@avito.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * StatisticsPeriodGrouping Class Doc Comment
 *
 * @category Class
 * @description Период группировки
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatisticsPeriodGrouping
{
    /**
     * Possible values of this enum
     */
    const DAY = 'day';
const WEEK = 'week';
const MONTH = 'month';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAY,
self::WEEK,
self::MONTH,        ];
    }
}
