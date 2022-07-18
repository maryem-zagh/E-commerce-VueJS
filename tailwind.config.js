const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./index.html",
        "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        fontFamily: {

            'ProductSans': ['Product Sans'],
            'Quicksand': ['Quicksand'],

        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,

            primary: '#1D1D1D',
            secondary: '#1D57A6',
            info: '#464646',

        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
