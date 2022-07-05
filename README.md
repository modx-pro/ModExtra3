## Quick start

* Install MODX Revolution

* Upload this package into the `Extras` directory in the root of site

* You need to rename it to `AnyOtherName` your package, so enter into SSH console and run
```
php ~/www/Extras/ModExtra/rename_it.php AnyOtherName
```
*path on your site may differs*

* Then install it on dev site
```
php ~/www/Extras/AnyOtherName/_build/build.php
``` 

## Settings

See `_build/config.inc.php` for editable package options.

All resolvers and elements are in `_build` path. All files that begins not from `.` or `_` will be added automatically. 

If you will add a new type of element, you will need to add the method with that name into `build.php` script as well.

## Build and download

You can build package at any time by opening `http://dev.site.com/Extras/AnyOtherName/_build/build.php`

If you want to download built package - just add `?download=1` to the address.