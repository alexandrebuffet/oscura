# Oscura

Oscura is an elegant and modern block-based theme especially designed for photographers, artists and all other creatives who want to showcase their work. See the Oscura theme in action at [alexandrebuffet.com/oscura](https://alexandrebuffet.com/oscura).

![Oscura for WordPress](https://user-images.githubusercontent.com/43843473/157986570-dbc909c8-6316-48ee-8a53-012118562a80.jpg)

![Oscura moodboard](https://user-images.githubusercontent.com/43843473/157986569-15dec7bc-5a51-472b-b5db-3912465eb401.jpg)

Download the latest stable release: [oscura-1.0.0.zip](https://github.com/alexandrebuffet/oscura/releases/download/v1.0.0/oscura-1.0.0.zip)

# Development Guide

## Getting Started

You can download the latest stable release of Oscura using the link above. Alternatively, install the entire repository for development purposes:

1. Set up a local WordPress development environment, I recommend using [Local](https://localwp.com/).
2. Ensure you are using WordPress 5.9 or version 5.9+ with the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) active.
3. Clone or download this repository into the `/wp-content/themes/` directory of your new WordPress instance.
4. In the WordPress admin, use the Appearance > Themes screen to activate Oscura.

## Requirements

- Gutenberg plugin (latest)
- WordPress 5.9+
- PHP 5.6+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

**Coding Standards**

Oscura adheres to the [WordPress coding standards](https://developer.wordpress.org/coding-standards/). To optionally test standards locally, you will need [Node.js](https://nodejs.org/en/) and [Composer](https://getcomposer.org/) on your machine. Run `npm install && composer install` to install test-specific development dependencies. The following commands are available:

- `npm run lint:css` Lints and autofixes where possible the CSS
- `composer run analyze [filename.php]` Statically analyzes PHP for bugs
- `composer run lint` Checks all PHP files for syntax errors
- `composer run standards:check` Checks all PHP files for standards errors
- `composer run standards:fix` Attempts to automatically fix all PHP standards errors

## Resources

- [Oscura website](https://alexandrebuffet.com/oscura)
- [Set up a development environment with Local](https://localwp.com/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
