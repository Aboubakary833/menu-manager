import {Font, Head, Html, Tailwind} from "jsx-email";
import {PropsWithChildren} from "react";

const theme = {
    colors: {
        primary: {
            DEFAULT: "#febc59",
            100: "#fed79b",
            200: "#fed08b",
            300: "#fec97a",
            400: "#fec36a",
            500: "#febc59",
            600: "#e5a950",
            700: "#cb9647",
            800: "#b2843e",
            900: "#987135",
        },
        secondary: {
            DEFAULT: "#0848A2",
            100: "#527fbe",
            200: "#527fbe",
            300: "#396db5",
            400: "#215aab",
            500: "#0848a2",
            600: "#074192",
            700: "#063a82",
            800: "#063271",
            900: "#052b61",
        },
        success: {
            DEFAULT: "#67c994",
            100: "#a4dfbf",
            200: "#95d9b4",
            300: "#85d4a9",
            400: "#76ce9f",
            500: "#67c994",
            600: "#5db585",
            700: "#52a176",
            800: "#488d68",
            900: "#3e7959",
        },
        warning: {
            DEFAULT: "#ffe569",
            100: "#ffefa5",
            200: "#ffed96",
            300: "#ffea87",
            400: "#ffe878",
            500: "#ffe569",
            600: "#e6ce5f",
            700: "#ccb754",
            800: "#b3a04a",
            900: "#99893f",
        },
        danger: {
            DEFAULT: "#fd5856",
            100: "#fe9b9a",
            200: "#fe8a89",
            300: "#fd7978",
            400: "#fd6967",
            500: "#fd5856",
            600: "#e44f4d",
            700: "#ca4645",
            800: "#b13e3c",
            900: "#983534",
        },
        info: {
            DEFAULT: "#dddddd",
            100: "#ebebeb",
            200: "#e7e7e7",
            300: "#e4e4e4",
            400: "#e0e0e0",
            500: "#dddddd",
            600: "#c7c7c7",
            700: "#b1b1b1",
            800: "#9b9b9b",
            900: "#858585",
        },
        dark: {
            DEFAULT: "#3d3d3d",
            100: "#8b8b8b",
            200: "#777777",
            300: "#646464",
            400: "#505050",
            500: "#3d3d3d",
            600: "#373737",
            700: "#313131",
            800: "#2b2b2b",
            900: "#252525",
        },
        transparent: "rgba(255, 255, 255, 0)"
    },

}

const Layout = ({children} : PropsWithChildren) => {
    return (
        <Html>
            <Head>
                <Font
                    fontFamily="Roboto"
                    fallbackFontFamily="Verdana"
                    webFont={{
                        url: 'https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2',
                        format: 'woff2'
                    }}
                    fontWeight={400}
                    fontStyle="normal"
                />

            </Head>
            <Tailwind config={{ theme }}>
                {children}
            </Tailwind>
        </Html>
    )
}

export default Layout
