# pets

### Available Operations

* [createPets](#createpets) - Create a pet
* [listPets](#listpets) - List all pets
* [showPetById](#showpetbyid) - Info for a specific pet

## createPets

Create a pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakit\Petstore\Petstore;

$sdk = Petstore::builder()
    ->build();

try {
    $response = $sdk->pets->createPets();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\speakit\Petstore\Models\Operations\CreatePetsResponse](../../models/operations/CreatePetsResponse.md)**


## listPets

List all pets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakit\Petstore\Petstore;
use \speakit\Petstore\Models\Operations\ListPetsRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new ListPetsRequest();
    $request->limit = 548814;

    $response = $sdk->pets->listPets($request);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\speakit\Petstore\Models\Operations\ListPetsRequest](../../models/operations/ListPetsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\speakit\Petstore\Models\Operations\ListPetsResponse](../../models/operations/ListPetsResponse.md)**


## showPetById

Info for a specific pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \speakit\Petstore\Petstore;
use \speakit\Petstore\Models\Operations\ShowPetByIdRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new ShowPetByIdRequest();
    $request->petId = 'provident';

    $response = $sdk->pets->showPetById($request);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\speakit\Petstore\Models\Operations\ShowPetByIdRequest](../../models/operations/ShowPetByIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\speakit\Petstore\Models\Operations\ShowPetByIdResponse](../../models/operations/ShowPetByIdResponse.md)**

