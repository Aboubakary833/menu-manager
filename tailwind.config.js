module.exports = {
    content: ["node_modules/preline/dist/*.js"],
    plugins: [require("preline/plugin")],
    theme: {
        colors: {
            primary: "#FB9345",
            secondary: "#FFB534",
            success: "#67BA79",
            warning: "#F8CC5C",
            danger: "#F26B4E",
            info: "#DDDDDD",
        },
    },
};
