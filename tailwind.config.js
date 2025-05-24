import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        primary: ['Urbanist', ...defaultTheme.fontFamily.sans],  // Tambahkan font-primary disini
      },
      colors: {
        primary: '#3B82F6',
        secondary: '#F9FAFB',
        gray: '#94A3B8',
      },
    },
  },
  plugins: [forms],
};
