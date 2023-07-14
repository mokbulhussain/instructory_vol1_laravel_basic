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
