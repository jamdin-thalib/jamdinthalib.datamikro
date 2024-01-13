Init APP
Composer Update
tidak update versi ci (tetap di versi 4.3.6)
composer require codeigniter4/framework:4.3.6 -W
Migrate DB
php spark migrate
Seed DB
php spark db:seed basicseeder
Refresh APP
Migrate R: DB
php spark migrate:refresh
Seed R: DB
php spark db:seed basicseeder
