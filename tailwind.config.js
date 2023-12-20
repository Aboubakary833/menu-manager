module.exports = {
    content: [
        "node_modules/preline/dist/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    plugins: [require("preline/plugin")],
    theme: {
        colors: {
            primary: {
                DEFAULT: "#febc59",
                "100": "#fed79b",
                "200": "#fed08b",
                "300": "#fec97a",
                "400": "#fec36a",
                "500": "#febc59",
                "600": "#e5a950",
                "700": "#cb9647",
                "800": "#b2843e",
                "900": "#987135",
            },
            secondary: "#0848A2",
            success: "#67BA79",
            warning: "#F8CC5C",
            danger: "#FD5856",
            info: "#DDDDDD",
            white: "#FFFFFF",
            dark: "#3D3D3D"
        },
    },
};
