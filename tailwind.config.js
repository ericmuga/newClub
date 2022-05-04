module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
      theme: {
        extend: {
            colors:{
                     success:'#4BB543',
                    //  teal:colors.slate,

                    }
        },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin'),
    require("daisyui"),
  ],
}
}
