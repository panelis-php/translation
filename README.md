# Panelis Translation

Manage application translations directly from the Panelis admin panel.

## Features

* Override Laravel translations without modifying language files
* Support for multiple locales
* Search and filter translation keys
* Store translation overrides in the database
* Composer-based Panelis plugin discovery

## Requirements

* PHP 8.3+
* Laravel 13+
* Filament 5+

## Installation

Install the package via Composer:

```bash
composer require panelis-php/translation
```

Run migrations:

```bash
php artisan migrate
```

## Usage

After installation, a **Translations** menu will be available in the Panelis admin panel.

Translation overrides are stored in the database and automatically take precedence over the default language files.

For example, given the following translation:

```php
__('auth.failed');
```

Default translation:

```php
'failed' => 'These credentials do not match our records.',
```

You can override it from the admin panel:

```text
These credentials are invalid.
```

The new value will be displayed throughout the application without modifying any files inside the `lang` directory.

## How It Works

Panelis Translation stores custom translation values in the database and resolves them before falling back to Laravel's default translation files.

Priority order:

```text
Database Override
        ↓
Laravel Language Files
        ↓
Translation Key
```

## Roadmap

* Import translations from language files
* Export translation overrides
* Missing translation detection
* Translation usage tracking
* AI-assisted translation suggestions

## License

The MIT License (MIT).
