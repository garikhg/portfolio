/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.php",
        "./inc/**/*.php",
        "./template-parts/**/*.php",
        "./src/**/*.{js,ts,jsx,tsx}",
    ],
    theme: {
        container: {
            center: true,
            padding: '2rem',
            screens: {
                '2xl': '1400px'
            }
        },
        fontFamily: {
            heading: ['"League Spartan", sans-serif'],
            body: ['"Inter", sans-serif'],
        },
        backgroundColor: {
            cream: 'var(--ang--cream)',
            'frost-gray': 'var(--ang--frost-gray)',
            'light-gray': 'var(--ang--light-gray)',
            background: 'var(--ang--frost-gray)',
            black: 'var(--ang--black)',
        },
        extend: {
            colors: {
                background: 'var(--ang--frost-gray)',
            }
        },
    },
    plugins: [
        require('tailwindcss-animate'),
    ],
}

