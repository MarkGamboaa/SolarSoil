<?php
// Simple health check endpoint for Render
header('Content-Type: application/json');

// Basic application health check
$health = [
    'status' => 'healthy',
    'timestamp' => date('Y-m-d H:i:s'),
    'service' => 'SolarSoil',
    'version' => '1.0.0',
    'deployment' => 'render'
];

// Check if basic PHP functionality is working
if (function_exists('phpinfo')) {
    $health['php'] = 'ok';
} else {
    $health['php'] = 'error';
    $health['status'] = 'unhealthy';
}

// Check if required directories exist
$required_dirs = ['assets', 'components', 'pages', 'utils'];
foreach ($required_dirs as $dir) {
    if (is_dir($dir)) {
        $health['directories'][$dir] = 'exists';
    } else {
        $health['directories'][$dir] = 'missing';
        $health['status'] = 'unhealthy';
    }
}

// Return JSON response
echo json_encode($health, JSON_PRETTY_PRINT);
?> 