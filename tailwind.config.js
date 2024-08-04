import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// /** @type {import('tailwindcss').Config} */
// export default {
//     content: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/views/**/*.blade.php',
//     ],
//     backgroundImage: {
//         'hero-pattern': "url('images/bg1.jpg')",
        
//       },

//     theme: {
//         extend: {
//             fontFamily: {
//                 sans: ['Figtree', ...defaultTheme.fontFamily.sans],
//             },
//             colors: {
//                 sky: colors.sky,
//                 cyan: colors.cyan,
//               },
//         },
//     },

//     plugins: [forms],
// };

export default {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
    theme: {
      extend: {
        colors: {
          purple: {
            600: '#805ad5',
            700: '#6b46c1',
          },
          sky: {
            500: '#0ea5e9',
          },
          green: {
            500: '#22c55e',
          },
          yellow: {
            500: '#eab308',
          },
            'custom-bg': 'rgba(241, 236, 232, 1)',
        },
      },
      boxShadow: {
        'navbar': '0px 4px 35.3px 0px #0000001A',
        'sidebar': '3px 0px 20px 0px #00000026',
        'btn': '0 11px 27px 0 rgba(40, 63, 255, 0.36)',
        'card':'0px 4px 49px 0px rgba(0, 0, 0, 0.1)',
      },
      backgroundImage: {
        'custom-gradient': 'linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%)',
      },
      
    },
    plugins: [forms],
  };
  
