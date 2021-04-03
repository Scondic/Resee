module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    container: {
      padding: '1.5rem',
    },
    fontFamily: {
      'sans': ["Nunito", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Roboto", "Helvetica Neue", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
    },
    textColor: {
      'main': '#EA972F',
      'danger': '#FC5356',
      'light': '#898997',
      'dark': '#000000'
    },
    backgroundColor: theme => ({
      'fill': '#F6F7FB',
      'danger': '#FFF4F4',
    })
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
