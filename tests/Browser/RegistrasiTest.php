<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Mengarahkan ke URL tertentu dalam aplikasi
                    ->assertSee('Modul 3') ////Memastikan bahwa teks modul 3 terdapat pada halaman
                    ->clickLink('Register') //Menekan tautan di browser
                    ->assertPathIs('/register') //Memastikan path dari halaman yang dijalankan
                    ->type('name','admin') //Berinteraksi dengan elemen input
                    ->type('email','admin@gmail.com') //Berinteraksi dengan elemen input
                    ->type('password','password') //Berinteraksi dengan elemen input
                    ->type('password','password') //Berinteraksi dengan elemen input
                    ->press('REGISTER'); //Menekan elemen tombol pada halaman
        });
    }
}
