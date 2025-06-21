<div class="register-container">
    <div class="logo">
        <h2>أنشئ حسابًا جديدًا</h2>
        @if ($errorMessage)
            <div class="alert alert-danger">{{ $errorMessage }}</div>
        @endif
        @if ($successMessage)
            <div class="alert alert-success">{{ $successMessage }}</div>
        @endif
    </div>

    <form wire:submit.prevent="register">
        <div class="input-group">
            <label for="first-name">الاسم</label>
            <input type="text" id="first-name" placeholder="أدخل اسمك" wire:model="username">
            <i class="fas fa-user icon"></i>
            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="input-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" placeholder="أدخل بريدك الإلكتروني" wire:model="email">
            <i class="fas fa-envelope icon"></i>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="input-group">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" placeholder="أنشئ كلمة مرور قوية" wire:model="password">
            <i class="fas fa-lock icon"></i>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="input-group">
            <label for="confirm-password">تأكيد كلمة المرور</label>
            <input type="password" id="confirm-password" placeholder="أعد إدخال كلمة المرور" wire:model="password_confirmation">
            <i class="fas fa-lock icon"></i>
            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="terms">
            <input type="checkbox" id="agree-terms">
            <label for="agree-terms">أوافق على <a href="#">الشروط والأحكام</a> و<a href="#">سياسة الخصوصية</a></label>
        </div>

        <button type="submit" class="register-btn">إنشاء حساب</button>

        <div class="login-link">
            لديك حساب بالفعل؟ <a href="{{ route('login') }}">سجل الدخول الآن</a>
        </div>
    </form>
</div>
