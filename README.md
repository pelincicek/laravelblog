Laravel Article Project Doc


1. İlk olarak bilgisayarınızda composer kurulu olduğundan emin olmalıyız. 
Daha sonra laravel proje dosyası oluşturmak için aşağıdaki komutu terminalde çalıştırıyoruz.
composer create-project --prefer-dist laravel/laravel ProjectName

2. Aşağıdaki komutu terminalde çalıştırıyoruz.
php artisan make:model Article -mc

3. phpmyadmin den database yaratıyoruz. 
create database 

4. .env file dosyasından sunucu ve database bilgilerimizi güncelliyoruz. 

5. database folder'ı altında bulunan migrations içindeki create_articles_table.php güncelliyoruz.
```
public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->integer('view_count')->unsigned()->default(0);  
            $table->timestamps();    
        });
    }
 ```
6. php artisan migrate komutunu terminalde çalışırıyoruz ve tabloyu oluşturuyor. 


bootstrap starter tamplate; 
https://getbootstrap.com/docs/4.3/getting-started/introduction/

bootstrap navbar; 
https://getbootstrap.com/docs/4.3/components/navbar/
