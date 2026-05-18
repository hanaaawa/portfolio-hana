<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Farhana Wahidiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 font-sans scroll-smooth">

    <nav class="fixed w-full top-0 z-50 bg-slate-950/40 backdrop-blur-md border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-20">
                <div class="text-2xl font-black tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-emerald-400">
                    Portfolio
                </div>
                <div class="hidden md:flex space-x-8 text-sm font-semibold tracking-wide uppercase">
                    <a href="#home" class="text-teal-400 hover:text-teal-300 transition duration-300">Home</a>
                    <a href="#about" class="text-slate-300 hover:text-teal-400 transition duration-300">About Me</a>
                    <a href="#projects" class="text-slate-300 hover:text-teal-400 transition duration-300">Projects</a>
                    <a href="#contact" class="text-slate-300 hover:text-teal-400 transition duration-300">Contact</a>
                </div>
                <div class="hidden md:flex">
                    <a href="/admin" class="border border-teal-500/50 text-teal-400 px-5 py-2 rounded-full text-xs font-bold tracking-wider uppercase hover:bg-teal-500 hover:text-slate-950 transition duration-300">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden bg-slate-950">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=2070" alt="Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-slate-950/80 to-slate-950"></div>
        </div>

        <div class="relative z-10 text-center max-w-4xl mx-auto px-6 mt-16">
            <span class="text-teal-400 font-bold tracking-widest uppercase text-xs md:text-sm bg-teal-500/10 px-4 py-2 rounded-full border border-teal-500/20">
                Sistem Informasi Portofolio Personal
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mt-6 mb-4">
                FARHANA WAHIDIYAH
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto font-light leading-relaxed mb-10">
                Mahasiswa Sistem Informasi dengan pengalaman kepemimpinan dalam organisasi mahasiswa dan inisiatif kewirausahaan, serta memiliki minat besar dalam membangun komunitas berbasis teknologi.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#projects" class="bg-gradient-to-r from-teal-500 to-emerald-500 text-slate-950 px-8 py-3.5 rounded-full font-bold text-sm tracking-wide shadow-lg shadow-teal-500/20 hover:scale-105 transition duration-300">
                    Lihat Proyek Saya
                </a>
                <a href="#about" class="bg-slate-900 border border-slate-700 text-slate-300 px-8 py-3.5 rounded-full font-bold text-sm tracking-wide hover:bg-slate-800 transition duration-300">
                    Kenali Saya
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 bg-slate-950 border-t border-slate-900">
        <div class="max-w-5xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">About Me</h2>
                <div class="h-1 w-12 bg-teal-500 mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-12 gap-12 items-center">
                <div class="md:col-span-5 relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-teal-500 to-emerald-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-500"></div>
                    <img src="{{ asset('hana.jpeg') }}" alt="Farhana Wahidiyah" class="relative z-10 w-full h-80 object-cover rounded-2xl border border-slate-800 shadow-2xl">
                </div>
                <div class="md:col-span-7 space-y-6">
                    <h3 class="text-2xl font-bold text-teal-400">Tentang Saya</h3>
                    <p class="text-slate-400 leading-relaxed font-light">
                        Saya adalah mahasiswa Sistem Informasi yang memiliki ketertarikan besar pada teknologi dan bagaimana teknologi dapat memberikan dampak nyata bagi kehidupan. Bagi saya, teknologi bukan hanya tentang sistem, tetapi tentang solusi. Melalui pengalaman di organisasi dan berbagai proyek teknologi, saya belajar bagaimana menggabungkan kemampuan teknis dengan kepemimpinan untuk menciptakan sesuatu yang bermanfaat. 
                        Saya juga memiliki ketertarikan dalam pemanfaatan AI untuk meningkatkan produktivitas dan mendukung inovasi digital. Ke depannya, saya ingin terus berkembang dan berkontribusi dalam menciptakan solusi teknologi yang tidak hanya inovatif, tetapi juga berdampak bagi masyarakat.
                    </p>
                    
                    <div class="pt-4">
                        <h4 class="text-sm font-semibold tracking-wider text-slate-300 uppercase mb-3">Keahlian & Teknologi (Tech Stack):</h4>
                        <div class="flex flex-wrap gap-2 text-xs font-semibold tracking-wide">
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">Laravel 11</span>
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">Filament PHP v3</span>
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">Tailwind CSS</span>
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">Docker Sail</span>
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">MySQL Database</span>
                            <span class="bg-slate-900 text-teal-400 px-3 py-1.5 rounded-md border border-slate-800">API Integration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 bg-slate-900 border-t border-slate-950">
        <div class="max-w-5xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">My Projects</h2>
                <p class="text-slate-400 mt-2 font-light text-sm">Laporan Awal & Progress Analisis Project Akhir Secara Dinamis</p>
                <div class="h-1 w-12 bg-teal-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @php
                    // Mencegah website crash jika tabel belum dimigrasi
                    try {
                        $projects = \App\Models\Project::all();
                    } catch (\Exception $e) {
                        $projects = [];
                    }
                @endphp

                @forelse($projects as $project)
                <div class="bg-slate-950 p-8 rounded-2xl border border-slate-800/60 hover:border-teal-500/30 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-xs px-3 py-1 rounded-full font-medium tracking-wide 
                                {{ $project->status == 'Selesai' ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20' : ($project->status == 'Progress' ? 'bg-sky-500/10 text-sky-400 border border-sky-500/20' : 'bg-amber-500/10 text-amber-400 border border-amber-500/20') }}">
                                {{ $project->status }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                        <p class="text-sm text-slate-400 font-light leading-relaxed mb-4">{{ $project->description }}</p>
                        
                        <div class="bg-slate-900/50 p-4 rounded-xl border border-slate-800/40 mb-4">
                            <h4 class="text-xs font-semibold text-teal-400 uppercase tracking-wider mb-1">Analisis Masalah & Kebutuhan:</h4>
                            <p class="text-xs text-slate-400 font-light leading-relaxed">{{ $project->problem_analysis }}</p>
                        </div>

                        @if($project->diagram_path)
                        <div class="mb-4">
                            <h4 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Rencana Perancangan (Diagram):</h4>
                            <img src="{{ asset('storage/' . $project->diagram_path) }}" alt="Diagram Perancangan" class="w-full h-auto rounded-lg border border-slate-800 object-cover max-h-48">
                        </div>
                        @endif
                    </div>
                    <div>
                        <div class="border-t border-slate-900 pt-4 mt-2 flex flex-wrap gap-2 text-[11px] text-teal-400 font-mono">
                            <span>#{{ str_replace(', ', ' #', $project->tech_stack) }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-2 text-center py-12 text-slate-500 font-light text-sm">
                    Belum ada data laporan project akhir. Silakan isi datanya terlebih dahulu melalui Panel Admin Filament.
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-slate-950 border-t border-slate-900">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Contact Me</h2>
            <p class="text-slate-400 mt-2 font-light text-sm max-w-md mx-auto">Kirimkan catatan review, saran, atau penilaian dosen langsung ke database.</p>
            <div class="h-1 w-12 bg-teal-500 mx-auto mt-4 rounded-full mb-12"></div>

            @if(session('success'))
                <div class="max-w-xl mx-auto mb-6 p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-sm text-left">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/contact" method="POST" class="max-w-xl mx-auto space-y-4 text-left">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Nama Pengirim</label>
                        <input type="text" name="name" required placeholder="Nama Anda" class="w-full p-4 bg-slate-900 border border-slate-800 rounded-xl outline-none focus:border-teal-500 text-slate-100 placeholder-slate-600 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Email</label>
                        <input type="email" name="email" required placeholder="nama@email.com" class="w-full p-4 bg-slate-900 border border-slate-800 rounded-xl outline-none focus:border-teal-500 text-slate-100 placeholder-slate-600 transition">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Pesan / Masukan</label>
                    <textarea name="message" required placeholder="Tuliskan pesan atau catatan review Anda di sini..." rows="5" class="w-full p-4 bg-slate-900 border border-slate-800 rounded-xl outline-none focus:border-teal-500 text-slate-100 placeholder-slate-600 transition"></textarea>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-teal-500 to-emerald-500 text-slate-950 font-bold py-4 rounded-xl tracking-wide uppercase shadow-lg shadow-teal-500/10 hover:opacity-90 transition duration-300">
                    Kirim Pesan Portofolio
                </button>
            </form>
        </div>
    </section>

    <footer class="bg-slate-950 border-t border-slate-900/60 py-8 text-center text-xs tracking-wider text-slate-500 font-mono">
        &copy; 2026 FARHANA WAHIDIYAH &bull; UTS PEMROGRAMAN WEB &bull; ALL RIGHTS RESERVED.
    </footer>

</body>
</html>