# Scraping project with **PHP**

This project aims to create a bookstore on packagist. Our app is coded in PHP and returns the content of a scrapped page. The project is published on github, then it is retrieved from packagist to publish the library

### For testing :
```bash
composer test
```
### For find errors
```bash
composer phpstan
```
### For show results
```bash
php build/index.php
```

Overall, we have the `getH2Elements` function in the `src/Api.php` file which retrieves the data (all the H2s of the page) from the site https://www.teamaxe.com/fr/11-casque- integral-moto, once the data is retrieved, we display it in the terminal to check if everything is working.

Next, we have the `testGetH2Elements` function in the `test/ApiTest.php` file which calls our `getH2Elements` function explained above. The purpose of this function is to test our code locally in order to check whether we are correctly recovering the data.

Once everything is properly setup and the `php build/index.php`, `composer phpstan`, `php build/index.php` commands return no error, we can move on to deploying the library.

To deploy the library we must do unit tests to be sure that it will be functional on [packagist](httpshttps://packagist.org/). To do this, we create a yaml file `.github/workflows/ci.yml` to indicate the commands to launch for unit tests.

If all the tests are valid, we just have to deploy our repo on [packagist](httpshttps://packagist.org/)


This code uses the `symfony/dom-crawler` and `symfony/http-client` libraries to parse the HTML content of a web page.
