module.exports = {
    content: [
        "node_modules/preline/dist/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    plugins: [require("preline/plugin")],
    theme: {
        colors: {
            primary: "#FEBC59",
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
