@extends('layouts.app')

@section('title', 'About Us - Toko Plastik Putra Agata')

@section('content')
<div class="about-container">
    <div class="about-header" style="text-align: center; margin-bottom: 40px;">
        <h1 style="color: #333;">Tentang Toko Plastik Putra Agata</h1>
        <p style="color: #666; font-style: italic;">"Menyediakan Solusi Pengemasan Terbaik Sejak 2022"</p>
    </div>

    <div class="about-content" style="line-height: 1.8; color: #444;">
        <p>
            <strong>Toko Plastik Putra Agata</strong> bermula dari sebuah toko kecil di pasar lokal dengan misi sederhana:
            membantu para pelaku UMKM mendapatkan kemasan yang berkualitas dengan harga yang terjangkau. Seiring
            berjalannya waktu, kami telah berkembang menjadi salah satu distributor plastik dan kemasan terpercaya
            yang melayani ribuan pelanggan, mulai dari kebutuhan rumah tangga hingga industri skala besar.
        </p>

        <div class="vision-mission" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin: 40px 0;">
            <div style="background: #f9f9f9; padding: 20px; border-left: 5px solid #333; border-radius: 5px;">
                <h3 style="margin-top: 0;">Visi Kami</h3>
                <p>Menjadi pusat distribusi kemasan nomor satu yang paling lengkap dan inovatif dalam mendukung pertumbuhan ekonomi kreatif di Indonesia.</p>
            </div>
            <div style="background: #f9f9f9; padding: 20px; border-left: 5px solid #333; border-radius: 5px;">
                <h3 style="margin-top: 0;">Misi Kami</h3>
                <ul>
                    <li>Menyediakan produk plastik yang variatif dan selalu <em>ready stock</em>.</li>
                    <li>Memberikan harga grosir yang kompetitif bagi pengecer dan pengusaha kuliner.</li>
                    <li>Terus memperkenalkan produk kemasan ramah lingkungan (<em>eco-friendly</em>).</li>
                </ul>
            </div>
        </div>

        <div class="our-commitment" style="border-top: 1px solid #eee; pt: 30px; margin-top: 30px;">
            <h2>Komitmen Kami</h2>
            <p>
                Kami memahami bahwa kemasan bukan sekadar pembungkus, melainkan bagian dari identitas produk Anda.
                Oleh karena itu, kami selalu mengedukasi pelanggan mengenai jenis plastik yang tepat (seperti perbedaan
                bahan PE, PP, dan HD) agar sesuai dengan fungsi dan keamanan produk, terutama untuk kategori makanan.
            </p>
        </div>
    </div>

    <div class="location-preview" style="margin-top: 40px; padding: 20px; background: #e9ecef; border-radius: 8px; text-align: center;">
        <h3>Kunjungi Toko Kami</h3>
        <p>📍 Jl. Trunojoyo No.16, Nambangan Kidul, Kec. Manguharjo, Kota Madiun, Jawa Timur 63128 (Depan pasar sleko)</p>
        <p>🕒 Buka Setiap Hari: 08.00 - 17.00 WIB</p>
    </div>
</div>
@endsection
