/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                "primary": "#403ECC",
                "secondary": "#696974",
                "background-home": "#f6f6ff"
            },
            height: {
                "header-height": "4rem"
            },
            width: {
                "header-width": "100%",
                "70%": "70%",
                "sidebar": "4rem",
                "main-layout": "86.875rem"
            },
            boxShadow: {
                "header-box_shadow": "inset 0px -1px 0px #E2E2EA",
                "side_bar-box_shadow": "inset -1px 0px 0px #DCDCE0",
                "card": " 16px 16px 24px rgba(23, 23, 37, 0.08)"
            },
            borderColor: {
                "border-primary": "primary"
            },
            borderRadius: {
                "side_bar-rounded": "0px 100px 100px 0px",
                "table": "10px 10px 0 0"
            },
            zIndex: {
                "100": "100"
            },
            backgroundImage: {
                "detail-background" : "url('../public/img/Artboard.png')"
            },
            margin: {
                "main": "6.5rem",
            },
            padding: {
                "p-sidebar": "4rem",
                "p-header": "4rem"
            },
        }
    },
}
