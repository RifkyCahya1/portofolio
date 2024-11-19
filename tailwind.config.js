import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('./node_modules/taos/plugin.js')
    ],
    safelist: [
        '!duration-[0ms]',
        '!delay-[0ms]',
        'html.js :where([class*="taos:"]:not(.taos-init))'
    ],
    content: {
        relative: true,
        transform: (content) => content.replace(/taos:/g, ''),
        files: ['./src/*.{html,js}'],
      },
};
