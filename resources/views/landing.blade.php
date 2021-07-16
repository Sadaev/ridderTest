<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @livewireStyles
</head>
<body>
<svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
    <symbol id="LOGO" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
        <g>
            <g>
                <g>
                    <circle cx="256" cy="256" fill="#00ddc1" r="256"/>
                </g>
            </g>
            <path d="m93.743 404.327 100.02 100.02c84.343 21.052 177.312-1.382 243.256-67.327 55.723-55.723 80.371-130.741 73.977-203.547l-115.88-115.882z" fill="#00baa0"/>
            <g>
                <g>
                    <path d="m122.028 404.327h-28.285l64.301-64.301 14.142 14.142z" fill="#eef4ff"/>
                </g>
                <g>
                    <path d="m122.028 404.327h-14.142l57.229-57.23 7.071 7.071z" fill="#d6e9f8"/>
                </g>
            </g>
            <g>
                <path d="m208.07 137.643h124v208.999h-124z" fill="#eef4ff" transform="matrix(.707 .707 -.707 .707 250.322 -120.046)"/>
                <path d="m261.417 159.74h61.5v208.999h-61.5z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 272.419 -129.199)"/>
            </g>
            <g>
                <path d="m178.376 201.608h172.457v92h-172.457z" fill="#d6e9f8" transform="matrix(-.707 .707 -.707 -.707 626.793 235.59)"/>
                <path d="m194.816 241.298h172.457v45.5h-172.457z" fill="#b2d7f3" transform="matrix(-.707 .707 -.707 -.707 666.483 252.03)"/>
            </g>
            <g>
                <path d="m146.592 321.62h44v44h-44z" fill="#7a3eb4" transform="matrix(.707 .707 -.707 .707 292.356 -18.569)"/>
                <path d="m165.37 329.398h22v44h-22z" fill="#613393" transform="matrix(.707 .707 -.707 .707 300.134 -21.79)"/>
            </g>
            <g>
                <path d="m198.048 353.926-48.714-48.715 3.003-33.017 7.454-7.454 63.722 63.721z" fill="#eef4ff"/>
                <path d="m207.007 362.884-28.486-28.486 25.464-25.464 36.416 36.416-.383 14.525z" fill="#d6e9f8"/>
            </g>
            <g>
                <path d="m186.648 247.027h65.074v92h-65.074z" fill="#ff6379" transform="matrix(.707 -.707 .707 .707 -143.004 240.813)"/>
                <path d="m203.088 286.717h65.074v45.5h-65.074z" fill="#ff415b" transform="matrix(.707 -.707 .707 .707 -149.814 257.253)"/>
            </g><g><path d="m201.778 249.534h56.27v15h-56.27z" fill="#b2d7f3" transform="matrix(.707 .707 -.707 .707 249.091 -87.289)"/>
                <path d="m236.236 278.607h45.5v15h-45.5z" fill="#8bbbff" transform="matrix(.707 .707 -.707 .707 278.163 -99.332)"/>
            </g>
            <g>
                <path d="m213.739 187.123h196.7v26h-196.7z" fill="#b2d7f3" transform="matrix(.707 -.707 .707 .707 -50.099 279.295)"/>
                <path d="m218.512 198.646h196.7v12.5h-196.7z" fill="#8bbbff" transform="matrix(.707 -.707 .707 .707 -52.076 284.068)"/>
            </g>
            <g>
                <path d="m320.14 112.072h124v36.001h-124z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 203.901 -232.117)"/>
                <path d="m373.487 134.169h61.5v36.001h-61.5z" fill="#b2d7f3" transform="matrix(.707 .707 -.707 .707 225.998 -241.27)"/>
            </g>
            <g>
                <path d="m281.776 142.699h62.5v26.001h-62.5z" fill="#eef4ff" transform="matrix(.707 .707 -.707 .707 201.779 -175.74)"/>
                <path d="m326.117 186.539h61.5v26.001h-61.5z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 245.62 -193.899)"/>
            </g>
        </g>
    </symbol>
    <symbol id="instagram" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
        <linearGradient id="SVGID_1_" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)" gradientUnits="userSpaceOnUse" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"><stop offset="0" stop-color="#fd5"/>
            <stop offset=".5" stop-color="#ff543e"/>
            <stop offset="1" stop-color="#c837ab"/>
        </linearGradient><path d="m1.5 1.633c-1.886 1.959-1.5 4.04-1.5 10.362 0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091-.559-.081-.671-.105-3.539-.11-10.173.005-12.403-.448-14.41 1.633z" fill="url(#SVGID_1_)"/>
        <path d="m11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471c-.587 0-1.063.476-1.063 1.063s.476 1.063 1.063 1.063 1.063-.476 1.063-1.063-.476-1.063-1.063-1.063zm-4.73 1.243c-2.513 0-4.55 2.038-4.55 4.551s2.037 4.55 4.55 4.55 4.549-2.037 4.549-4.55-2.036-4.551-4.549-4.551zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z" fill="#fff"/>
    </symbol>
    <symbol id="vk" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
            <g>
                <g>
                    <circle id="XMLID_11_" style="fill:#4D76A1;" cx="56.098" cy="56.098" r="56.098"/>
                </g>
                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878
                    c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235
                    c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463
                    c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069
                    c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297
                    c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514
                    c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644
                    c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446
                    c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069
                    c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993
                    C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/>
            </g>
        </symbol>
    <symbol id="twitter" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#03A9F4;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                C480.224,136.96,497.728,118.496,512,97.248z"/>
	</symbol>


