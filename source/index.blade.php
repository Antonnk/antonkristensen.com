@extends('_layouts.master')

@section('body')
	
	<div class="container mx-auto flex flex-col px-4 relative z-10">
		
		<div class="flex flex-1 flex-col sm:flex-row">
			<h1 class="name">
				<small>Hi, my name is</small><br>
				Anton<br> Nørgaard<br> Kristensen
			</h1>
			<h2 class="skill">
				<small>I'm a</small><br>
				Fullstack<br> Webdev
			</h2>
		</div>
		<div class="flex flex-1 flex-col sm:flex-row-reverse">
			<h3 class="from flex-1">
				<small>From</small><br>
				Roskilde<br>
				Denmark
			</h3>
			<div class="md:text-xl mb-8 flex-1 about">
				<p class="mb-6">
					I build websites and webapps with Laravel and ES6 Javascript (Vuejs/React).
					Passion for easy deletable code and lean solutions for complex problems.
				</p>
				<a href="mailto:hello@antonkristensen.com">hello@antonkristensen.com</a><br>
				<a rel="noopener" target="_black" href="https://codesandbox.io/u/Antonnk">Codesandbox</a>
				<a rel="noopener" target="_black" href="https://codepen.io/Antonnk/">Codepen</a>
			</div>
		</div>
	</div>
	<div class="bottom-graphic absolute pin-b pin-r z-0">
		<svg width="629" height="600" viewBox="0 0 629 600" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path class="fill-current text-pink" d="M229 428.5C68.6 428.5 9.5 581.167 0 657.5L689.5 670C750 446.667 828.3 0 657.5 0C444 0 408 143.5 408 249.5C408 355.5 429.5 428.5 229 428.5Z"/>
			<path class="fill-current text-purple" d="M384.631 517.125C258.811 517.125 212.452 636.524 205 696.224L745.855 706C793.312 531.333 854.732 182 720.754 182C553.281 182 525.042 294.23 525.042 377.131C525.042 460.033 541.907 517.125 384.631 517.125Z"/>
		</svg>
	</div>
@endsection
