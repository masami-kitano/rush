/** @type {import('tailwindcss').Config} */
// export default __CONFIG__
module.exports = {
  content: ['./src/**/*.{pug,html,js,php}', './rush/**/*.php'],
  theme: {
    screens: {
      'spmin': '360px',
      'tablet': '768px',
      'pc': '1024px',
      'pcl': '1440px',
      'pcxl': '1920px',
    }
  },
  plugins: [],
};