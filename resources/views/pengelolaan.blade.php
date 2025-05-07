@extends('layouts.app')
    @stack('scripts')
</body>


@section('title', 'Pengelolaan')

@section('content')
<style>
body {
    margin: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-image: url('sidoarjo.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: #333;
}
header {
    background-color: #037509;
    color: white;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
header h1 {
    margin: 0;
    font-size: 1.5rem;
}
.container {
    max-width: 1100px;
    margin: 2rem auto;
    background-color: white;
    padding: 1rem 2rem;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.news-item {
    display: flex;
    gap: 1rem;
    border-bottom: 1px solid #ddd;
    padding: 1rem 0;
}
.news-item:last-child {
    border-bottom: none;
}
.news-image {
    flex-shrink: 0;
    width: 180px;
    height: 120px;
    background-color: #ccc;
    border-radius: 4px;
    object-fit: cover;
}
.news-content {
    flex-grow: 1;
}
.news-title {
    margin: 0 0 0.5rem 0;
    font-size: 1.25rem;
    color: #000000;
}
.news-summary {
    margin: 0;
    font-size: 1rem;
    line-height: 1.4;
}

</style>
<header>
    <h1 >Pengelolaan</h1>
</header>
<div id="welcome-section">
<button id="modal-open" style="display:block; margin: 1rem auto; padding: 0.5rem 1rem; font-size:1rem; cursor:pointer;">Open</button>
</div>
<div class="container">
<div class="news-item">
    <img src="{{ asset('storage\images\banjir.jpg') }}" alt="Berita 1" class="news-image" />
    <div class="news-content">
        <h2 class="news-title">Banjir</h2>
        <p class="news-summary">Akibat Curah hujan yang tinggi dan kurangnya daerah resapan beberapa daerah di sidaorjo terdampak Banjir</p>
        <a href="https://www.detik.com/tag/banjir-di-sidoarjo">Baca Berita banjir</a>
    </div>
</div>
<div class="news-item">
    <img src="{{ asset('storage\images\puting beliung.jpg') }}" alt="Berita 2" class="news-image" />
    <div class="news-content">
        <h2 class="news-title">Puting Beliung</h2>
        <p class="news-summary">Pada 4 April 2025 Puting Beliung menerpa sebuah desa di daerah Buduran </p>
        <a href="https://radarsidoarjo.jawapos.com/kota-delta/855837486/angin-puting-beliung-terjang-sedati-sidoarjo-puluhan-rumah-rusak">Baca Berita puting beliung</a>
    </div>
</div>
<div class="news-item">
    <img src="{{ asset('storage\images\tanah longsor.jpg') }}" alt="Berita 3" class="news-image" />
    <div class="news-content">
        <h2 class="news-title">Tanah longsor</h2>
        <p class="news-summary">Tanah Longsor terjadi di kecamatan krian pada 25 Maret 2024 </p>
        <a href="https://regional.kompas.com/read/2025/04/04/063201378/warga-sidoarjo-yang-tewas-dalam-longsor-di-jalur-pacet-cangar-dievakuasi">Baca Berita Tanah longsor</a>
    </div>
</div>
</div>

<div id="modal" class="modal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.5);">
<div class="modal-content" style="background-color:white; margin:15% auto; padding:20px; border-radius:5px; width:80%; max-width:500px; position:relative;">
    <span id="modal-close" class="modal-close" style="position:absolute; top:10px; right:15px; font-size:1.5rem; font-weight:bold; cursor:pointer;">&times;</span>
    <p>This is a pop-up modal!</p>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const modalOpenBtn = document.getElementById('modal-open');
      const modal = document.getElementById('modal');
      const modalCloseBtn = document.getElementById('modal-close');
    
      if (modalOpenBtn && modal && modalCloseBtn) {
        modalOpenBtn.addEventListener('click', () => {
          modal.style.display = 'block';
        });
    
        modalCloseBtn.addEventListener('click', () => {
          modal.style.display = 'none';
        });
    
        window.addEventListener('click', (event) => {
          if (event.target === modal) {
            modal.style.display = 'none';
          }
        });
      }
    });
</script>

@endsection