<symbol id="facebook" x="0px" y="0px"
	 viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
<circle style="fill:#4E598F;" cx="256.001" cy="256" r="256"/>
<path style="fill:#364270;" d="M511.596,241.7L391.019,121.085c-1.998,0.605-6.982-1.714-9.173-1.274
	c-51.717,8.62-101.71,0-151.704,13.791c-24.135,6.896-25.859,36.202-34.478,55.165c-12.067,34.478-10.343,72.404-25.859,105.158
	c-10.343,22.411-34.478,36.202-43.098,62.061c-2.875,10.785-2.705,24.379-5.956,34.69l120.98,120.922
	c4.725,0.26,9.48,0.403,14.269,0.403c141.384,0,256-114.616,256-256C512.001,251.201,511.858,246.434,511.596,241.7z"/>
<g>
	<path style="fill:#FFFFFF;" d="M363.043,109.466H148.958c-21.809,0-39.49,17.68-39.49,39.49v214.085
		c0,21.811,17.68,39.49,39.49,39.49h105.584l0.183-104.722h-27.21c-3.536,0-6.406-2.86-6.418-6.396l-0.133-33.759
		c-0.014-3.553,2.867-6.444,6.42-6.444h27.162v-32.618c0-37.852,23.118-58.463,56.884-58.463h27.71c3.543,0,6.42,2.874,6.42,6.42
		v28.463c0,3.546-2.874,6.42-6.416,6.42l-17.006,0.01c-18.363,0-21.921,8.725-21.921,21.533v28.239h40.351
		c3.848,0,6.83,3.358,6.375,7.173l-4.001,33.759c-0.381,3.232-3.122,5.665-6.375,5.665h-36.168l-0.183,104.726h62.826
		c21.809,0,39.49-17.682,39.49-39.491v-214.09C402.533,127.147,384.852,109.466,363.043,109.466L363.043,109.466z"/>
	<polygon style="fill:#FFFFFF;" points="254.542,402.53 254.725,297.808 254.277,297.808 254.277,402.53 	"/>
</g>
<path style="fill:#D1D1D1;" d="M363.043,109.466H254.277v141.741h0.269V218.59c0-37.852,23.118-58.463,56.884-58.463h27.71
	c3.543,0,6.42,2.874,6.42,6.42v28.463c0,3.546-2.874,6.42-6.416,6.42l-17.006,0.01c-18.363,0-21.921,8.725-21.921,21.533v28.238
	h40.351c3.848,0,6.83,3.358,6.375,7.173l-4.001,33.759c-0.381,3.232-3.122,5.665-6.375,5.665h-36.168l-0.183,104.726h62.826
	c21.809,0,39.49-17.682,39.49-39.491V148.956C402.533,127.147,384.852,109.466,363.043,109.466z"/>
</symbol>

<symbol id="ok" x="0px" y="0px"
	 viewBox="0 0 97.75 97.75" style="enable-background:new 0 0 97.75 97.75;" xml:space="preserve"
	>
