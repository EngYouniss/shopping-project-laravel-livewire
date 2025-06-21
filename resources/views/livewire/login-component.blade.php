<div>
 <div class="login-container">
        <div class="logo">
            <h2>مرحبًا بعودتك!</h2>
        </div>

        <form wire:submit.prevent="login">
            <div class="input-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" placeholder="أدخل بريدك الإلكتروني" required wire:model="email">
                <i class="fas fa-envelope icon"></i>
            </div>

            <div class="input-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" placeholder="أدخل كلمة المرور" required wire:model="password">
                <i class="fas fa-lock icon"></i>
            </div>
            

            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember" wire:model="remember">
                    <label for="remember">تذكرني</label>
                </div>
                <div class="forgot-password">
                    <a href="#">نسيت كلمة المرور؟</a>
                </div>
            </div>

            <button type="submit" class="login-btn">تسجيل الدخول</button>

            <div class="register-link">
                ليس لديك حساب؟ <a href="register.html">أنشئ حسابًا جديدًا</a>
            </div>

            <div class="social-login">
                <p>أو سجل الدخول باستخدام</p>
                <div class="social-icons">
                    <div class="social-icon facebook">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-icon twitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social-icon google">
                        <i class="fab fa-google"></i>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
