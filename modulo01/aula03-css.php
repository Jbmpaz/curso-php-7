<style>
    h2 {
        color: red;
    }
    .titulo {
        font-size: <?= 9 + 11 * 5 . "px" ?>;
    }
    [jojo] {
        color: yellow;
        font-size: 3rem;
        text-shadow: 1px 1px 0px black;
    }
</style>

<h2 class="titulo">Integração CSS</h2>

<p>
    <?php
        echo "<p jojo>PARAGRAFO</p> Texte <sub>SUB</sub> <sup jojo>SUP</sup> <br> <small style=\"font-size:.5rem;\">SMALL</small>";
    ?>
</p>