<g>
	<g>
		<path d="M48.921,40.507c4.667-0.017,8.384-3.766,8.367-8.443c-0.017-4.679-3.742-8.402-8.411-8.406
			c-4.708-0.005-8.468,3.787-8.432,8.508C40.48,36.826,44.239,40.524,48.921,40.507z"/>
		<path d="M48.875,0C21.882,0,0,21.883,0,48.875S21.882,97.75,48.875,97.75S97.75,75.867,97.75,48.875S75.868,0,48.875,0z
			 M48.945,14.863c9.52,0.026,17.161,7.813,17.112,17.438c-0.048,9.403-7.814,17.024-17.318,16.992
			c-9.407-0.032-17.122-7.831-17.066-17.253C31.726,22.515,39.445,14.837,48.945,14.863z M68.227,56.057
			c-2.105,2.161-4.639,3.725-7.453,4.816c-2.66,1.031-5.575,1.55-8.461,1.896c0.437,0.474,0.642,0.707,0.914,0.979
			c3.916,3.937,7.851,7.854,11.754,11.802c1.33,1.346,1.607,3.014,0.875,4.577c-0.799,1.71-2.592,2.834-4.351,2.713
			c-1.114-0.077-1.983-0.63-2.754-1.407c-2.956-2.974-5.968-5.895-8.862-8.925c-0.845-0.882-1.249-0.714-1.994,0.052
			c-2.973,3.062-5.995,6.075-9.034,9.072c-1.365,1.346-2.989,1.59-4.573,0.82c-1.683-0.814-2.753-2.533-2.671-4.262
			c0.058-1.166,0.632-2.06,1.434-2.858c3.877-3.869,7.742-7.75,11.608-11.628c0.257-0.257,0.495-0.53,0.868-0.93
			c-5.273-0.551-10.028-1.849-14.099-5.032c-0.506-0.396-1.027-0.778-1.487-1.222c-1.783-1.711-1.962-3.672-0.553-5.69
			c1.207-1.728,3.231-2.19,5.336-1.197c0.408,0.191,0.796,0.433,1.168,0.689c7.586,5.213,18.008,5.356,25.624,0.233
			c0.754-0.576,1.561-1.05,2.496-1.289c1.816-0.468,3.512,0.201,4.486,1.791C69.613,52.874,69.6,54.646,68.227,56.057z"/>
	</g>
</symbol>

</svg>
<main class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-text col-9 col-sm-8 col-md-6 col-lg-4 col-xl-3" href="#">
		    <img width="48" height="48" src="/images/logo.jpeg" style="float:left" >
                    <span class="d-block col-8 col-sm-9 col-md-9 col-xl-9" style="float:right">Все о вакцинации против COVID-19 в Риддере</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="#inform" class="nav-link active" aria-current="page">Информация о вакцине</a></li>
                        <li class="nav-item"><a href="#issue" class="nav-link">Вопрос-Ответ</a></li>
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Админка</a></li>
                            @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Вход</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section bg-action">
        <div class="container bg-akciya-image akciya-height">
            <div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		    <p class="lead" style="text-align: left;">
			<h1 class="akciya-title">Вакцинируйся и выиграй автомобиль</h1>
			<div class="akciya-text">
				Если Вы еще не сделали прививку от <span class="covid-19">COVID-19</span>, сейчас самое время!
			</div>
			@livewire('front-general-statistic')
                    </p>
                    <div><button type="button" class="btn btn-primary mt-3 btn-lg" data-bs-toggle="modal" data-bs-target="#registerVaccination">

                        {{__('auth.signUpForVaccination')}}

		    </button></div>
			<div>
	                    <button type="button" class="btn btn-danger mt-3 btn-lg" data-bs-toggle="modal" data-bs-target="#alreadyVaccinated">

                        {{__('auth.alreadyVaccinated')}}

		    	    </button>
			</div>

                    <!-- Modal -->
                    <div class="modal fade" id="registerVaccination" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel"> {{__('auth.signUpForVaccination')}}</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <div class="modal-body">
                                    @livewire('open-form-btn')
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="modal fade" id="alreadyVaccinated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel"> {{__('auth.alreadyVaccinated')}}</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <div class="modal-body">
                                    @livewire('form-for-lottery')
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="modal fade" id="lotteryInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-scrollable">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel"> {{__('auth.lotteryModelTitle')}}</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <div class="modal-body">
				    <text class="text-2xl">
					<h1>Условия участия в конкурсе</h1>
						<ol>
