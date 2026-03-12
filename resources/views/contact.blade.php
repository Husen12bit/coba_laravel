@extends('layouts.app')

@section('title', 'Hubungi Kami - Toko Plastik Putra Agata')

@section('content')
<div class="contact-container">
    <div class="contact-header" style="text-align: center; margin-bottom: 40px;">
        <h1>Hubungi Kami</h1>
        <p>Punya pertanyaan mengenai stok grosir atau pesanan khusus? Kami siap membantu.</p>
    </div>

    <div class="contact-wrapper" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">

        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <div style="margin-bottom: 20px;">
                <p><strong>📍 Alamat:</strong><br>
                Jl. Trunojoyo No.16, Nambangan Kidul, Kec. Manguharjo, Kota Madiun, Jawa Timur 63128</p>
            </div>

            <div style="margin-bottom: 20px;">
                <p><strong>📞 WhatsApp / Telepon:</strong><br>
                <a href="https://wa.me/6281249185267" style="color: #25D366; font-weight: bold; text-decoration: none;">
                    +62 812-4918-5267 (Klik untuk Chat)
                </a></p>
            </div>

            <div style="margin-bottom: 20px;">
                <p><strong>📧 Email:</strong><br>
                houzen12@gmail.com</p>
            </div>
        </div>

        <div class="map-section" style="margin-top: 5px;">
            <h3>Lokasi Toko (Google Maps)</h3>
            <div style="width: 100%; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.1499915792927!2d111.51735832443917!3d-7.640075988206951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf616702902b%3A0x99645d65fb65f0c2!2sToko%20Putra%20Agata!5e0!3m2!1sid!2sid!4v1773288247901!5m2!1sid!2sid"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </src=>
            </div>
        </div>
    </div>
</div>
@endsection
