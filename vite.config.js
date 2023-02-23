import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // css files
                'resources/css/app.css',
                // javascript files
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
