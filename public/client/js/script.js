document.addEventListener('DOMContentLoaded', function() {
    // عداد تنازلي للعرض الخاص
    function updateCountdown() {
        const now = new Date();
        const endDate = new Date();
        endDate.setDate(now.getDate() + 7); // العرض لمدة 7 أيام من الآن
        
        const diff = endDate - now;
        
        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
    }
    
    setInterval(updateCountdown, 1000);
    updateCountdown();
    
    // إضافة منتج إلى السلة
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productName = productCard.querySelector('.card-title').textContent;
            const productPrice = productCard.querySelector('.text-primary').textContent;
            
            // هنا يمكنك إضافة الكود لإرسال المنتج إلى السلة عبر AJAX
            // لأغراض العرض، سنظهر فقط تنبيه
            alert(`تمت إضافة ${productName} بسعر ${productPrice} إلى سلة التسوق`);
            
            // زيادة عداد السلة (لأغراض العرض فقط)
            const cartCount = document.querySelector('.fa-shopping-cart + .badge');
            const currentCount = parseInt(cartCount.textContent);
            cartCount.textContent = currentCount + 1;
        });
    });
    
    // تنشيط بطاقات المنتجات عند التمرير
    const productCards = document.querySelectorAll('.product-card');
    
    function checkCards() {
        const triggerBottom = window.innerHeight / 5 * 4;
        
        productCards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            
            if (cardTop < triggerBottom) {
                card.classList.add('show');
            } else {
                card.classList.remove('show');
            }
        });
    }
    
    window.addEventListener('scroll', checkCards);
    checkCards();
    
    // إرسال النشرة البريدية
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // هنا يمكنك إضافة الكود لإرسال البريد الإلكتروني عبر AJAX
            // لأغراض العرض، سنظهر فقط تنبيه
            alert(`شكرًا على اشتراكك بالنشرة البريدية باستخدام البريد: ${email}`);
            this.reset();
        });
    }
});