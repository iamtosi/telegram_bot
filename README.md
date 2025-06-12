# Telegram Bot in PHP

A personal Telegram bot written in pure PHP.  
Connects to the Telegram Bot API using webhooks, supports database storage, and is easy to expand. Suitable for automation, notifications, or simple user interactions.

---

## Features

- Framework-free — vanilla PHP only
- Webhook integration with Telegram Bot API
- User data stored in MySQL
- Basic logic: commands, subscriptions, admin control
- Logging to file or database
- Easy to modify for custom use cases

---

## Requirements

- PHP 7.4 or higher
- MySQL / MariaDB
- Web server (Apache, Nginx, etc.)
- HTTPS domain (or [ngrok](https://ngrok.com) for local development)

---

## Quick Start

1. Download and install [ngrok](https://ngrok.com/download)
2. Start your local server:
   ```bash
   php -S localhost:80
   ngrok http 80
3. Copy the HTTPS address from ngrok, e.g. https://abc123.ngrok.io
4. Set the Telegram webhook: https://api.telegram.org/bot<YOUR_TOKEN>/setWebhook?url=https://abc123.ngrok.io/src/bot.php

---

## File Overview

- bot.php — main webhook entry point
- admin.php — admin commands
- bot_lib.php — helper functions
- db_connect.php — MySQL connection
- sub.php, unsub.php, tech.php — command handlers

---

## Notes

- ngrok.exe is not included — download it manually and don't commit it.
- Use .env or a similar config file to store secrets and database credentials.
- Built for personal use and experimentation.