<li>В розыгрыше автомобиля могут участвовать все жители города Риддер старше 18 лет, получившие вакцину в одной из поликлиник города (в том числе в выездных пунктах вакцинации).
<li>Участник должен указать Ф.И.О., номера мобильного телефона и место получения вакцинации.
<li>Абонентский номер должен быть зарегистрирован на участника акции в базе оператора мобильной связи.
<li>Розыгрыш состоится после завершения всеобщей вакцинации с онлайн трансляцией в социальных сетях.
<li>В акции запрещается участвовать работникам и членам семьи аппарата акима города Риддер.
</ol>
<p>
Для обеспечения прозрачности будет создана независимая общественная комиссия, которая будет отслеживать все этапы конкурса.
</p>
                                    </text>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--<div class="col-xs-12 col-md-8">
                    <img src="/images/akciya.png" width="100%" max-height="400px" class="banner" alt="cat">
                </div>-->
            </div>
        </div>
    </section>
    <section class="section" id="inform">
        <div class="container">
            <div class="titleContainer">
                <p class="h4">Информация о вакцине</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="/images/vaccine.jpg" class="banner" alt="cat">
                </div>
                <div class="col-xs-12 col-md-8">
		    <p style="text-align: left;">
<b>Вакцинация</b> — введение вакцины или анатоксина с целью создания активного специфического иммунного ответа иммунной системы организма против возбудителя инфекции.<br>
<strong>Вакцина против COVID‑19</strong> — вакцина, вызывающая формирование приобретённого иммунитета против коронавирусной инфекции COVID-19, вызываемой коронавирусом SARS-CoV-2. Из-за быстрого глобального распространения инфекции и высокой смертности разработка вакцины является критически важной задачей.
Прививать от коронавируса в РК начали с 1 февраля 2021 года. Речь идет о российской вакцине «Спутник V», которую производит Карагандинский фармацевтический комплекс (из России поставляется субстанция, а в Казахстане производят готовую форму из этой субстанции). «Спутник V» - это первая в мире зарегистрированная вакцина для профилактики коронавирусной инфекции. Ее разработали в Национальном исследовательском центре (НИЦ) эпидемиологии и микробиологии имени Николая Федоровича Гамалеи Министерства здравоохранения Российской Федерации. 
До пандемии COVID‑19 работа над разработкой вакцины против коронавирусных заболеваний, таких как тяжёлый острый респираторный синдром (SARS) и ближневосточный респираторный синдром (MERS), позволила сформировать знания о структуре и функции коронавирусов; эти знания позволили ускорить разработку различных вакцинных технологий в начале 2020 года.
Массовая вакцинация началась  в марте 2021 года.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
       @livewire('front-reminder-vaccine')
    </section>
    <section class="section" id="issue">
        <div class="container">
            <div class="titleContainer">
                <p class="h4">Ответы на вопросы о вакцинации</p>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Вопрос №1: Почему вакцину разработали так быстро?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
В период пандемии возникла острая необходимость в данной вакцине. Разработка вакцин от COVID-19 проходила в условиях крайней срочности на фоне массового заражения и гибели людей от коронавирусной инфекции во всем мире. Кроме того, фармацевтические компании вложили значительные ресурсы в быструю разработку вакцины из-за глобальности проблемы. Но скорость, с которой она была произведена, совсем не означает, что компании обошли стороной протоколы безопасности.
Что касается конкретно вакцины «Спутник V», то в НИЦЭМ им. Гамалеи, где она была создана, опирались на предыдущие разработки. Еще до пандемии Центр открыл технологическую платформу для создания вакцин и препаратов против РНК-содержащих оболочечных вирусов, к которым относится и коронавирус SARS-CoV-2.
			</div>
		</div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Вопрос №2: Какие есть побочные эффекты?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
Неблагоприятные проявления, характерные для применения вакцины, бывают преимущественно легкой или средней степени выраженности, могут развиваться в первые-вторые сутки после вакцинации и разрешаются в течение 3-х последующих дней.
Чаще других могут развиться кратковременные общие (непродолжительный гриппоподобный синдром, характеризующийся ознобом, повышением температуры тела, артралгией, миалгией, астенией, общим недомоганием, головной болью) и местные (болезненность в месте инъекции, гиперемия, отечность) реакции.
			</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Вопрос №3: Можно ли отказаться от вакцины?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
