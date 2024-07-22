import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist',
        rollupOptions: {
            output: {
                entryFileNames: 'js/[name].js',     // File entry akan disimpan dengan nama asli di direktori 'js'
                chunkFileNames: 'js/[name].js',     // File chunk akan disimpan dengan nama asli di direktori 'js'
                assetFileNames: 'css/[name].[ext]', // File asset akan disimpan dengan nama dan ekstensi asli di direktori 'css'
            },
        },
    },
});
