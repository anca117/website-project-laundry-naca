document.addEventListener('DOMContentLoaded', function() {
            const chatBubble = document.getElementById('chat-bubble');
            const chatPopup = document.getElementById('chat-popup');
            const closeChat = document.getElementById('close-chat');
            const greetingMessage = document.getElementById('greeting-message');
            const userMessageInput = document.getElementById('user-message');
            const sendChatBtn = document.getElementById('send-chat-btn');
            
            let hidePopupTimeout;

            // --- PENGATURAN ---
            const your_whatsapp_number = '6282164111866'; // GANTI DENGAN NOMOR WA ANDA diawali 62
            
            // 1. Logika untuk menampilkan dan menyembunyikan chat saat hover
            function showChat() {
                clearTimeout(hidePopupTimeout);
                chatPopup.classList.add('show');
            }

            function hideChat() {
                hidePopupTimeout = setTimeout(() => {
                    chatPopup.classList.remove('show');
                }, 300); // Memberi sedikit jeda sebelum menutup
            }

            chatBubble.addEventListener('mouseover', showChat);
            chatBubble.addEventListener('mouseleave', hideChat);
            chatPopup.addEventListener('mouseover', showChat);
            chatPopup.addEventListener('mouseleave', hideChat);

            closeChat.addEventListener('click', function() {
                chatPopup.classList.remove('show');
            });

            // 2. Logika untuk salam berdasarkan waktu
            const now = new Date();
            const hour = now.getHours();
            let greeting = '';

            if (hour >= 5 && hour < 12) {
                greeting = 'Selamat pagi! Ada yang bisa kami bantu?';
            } else if (hour >= 12 && hour < 16) {
                greeting = 'Selamat siang! Ada yang bisa kami bantu?';
            } else if (hour >= 16 && hour < 18) {
                greeting = 'Selamat sore! Ada yang bisa kami bantu?';
            } else {
                greeting = 'Selamat malam! Ada yang bisa kami bantu?';
            }
            greetingMessage.textContent = greeting;

            // 3. Logika untuk mengirim pesan ke WhatsApp
            function sendToWhatsApp() {
                const userMessage = userMessageInput.value.trim();
                if (userMessage === '') {
                    alert('Silakan tulis pesan Anda terlebih dahulu.');
                    return;
                }
                
                const fullMessage = `${greeting} - Pesan saya: "${userMessage}"`;
                const whatsappUrl = `https://wa.me/${your_whatsapp_number}?text=${encodeURIComponent(fullMessage)}`;
                
                window.open(whatsappUrl, '_blank');
                userMessageInput.value = ''; // Kosongkan input setelah dikirim
            }

            sendChatBtn.addEventListener('click', sendToWhatsApp);

            userMessageInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter' && !event.shiftKey) {
                    event.preventDefault(); 
                    sendToWhatsApp();
                }
            });
                function getCurrentTime() {
                const now = new Date();
                let hours = now.getHours();
                let minutes = now.getMinutes();
                if (minutes < 10) minutes = "0" + minutes;
                return `${hours}.${minutes}`;
            }

            document.getElementById("message-time").textContent = getCurrentTime();

            var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1, 
            spaceBetween: 30, 
            loop: true, 
            pagination: {
                el: ".swiper-pagination",
                clickable: true, 
            },
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false, 
            },
        });

        });