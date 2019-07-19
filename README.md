# F3 Gettext
This is a Gettext plugin for the [PHP Fat-Free Framework](https://github.com/bcosca/fatfree).

It doesn't need PHP gettext extension!

## Installation
**1.** Just [download](https://github.com/nimah79/f3-gettext/archive/master.zip) the package and register it to `AUTOLOAD`, or require it with composer:
`composer require nimah79/f3-gettext`

**2.** Add this sample configuration, or load the [sample ini file](https://github.com/nimah79/f3-gettext/blob/master/gettext_config.ini) (make necessary changes):
```
[GETTEXT]
language=fa
path=locales/
```

**3.** Put your .po files in the path you defined.

## Usage
Use `__()` instead of `_()` or `gettext()`:
```
echo __('Hello!'); // "سلام!"
```
