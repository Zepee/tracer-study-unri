<div class="content-header">
    <div class="container">
        <div>
            <div class="container-judul">
                <h4 class=>{{ $slot }}</h4>
                <hr>
                <style>
                    /* Gaya untuk elemen hr */
                    hr {
                        border: none; /* Menghapus border default */
                        height: 5px; /* Ketebalan garis */
                        background: linear-gradient(to right, #4CAF50, #8BC34A); /* Gradien warna */
                        margin: 20px 0; /* Jarak atas dan bawah */
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Bayangan */
                        border-radius: 5px; /* Sudut melengkung */
                    }
                </style>
            </div>
        </div>
    </div>
</div>
