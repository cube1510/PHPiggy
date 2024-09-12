<?php

// The word bootstrap is a term to describe a piece of code responsible for loading other files and configuring the project

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php"; //! using require fn will throw error when the file from composer cannot be included

use Framework\App;

$app = new App();

return $app;