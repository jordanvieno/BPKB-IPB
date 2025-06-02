@extends('layouts.app')

@section('content')
<!-- ===== INTRO SECTION ===== -->
<section id="intro" class="flex justify-center pt-[100px] pb-10 px-5 bg-[#e6efff]">
  <div class="bg-white rounded-lg shadow-md max-w-5xl w-full flex items-center p-8 gap-8">
    <div class="flex-1">
      <p class="text-sm font-semibold text-gray-600 mb-1">IPB University</p>
      <h1 class="text-[5rem] font-bold text-[#2D55AC] mb-2">BPKB</h1>
      <h2 class="font-semibold text-[#2D55AC] mb-4">Badan Pengembangan Kampus Berkelanjutan</h2>
      <p class="text-[#2D55AC] text-base leading-relaxed">
        BPKB bertugas pada perencanaan dan pengembangan kampus berkelanjutan untuk meningkatkan reputasi IPB dalam pencapaian tujuan pembangunan berkelanjutan, serta memperjelas arah IPB dalam mewujudkan socio-technopreneur university sesuai Rencana Jangka Panjang IPB.
      </p>
    </div>
    <div class="flex-1">
      <img src="{{ asset('asset/ipb foto.png') }}" alt="IPB Building" class="rounded-lg shadow-md object-cover w-full h-[250px]" />
    </div>
  </div>
</section>

<!-- ===== FUNGSI SECTION ===== -->
<section id="fungsi" class="relative py-12 px-10 bg-[#e6efff] flex justify-center">
  <div class="relative max-w-5xl w-full flex items-center">
    <div class="absolute left-0 top-0 bottom-0 w-16 bg-[#0B1E7B] rounded-l-3xl flex flex-col justify-center space-y-4 p-2">
      <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-90"></span>
      <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-80"></span>
      <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-70"></span>
      <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-60"></span>
      <span class="block w-4 h-4 bg-[#0B1E7B] rounded-full opacity-50"></span>
    </div>
    <div class="bg-white rounded-lg shadow-md p-8 ml-12 w-full max-w-3xl">
      <h2 class="text-center text-[#0B1E7B] font-semibold text-2xl mb-6">Fungsi BPKB</h2>
      <ul class="list-disc list-inside text-[#0B1E7B] text-base space-y-3">
        <li>Koordinasi penyusun Rencana Induk Pengembangan IPB mencakup infrastruktur, bidang akademik, dan nonakademik dengan berbasiskan manajemen risiko</li>
        <li>Koordinasi penyusun Rencana Tata Ruang (RTR) IPB University Town yang meliputi areal kampus dan sekitarnya</li>
        <li>Pemberian arahan strategis dan desain pengembangan program kampus berkelanjutan dan pencapaian Sustainable Development Goals untuk bidang akademik, riset, pengabdian masyarakat, dan operasional kampus</li>
        <li>Koordinasi peningkatan rekognisi terhadap IPB dan reputasi dalam pencapaian Sustainable Development Goals dan sebagai kampus berkelanjutan di tingkat nasional dan global</li>
        <li>Pemonitoran dan evaluasi terhadap pembangunan sarana fisik dan non fisik untuk mewujudkan kampus keberlanjutan</li>
        <li>Koordinasi penyusunan Rencana Strategis IPB</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== OUR TEAM SECTION ===== -->
<section id="our-team" class="py-16 bg-[#0B1E7B] flex justify-center">
  <div class="bg-white rounded-lg shadow-md max-w-5xl w-full p-6">
    <h2 class="text-center text-[#0B1E7B] font-bold text-3xl mb-6 uppercase">OUR TEAM</h2>
    <img src="{{ asset('asset/tim-bpkb.jpg') }}" alt="Team Photo" class="rounded-lg w-full object-cover" />
  </div>
</section>

<!-- ===== STRUKTUR ORGANISASI SECTION ===== -->
<section id="struktur" class="bg-[#e6efff] py-16 px-4">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-extrabold text-[#0B1E7B] mb-10 uppercase">STRUKTUR ORGANISASI</h2>
    <p class="text-[#0B1E7B] mb-8 text-lg">
      Tim BPKB IPB terdiri dari berbagai unit yang saling berkolaborasi demi pengembangan kampus berkelanjutan.
    </p>

    <div class="flex justify-center mb-10 relative">
      <div class="bg-white rounded-lg shadow-md border border-gray-300 max-w-xs w-full p-6 text-center z-10">
        <h3 class="font-semibold text-lg mb-2">Ketua BPKB</h3>
        <p class="text-gray-700">Dr. Ir. Ibnul Qayim</p>
      </div>
      <div class="absolute top-full left-1/2 transform -translate-x-1/2 h-10 w-px bg-gray-300"></div>
    </div>

    <div class="flex justify-center space-x-6 relative">
      <div class="flex flex-col items-center space-y-6">
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Wakil Ketua Pengembangan Infrastruktur</h3>
          <p class="text-gray-700">Dr. Heriansyah Putra</p>
        </div>
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Asisten Pengembangan Infrastruktur</h3>
          <p class="text-gray-700">Dr. Anisa Dwi Utami</p>
        </div>
      </div>
      <div class="flex flex-col items-center space-y-6">
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Wakil Reputasi</h3>
          <p class="text-gray-700">Dr. Rina Mardiana</p>
        </div>
        <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
          <h3 class="font-semibold text-lg mb-2">Asisten Pengembangan Reputasi</h3>
          <p class="text-gray-700">Fifi Gus Dwiyanti</p>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
        <h3 class="font-semibold text-lg mb-2">Supervisor Administrasi</h3>
        <p class="text-gray-700">Ade Iskandar</p>
      </div>
      <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
        <h3 class="font-semibold text-lg mb-2">Sekretaris</h3>
        <p class="text-gray-700 whitespace-pre-line">Naro Jihadi
Ridwan
Siti Aminah
Anwar</p>
      </div>
      <div class="bg-white rounded-lg shadow-md border border-gray-300 w-56 p-6 text-center">
        <h3 class="font-semibold text-lg mb-2">Asisten Peneliti</h3>
        <p class="text-gray-700 whitespace-pre-line">Windi Mayang
Sari
Hana
Khoirunisa
Aliyah Baida
Zahra Wajdini
Jessica
Veronica
Zayyaan
Nabiila</p>
      </div>
    </div>
  </div>
</section>
@endsection
