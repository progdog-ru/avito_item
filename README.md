# SwaggerClient-php
API для получение статистики по объявлениям, применения дополнительных услуг, а также просмотр статусов объявлений  **Авито API для бизнеса предоставляется согласно [Условиям   использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->getItemInfo($user_id, $item_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemInfo: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$per_page = 25; // int | Количество записей на странице (целое число больше 0 и меньше 100)
$page = 1; // int | Номер страницы (целое число больше 0)
$status = "active"; // string | Статус объявления на сайте (можно указать несколько значений через запятую)
$category = 56; // int | Идентификатор категории объявления

try {
    $result = $apiInstance->getItemsInfo($authorization, $per_page, $page, $status, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemsInfo: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$body = new \Swagger\Client\Model\ItemIdsRequestBody(); // \Swagger\Client\Model\ItemIdsRequestBody | Набор идентификаторов объявлений на сайте

try {
    $result = $apiInstance->getVasPackagePrice($authorization, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getVasPackagePrice: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$body = new \Swagger\Client\Model\ItemIdsRequestBody(); // \Swagger\Client\Model\ItemIdsRequestBody | Набор идентификаторов объявлений на сайте

try {
    $result = $apiInstance->getVasPrices($authorization, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getVasPrices: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$content_type = "content_type_example"; // string | Тип данных запроса
$user_id = 789; // int | Идентификатор пользователя (клиента)
$body = new \Swagger\Client\Model\StatisticsShallowRequestBody(); // \Swagger\Client\Model\StatisticsShallowRequestBody | Набор параметров в теле запроса.

try {
    $result = $apiInstance->itemStatsShallow($authorization, $content_type, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemStatsShallow: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CallsStatsRequest(); // \Swagger\Client\Model\CallsStatsRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации
$content_type = "content_type_example"; // string | Тип данных запроса
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито

try {
    $result = $apiInstance->postCallsStats($body, $authorization, $content_type, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->postCallsStats: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$body = new \Swagger\Client\Model\VasIdRequestBody(); // \Swagger\Client\Model\VasIdRequestBody | 

try {
    $result = $apiInstance->putItemVas($authorization, $user_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->putItemVas: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: AuthorizationCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: ClientCredentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Номер пользователя в Личном кабинете Авито
$item_id = 789; // int | Идентификатор объявления на сайте
$body = new \Swagger\Client\Model\PackageIdRequestBodyV2(); // \Swagger\Client\Model\PackageIdRequestBodyV2 | 

try {
    $result = $apiInstance->putItemVasPackageV2($authorization, $user_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->putItemVasPackageV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.avito.ru/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**getItemInfo**](docs/Api/ItemApi.md#getiteminfo) | **GET** /core/v1/accounts/{user_id}/items/{item_id}/ | Получение информации по объявлению
*ItemApi* | [**getItemsInfo**](docs/Api/ItemApi.md#getitemsinfo) | **GET** /core/v1/items | Получение информации по объявлениям
*ItemApi* | [**getVasPackagePrice**](docs/Api/ItemApi.md#getvaspackageprice) | **POST** /core/v1/accounts/{user_id}/price/vas_packages | Получение информации о стоимости пакетов дополнительных услуг
*ItemApi* | [**getVasPrices**](docs/Api/ItemApi.md#getvasprices) | **POST** /core/v1/accounts/{user_id}/price/vas | Получение информации о стоимости дополнительных услуг
*ItemApi* | [**itemStatsShallow**](docs/Api/ItemApi.md#itemstatsshallow) | **POST** /stats/v1/accounts/{user_id}/items | Получение статистики по списку объявлений
*ItemApi* | [**postCallsStats**](docs/Api/ItemApi.md#postcallsstats) | **POST** /core/v1/accounts/{user_id}/calls/stats/ | Получение статистики по звонкам
*ItemApi* | [**putItemVas**](docs/Api/ItemApi.md#putitemvas) | **PUT** /core/v1/accounts/{user_id}/items/{item_id}/vas | Применение дополнительных услуг
*ItemApi* | [**putItemVasPackageV2**](docs/Api/ItemApi.md#putitemvaspackagev2) | **PUT** /core/v2/accounts/{user_id}/items/{item_id}/vas_packages | Применение пакета дополнительных услуг

## Documentation For Models

 - [AuthError](docs/Model/AuthError.md)
 - [AuthErrorError](docs/Model/AuthErrorError.md)
 - [BadRequestError](docs/Model/BadRequestError.md)
 - [BadRequestErrorError](docs/Model/BadRequestErrorError.md)
 - [CallsStatsDay](docs/Model/CallsStatsDay.md)
 - [CallsStatsItem](docs/Model/CallsStatsItem.md)
 - [CallsStatsRequest](docs/Model/CallsStatsRequest.md)
 - [CallsStatsResponse](docs/Model/CallsStatsResponse.md)
 - [CallsStatsResponseResult](docs/Model/CallsStatsResponseResult.md)
 - [ErrorItemsVas](docs/Model/ErrorItemsVas.md)
 - [FieldError](docs/Model/FieldError.md)
 - [InfoVas](docs/Model/InfoVas.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [ItemIdsRequestBody](docs/Model/ItemIdsRequestBody.md)
 - [ItemInfoAvito](docs/Model/ItemInfoAvito.md)
 - [ItemsInfoWithCategoryAvito](docs/Model/ItemsInfoWithCategoryAvito.md)
 - [ItemsInfoWithCategoryAvitoCategory](docs/Model/ItemsInfoWithCategoryAvitoCategory.md)
 - [ItemsInfoWithCategoryAvitoMeta](docs/Model/ItemsInfoWithCategoryAvitoMeta.md)
 - [ItemsInfoWithCategoryAvitoResources](docs/Model/ItemsInfoWithCategoryAvitoResources.md)
 - [NotFoundError](docs/Model/NotFoundError.md)
 - [NotFoundErrorError](docs/Model/NotFoundErrorError.md)
 - [PackageIdRequestBodyV2](docs/Model/PackageIdRequestBodyV2.md)
 - [PackagePriceInfoVas](docs/Model/PackagePriceInfoVas.md)
 - [PriceInfoVas](docs/Model/PriceInfoVas.md)
 - [ServiceError](docs/Model/ServiceError.md)
 - [ServiceErrorError](docs/Model/ServiceErrorError.md)
 - [ServiceUnavailableError](docs/Model/ServiceUnavailableError.md)
 - [ServiceUnavailableErrorError](docs/Model/ServiceUnavailableErrorError.md)
 - [StatisticsCounters](docs/Model/StatisticsCounters.md)
 - [StatisticsCountersInner](docs/Model/StatisticsCountersInner.md)
 - [StatisticsDateFrom](docs/Model/StatisticsDateFrom.md)
 - [StatisticsDateTo](docs/Model/StatisticsDateTo.md)
 - [StatisticsFields](docs/Model/StatisticsFields.md)
 - [StatisticsItemIDs](docs/Model/StatisticsItemIDs.md)
 - [StatisticsPeriodGrouping](docs/Model/StatisticsPeriodGrouping.md)
 - [StatisticsResponse](docs/Model/StatisticsResponse.md)
 - [StatisticsResponseResult](docs/Model/StatisticsResponseResult.md)
 - [StatisticsShallowRequestBody](docs/Model/StatisticsShallowRequestBody.md)
 - [ValidatingError](docs/Model/ValidatingError.md)
 - [ValidatingErrorError](docs/Model/ValidatingErrorError.md)
 - [VasAmountAvito](docs/Model/VasAmountAvito.md)
 - [VasApplyAvito](docs/Model/VasApplyAvito.md)
 - [VasIdRequestBody](docs/Model/VasIdRequestBody.md)

## Documentation For Authorization


## AuthorizationCode

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://avito.ru/oauth
- **Scopes**: 
 - **autoload:reports**: Получение отчетов Автозагрузки
 - **items:apply_vas**: Применение дополнительных услуг
 - **items:info**: Получение информации об объявлениях
 - **job:cv**: Получение информации резюме
 - **job:negotiations**: Получение информации об откликах на вакансии
 - **job:write**: Изменение объявлений вертикали Работа
 - **messenger:read**: Чтение сообщений в мессенджере Авито
 - **messenger:write**: Модифицирование сообщений в мессенджере Авито
 - **short_term_rent:read**: Получение информации об объявлениях краткосрочной аренды
 - **short_term_rent:write**: Изменение объявлений краткосрочной аренды
 - **stats:read**: Получение статистики объявлений
 - **user:read**: Получение информации о пользователе
 - **user_balance:read**: Получение баланса пользователя
 - **user_operations:read**: Получение истории операций пользователя

## ClientCredentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 


## Author

supportautoload@avito.ru

