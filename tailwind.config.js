module.exports = {
    purge: [
        // './resources/**/*.blade.php',
        // './resources/**/*.js',
        // './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('tailwindcss-rtl'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),

    ],
}
