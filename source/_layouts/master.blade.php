<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="font-serif bg-blue text-white noice-bg">
    	<svg id="light-mode-toggle" class="absolute pin-r m-6 fill-current text-white z-20" width="60" height="60" viewBox="0 0 140 200" opacity="0.5" xmlns="http://www.w3.org/2000/svg">
			<path id="bulp" d="M64 114.305C56.1022 110.558 49.7143 104.234 45.8868 96.3726C42.0594 88.5116 41.0202 79.5818 42.9403 71.0517C44.8603 62.5215 49.6252 54.8988 56.4514 49.4372C63.2776 43.9755 71.7587 41 80.5 41C89.2413 41 97.7224 43.9755 104.549 49.4372C111.375 54.8988 116.14 62.5215 118.06 71.0517C119.98 79.5818 118.941 88.5116 115.113 96.3726C111.286 104.234 104.898 110.558 97 114.305V128.994H64V114.305ZM64 134.496H97V142.748C97 147.314 93.315 151 88.75 151H72.25C70.062 151 67.9636 150.131 66.4164 148.583C64.8692 147.035 64 144.936 64 142.748V134.496ZM75 106.438V117.991H86V106.438C92.6772 105.075 98.6105 101.28 102.65 95.7892C106.689 90.2987 108.546 83.5037 107.861 76.7214C107.176 69.9391 103.998 63.6529 98.9423 59.0813C93.8871 54.5098 87.3149 51.9787 80.5 51.9787C73.6851 51.9787 67.1129 54.5098 62.0577 59.0813C57.0024 63.6529 53.8242 69.9391 53.1393 76.7214C52.4543 83.5037 54.3114 90.2987 58.3504 95.7892C62.3895 101.28 68.3228 105.075 75 106.438V106.438Z"/>
			<rect x="84" y="28" width="8" height="0px" rx="4" transform="rotate(-180 84 28)"/>
			<rect x="28" y="74" width="8" height="0px" rx="4" transform="rotate(90 28 74)"/>
			<rect x="133" y="82" width="8" height="0px" rx="4" transform="rotate(-90 133 82)"/>
			<rect x="110.214" y="34.5337" width="8" height="0px" rx="4" transform="rotate(-150 110.214 34.5337)"/>
			<rect x="33.0337" y="100.786" width="8" height="0px" rx="4" transform="rotate(60 33.0337 100.786)"/>
			<rect x="127.966" y="55.2141" width="8" height="0px" rx="4" transform="rotate(-120 127.966 55.2141)"/>
			<rect x="37.0337" y="48.2859" width="8" height="0px" rx="4" transform="rotate(120 37.0337 48.2859)"/>
			<rect x="123.966" y="107.714" width="8" height="0px" rx="4" transform="rotate(-60 123.966 107.714)"/>
			<rect x="57.7141" y="30.5336" width="8" height="0px" rx="4" transform="rotate(150 57.7141 30.5336)"/>
			<rect x="57.7141" y="30.5336" width="8" height="0px" rx="4" transform="rotate(150 57.7141 30.5336)"/>
		</svg>
        @yield('body')
    </body>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</html>
