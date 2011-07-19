<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form test="a" action="<?php echo url_for('rejestracja/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <div class="reg-form">  
        <?php foreach ($form as $field) { ?>

            <?php if ($field->getName() == 'name') : ?>
                <p>Formularz można wypełnić do <strong>1 sierpnia (poniedziałek) 2011 r.</strong></p>

                <p>Formularz dotyczy osoby, a nie organizacji. W przypadku uczestnictwa więcej niż jednej osoby
                    z organizacji, prosimy pamiętać by dla każdego z uczestników wypełniony był osobny formularz.</p>

                <p><strong>ZGŁASZAM SWÓJ UDZIAŁ W CZĘŚCI KONFERENCYJNEJ VI OGÓLNOPOLSKIEGO FORUM INICJATYW
                        POZARZĄDOWYCH</strong></p>
            <?php endif; ?>    


            <?php if ($field->getName() == 'fee_number') : ?>
                <p><strong>Zgłaszam swój udział w konferencji i jednocześnie deklaruję opłatę w wysokości:</strong></p>
            <?php endif; ?>    

            <?php if ($field->getName() == 'fac_name') : ?>
                <p><em>* Uczestnicy VI OFIP-u mają możliwość skorzystania z lunchu, który będzie wydawany na terenie Kampusu
                        Głównego Uniwersytetu Warszawskiego, a więc tuż obok miejsca odbywania się konferencji. Lunch będzie
                        miał postać zimnego wegetariańskiego posiłku – tortilli, dużej kanapki i drożdżówki oraz kawy i herbaty.</em></p>

                <p>Dla <strong>grup od 3 osób</strong> mamy preferencyjne ceny. Prosimy o kontakt: rejestracja@ofip.org.pl</p>

                <p><strong>Opłaty</strong></p>

                <p>Wpłaty prosimy dokonać na konto organizatora OFIP-u:<br />
                    Stowarzyszenie na rzecz Forum Inicjatyw Pozarządowych<br />
                    ul. Szpitalna 5/5, 00-031 Warszawa<br />
                    93 1370 1037 0000 1701 4021 0400</p>

                <p>W tytule wpłaty prosimy wpisać nr faktury.</p>
            <?php endif; ?>    

            <?php if ($field->getName() == 'accommodation') : ?>
                <p><strong>Potwierdzenia</strong></p>

                <p>Na podstawie niniejszego zgłoszenia otrzymają Państwo do 12 sierpnia <strong>wstępne potwierdzenie
                        uczestnictwa </strong>wraz z elektroniczną wersją faktury z terminem płatności 7 dni.
                    <strong>Ostateczne potwierdzenie uczestnictwa</strong> dostaną Państwo, na podstawie wniesionej opłaty, na początku
                    września.</p>

                <p><strong>Oryginał faktury</strong> będzie do odebrania w czasie konferencji w recepcji razem z kartami uczestników.</p>

                <p><strong>Noclegi</strong></p>
            <?php endif; ?>     


            <?php if ($field->getName() == 'participation_1') : ?>
                <p><em>W przeciągu tygodnia od przesłania zgłoszenia organizatorowi przyjazdu grupowego przesłane zostaną
                        informacje dotyczące dostępnych noclegów i warunków rezerwacji.</em></p>

                <p>UWAGA: Koszty dojazdu na konferencję oraz koszty noclegów uczestnicy/organizacja pokrywa we
                    własnym zakresie.</p>

                <p>Organizatorzy OFIP-u dysponują funduszem stypendialnym służącym wsparciu tych osób i organizacji,
                    które z różnych względów nie mogą sobie pozwolić na samodzielne opłacenie uczestnictwa, dojazdu i
                    noclegów w czasie VI OFIP-u. Osoby zainteresowane tą formą wsparcia proszone są o kontakt na adres:
                    rejestracja@ofip.org.pl.</p>

                <p>W piątek 16 września odbędą się najpierw trzy sesje plenarne, w których wezmą udział wszyscy uczestnicy
                    VI OFIP-u. Dotyczyć one będą najważniejszych kwestii dla całego sektora obywatelskiego. Po południu (w
                    godz. 15.00-17.00) odbędą się natomiast <strong>równoległe sesje branżowe</strong> – spotkania dotyczące działalności
                    organizacji w poszczególnych obszarach tematycznych. Ze względów organizacyjnych prosimy już teraz
                    o wskazanie sesji, w których wezmą Państwo udział.</p>

                <p><strong>W piątek 16 września weźmiemy udział w następujących sesjach:</strong>
                    <em>(Sesje będą się odbywały w tym samym czasie, w związku z czym jedna osoba może wziąć udział tylko w
                        jednej sesji)</em></p>
            <?php endif; ?>   

            <?php if ($field->getName() == 'fee_number' || $field->getName() == 'name' || $field->getName() == 'organization_name' || $field->getName() == 'fac_name' || $field->getName() == 'accommodation' || $field->getName() == 'participation1' || $field->getName() == 'agreement1' || $field->getName() == 'agreement2') : ?>
                <div class="field">
                    <?php if($field->getName() == 'fac_name'): ?>
                    <div>Dane do faktury (prosimy wypełnić, jeśli inne niż podane powyżej)</div>
                    <?php endif; ?>
                <?php endif; ?>    
                <div class="inner-field">    
                    <?php if (strpos($field->getName(), 'agreement') !== false || strpos($field->getName(), 'participation') !== false || strpos($field->getName(), 'accommodation') !== false) { ?>
                        <div class="bool-input"> <?php echo($field->render()); ?></div>
                        <div class="bool-label"><?php echo ($field->renderLabel()); ?></div>
                        
                        <?php if ($field->renderError()) { ?>
                            <div class="label" style="float:left;width:100%;border-top:2px solid red;color:red;"></div>
                        <?php } ?>
                    <?php } else { ?>

                        <div class="label"><?php echo ($field->renderLabel()); ?></div>
                        <div class="input"> <?php echo($field->render()); ?></div>
                        <?php if ($field->renderError()) { ?>
                            <div class="label" style="width:100%;border-top:2px solid red;color:red;"></div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php if ($field->getName() == 'fee_number' || $field->getName() == 'my_email' || $field->getName() == 'NIP' || $field->getName() == 'fac_NIP' || $field->getName() == 'accommodation' || $field->getName() == 'participation15' || $field->getName() == 'agreement1' || $field->getName() == 'agreement2') : ?>
                </div>
            <?php endif; ?> 

        <?php } ?>
    </div>      

    <input type="submit" name="submit" value="wyślij zgłoszenie" />
</form>
