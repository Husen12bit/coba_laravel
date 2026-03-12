@extends('layouts.app')

@section('title', 'Home - Toko Plastik Putra Agata')

@section('content')
<div class="hero-section" style="background: #f4f4f4; padding: 40px 20px; text-align: center; border-bottom: 2px solid #ddd;">
    <h1>Selamat Datang di Toko Plastik Putra Agata</h1>
    <p>Solusi terlengkap untuk kebutuhan kemasan UMKM, rumah tangga, dan industri.</p>
</div>

<div class="main-features" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px;">
    <div class="card" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
        <h3>🛍️ Kantong Plastik</h3>
        <p>Tersedia berbagai ukuran HD, PE, PP, dan plastik kresek ramah lingkungan dengan berbagai warna.</p>
    </div>

    <div class="card" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
        <h3>🍱 Kemasan Makanan</h3>
        <p>Thinwall, Styrofoam, Paper Rice Box, dan Cup Minuman berbagai ukuran untuk usaha kuliner Anda.</p>
    </div>

    <div class="card" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
        <h3>📦 Perlengkapan Packing</h3>
        <p>Lakban, Bubble Wrap, Stretch Film, dan tali rafia untuk memastikan paket Anda aman sampai tujuan.</p>
    </div>
</div>

<div class="promo-banner" style="margin-top: 40px; padding: 20px; background: #333; color: white; border-radius: 8px; text-align: center;">
    <h2>Promo Grosir Bulan Ini!</h2>
    <p>Dapatkan potongan harga hingga <strong>10%</strong> untuk pembelian minimal 1 bal plastik kresek jenis apa saja.</p>
    <a href="/contact" style="display: inline-block; margin-top: 10px; padding: 10px 20px; background: #fff; color: #333; text-decoration: none; font-weight: bold; border-radius: 5px;">Hubungi Admin Sekarang</a>
</div>

<div class="why-us" style="margin-top: 40px;">
    <h2>Mengapa Memilih Kami?</h2>
    <ul>
        <li><strong>Harga Bersaing:</strong> Langsung dari tangan pertama (distributor).</li>
        <li><strong>Stok Selalu Ready:</strong> Tidak perlu khawatir kehabisan stok untuk usaha Anda.</li>
        <li><strong>Pengiriman Cepat:</strong> Melayani pengiriman ke seluruh wilayah dengan jasa ekspedisi terpercaya.</li>
    </ul>
</div>
@endsection
