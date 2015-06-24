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

Uses current frontend Version 1.14.0

Uses current shariff-php Version 1.5.1

Necessarily load font-awesome 4.3.0 and jquery

### Backend

Add the following to your _ss_environment.php

```
define('SHARIFF_OPTIONS', jsond_encode(array(
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
# in head
<link href="shariff/css/shariff.min.css" rel="stylesheet" />

# in body
<div class="shariff" data-backend-url="shariff" data-url="$Link" data-orientation="horizontal"></div>

# in bottom right after jquery gets loaded
<script src="shariff/javascript/shariff.min.js"></script>
```

and configure following these instructions:
https://github.com/heiseonline/shariff#options-data-attributes

### Notice
 * After each Update, set the new Tag
```
git tag -a v1.2.3.4 -m 'Version 1.2.3.4'
git push -u origin v1.2.3.4
```
 * Also update the requirements in andrelohmann/silverstripe-apptemplate