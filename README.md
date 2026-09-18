# Carerix REST API Client Library

Client library to access your Carerix application via RESTful API (https://api.carerix.com) 

# Requirements

* PHP 7.4+, compatible with PHP 8.5

# Installation

Recommened way is to install the library using composer:
```bash
$ composer require carerix/cxrest-client
```

# Basic usage
 
### Bootstrapping:
```php
use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Manager;
use Carerix\Api\Rest\Entity;

$client = new Client();

$manager = new Manager($client);
$manager->autoDiscoverEntities();

$manager->setUsername(CUSTOMER_NAME);
$manager->setPassword(API_TOKEN);

Entity::setManager($manager);
```

### Usage:

After entity manager was bootstrapped correctly
```php
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRUser;

// get user by ID
$user = CRUser::find(125);

// apply for a job
$params = array('x-cx-pub' => PUBLICATION_ID_GOES_HERE);

$employee = new CREmployee();
$employee
    ->setFirstName('John')
    ->setLastName('Smith');
$employee->apply($params); 
```

# OAuth2 usage

* Configure [confidential client](https://help.carerix.com/en/articles/9502919-client-setup#h_3411d95f4b) 
> [!IMPORTANT]
> use ***urn:cx/xmlapi:data:manage*** as Default scope
* Copy **CLIENT_ID**, **CLIENT_SECRET**
> [!WARNING]
> **CLIENT_SECRET** will be available to copy only once

* Copy `OpenID Configuration` url (from Carerix UI) as **CONFIGURATION_URL**

* Configure entity manager to use OAuth2 authorization:
```php
use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Manager;
use Carerix\Api\Rest\Entity;

$client = new Client();

$manager = new Manager($client);
$manager->autoDiscoverEntities();

$manager->configureOAuth2Auth(CONFIGURATION_URL, CLIENT_ID, CLIENT_SECRET);

Entity::setManager($manager);
```

> [!NOTE]
> After OAuth2 autorization configured usage is the same as [Basic usage](#usage)

# Resources
https://help.carerix.com/en/articles/9464648-carerix-rest-api - CxRest Api  
https://help.carerix.com/en/articles/9470760-rest-api-methods - CxRestApi methods  
https://help.carerix.com/en/articles/9502919-client-setup#h_3411d95f4b - OAuth2 confidential client setup  
> [!IMPORTANT]
> use ***urn:cx/xmlapi:data:manage*** as Default scope

# License

All contents of this project is licensed under the MIT license. See `LICENSE` file for details.

# Acknowledgements

This project is highly inspired by Doctrine's (www.doctrine-project.org) implementation of the ActiveRecord pattern and Doctrine REST API Client.
