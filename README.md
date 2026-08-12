# TeaShop API & Backend

A TeaShop egy Laravel 13 alapú, RESTful architektúrára épülő e-kereskedelmi backend rendszer.

## Rendszerkövetelmények (Prerequisites)
- PHP 8.3 vagy újabb
- Composer 2.x
- SQLite (vagy MySQL 8.0+)
- Node.js & NPM (a frontend assetekhez)

## Telepítés lokális környezetben (Local Setup)

1. **Tároló klónozása:**
   \`git clone https://github.com/teashop/teashop-backend.git\`
   \`cd teashop-backend\`

2. **Függőségek telepítése:**
   \`composer install\`

3. **Környezeti változók konfigurálása:**
   \`cp .env.example .env\`
   Frissítsd az adatbázis kapcsolatokat a `.env` fájlban!

4. **Kriptográfiai kulcs generálása:**
   \`php artisan key:generate\`

5. **Adatbázis migráció és tesztadatok:**
   \`php artisan migrate:fresh --seed\`

6. **Fájlrendszer szimbolikus link:**
   \`php artisan storage:link\`