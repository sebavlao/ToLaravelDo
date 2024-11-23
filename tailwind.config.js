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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                skin: {
                    progress: "var(--skin-progress)",
                    "progress-contrast": "var(--skin-progress-contrast)",
                    completed: "var(--skin-completed)",
                    "completed-contrast": "var(--skin-completed-contrast)",
                    "wont-do": "var(--skin-wont-do)",
                    "wont-do-contraste": "var(--skin-wont-do-contrast)",
                    default: "var(--skin-default)",
                    create: "var(--skin-create)",
                    "create-contrast": "var(--skin-create-contrast)"
                }
            }
        },
    },

    plugins: [forms],
};
