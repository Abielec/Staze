<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = new User();
        $User->name = "Adrian";
        $User->imie = "Adrian";
        $User->nazwisko ="Bielec";
        $User->username = "Adrian";
        $User->email = "colaxy@wp.pl";
        $User->password = bcrypt("4z/C*Bwa");
        $User->save();

        $User = new User();
        $User->name = "Filip";
        $User->imie = "Filip";
        $User->nazwisko ="Bartosiak";
        $User->username = "Bart";
        $User->email = "cdsadsa@wp.pl";
        $User->password = bcrypt("u;D4fVF$");
        $User->save();

        $User = new User();
        $User->name = "Szymon";
        $User->imie = "Szymon";
        $User->nazwisko ="Bancerz";
        $User->username = "SzymonB";
        $User->email = "dsa@wp.pl";
        $User->password = bcrypt("qTY7>cCu");
        $User->save();

        $User = new User();
        $User->name = "Kacper";
        $User->imie = "Kacper";
        $User->nazwisko ="Boczuliński";
        $User->username = "Kacper";
        $User->email = "gfg@wp.pl";
        $User->password = bcrypt("3w3RgD's");
        $User->save();

        $User = new User();
        $User->name = "Maksymilian";
        $User->imie = "Maksymilian";
        $User->nazwisko ="Cegiełka";
        $User->username = "Max";
        $User->email = "dsadas@wp.pl";
        $User->password = bcrypt("Maksymilian");
        $User->save();

        $User = new User();
        $User->name = "Maciej";
        $User->imie = "Maciej";
        $User->nazwisko ="Ciechomski";
        $User->username = "Maciek";
        $User->email = "gfdg@wp.pl";
        $User->password = bcrypt("`F5y*aA:");
        $User->save();

        $User = new User();
        $User->name = "Mateusz";
        $User->imie = "Mateusz";
        $User->nazwisko ="Czarnecki";
        $User->username = "Czarny";
        $User->email = "Czarny@wp.pl";
        $User->password = bcrypt(":8B')Up");
        $User->save();

        $User = new User();
        $User->name = "Jacek";
        $User->imie = "Jacek";
        $User->nazwisko ="Kurek";
        $User->username = "Jaca";
        $User->email = "gdfgfd@wp.pl";
        $User->password = bcrypt("!f%4`pT#");
        $User->save();

        $User = new User();
        $User->name = "Michał";
        $User->imie = "Michał";
        $User->nazwisko ="Miącz";
        $User->username = "Michal";
        $User->email = "rada@wp.pl";
        $User->password = bcrypt(")@YMb4-s");
        $User->save();

        $User = new User();
        $User->name = "Patryk";
        $User->imie = "Patryk";
        $User->nazwisko ="Rzedzicki";
        $User->username = "Rzedzix";
        $User->email = "rzedzix@wp.pl";
        $User->password = bcrypt("AzX?#k6_");
        $User->save();

        $User = new User();
        $User->name = "Sebastian";
        $User->imie = "Sebastian";
        $User->nazwisko ="Niedźwiedź";
        $User->username = "Seba";
        $User->email = "gfdgfd@wp.pl";
        $User->password = bcrypt("6}F&Qk45");
        $User->save();

        $User = new User();
        $User->name = "Dawid";
        $User->imie = "Dawid";
        $User->nazwisko ="Lewandowski";
        $User->username = "Lewy";
        $User->email = "lewy@wp.pl";
        $User->password = bcrypt("nB\&kU");
        $User->save();

        $User = new User();
        $User->name = "Krystian";
        $User->imie = "Krystian";
        $User->nazwisko ="Harlej";
        $User->username = "Kryptos";
        $User->email = "fdfs@wp.pl";
        $User->password = bcrypt("rMp7)#kS");
        $User->save();

        $User = new User();
        $User->name = "Marcin";
        $User->imie = "Marcin";
        $User->nazwisko ="Poprawa";
        $User->username = "Poprawsie";
        $User->email = "hgfhgf@wp.pl";
        $User->password = bcrypt("u@/%BK5#");
        $User->save();
        
        $User = new User();
        $User->name = "Karol";
        $User->imie = "Karol";
        $User->nazwisko ="Trawiński";
        $User->username = "Snajper";
        $User->email = "gfd@wp.pl";
        $User->password = bcrypt("q^RVm3>*");
        $User->save();

        $User = new User();
        $User->name = "Basia";
        $User->imie = "Basia";
        $User->nazwisko ="Kołodziej";
        $User->username = "Kolos";
        $User->email = "hgfhggfdf@wp.pl";
        $User->password = bcrypt("_Z9s]`!");
        $User->save();

        $User = new User();
        $User->name = "Ola";
        $User->imie = "Aleksandra";
        $User->nazwisko ="Liwiak";
        $User->username = "PaniPrezes";
        $User->email = "Prezes@wp.pl";
        $User->password = bcrypt("6D#/&Dfa");
        $User->save();

        $User = new User();
        $User->name = "Patryk";
        $User->imie = "Patryk";
        $User->nazwisko ="Pieńkowski";
        $User->username = "Patryś";
        $User->email = "hgfhggff@wp.pl";
        $User->password = bcrypt("y9{!RZK");
        $User->save();

        $User = new User();
        $User->name = "Kamil";
        $User->imie = "Kamil";
        $User->nazwisko ="Skowronek";
        $User->username = "Skowyrius";
        $User->email = "skowyrius@wp.pl";
        $User->password = bcrypt("+[4s-\Cy");
        $User->save();

        $User = new User();
        $User->name = "Damian";
        $User->imie = "Damian";
        $User->nazwisko ="Filip";
        $User->username = "Damianek";
        $User->email = "sraczka@wp.pl";
        $User->password = bcrypt("8Pq4.Msb");
        $User->save();

        $User = new User();
        $User->name = "Adrian";
        $User->imie = "Adrian";
        $User->nazwisko ="Nagnajewicz";
        $User->username = "Adrianek";
        $User->email = "sucz@wp.pl";
        $User->password = bcrypt("3>]kPqsK");
        $User->save();

        $User = new User();
        $User->name = "Bartosz";
        $User->imie = "Bartosz";
        $User->nazwisko ="Dardziński";
        $User->username = "Bartosz";
        $User->email = "aloalo@wp.pl";
        $User->password = bcrypt("}BQ>%h7j");
        $User->save();

        $User = new User();
        $User->name = "Dawid";
        $User->imie = "Dawid";
        $User->nazwisko ="Serwejuk";
        $User->username = "Serwejuk";
        $User->email = "serwejuk@wp.pl";
        $User->password = bcrypt("2m;&F,\?");
        $User->save();

        $User = new User();
        $User->name = "Patryk";
        $User->imie = "Patryk";
        $User->nazwisko ="Wybacz";
        $User->username = "Wybo";
        $User->email = "wybo@wp.pl";
        $User->password = bcrypt("Jj>2!>L2");
        $User->save();

        $User = new User();
        $User->name = "Piotr";
        $User->imie = "Piotr";
        $User->nazwisko ="Czępiński";
        $User->username = "Czempion";
        $User->email = "czempion@wp.pl";
        $User->password = bcrypt("Y6^{:GkC");
        $User->save();

        $User = new User();
        $User->name = "Norbert";
        $User->imie = "Norbert";
        $User->nazwisko ="Budzyński";
        $User->username = "Norbert";
        $User->email = "norbert@wp.pl";
        $User->password = bcrypt("GaD,-7hp");
        $User->save();

        $User = new User();
        $User->name = "Szymon";
        $User->imie = "Szymon";
        $User->nazwisko ="Mikołajczuk";
        $User->username = "Mikołaj";
        $User->email = "Mikołaj@wp.pl";
        $User->password = bcrypt("BGw6{u@2");
        $User->save();
    }
}
