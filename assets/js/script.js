// Pastikan DOM sudah siap
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    // Cek jika elemennya ada sebelum menambahkan event listener
    if (togglePassword && password) {
        const icon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', function (e) {
            // Ubah tipe input
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Ubah ikon mata
            if (type === 'password') {
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    }
    // Cari elemen form yang relevan
    const serviceSelect = document.getElementById('service_id');
    const weightInput = document.getElementById('berat');
    const priceDisplay = document.getElementById('estimasi-harga');

    // Buat data harga dari PHP (akan kita siapkan di HTML)
    const servicePrices = JSON.parse(document.getElementById('service-prices-data').textContent);

    function updatePrice() {
        const selectedServiceId = serviceSelect.value;
        const weight = parseFloat(weightInput.value) || 0;

        if (selectedServiceId && weight > 0) {
            const pricePerKg = servicePrices[selectedServiceId];
            const totalPrice = pricePerKg * weight;

            // Tampilkan harga dengan format Rupiah
            priceDisplay.textContent = 'Estimasi Total: ' + new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(totalPrice);
        } else {
            priceDisplay.textContent = 'Estimasi Total: Rp 0';
        }
    }

    // Panggil fungsi updatePrice setiap kali ada perubahan
    serviceSelect.addEventListener('change', updatePrice);
    weightInput.addEventListener('input', updatePrice);
});