###################
Test Project
###################
Projede toplamda Login ve Product olmak üzere 2 ana sayfa bulunmaktadır.
Product Controllerde;
	Ürün listeleme,
	Ürün ekleme,
	Ürün silme,
	Ürün güncelleme,
	Ürün detay olmak üzere
5 fonksiyon bulunmaktadır.

Login Controllerde;
	Şifre için xss kontrolü ve hash işlemi yapıldı. Kullanıcı adı ve şifresinin eşleşmesi durumunda 
	giriş yapan kullanıcının bilgileri session değişkenine aktarılıyor. Session
	değişkeni sayesinde oturum açmadan diğer sayfalara erişim sağlanamıyor.
	Ek olarak oturum sonlandırma fonksiyonu mevcut.
	
Porjeye eklenebilecek sayısız özellik mevcut sadece ve anlaşılır bir şekilde yazmaya çalıştım ilginiz için teşekkürler..

NOT: Veritabanı olarak Mysql kullandım. Gerekli SQL dosyası ana klasörde mevcut ismi 'coflow.sql'
	iki adet tablo mevcut 'admin' ve 'product'.


