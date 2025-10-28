# Supabase
Supabase client for PHP.
[![Tests](https://github.com/codebysushil/Supabase/actions/workflows/tests.yml/badge.svg)](https://github.com/codebysushil/Supabase/actions/workflows/tests.yml)

### Example

```php
<?php

require_once('./vendor/autoload.php');

use Supabase\Client\Client;

$url = "https://your-project.supabase.co";
$key = "your-api-key";

$client = new Client($url, $key);

$client->from('user');

$data = $client->execute();

var_dump($data);

```
