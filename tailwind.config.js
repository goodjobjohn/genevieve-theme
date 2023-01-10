module.exports = {
    darkMode: "class",
    content: [
        // https://tailwindcss.com/docs/content-configuration
        "./*.php",
        "./inc/**/*.php",
        "./templates/**/*.php",
        "./blocks/**/*.php",
        "./safelist.txt",
        //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
    ],
    safelist: [
        "text-center",
        "min-w-0",
        "opacity-50",
        "!opacity-50",
        "font-maison",
        "font-domaine",
        //{
        //  pattern: /text-(white|black)-(200|500|800)/
        //}
    ],
    theme: {
        fontFamily: {
            maison: ["Maison Neue", "sans-serif"],
            domaine: ["Domaine Display", "sans-serif"],
        },
        colors: {
            green: "#888676",
            offwhite: "#f3ede6",
            white: "#ffffff",
            black: "#000000",
        },
        extend: {
            fontSize: {
                xxs: "0.625rem", // 10px
            },
            spacing: {
                xs: "0.313rem", // 5px
                sm: "0.625rem", //10px
                md: "1.25rem", // 20px
                lg: "2.5rem", // 40px
                xl: "5rem", // 80px
            },
            aspectRatio: {
                gold: "16 / 10", // aspect-gold - close to golden ratio
            },
            screens: {
                "3xl": "1900px",
            },
        },
        plugins: [],
    },
};
