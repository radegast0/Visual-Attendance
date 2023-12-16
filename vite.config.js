import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                '/resources/css/app.css',
                '/resources/js/app.js',
				'/resources/js/HDataTable.js',
            ],
            refresh: true,
			ssr: false
        }),
    ],
	resolve: {
		alias: {
			'@': '/resources/js',
		},
	},
});
