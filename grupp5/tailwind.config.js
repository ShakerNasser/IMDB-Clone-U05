import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                    'nav-color': '#820000',
                    'search-btn-color': '#C23C3C',
                    'search-field-color': '#591C1C',
                    'signin-btn-color': 'rgba(75, 0, 15, 0.6)',
                    'button-txt': '#628CF8',
                    'banner-color': '#820000',
                    'delete-button-color': '#CC0028',
                    'button-background': '#3A3A3A',
                    'form-background-color': '#2E2E2E',
                    'card-background': '#222222',
                    'text':'#F2EDEE',
                    'background': '#100809',
                    'custom-color': 'rgb(41 37 36)',

      },
        },
    },

    plugins: [forms],
};
