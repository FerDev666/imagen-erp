const mix = require('laravel-mix');
require('laravel-mix-alias');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const isDevelopment = process.env.NODE_ENV === 'development'

mix.alias({
    '@': '/resources/js'
});

mix.webpackConfig({
	  plugins: [
        new MiniCssExtractPlugin({
          filename: isDevelopment ? '[name].css' : '[name].[hash].css',
          chunkFilename: isDevelopment ? '[id].css' : '[id].[hash].css'
        })
      ],
      module: {
	    rules: [
	      {
            test: /\.scss$/,
            use: [
	          { loader: "style-loader" },
	          {
	            loader: "css-loader",
	            options: {
	                namedexport: true,
	                camelcase: true,
	                modules: true
	            }
	          },
	          { loader: "sass-loader" }
		    ]
          },
          // {
          //   test: /\.s(a|c)ss$/,
          //   exclude: /\.module.(s(a|c)ss)$/,
          //   loader: [
          //     isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
          //     'css-loader',
          //     {
          //       loader: 'sass-loader',
          //       options: {
          //         sourceMap: isDevelopment
          //       }
          //     }
          //   ]
          // }
	    ]
	  },
      resolve: {
        extensions: ['.vue', '.js', '.scss']
      }
	})
    .js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css');