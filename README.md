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

### Bendrieji reikalavimai

Trečiųjų šalių frameworkų ir libų naudojimas draudžiamas.

Būtina naudoti kodo versijavimo sistemą (VCS), koda pateikti 
galima per Bitbucket, GitHub ar GitLab. Commitai turi tureti prasmingus komentarus.

Kodas turi būti rašomas laikantis PSR-1 ir PSR-2.

Būtina taikyti SOLID, nepamirštam DRY bei KISS.
Privaloma komentuoti kodą (minimum bent blokais) bei privaloma rašyti PHP Doc.
Visi php failai turi būti loadinami dinamiškai (naudojamas autoloaderis taikant PSR-4, composer naudoti negalima).
Programos konfiguraciją leidžiama saugoti bet kokiu budu (env, yaml, php,...).

Prieš darant rekomenduoju susipažinti su SOLID, DRY, KISS, MVC, Hexagonal 
(a.k.a. Ports and Adapters) architecture, Factory design patternų.
