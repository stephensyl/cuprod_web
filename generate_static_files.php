<?php

$staticDir = 'static';

// Create the static directory if it doesn't exist
if (!is_dir($staticDir)) {
    mkdir($staticDir, 0777, true);
}

// Function to capture the output of a PHP file
function captureOutput($file) {
    ob_start();
    include($file);
    return ob_get_clean();
}

// Function to process includes and replace hrefs
function processContent($content) {
    // Replace include statements with actual content
    $patternInclude = '/<\?php\s+include\s*[\'"](.*?)[\'"]\s*;\s*\?>/';
    while (preg_match($patternInclude, $content, $matches)) {
        $includeFile = $matches[1];
        if (file_exists($includeFile)) {
            $includeContent = captureOutput($includeFile);
            $content = str_replace($matches[0], $includeContent, $content);
        } else {
            $content = str_replace($matches[0], '', $content);
        }
    }

    // Replace hrefs linking to PHP files with HTML files
    $patternHref = '/href=["\']([^"\']+)\.php["\']/';
    $content = preg_replace($patternHref, 'href="$1.html"', $content);

    return $content;
}

// Function to create static file with processed content
function createStaticFile($phpFile, $htmlFile) {
    global $staticDir;
    $content = captureOutput($phpFile);
    $processedContent = processContent($content);
    $fullPath = $staticDir . '/' . $htmlFile;

    if (file_put_contents($fullPath, $processedContent) === false) {
        echo "Failed to write to $fullPath\n";
    } else {
        echo "Successfully wrote to $fullPath\n";
    }
}

// List of PHP files to convert to static HTML
$filesToConvert = [
    'index.php' => 'index.html',
    'about.php' => 'about.html',
    'contact.php' => 'contact.html',
    'events.php' => 'events.html',
    'lineup.php' => 'lineup.html',
    'music.php' => 'music.html',
    'resources.php' => 'resources.html',
    'footer.php' => 'footer.html',
    'header.php' => 'header.html',
    'error.php' => 'error.php'
];

foreach ($filesToConvert as $phpFile => $htmlFile) {
    if (file_exists($phpFile)) {
        createStaticFile($phpFile, $htmlFile);
    } else {
        echo "$phpFile does not exist.\n";
    }
}

echo "Static files generated successfully.\n";
