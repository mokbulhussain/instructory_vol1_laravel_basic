<?php 
/*

// -------------------------database setup ar jonno .env file use korte hobe ---------------------

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ins_vol1_basic
DB_USERNAME=root
DB_PASSWORD=






/// --------------------------Tinker install --------------------------
// Tinker use hoy command window or git bash ar maodome data insert kora.

$ php artisan tinker
Psy Shell v0.11.18 (PHP 8.2.0 — cli) by Justin Hileman
> $category=new Category();
[!] Aliasing 'Category' to 'App\Models\Category' for this Tinker session.
= App\Models\Category {#7126}

> $category->name="Electronics"
= "Electronics"

> $category->slug="electronics";
= "electronics"

> $category
= App\Models\Category {#7126
    name: "Electronics",
    slug: "electronics",
  }

> $category->save();
= true

> Category::all()
= Illuminate\Database\Eloquent\Collection {#7128
    all: [
      App\Models\Category {#7138
        id: 1,
        name: "Electronics",
        slug: "electronics",
        is_active: 1,
        created_at: "2023-07-14 03:41:07",
        updated_at: "2023-07-14 03:41:07",
      },
    ],
  }

> $category->name="Medicine"
= "Medicine"

> $category->slug="medicine
.
. Category::all()
. >$category->slug="medicine"

   PARSE ERROR  PHP Parse error: Syntax error, unexpected T_STRING in vendor\psy
\psysh\src\Exception\ParseErrorException.php on line 38.

> $category->slug="medicine"
= "medicine"

> Category::all();
= Illuminate\Database\Eloquent\Collection {#7134
    all: [
      App\Models\Category {#7119
        id: 1,
        name: "Electronics",
        slug: "electronics",
        is_active: 1,
        created_at: "2023-07-14 03:41:07",
        updated_at: "2023-07-14 03:41:07",
      },
    ],
  }

> $category->slug="medicine"
= "medicine"

> $category->save()
= true

> Category::all();
= Illuminate\Database\Eloquent\Collection {#7143
    all: [
      App\Models\Category {#7135
        id: 1,
        name: "Medicine",
        slug: "medicine",
        is_active: 1,
        created_at: "2023-07-14 03:41:07",
        updated_at: "2023-07-14 03:46:18",
      },
    ],
  }

> $category2=new Category()
= App\Models\Category {#7121}

> $category2->name="computer"
= "computer"

> $category2->slug="computer"
= "computer"

> $category2->save();
= true

> Category::all()
= Illuminate\Database\Eloquent\Collection {#7145
    all: [
      App\Models\Category {#7147
        id: 1,
        name: "Medicine",
        slug: "medicine",
        is_active: 1,
        created_at: "2023-07-14 03:41:07",
        updated_at: "2023-07-14 03:46:18",
      },
      App\Models\Category {#7148
        id: 2,
        name: "computer",
        slug: "computer",
        is_active: 1,
        created_at: "2023-07-14 03:50:01",
        updated_at: "2023-07-14 03:50:01",
      },
    ],
  }

>
HP@DESKTOP-SDREEV8 MINGW64 /c/xampp/htdocs/laravel/instructory_vol1/basic_project (master)
$ php artisan tinker
Psy Shell v0.11.18 (PHP 8.2.0 — cli) by Justin Hileman
> $subcategory=new SubCategory()
[!] Aliasing 'SubCategory' to 'App\Models\SubCategory' for this Tinker session.
= App\Models\SubCategory {#7125}

> $subcategory->category_id=1
= 1

> $subcategory->name="laoptop"
= "laoptop"

> $subcategory->slug="laptop"
= "laptop"

> $subcategory->save();
= true

> SubCategory::all()
= Illuminate\Database\Eloquent\Collection {#7128
    all: [
      App\Models\SubCategory {#7138
        id: 1,
        category_id: 1,
        name: "laoptop",
        slug: "laptop",
        is_active: 1,
        created_at: "2023-07-14 03:54:26",
        updated_at: "2023-07-14 03:54:26",
      },
    ],
  }

> $subcategory2=new SubCategory()
= App\Models\SubCategory {#7129}

> $subcategory2->category_id=1
= 1

> $subcategory2->name="keyboard and mouse"
= "keyboard and mouse"

> $subcategory2->slug="keyboard and mouse"
= "keyboard and mouse"

> $subcategory2->save();
= true

> SubCategory::all()
= Illuminate\Database\Eloquent\Collection {#7140
    all: [
      App\Models\SubCategory {#7142
        id: 1,
        category_id: 1,
        name: "laoptop",
        slug: "laptop",
        is_active: 1,
        created_at: "2023-07-14 03:54:26",
        updated_at: "2023-07-14 03:54:26",
      },
      App\Models\SubCategory {#7143
        id: 2,
        category_id: 1,
        name: "keyboard and mouse",
        slug: "keyboard and mouse",
        is_active: 1,
        created_at: "2023-07-14 03:56:32",
        updated_at: "2023-07-14 03:56:32",
      },
    ],
  }







  //--------------- single model & multiple model data retrieving with tinker----------

  $ php artisan tinker
Psy Shell v0.11.18 (PHP 8.2.0 — cli) by Justin Hileman
> Category::find(1)
[!] Aliasing 'Category' to 'App\Models\Category' for this Tinker session.
= App\Models\Category {#7135
    id: 1,
    name: "Medicine",
    slug: "medicine",
    is_active: 1,
    created_at: "2023-07-14 03:41:07",
    updated_at: "2023-07-14 03:46:18",
  }

> Category::findorFail(2)
= App\Models\Category {#7141
    id: 2,
    name: "computer",
    slug: "computer",
    is_active: 1,
    created_at: "2023-07-14 03:50:01",
    updated_at: "2023-07-14 03:50:01",
  }

>



$ php artisan tinker
Psy Shell v0.11.18 (PHP 8.2.0 — cli) by Justin Hileman
> $category = new Category();
[!] Aliasing 'Category' to 'App\Models\Category' for this Tinker session.
= App\Models\Category {#7126}

> $category->first()
= App\Models\Category {#7128
    id: 1,
    name: "Medicine",
    slug: "medicine",
    is_active: 1,
    created_at: "2023-07-14 03:41:07",
    updated_at: "2023-07-14 03:46:18",
  }

> $category->last();

   BadMethodCallException  Call to undefined method App\Models\Category::last().

> $category->find([1,2])
= Illuminate\Database\Eloquent\Collection {#7138
    all: [
      App\Models\Category {#7144
        id: 1,
        name: "Medicine",
        slug: "medicine",
        is_active: 1,
        created_at: "2023-07-14 03:41:07",
        updated_at: "2023-07-14 03:46:18",
      },
      App\Models\Category {#7141
        id: 2,
        name: "computer",
        slug: "computer",
        is_active: 1,
        created_at: "2023-07-14 03:50:01",
        updated_at: "2023-07-14 03:50:01",
      },
    ],
  }

>












---------- query builder using tinker---------------
$ php artisan tinker
Psy Shell v0.11.18 (PHP 8.2.0 — cli) by Justin Hileman
> User::factory()->count(10)->create()
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
= Illuminate\Database\Eloquent\Collection {#7159
    all: [
      App\Models\User {#7189
        name: "Prof. Kade Champlin II",
        email: "yschaden@example.com",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "8iWogT73BM",
        phone: "(276) 243-3282",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 1,
      },
      App\Models\User {#7196
        name: "Maryse Hartmann",
        email: "qkiehn@example.org",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "GSi6cfdSWv",
        phone: "1-520-755-1811",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 2,
      },
      App\Models\User {#7187
        name: "Bryce Gottlieb",
        email: "koepp.johnathan@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "KBbkCT9mUj",
        phone: "+1.513.920.5168",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 3,
      },
      App\Models\User {#7190
        name: "Mr. Roman Kuvalis",
        email: "vhoeger@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "HGPg3nNgkW",
        phone: "+15016661420",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 4,
      },
      App\Models\User {#7197
        name: "Prof. Millie Schinner II",
        email: "napoleon.klocko@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "LlwfJ385Na",
        phone: "(951) 983-7262",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 5,
      },
      App\Models\User {#7198
        name: "Ona Bogan",
        email: "angelina.sawayn@example.com",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "iPTaJCBNiF",
        phone: "+1 (607) 777-9772",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 6,
      },
      App\Models\User {#7199
        name: "Alison Strosin II",
        email: "vboyle@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "cEgG9xB0Ow",
        phone: "(435) 417-7478",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 7,
      },
      App\Models\User {#7200
        name: "Shany Aufderhar",
        email: "verla96@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "8LNTeIJ4nH",
        phone: "+1.870.847.6164",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 8,
      },
      App\Models\User {#7201
        name: "Ethel Ledner",
        email: "jerel.ziemann@example.org",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "RSt9gkAuSN",
        phone: "(480) 367-9617",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 9,
      },
      App\Models\User {#7202
        name: "Prof. Wava Simonis",
        email: "emie.mante@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "YTS89dAWVs",
        phone: "989.571.8566",
        updated_at: "2023-07-15 06:07:59",
        created_at: "2023-07-15 06:07:59",
        id: 10,
      },
    ],
  }

> User::where('id',2')->get()

   PARSE ERROR  PHP Parse error: Syntax error, unexpected T_ENCAPSED_AND_WHITESP
ACE, expecting ')' in vendor\psy\psysh\src\Exception\ParseErrorException.php on
line 38.

> User::where('id',2)->get()
= Illuminate\Database\Eloquent\Collection {#7122
    all: [
      App\Models\User {#7157
        id: 2,
        name: "Maryse Hartmann",
        email: "qkiehn@example.org",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "GSi6cfdSWv",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "1-520-755-1811",
      },
    ],
  }

> User::where('id','>=",2)->get()

   PARSE ERROR  PHP Parse error: Syntax error, unexpected T_ENCAPSED_AND_WHITESP
ACE, expecting ')' in vendor\psy\psysh\src\Exception\ParseErrorException.php on
line 38.

> User::where('id', '>=',2)->get()
= Illuminate\Database\Eloquent\Collection {#7155
    all: [
      App\Models\User {#7156
        id: 2,
        name: "Maryse Hartmann",
        email: "qkiehn@example.org",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "GSi6cfdSWv",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "1-520-755-1811",
      },
      App\Models\User {#7160
        id: 3,
        name: "Bryce Gottlieb",
        email: "koepp.johnathan@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "KBbkCT9mUj",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "+1.513.920.5168",
      },
      App\Models\User {#7126
        id: 4,
        name: "Mr. Roman Kuvalis",
        email: "vhoeger@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "HGPg3nNgkW",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "+15016661420",
      },
      App\Models\User {#7205
        id: 5,
        name: "Prof. Millie Schinner II",
        email: "napoleon.klocko@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "LlwfJ385Na",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "(951) 983-7262",
      },
      App\Models\User {#7124
        id: 6,
        name: "Ona Bogan",
        email: "angelina.sawayn@example.com",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "iPTaJCBNiF",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "+1 (607) 777-9772",
      },
      App\Models\User {#7204
        id: 7,
        name: "Alison Strosin II",
        email: "vboyle@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "cEgG9xB0Ow",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "(435) 417-7478",
      },
      App\Models\User {#7195
        id: 8,
        name: "Shany Aufderhar",
        email: "verla96@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "8LNTeIJ4nH",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "+1.870.847.6164",
      },
      App\Models\User {#7207
        id: 9,
        name: "Ethel Ledner",
        email: "jerel.ziemann@example.org",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "RSt9gkAuSN",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "(480) 367-9617",
      },
      App\Models\User {#7217
        id: 10,
        name: "Prof. Wava Simonis",
        email: "emie.mante@example.net",
        email_verified_at: "2023-07-15 06:07:59",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
",
        #remember_token: "YTS89dAWVs",
        created_at: "2023-07-15 06:07:59",
        updated_at: "2023-07-15 06:07:59",
        phone: "989.571.8566",
      },
    ],
  }

>


