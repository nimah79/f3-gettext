# F3 Gettext
This is a Gettext plugin for the [PHP Fat-Free Framework](https://github.com/bcosca/fatfree).

It doesn't need PHP gettext extension!

## Config sample:
**1.** Add these lines to your F3 config:
```
[GETTEXT]
language=fa
path=locales/
```
**2.** Put your .po files in the path you defined.

## Usage:
Use `__()` instead of `_()` or `gettext()`:
```
echo __('Hello!'); // "سلام!"
```
