import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcss from 'postcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [
                autoprefixer(), // автоматическое добавление вендорных префиксов
                cssnano() // оптимизация и сжатие CSS
            ]
        }
    }
});
