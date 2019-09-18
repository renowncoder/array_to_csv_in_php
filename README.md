# PHP CLI ARRAY to CSV or JSON

Reikia parašyti mini programėlę, kuri gali išsaugoti duomenis 
iš asociatyvinio masyvo (žemiau pateiktas masyvo pvz.) į failą.

Duomenys gali būti išsaugomi vienu iš šių formatu: CSV, XML, JSON.
Programa turi būti parašyta taip, kad pridėjus naują (ar pašalinus esamą) 
failo formatą nereiktų nieko koreguoti esamame kode (išskyrus konfiguraciją). 

Kaip tai daugmaž turėtų veikti:
Perduodame programai failo pavadinimą.
Programa duomenis iš masyvo išsaugo į failą.

```
Duomenų pvz.:
[
    [
        'first_name' => 'Kiestis',
        'age' => 29,
        'gender' => 'male'
    ],
    [
        'first_name' => 'Vytska',
        'age' => 32,
        'gender' => 'male'
    ],
    [
        'first_name' => 'Karina',
        'age' => 25,
        'gender' => 'female'
    ],
]
```

### Kaip paleisti programą:

```
Paleisti serverį per MAMP arba XAMPP,
```

```
clone repo using git@github.com:dimacellist/array_to_csv_in_php.git,
```

```
Atidaryti Terminal,
```

```
php index.php
```

Sekti programos instrukcijas

Happy Hacking!