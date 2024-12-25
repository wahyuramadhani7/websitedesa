import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        // Mengubah output directory ke 'dist'
        outDir: 'dist',
        // Pastikan asset manifest dibuat
        manifest: true,
        rollupOptions: {
            input: ['resources/css/app.css', 'resources/js/app.js']
        }
    }
});