@extends('portfolio.layout')

@section('title', 'Noel Gaddi - Full Stack Developer Portfolio')

@section('content')
<!-- Hero Section -->
<section id="about" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-5xl font-bold mb-4">Noel J. Gaddi</h1>
            <p class="text-xl mb-6 text-blue-100">Future Full-Stack Developer</p>
            <p class="text-lg mb-6 leading-relaxed">
                I'm passionate about solving complex problems through code. Every project is an opportunity to learn and create something meaningful. Building beautiful, functional applications is my craft.
            </p>
            <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                Get In Touch
            </a>
        </div>
        <div class="text-center">
            <div class="w-64 h-64 bg-blue-700 rounded-full mx-auto flex items-center justify-center">
                <i class="fas fa-user text-white text-6xl"></i>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Technical Skills</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Frontend -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-code text-3xl text-blue-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">HTML5</h3>
                <p class="text-sm text-gray-600">Markup & Structure</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">85%</p>
            </div>

            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-palette text-3xl text-yellow-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">CSS3</h3>
                <p class="text-sm text-gray-600">Styling & Design</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-yellow-600 h-2 rounded-full" style="width: 80%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">80%</p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-square-js text-3xl text-green-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">JavaScript</h3>
                <p class="text-sm text-gray-600">Programming Language</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">75%</p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-cube text-3xl text-purple-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">React</h3>
                <p class="text-sm text-gray-600">JavaScript Library</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-purple-600 h-2 rounded-full" style="width: 65%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">65%</p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-leaf text-3xl text-green-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">Vue.js</h3>
                <p class="text-sm text-gray-600">JavaScript Framework</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">70%</p>
            </div>

            <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-server text-3xl text-red-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">Node.js</h3>
                <p class="text-sm text-gray-600">Runtime Environment</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-red-600 h-2 rounded-full" style="width: 70%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">70%</p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-rocket text-3xl text-blue-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">Next.js</h3>
                <p class="text-sm text-gray-600">React Framework</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">65%</p>
            </div>

            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-lg hover:shadow-lg transition text-center">
                <i class="fas fa-database text-3xl text-indigo-600 mb-3"></i>
                <h3 class="font-semibold text-lg mb-2">PHP</h3>
                <p class="text-sm text-gray-600">Server Language</p>
                <div class="mt-4 bg-gray-300 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 80%"></div>
                </div>
                <p class="text-xs text-gray-600 mt-2">80%</p>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Educational Attainment</h2>
        <div class="space-y-6">
            <!-- Tertiary -->
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600 hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-600">Bachelor of Science</h3>
                        <p class="text-lg text-gray-700">University of the Cordillera</p>
                        <p class="text-sm text-gray-500">Computer Science</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-blue-600">Expected: 2026</p>
                        <p class="text-sm text-gray-500">In Progress</p>
                    </div>
                </div>
            </div>

            <!-- Secondary -->
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-600 hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-green-600">Senior High School</h3>
                        <p class="text-lg text-gray-700">Saint Louis School Center</p>
                        <p class="text-sm text-gray-500">GAS (General Academic Strand)</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-600">2022</p>
                        <p class="text-sm text-gray-500">Completed</p>
                    </div>
                </div>
            </div>

            <!-- Primary -->
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-600 hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-purple-600">Elementary</h3>
                        <p class="text-lg text-gray-700">Josefa Carino Elementary School</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-purple-600">2016</p>
                        <p class="text-sm text-gray-500">Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Featured Projects</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- ENT Clinic Project -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-48 flex items-center justify-center">
                    <i class="fas fa-hospital text-white text-6xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">Offline ENT Clinic Patient Record Management</h3>
                    <p class="text-gray-600 mb-4">
                        A comprehensive desktop application that enables healthcare professionals to efficiently manage and track patient records. Features include patient information management, appointment scheduling, medical history tracking, and daily statistics visualization.
                    </p>
                    <div class="flex gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Desktop App</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Patient Management</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            View Details
                        </button>
                        <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300 transition">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Coming Soon Project -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition flex items-center justify-center min-h-80">
                <div class="text-center">
                    <i class="fas fa-rocket text-gray-400 text-6xl mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-700 mb-2">More Projects Coming Soon</h3>
                    <p class="text-gray-600">Currently working on exciting new projects!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Get In Touch</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-envelope text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-300">Email</p>
                        <a href="mailto:noeljgaddi@gmail.com" class="text-lg font-semibold hover:text-blue-400 transition">
                            noeljgaddi@gmail.com
                        </a>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-phone text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-300">Phone</p>
                        <a href="tel:09319610078" class="text-lg font-semibold hover:text-blue-400 transition">
                            +63 931 961 0078
                        </a>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-700">
                    <p class="text-sm text-gray-300 mb-4">Follow me on social media:</p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/noel.gaddi.773" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-facebook text-white"></i>
                        </a>
                        <a href="https://x.com/NoelGaddi" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="https://www.instagram.com/nuwil._/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/noel-jugo-gaddi-391a29333/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-linkedin text-white"></i>
                        </a>
                        <a href="https://github.com/Nuwil" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-github text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-800 p-8 rounded-lg">
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold mb-2">Full Name</label>
                        <input type="text" placeholder="Your name" class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Email Address</label>
                        <input type="email" placeholder="your@email.com" class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Message</label>
                        <textarea placeholder="Your message..." rows="4" class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
