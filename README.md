# WordPress SEO & Performance Snippets

A collection of useful PHP snippets for WordPress that improve SEO, performance, and local search visibility. These snippets are lightweight, well-commented, and ready to be added to your theme's `functions.php` or a custom plugin.

## Snippets Included

- **Remove Query Strings from Static Resources** – Removes version query strings from CSS/JS files to improve caching.
- **Automatic Image Alt Text Filler** – Automatically fills empty image alt attributes with the post title (or site name) for better accessibility and SEO.
- **Disable Emojis & Embeds** – Disables WordPress emojis and oEmbed features to reduce HTTP requests and clean up the `<head>`.
- **Register Location Taxonomy** – Adds a hierarchical "Location" taxonomy for posts and pages, perfect for local SEO.
- **Custom Schema Markup Shortcode** – A shortcode to easily add JSON-LD schema (e.g., LocalBusiness) to any page or post.

## How to Use

Each snippet is in a separate `.php` file. You can:

1. **Copy and paste** the code into your child theme's `functions.php` file, OR
2. **Create a custom plugin** and include the snippets there (recommended for ease of updates).

> ⚠️ **Always test on a staging site first!**

## Requirements

- WordPress 5.0 or higher
- PHP 7.4+

## Contributing

If you have improvements or additional snippets, feel free to open a pull request!

## License

This project is licensed under the MIT License – feel free to use it in your projects.

## About the Author

[Amit Nandi](https://github.com/amitwpseo) – Top Rated WordPress Developer and Local SEO Specialist.
