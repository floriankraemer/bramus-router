# Unit Testing & Code Coverage

`bramus/router` ships with unit tests using [PHPUnit](https://github.com/sebastianbergmann/phpunit/).

- If PHPUnit is installed globally run `phpunit` to run the tests.

- If PHPUnit is not installed globally, install it locally throuh composer by running `composer install --dev`. Run the tests themselves by calling `vendor/bin/phpunit`.

  The included `composer.json` will also install `php-code-coverage` which allows one to generate a __Code Coverage Report__. Run `phpunit --coverage-html ./tests-report` (XDebug required), a report will be placed into the `tests-report` subfolder.
