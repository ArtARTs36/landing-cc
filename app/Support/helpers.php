<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('is_current_route')) {
    function is_current_route(string $name): bool
    {
        return Route::currentRouteName() === $name;
    }
}

if (!function_exists('view_path')) {
    function view_path(string $template): string
    {
        $template = str_replace('.', DIRECTORY_SEPARATOR, $template);

        return resource_path(
            'views'. DIRECTORY_SEPARATOR .
            $template .
            '.blade.php'
        );
    }
}

if (!function_exists('view_exists')) {
    function view_exists(string $path): bool
    {
        return file_exists(view_path($path));
    }
}

if (!function_exists('page_url')) {
    /**
     * @param \TCG\Voyager\Models\Page|string $slug
     * @return string
     */
    function page_url($slug): string
    {
        if ($slug instanceof \TCG\Voyager\Models\Page) {
            $slug = $slug->slug;
        }

        return '/pages/'. $slug;
    }
}
