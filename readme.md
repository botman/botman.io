## BotMan Website

This is the source of the botman.io website.

### Documentation

The website's documentation is loaded from the `resources/docs` directory. You will need to clone the documentation into this directory. The documentation is stored on GitHub at [mpociot/botman-docs](https://github.com/mpociot/botman-docs).

### Installation

Open Source Frameworks are teamwork - that's why we also have a [Teamwork](https://github.com/mpociot/teamwork) package for Laravel applications. If you want to contribute to the BotMan website and docs, you get started with these commands:

```bash
# Clone the main project
git clone git@github.com:botman/botman.io.git
cd botman.io

# Initial Setup
composer install
cp .env.example .env
php artisan key:generate

# Fetch Documentation
git clone -b 1.4 git@github.com:botman/docs.git resources/docs/1.4
git clone -b 1.5 git@github.com:botman/docs.git resources/docs/1.5
git clone -b master git@github.com:botman/docs.git resources/docs/master
```