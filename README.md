This project will contain the solutions to the [cryptopals](https://cryptopals.com/) challenges. These challenges are done in PHP.


# Getting Started On Windows

## Install PHP 7.4
[download zip file](https://windows.php.net/downloads/releases/php-7.4.10-nts-Win32-vc15-x64.zip)

Extract zip file

Setup .ini file by duplicating the existing development .ini file. Then find `extension_dir = "ext"` and uncomment it by removing the semicolon.
You'll also need to make sure the `openssl` extension is enabled by uncommenting it as well in the list of dynamic extensions.

Add php to your environment variables by adding the php directory to your windows path variable.

---
## Install composer

Download and run [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)

---
## Download packages

Go the project directory in a terminal and run the following:
```
composer install
```
This will download all necessary packages in order to run test.

---
## Running Tests

To run tests use the following command
```
composer test
```