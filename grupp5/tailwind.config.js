import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                    'nav-color': '#820000',
                    'search-btn-color': '#C23C3C',
                    'search-field-color': '#591C1C',
                    'signin-btn-color': 'rgba(75, 0, 15, 0.6)',
                    'button-txt-color': '#628CF8',
                    'banner-color': '#820000',
                    'delete-button-color': '#CC0028',
                    'button-background-color': '#3A3A3A',
                    'form-background-color': '#2E2E2E',
                    'card-background-color': '#222222',
                    'blackground': '#1A1A1A',
      },
           
        },
    },

    plugins: [forms],
};
