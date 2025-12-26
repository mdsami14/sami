<?php
// Portfolio items array
$portfolio_items = [
    [
        'title' => 'E-Commerce Website',
        'description' => 'A full-featured online store with shopping cart and payment integration.',
        'category' => 'web',
        'icon' => 'fas fa-shopping-cart'
    ],
    [
        'title' => 'Task Management App',
        'description' => 'A productivity application for managing tasks and projects with team collaboration.',
        'category' => 'app',
        'icon' => 'fas fa-tasks'
    ],
    [
        'title' => 'Travel Blog',
        'description' => 'A responsive blog website with content management system for travel enthusiasts.',
        'category' => 'web',
        'icon' => 'fas fa-globe'
    ],
    [
        'title' => 'Fitness Tracker Mobile App',
        'description' => 'A cross-platform mobile application for tracking workouts and nutrition.',
        'category' => 'mobile',
        'icon' => 'fas fa-running'
    ],
    [
        'title' => 'Real Estate Platform',
        'description' => 'A comprehensive platform for property listings with advanced search filters.',
        'category' => 'web',
        'icon' => 'fas fa-home'
    ],
    [
        'title' => 'Weather Dashboard',
        'description' => 'A real-time weather application with interactive charts and forecasts.',
        'category' => 'app',
        'icon' => 'fas fa-cloud-sun'
    ]
];

// Display portfolio items
foreach ($portfolio_items as $item) {
    echo '
    <div class="portfolio-item" data-category="' . $item['category'] . '">
        <div class="portfolio-img" style="background: linear-gradient(135deg, #' . rand(100, 999) . ', #' . rand(100, 999) . ');">
            <i class="' . $item['icon'] . '"></i>
        </div>
        <div class="portfolio-content">
            <h3>' . $item['title'] . '</h3>
            <p>' . $item['description'] . '</p>
            <div class="portfolio-tags">
                <span class="tag">' . ucfirst($item['category']) . '</span>
                <span class="tag">' . (($item['category'] == 'web') ? 'HTML/CSS' : (($item['category'] == 'app') ? 'JavaScript' : 'React Native')) . '</span>
            </div>
        </div>
    </div>';
}
?>