# (Heise) shariff

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Introduction

Silverstripe Implementation of the Heise c't shariff plugin

plugin is necessary to be compliant with german cookie law

https://github.com/heiseonline/shariff

## Versions


## Usage

Uses current frontend Version 1.16.0

Uses current shariff-php Version 1.5.1

Necessarily load font-awesome 4.3.0 and jquery

### Backend

Add the following to your _ss_environment.php

```
define('SHARIFF_OPTIONS', json_encode(array(
    "domain"   => 'YOURDOMAIN',
    "cache"    => ["ttl" => 1],
    "services" => ["Facebook", "GooglePlus", "Twitter", "LinkedIn", "Reddit", "StumbleUpon", "Flattr", "Pinterest"]
)));
```

and configure following these instructions:
https://github.com/heiseonline/shariff-backend-php

### Frontend

include font-awesome 4.3.0

add the following to your template(s)

```
# in body
<div class="shariff" data-backend-url="shariffbackend" data-url="$Link" data-orientation="horizontal"></div>
```

and configure following these instructions:
https://github.com/heiseonline/shariff#options-data-attributes

### Notice
this plugin uses a forked Version of shariff (https://github.com/andrelohmann/shariff)
the "url" Paramater, submitting the current Page Url to the packend, is colliding with the same
parameter also used by the silverstripe bootstrap process.
The fork simply changes this parameter from "url" to "pageUrl"