# Apex Page

A Laravel 8 site for a private event: a public landing page, a hidden guest area, guest-list management, QR code generation for entry, and ticket payment through PayPal.

> Learning project from 2022. Access control relies on unlisted routes rather than proper authorisation — see Status.

## What it includes

- A landing page plus a hidden entry point for invited guests.
- Guest-list management with create, edit, and delete.
- QR code generation for guest entry.
- A PayPal checkout with create, process, success, and cancel steps.
- Registration and login through Laravel UI.

## Tech stack

- Laravel 8 and PHP
- Blade templates
- Laravel UI and `laravelcollective/html`
- `simplesoftwareio/simple-qrcode` for entry codes
- `srmklive/paypal` for the checkout

## Getting started

### Requirements

- PHP 7.3 or newer
- Composer
- Node.js and npm
- A configured database
- PayPal API credentials for the checkout

### Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
php artisan migrate
```

### Run locally

```bash
php artisan serve
npm run dev
```

## Routes

| Route | Purpose |
| --- | --- |
| `GET /` | Landing page |
| `GET /hidden` | Guest entry point |
| `GET guests` | Guest list |
| `POST create`, `POST edit/{id}`, `POST delete/{id}` | Guest management |
| `POST qrcode` | Generate an entry QR code |
| `GET create-transaction` … `cancel-transaction` | PayPal checkout steps |

## Status

Unmaintained, and not safe to deploy as is. Laravel 8 is past end of life, the guest area is protected only by being unlisted, and the transaction view still carries the leftover title "Pay $1000" rather than the amount the controller actually charges. Treat it as a study of QR codes and PayPal in Laravel, not as a production event system.

## License

No open-source license has been declared yet. Until a license is added, reuse and redistribution are not granted by default.

Made with love by [Laflamme](https://github.com/lafllamme).
