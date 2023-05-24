import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/views/layouts/css/sb-admin-2.min.css',
                'resources/views/layouts/css/styles.css',
                'resources/views/layouts/vendor/fontawesome-free/css/all.min.css',
                'resources/views/layouts/js/sb-admin-2.min.js',
                'resources/views/layouts/js/scripts.js',
            ],
            refresh: true,
        }),
    ],
});
