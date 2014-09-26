Timak
=====
Hejhou, takze takto. Kedze sa ten nas 3dremote printer bude vyvijat na WIN/MAC a bude to bezat nakoniec na LINUXE, existuje sposob, ako sa vyvarovat "system specific" errorom, ktore by vyskakovali iba na jednom z OS, nedali by sa zreprodukovat na ostatnych a teda ich odstranovanie by bolo problematicke. Pouziva sa na to virtualka, ktora presne odzrkadluje nastavenie servera, na ktorom tato appka nakoniec bude bezat. Je to Linux Ubuntu (14.04.1 64bit), viac menej uplne okresane na minimum bez GUI. Treba mat nato 2 veci nainstalovane a jednu skopcit, nic tazke.

0. (WIN ONLY) Windowsacky command prompt toto nema rad, tak je treba si stiahnut Git Bash, v ktorom sa daju zadavat linuxove prikazy na wine
    - Git Bash http://git-scm.com/downloads - vsetky prikazy budete spustat odtialto Windowsaci

1. Nainstalujte si najnovsiu Virtual Box, na ktorom sa vam vzdy, ked budete developovat, spusti tento nas linux, nijako to nespomaluje kompik, moj sa ani len nezahrial a uz ma nejaky ten rocik -> tahajte tu https://www.virtualbox.org/wiki/Downloads  toto sa instaluje klasicky ako programik a nebudete uz s tym nic riesit

2. Cely proces spustenia a nainstalovania tohto Linuxu ulahcuje Vagrant, kde treba vediet iba 3 prikazy 
    - vagrant up - spustenie virtualky (prve trva dlhsie, lebo sa stiahne linux cca 300MB a nainstaluju sa dependencies - php, mysql, nginx server, node.js atd, 2., 3. n.ty krat to je otazka 15 sekund)
    - vagrant halt - zastavenie virtualky (po tom co ukoncite developenie toto mozte dat, to vm vypne a resources, ktore mala zaalokovane sa uvolnia)
    - vagrant destroy - znicenie virtualky (vymaze virtualku aj so subormi z virtual boxu, komplet majse)
tu tahajte https://www.vagrantup.com/downloads.html
toto sa instaluje tiez ako programik, ktory sa vcleni do comand linu/terminalu

3. Posledna vec, ktoru treba nainstalovat je Laravel Homestead - ktory obsahuje vsetky potrebne nastavenia na developenie teda ten nginx, php, mysql node.js atd....Ten si naklonujte z githubu odtialto https://github.com/laravel/homestead.git
Tento subor si v podstate mozete nakopcit kde chcete, idealne niekde do zlozky, v ktorej mate kodiky

###Vysvetlenie:

Funguje to teda asi takto, ten Homestead subor, co ste si stiahli z gitu, obsahuje recept ako vytvorit nasu virtualku so vsim vsudy - verzia Linuxu aku ma stiahnut, ake phpcko ake mysql atd. Nachadza sa tu subor Homestead.yaml - ten ked si otvorite vyzera takto

```ruby
ip: "192.168.10.10" 
#ipecka, na ktorej bude appka dostupna, ked spustite virtualku
memory: 2048
cpus: 1

authorize: ~/.ssh/id_rsa.pub 
# public key, ktory pouziva virtualka ak sa chcete do nej dostat cez to ssh

keys:
    - ~/.ssh/id_rsa #privatny kluc

#tu su priecinky, ktore chceme vidiet ak sa cez ssh dostaneme do virtualky
folders:
    - map: ~/Documents/FEI/7semester/Timak/server #realna cesta k priecinku v nasom PC
      to: /home/vagrant/server 
      #cesta k priecinku vo virtualke, co je viac menej nase PHPcko (laravel)

#tu su pary, ze ked zadate urlcku 3dremote.app do prehliadaca,
#tak virtualka to nasmeruje na priecinok "to:"
sites:
    - map: 3dremote.app 
      to: /home/vagrant/server/public 
      #to je public subor, v ktorom sa budu nachadzat aj nase CSS, images, javascripty

variables:
    - key: APP_ENV
      value: local

```

to co vy musite zmenit su iba tieto cesty

    - authorize: ~/.ssh/id_rsa.pub

```ruby
keys:

    - ~/.ssh/id_rsa
```
```ruby
folders:

    - map: ~/Documents/FEI/7semester/Timak/server 
```

**authorize a keys:**

Toto su private a public kluce potrebne pre tento server
Na tejto url je napisane ako ich vygenerovat v kroku 2,

- https://help.github.com/articles/generating-ssh-keys#platform-mac

hore sa da prepnut platformu MAC/WINDOWS ( pri generovani sa vas to bude pytat na passphrase - tu si dakde zapiste, keby v buducnosti to od vas kompik pyta pri prihlasovani cez ssh alebo tak)

Generujete ich teda ak ich este nemate na MACu su vacsinou v zlozke ```~/.ssh/``` a hladate subor ```id_rsa.pub``` ```id_rsa``` (alebo rda alebo ina pripona) na WIN byvaju v ```c:/Users/username/.ssh/``` - ak sa tam teda nenachadzaju id_rsa.pub a id_rsa tak si ich vygenerujte a ich adresy zadajte do authorize (pub) a keys v ```Homestead.yaml``` - Kubo hoblik to asi nemusi menit a Windowsaci zadajte adresu k tym vasim bez uvodzoviek teda napr to vase bude vyzerat 

```-authorize: c:/Users/Andre/.ssh/id_rsa.pub```
```ruby
keys:
    -c:/Users/Andre/.ssh/id_rsa
```

Potom zmente folders map: na adresu, kde budete chciet mat ulozeny tento nas timak (na to miesto potom mozete naklonovat tento repozitar prikazom ```git clone https://github.com/MichalGallovic/Timak.git Timak```. Cize ```cesta-ku/Timak/server```

Potomt v subore ```homestead``` (v ktorom ste teraz upravovali Homestead.yaml) zadajte command ```vagrant up```, to stiahne vsetko a spusti serveris. Ak vsetko prebehlo OK tak na adrese ```192.168.10.10``` by sa vam mala zobrazit stranka.

Ak si to chcete namapova na adresu, ktora je zadana v sites map: tak v subore (MAC) ```/etc/hosts```, (WIN) ```C:/Windows/System32/drivers/etc/hosts``` si pridajte riadok
```127.0.0.1 3dremote.app```

potom by to malo bezat na urlcke ```http://3dremote.app:8000```

Ak chcete dokoncit robotku dajte ```vagrant halt``` v priecinku ```homestead``` a server sa vypne

Ak sa chcete ```ssh``` do virtualky tak staci v priecinku ```homestead``` dat ```vagrant ssh``` alebo od hocikial ```ssh vagrant@192.168.10.10```

