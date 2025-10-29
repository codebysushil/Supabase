# Supabase
Supabase client for PHP.

[![Tests](https://github.com/codebysushil/Supabase/actions/workflows/tests.yml/badge.svg)](https://github.com/codebysushil/Supabase/actions/workflows/tests.yml)
[![CodeQL](https://github.com/codebysushil/Supabase/actions/workflows/github-code-scanning/codeql/badge.svg)](https://github.com/codebysushil/Supabase/actions/workflows/github-code-scanning/codeql)

---

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
---

Setup `.env`:

```env
#_-_ Supabase Configuration _-_#

# URL, anon and service_role key must be required.

# Supabase URL
SB_URL="https://your-project.supabase.co"

# Supabase anon key as apikey
SB_ANON_KEY="your-supabase-anon-key-here"

# Supabase service_role key as OAuth token
SB_SERVICE_ROLE="your-supabase-service_role-key-here"
```
