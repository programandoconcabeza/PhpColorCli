
# PHP COLOR CLI

You can manage the style of output text in PHP console command line.
## Installation

Install php-color-cli with composer intsall

```bash
  composer require programandoconcabeza/php-color-cli
```

## Usage/Examples

You have more examples of colors inside of options, this is an example:

```javascript
use ProgramandoConCabeza\PHPColorCli;

PHPColorCli::getColoredString(
    'text',
    PHPColorCli::colors()->yellow(),
    PHPColorCli::background()->backgroundRed(),
    PHPColorCli::options()->underline()
)

```

Except the Text, the other fields are nullable, so, doesn't matter if you don't put anything in the other arguments


## Support

For support, email programandoconcabeza@gmail.com.

