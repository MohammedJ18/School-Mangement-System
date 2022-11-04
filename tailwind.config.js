const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            // website colors
            colors: {
                primary: {
                    100: "#FFC657",
                },
                secondary: {
                    100: "#343434",
                    200: "#D8D8D8",
                    300: "#484848",

                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],

};
