# Blog website

This project is a simple integration for a blog site. It was carried out using the Sass preprocessor and Webpack for tools management and the built of development and production structures for the website. It will be soon integrated as a Wordpress theme.

## Setup

**To set up the project, follow the steps below :**

1. Clone the repository
2. Perform the command:
    ````bash
    composer install
    ````
3. You must then create a database for WordPress
4. It is now time to create a new file named 'wp-config.php' on the same basis as 'wp-config-sample.php' at the root of the project. Several parameters will have to be modified in this file:
    
    * First of all, you must configure the login credentials to the database
    
    ````php
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'database_name_here' );
    
    /** MySQL database username */
    define( 'DB_USER', 'username_here' );
    
    /** MySQL database password */
    define( 'DB_PASSWORD', 'password_here' );
    
    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );
    ````
   * Then you need to generate the unique phrases. You can help yourself from this [link](https://api.wordpress.org/secret-key/1.1/salt/)
   ````php
   define( 'AUTH_KEY',         'put your unique phrase here' );
   define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
   define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
   define( 'NONCE_KEY',        'put your unique phrase here' );
   define( 'AUTH_SALT',        'put your unique phrase here' );
   define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
   define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
   define( 'NONCE_SALT',       'put your unique phrase here' );
   ````
   * And finally, you just have to change the url which points to the 'content' folder present at the root of the project
   ```php
   /** Change URL to point to the folder 'content' */
   define('WP_CONTENT_URL', 'http://localhost/project/content');
   ```
5. If you are on Linux, you will need to configure the access rights for Apache:
    ````bash
    sudo chown -R <user>:www-data .
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess
    ````

**You can now launch the classic installation of WordPress, which will let you choose the language, the site name as well as the identifiers for the administrator account.**
