// Menunggu hingga seluruh konten halaman HTML selesai dimuat
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('main-contact-form');
    // Elemen notifikasi sekarang berada di luar form
    const successMessage = document.getElementById('success-message');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        // Mengambil nilai dari setiap input field
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const question = document.getElementById('question').value.trim();
        
        let isValid = true;

        // Validasi Sederhana
        if (name === '' || email === '' || question === '') {
            alert('Semua kolom wajib diisi (kecuali Telepon).');
            isValid = false;
        } else if (!isValidEmail(email)) {
            alert('Format email tidak valid.');
            isValid = false;
        }

        // Jika semua data valid
        if (isValid) {
            // 1. Masukkan pesan ke dalam elemen notifikasi
            successMessage.innerText = 'Pesan Telah Terkirim';
            
            // 2. Tampilkan notifikasi dengan menambahkan class 'show' untuk memicu animasi CSS
            successMessage.classList.add('show');

            // 3. Reset form agar kembali kosong
            contactForm.reset();

            // 4. Set timer untuk menghilangkan notifikasi setelah 3 detik
            setTimeout(function() {
                successMessage.classList.remove('show');
            }, 3000); // 3000 milidetik = 3 detik
        }
    });

    // Fungsi bantuan untuk validasi format email
    function isValidEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }
});

    // Memilih elemen form berdasarkan ID-nya
    const contactForm = document.getElementById('main-contact-form');

    // Menambahkan event listener yang akan berjalan saat form disubmit
    contactForm.addEventListener('submit', function(event) {
        // Mencegah form mengirim data secara otomatis
        event.preventDefault();

        // Mengambil nilai dari setiap input field
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const question = document.getElementById('question').value.trim();
        
        // Flag untuk mengecek apakah semua validasi lolos
        let isValid = true;

        // Validasi Nama: tidak boleh kosong
        if (name === '') {
            alert('Nama tidak boleh kosong.');
            isValid = false;
        }
        // Validasi Email: tidak boleh kosong dan format harus benar
        else if (email === '') {
            alert('Email tidak boleh kosong.');
            isValid = false;
        } else if (!isValidEmail(email)) {
            alert('Format email tidak valid. Contoh: nama@domain.com');
            isValid = false;
        }
        // Validasi Pertanyaan: tidak boleh kosong
        else if (question === '') {
            alert('Pertanyaan tidak boleh kosong.');
            isValid = false;
        }

        // Jika semua data valid (isValid masih true)
        if (isValid) {
            alert('Validasi berhasil! Data siap dikirim ke server.');
            
            // Di sini, Anda bisa mengumpulkan data form
            const formData = {
                name: name,
                email: email,
                phone: document.getElementById('phone').value.trim(),
                question: question
            };
            
            console.log('Data yang akan dikirim:', formData);

            // Baris di bawah ini akan mengirimkan form ke server (action="/submit-form").
            // Hapus komentar jika Anda sudah punya back-end yang siap.
            // contactForm.submit();
        }
    });

    // Fungsi bantuan untuk validasi format email menggunakan Regular Expression
    function isValidEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }
    