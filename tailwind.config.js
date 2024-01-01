/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        fontFamily: {
            sans: ["Poppins", "ui-sans-serif", "system-ui"],
        },
        extend: {
            colors: {
                primary1: "#07575B" /**OCEAN*/,
                primary2: "#C4DFE6" /**SEAFOAM*/,
                primary3: "#f8fafc" /**White */,
                primary4: "#66A5AD" //**Deep Aqua*/,
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
