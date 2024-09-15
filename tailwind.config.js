/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.php",
        "./inc/**/*.php",
        "./templates/**/*.php",
        "./template-parts/**/*.php",
        "./src/**/*.{js,ts,jsx,tsx}",
    ],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#263570",
                    secondary: "#415a94",
                    accent: "#ff7f50",
                    neutral: "#111013",
                    "base-100": "#f3f4f6",
                    info: "#3b82f6",
                    success: "#4c6fb5",
                    warning: "#f59e0b",
                    error: "#ff0000",
                },
            },
            "cupcake",
        ],
    },
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '2rem',
            screens: {
                '2xl': '1400px'
            }
        },
        fontFamily: {
            heading: ['"DM Sans", sans-serif'],
            body: ['"Inter", sans-serif'],
        },
        backgroundColor: {
            cream: 'var(--ang--cream)',
            'frost-gray': 'var(--ang--frost-gray)',
            'light-gray': 'var(--ang--light-gray)',
            background: 'var(--ang--frost-gray)',
            black: 'var(--ang--black)',
            primary: 'var(--ang--primary)',
        },
        extend: {
            colors: {
                background: 'var(--ang--frost-gray)',
                primary: {
                    DEFAULT: 'var(--ang--primary)',
                    foreground: 'var(--ang--primary-foreground)',
                },
                secondary: {
                    DEFAULT: 'var(--ang--secondary)',
                    foreground: 'var(--ang--secondary-foreground)',
                }
            },
            transitionProperty: {
                cubicBezier: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
            }
        },
    },
    plugins: [
        require('tailwindcss-animate'),
        require('daisyui')
    ],
}

