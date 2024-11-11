import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',

                'resources/sass/_variables.scss',
                'resources/sass/app.scss',
                'resources/sass/home.scss',
                'resources/sass/orcamento.scss',
            ],
            refresh: true,
        }),
    ],
});