Вакцинация в Казахстане является добровольной. Согласно 77 статье Кодекса РК «О здоровье народа и системе здравоохранения», любая медицинская процедура, в том числе и вакцинация, проводится только с информированного согласия прививаемого. Административной или уголовной ответственности за отказ от вакцинации в Казахстане не предусмотрено, любые притеснения будут являться незаконными.
			</div>
                    </div>
		</div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Вопрос №4: Почему прививку нужно обязательно получить в два этапа?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
Вакцину от коронавируса следует вводить в два этапа с интервалом в 21 день. Первая доза дает непродолжительный защитный эффект за счет выработки небольшого количества антител. Вторая доза усиливает и закрепляет действие первой, количество антител в организме человека вырастает.
			</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Вопрос №5: Что такое электронный паспорт вакцинации?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
Электронный паспорт вакцинации - это документ, который удостоверяет получение профилактических прививок. Он будет содержать данные о том, какие препараты получил человек, в каких дозах, в какие даты, а также были ли проявления после прививки.Как только человек получит прививку от коронавирусной инфекции, сведения об этом будут доступны в приложении eGov mobile.
			</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Вопрос №6: Кому следует воздержаться от вакцинации?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">
				<ol>
<li>- гиперчувствительность к какому-либо компоненту вакцины;
<li>- тяжелые аллергические реакции в анамнезе (к ним относятся: отек Квинке, анафилактический шок);
<li>- острые инфекционные и неинфекционные заболевания - вакцинация проводится через 2-4 недели после выздоровления. При нетяжелых ОРВИ, острых инфекционных заболеваниях ЖКТ прививку можно делать после нормализации температуры;
<li>- беременность и период грудного вскармливания;
<li>- химиотерапия у онкобольных;
<li>- возраст до 18 лет.
				</ol>
			</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="section bg-light">
        <div class="d-flex justify-content-around">
            <div class="footerBox">
                <div class="boxTitle">
                    <p>Телефоны поликлиник:</p>
                </div>
		<div class="boxContainer">
                    <div class="itemContact d-flex">
                        <p class="contactText">Первая городская поликлиника г.Риддер, ул. Назарбаева, 35: 8 (72336) 4-46-58</p>
                    </div>
                    <div class="itemContact d-flex">
                        <p class="contactText">Поликлиника 7 район г.Риддер, ул. Толстого, 28: 8(72336) 7-57-00</p>
                    </div>
                    <div class="itemContact d-flex">
                        <p class="contactText">Поликлиника 4 район г.Риддер, ул. Буровая, 6: 8(72336) 3-09-09</p>
                    </div>
                    <div class="itemContact d-flex">
                        <p class="contactText">Консультативно-диагностический центр г.Риддер, пр.Гагарина 10: 8(72336) 4-20-67</p>
                    </div>
                </div>
            </div>
            <div class="footerBox">
                <div class="boxTitle">
                    <p>Социальные сети:</p>
                </div>
                <div class="boxContainer d-flex justify-content-between">
                    <div class="itemSocial">
			<div class="socialIcon">
			    <a href="https://instagram.com/akimatridder" target="_blank">
	                            <svg class="bi me-2" width="32" height="32"><use xlink:href="#instagram"/></svg>
			    </a>
                        </div>
                    </div>
                    <div class="itemSocial">
                        <div class="socialIcon">
			    <a href="https://www.facebook.com/profile.php?id=100009764318178" target="_blank">
                            	<svg class="bi me-2" width="32" height="32"><use xlink:href="#facebook"/></svg>
			    </a>
                        </div>
                    </div>
                    <div class="itemSocial">
                        <div class="socialIcon">
			    <a href="https://ok.ru/profile/588834059008" target="_blank">
                            	<svg class="bi me-2" width="32" height="32"><use xlink:href="#ok"/></svg>
			    </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</main>
@livewireScripts

<script>
    window.addEventListener('closeModal', event => {
        $('#createSuccess').removeAttr('hidden');
        setTimeout(() => {
            $('#registerVaccination').modal('hide');
            $('#createSuccess').attr('hidden',true);
        }, 500)
    })
    window.addEventListener('closeModalLottery', event => {
        $('#createSuccessLottery').removeAttr('hidden');
        $('#approvedInformed').prop('checked', false)
        setTimeout(() => {
            $('#alreadyVaccinated').modal('hide');
            $('#createSuccessLottery').attr('hidden',true);
        }, 500)
    })
</script>


</body>

</html>
