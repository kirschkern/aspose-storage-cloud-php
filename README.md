# Aspose.Storage Cloud SDK for PHP
This repository contains Aspose.Storage Cloud SDK for PHP source code. This SDK allows you to work with Aspose.Storage Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.
See [API Reference](https://apireference.aspose.cloud/storage/) for full API specification.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/storage-sdk-php) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/display/storagecloud/Available+SDKs).

### Prerequisites

To use Aspose Storage for Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

#### Via Composer:
*storage-sdk-php* is available on Packagist as the
[`storage-sdk-php`](https://packagist.org/packages/aspose/storage-sdk-php) package. Run the following command:
```bash
composer require aspose/storage-sdk-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Sample usage

```php
$config = new Configuration();
$config->setAppKey('AppKey')->setAppSid('AppSid');
$storageApi = new StorageApi($config);

$path = "path/FileName.pdf";
$version_id = null;
$storage = "StorageName";
$request = new Requests\GetDownloadRequest($path, $version_id, $storage);
$result = $this->storageApi->getDownload($request);
```
      
[Tests](tests/Aspose/Storage) contain various examples of using the SDK.
Please put your credentials into [Configuration](src/Aspose/Storage/Configuration.php).

## Dependencies
- PHP 5.6 or later
- referenced packages (see [here](composer.json) for more details)

## Comparison with Old generation SDK
New SDK has the following advantages over the [previous version](https://github.com/aspose-storage/Aspose.Storage-for-Cloud):
+ Classes, methods and properties have comments and are IDE-friendly
+ Better security
+ Usage of Request/Response classes to represent long lists of parameters. This allows for cleaner code and easier backwards-compatibility going forward

New SDK is not backwards compatible with previous generation because of the last item. It should be straightforward to convert your code to using Request/Response objects, if you need any help on migration please ask at [Free Support Forums](https://forum.aspose.cloud/).

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.aspose.cloud/c/storage).
