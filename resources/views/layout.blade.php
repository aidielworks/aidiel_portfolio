<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>el Deraz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-poppins" x-data>
    <div class="min-h-screen mx-auto bg-gray-100">
        {{--Nav Bar--}}
        <div class="px-12 h-20 flex items-center justify-between items-center shadow-lg">
            <img src="#" alt="logo">
            <ul class="flex flex-row gap-5">
                <li>
                    <a href="#about_me" class="transition duration-300 hover:text-gray-500">About</a>
                </li>
                <li>
                    <a href="#experience" class="transition duration-300 hover:text-gray-500">Experience</a>
                </li>
                <li>
                    <a href="#work" class="transition duration-300 hover:text-gray-500">Work</a>
                </li>
                <li>
                    <a href="#contact_me" class="transition duration-300 hover:text-gray-500">Contact</a>
                </li>
            </ul>
        </div>
        <div class="px-72">
            <div class="h-[calc(100vh-48px-48px)] flex justify-center">
                <div class="mt-32">
                    <p class="mb-3 text-2xl font-fira pl-2 duration-1000 opacity-0 translate-y-full" x-intersect="$el.classList.add('opacity-100', 'translate-y-0')">Hi, my name is</p>
                    <p class="mb-3 text-9xl font-roboto font-bold duration-1000 opacity-0 translate-y-full" x-intersect="$el.classList.add('opacity-100', 'translate-y-0')">Aidiel Daniel</p>
                    <p class="mb-3 text-7xl font-roboto font-thin duration-1000 opacity-0 translate-y-full" x-intersect="$el.classList.add('opacity-100', 'translate-y-0')">Crafting for the Web</p>
                    <p class="mt-6 duration-1000 opacity-0 translate-y-full" x-intersect="$el.classList.add('opacity-100', 'translate-y-0')">
                        I'm a software engineer specialized in TALL Stack developer based in Malaysia.
                    </p>
                </div>
            </div>
            <div class="pt-12 h-screen" id="about_me">
                <p class="text-5xl mb-5">About Me</p>
                <div class="flex flex-row-reverse gap-4 ">
                    <img class="w-96 h-96 rounded-lg" src="{{asset('img/aidiel.jpg')}}" alt="aidiel.png">
                    <div>
                        <p class="mb-4">
                            Hi, my name is Aidiel Daniel. Can call me el for short. I enjoy build any stuff, so building anything in the internet is one it.
                        </p>
                        <p class="mb-4">
                            I mainly doing <span class="font-bold">Back-End development</span>. I pick up Laravel since 2021 and found out there is another tech that goes well with Laravel. Hence, I found TALL stack tech.
                        </p>
                        <p class="mb-4">
                            In my years of developing web app, I pick up some other tech like flutter. I also involve in <span class="font-bold">developing a multi-tenancy system</span> with implementation of <span class="font-bold">microservice</span> and <span class="font-bold">integrate with third party API</span>.
                        </p>
                        <p class="mb-4">
                            Moving forward I would like to explore more tech and can bring more value to the community.
                        </p>
                        <p class="mb-4">Here are a few technologies I’ve been working with recently:</p>
                        <ul class="flex flex-wrap gap-2">
                            <li class="px-4 py-1 border-2 border-gray-400 rounded-full">Laravel</li>
                            <li class="px-4 py-1 border-2 border-gray-400 rounded-full">Livewire</li>
                            <li class="px-4 py-1 border-2 border-gray-400 rounded-full">Alpine Js</li>
                            <li class="px-4 py-1 border-2 border-gray-400 rounded-full">Flutter</li>
                            <li class="px-4 py-1 border-2 border-gray-400 rounded-full">JavaScript (ES6+)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-12 px-48 h-screen" id="experience">
                <p class="text-5xl">Experience</p>
                <div class="py-8">
                    <ol>
                        <li class="border-l-2 border-purple-600">
                            <div class="md:flex flex-start">
                                <div class="bg-purple-600 text-white p-2 w-8 h-8 rounded-full -ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school w-6 h-6 -ml-1 -mt-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                    </svg>
                                </div>
                                <div class="p-6 ml-6 mb-10 rounded-lg bg-gray-100 transition duration-300 hover:shadow-lg">
                                    <span class="font-bold text-lg">Student</span> @ <a href="https://miit.unikl.edu.my/" target="_blank" class="relative after:bg-black after:absolute after:h-0.5 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer">UniKL MIIT</a>
                                    <p class="font-fira">July 2019 - January 2021</p>
                                    <p class="mt-6">Graduate of Bachelor in Information Technology Hons. Software Engineering.</p>
                                </div>
                            </div>
                        </li>
                        <li class="border-l-2 border-blue-600">
                            <div class="md:flex flex-start">
                                <div class="bg-blue-600 text-white p-2 w-8 h-8 rounded-full -ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-briefcase w-6 h-6 -ml-1 -mt-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                        <path d="M12 12l0 .01"></path>
                                        <path d="M3 13a20 20 0 0 0 18 0"></path>
                                    </svg>
                                </div>
                                <div class="p-6 ml-6 mb-10 rounded-lg bg-gray-100 transition duration-300 hover:shadow-lg">
                                    <span class="font-bold text-lg">Software Developer 1</span> @ <a href="https://vimigoapp.com" target="_blank" class="relative after:bg-black after:absolute after:h-0.5 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer">vimigo</a>
                                    <p class="font-fira">Sept 2022 - Present</p>
                                    <ul class="pl-6 mt-6 list-disc">
                                        <li>Developed and maintained back-end of product mainly using Laravel.</li>
                                        <li>Involved in brainstorming and implementation of new product features and direction.</li>
                                        <li>Built and delivered technical solutions according to stakeholder business requirements.</li>
                                        <li>Integrate product with third party like payment gateway.</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="pt-12 h-screen" id="work">
                <div >
                    <p class="text-5xl">Some Things I've Build </p>

                </div>
            </div>
            <div class="pt-12 h-screen" id="contact_me">
                <p class="text-5xl">Holler Me!</p>

            </div>
        </div>
        <div class="fixed z-90 bottom-0 left-12 flex flex-col gap-6 items-center">
            <a href="#" class="transition duration-300 hover:scale-125 hover:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                    <path d="M8 11l0 5"></path>
                    <path d="M8 8l0 .01"></path>
                    <path d="M12 16l0 -5"></path>
                    <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                </svg>
            </a>
            <a href="#" class="transition duration-300 hover:scale-125 hover:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" stroke-width="0" fill="currentColor"></path>
                </svg>
            </a>
            <a href="#" class="transition duration-300 hover:scale-125 hover:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path>
                    <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path>
                </svg>
            </a>
            <div class="h-32 w-0.5 bg-black"></div>
        </div>
        <footer class="p-12 text-center font-fira">
            Design & Build by Aidiel Daniel
        </footer>

    </div>
</body>
</html>
