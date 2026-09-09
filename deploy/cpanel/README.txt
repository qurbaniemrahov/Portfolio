QURBANI EMRAHOV PORTFOLIO - CPANEL QURULUMU
================================================

Bu paket Composer, Node.js və artisan tələb etmir.

QURAŞDIRMA:

1. cPanel daxilində File Manager bölməsini açın.
2. Domeninizin Document Root qovluğuna keçin. Əsas domen üçün bu,
   adətən public_html qovluğudur.
3. Bu paketin İÇİNDƏKİ bütün faylları həmin qovluğa yükləyin:
      index.php
      .htaccess
      portfolio.template.html
      assets/
4. Faylları ZIP kimi yükləmisinizsə, Extract əməliyyatını başladın.
5. Saytı domeninizdən açın. Əlavə build və ya terminal əmri lazım deyil.

VACİB:

- deploy/cpanel qovluğunun özünü deyil, onun içindəki faylları public_html-a
  yerləşdirin.
- Mövcud .htaccess faylınız varsa, onu əvəz etməzdən əvvəl backup saxlayın.
- Fayl icazələri üçün qovluqlarda 755, fayllarda 644 istifadə edin.
- Sayt alt qovluğa yüklənsə də asset yolları avtomatik hesablanır.

LARAVEL BACKENDƏ KEÇİD:

Layihədəki resources/views/portfolio.blade.php Laravel versiyasıdır.
Backend hazır olduqda həmin view və public/assets qovluğunu tam Laravel
layihəsinə köçürün. Laravel tətbiqində domenin Document Root ünvanını
Laravel layihəsinin public qovluğuna yönləndirin.

