<?php
//---------- HEADER
$pages = [
    [
        "title" => "Exo 1",
        "name" => "Entrainement",
        "link" => "index.php"
    ],
    [
        "title" => "Exo 2",
        "name" => "Donnez moi des fruits",
        "link" => "exo2.php"
    ],
    [
        "title" => "Exo 3",
        "name" => "Donnez moi de la thune",
        "link" => "exo3.php"
    ],
    [
        "title" => "Exo 4",
        "name" => "Donnez moi des fonctions",
        "link" => "exo4.php"
    ],
    [
        "title" => "Exo 5",
        "name" => "Netflix",
        "link" => "exo5.php"
    ],
    [
        "title" => "Exo 6",
        "name" => "Mini-site",
        "link" => "exo6.php"
    ]
];

/**
 * Turns an array into a navigation bar
 *
 * @param array $pages - Array with pages data
 * @param array $activePage - Active page index
 * @return string - Nav bar HTML
 */
function turnArrIntoHeader(array $pages, array $activePage): string
{
    $header = '<header class="header"><h1 class="main-ttl">Introduction PHP - ' . $activePage["title"] . '</h1><nav class="main-nav"><ul class="main-nav-list">';
    foreach ($pages as $page) {
        $header .= '<li><a href=' . $page["link"] . ' class="main-nav-link';
        if ($page === $activePage) {
            $header .= ' active';
        }
        $header .= '">' . $page["name"] . '</a></li>';
    }
    return $header .= '</ul></nav></header>';
}

//---------- FOOTER
$footer = '<footer class="copyright">© Guillaume Belleuvre, 2023 - DWWM</footer>';