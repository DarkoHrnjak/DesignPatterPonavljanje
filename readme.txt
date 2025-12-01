Tekst zadatka

Napišite sustav koji simulira proizvodnju automobila pomoću OOP principa:

1. Koristite “Factory Pattern” za kreiranje automobila različitih tipova.

2. Koristite “Observer Pattern”: kada se proizvede novi automobil, svi promatrači (observeri) moraju dobiti obavijest.

3. Koristite Iterator koji omogućuje prolazak kroz sve proizvedene automobile i brojanje ukupnog broja.

Auto ima svojstva:

- id

- naziv

- godište

- tip (benzinski, dizel, električni)

Tip automobila ima:

- id

- naziv tipa

Na kraju prikažite sve proizvedene automobile i broj automobila iteratorom.

Struktura zadatka

/AutoApp
    /Models
        Car.php
        CarType.php
        CarCollection.php   (Iterator)
    /Factory
        CarFactory.php
    /Observers
        ObserverInterface.php
        ProductionNotifier.php
    index.php 