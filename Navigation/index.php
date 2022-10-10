<header id="header" class="page-header page-header--default z-index">
    <div class="page-header__content">
        <div class="page-header__branding page-header__branding--cegos">
            <div><a href=" https://www.cegos.fr"><img alt="Logo Cegos" src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/logo-2020.png" loading="lazy"><span class="baseline">Leader international de la formation<br>professionnelle et continue</span></a></div>
        </div>
        <form class="page-header__search" action="/search">
            <div class="input-layout"><input placeholder="Rechercher une formation" name="q" class="form-control js-autocomplete-demo js-search-panel-open" onkeypress="submitOnEnterKey(event, 'submitSearch1')" autocomplete="off"><button type="submit" class="bt-search" value="Rechercher"></button></div>
        </form>
        <ul class="page-header__content-right">
            <li class="phone"><a href="#"><i class="icon"></i><span class="menu-label">01 55 00 95 95</span></a></li>
            <li class="contact"><a href="/contact"><i class="icon"></i><span class="menu-label">Nous contacter</span></a></li>
            <li class="client has-chidren" id="accountWrapper" data-url-forgot="https://www.cegos.fr/espace-client/oubli-mot-passe"><a href="#"><i class="icon"></i><span class="menu-label">Espace client</span></a>
                <div class="page-header__account page-header__account--login has-error is-visible">
                    <div class="page-header__account-header"><span><strong>Identifiez-vous</strong></span></div>
                    <form class="page-header__account-body p-10" data-bitwarden-watching="1">
                        <div class="page-header__account-form"><input type="email" name="login" placeholder="Saisissez votre email" class="form-control"></div>
                        <div class="page-header__account-form"><input type="password" name="password" placeholder="Saisissez votre mot de passe" class="form-control"></div>
                        <div class="error-login-message none"><span>L'adresse mail et le mot de passe ne correspondent pas, veuillez réessayer</span></div>
                        <div class="loadingAccountConnection" data-img="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif"><img src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif" height="20" width="20"></div>
                        <div class="page-header__account-form"><button data-header-login="" type="submit" class="cta-primary red" onclick="return false;">Se connecter</button></div>
                    </form>
                    <div class="page-header__account-footer">
                        <ul>
                            <li class="motdepasseoublie"><a href="/espace-client/oubli-mot-passe">Mot de passe oublié ?</a></li>
                            <li class="creeruncompte"><a href="/espace-client/creation-compte">Créer un compte</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="selection"><a href="/espace-client/ma-selection" data-wishlist=""><i class="icon"></i><i class="count"><span data-count="">0</span></i></a>
                <div data-mini-cart="" data-duration-label="Durée" class="mini-cart">
                    <div class="mini-cart__head"><span>Vous venez d'ajouter à votre sélection</span></div>
                    <div class="mini-cart__scrollable">
                        <ul class="mini-cart__items">
                            <script id="gtmMiniCartScript" data-gtm="">
                                const gtm = document.querySelector("#gtmMiniCartScript").dataset.gtm;
                                if (gtm != '') {
                                    dataLayer.push(gtm);
                                }
                            </script>
                        </ul>
                    </div>
                    <div class="mini-cart__actions">
                        <div class="mini-cart__ctas">
                            <div class="mini-cart__cta"><a data-mini-cart-close="" class="cta-secondary dark">Continuer ma sélection</a></div>
                            <div class="mini-cart__cta"><a href="/espace-client/ma-selection" class="cta-secondary red cta-default--cart">Ma sélection</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <nav class="main-nav is-desktop">
            <ul class="primary-nav">
                <li class="has-children has-col-last can-open"><a href="/formations"><span>Domaines de formation</span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden has-col-last">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <div class="col">
                            <li><a href="/formations/achats"> Achats </a></li>
                            <li><a href="/formations/assistante"> Assistant(e) </a></li>
                            <li><a href="/formations/banque"> Banque </a></li>
                            <li><a href="/formations/bureautique-paocao"> Bureautique – PAO/CAO </a></li>
                            <li><a href="/formations/conduite-du-changement"> Changement </a></li>
                            <li><a href="/formations/coaching"> Coaching </a></li>
                            <li><a href="/formations/commercial-ventes"> Commercial – Vente </a></li>
                            <li><a href="/formations/communication"> Communication </a></li>
                            <li><a href="/formations/comptabilite-fiscalite"> Comptabilité - Fiscalité </a></li>
                            <li><a href="/formations/controle-de-gestion-et-pilotage-de-la-performance"> Contrôle de gestion </a></li>
                            <li><a href="/formations/creation-dentreprise"> Création d'entreprise </a></li>
                            <li><a href="/formations/developpement-personnel"> Développement personnel </a></li>
                            <li><a href="/formations/transformation-digitale-de-lentreprise"> Digital </a></li>
                            <li><a href="/formations/direction-de-lentreprise-et-cadre-de-direction"> Direction de l'entreprise </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/formations/droit-des-affaires"> Droit des affaires </a></li>
                            <li><a href="/formations/droit-du-travail-et-relations-sociales"> Droit social </a></li>
                            <li><a href="/formations/efficacite-professionnelle"> Efficacité professionnelle </a></li>
                            <li><a href="/formations/finance-tresorerie"> Finance – Trésorerie </a></li>
                            <li><a href="/formations/formation"> Formation </a></li>
                            <li><a href="/formations/gestion-du-temps"> Gestion du temps </a></li>
                            <li><a href="/formations/services-generaux-environnement-de-travail-immobilier-dentreprise"> Immo &amp; Services généraux </a></li>
                            <li><a href="/formations/systemes-dinformation-informatique"> Informatique - SI </a></li>
                            <li><a href="/formations/innovation-creativite-2"> Innovation - Créativité </a></li>
                            <li><a href="/formations/international-developpement-des-ventes-a-lexport"> International </a></li>
                            <li><a href="/formations/supply-chain-logistique-transport"> Logistique - Supply chain </a></li>
                            <li><a href="/formations/management-et-leadership"> Management </a></li>
                            <li><a href="/formations/marketing-marketing-digital"> Marketing </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/formations/audit-organisation-conseil"> Organisation - Audit </a></li>
                            <li><a href="/formations/paie-et-administration-du-personnel"> Paie/Admin. du personnel </a></li>
                            <li><a href="/formations/production-lean"> Production – Lean </a></li>
                            <li><a href="/formations/management-de-projets-gestion-de-projets"> Projet </a></li>
                            <li><a href="/formations/qualite-sante-securite-environnement"> Qualité-Santé-Sécurité-Env </a></li>
                            <li><a href="/formations/qualite-de-vie-sante-et-bien-etre-au-travail"> QVT </a></li>
                            <li><a href="/formations/relation-client"> Relation client </a></li>
                            <li><a href="/formations/ressources-humaines"> Ressources Humaines </a></li>
                            <li><a href="/formations/rse-et-developpement-durable"> RSE - Développement durable </a></li>
                            <li><a href="/formations/secteur-public"> Secteur public </a></li>
                            <li><a href="/formations/soft-skills-competences-comportementales"> Soft skills </a></li>
                            <li><a href="/formations/travail-collaboratif-et-a-distance"> Travail à distance </a></li>
                            <li><a href="/formations/web"> Web </a></li>
                        </div>
                        <div data-col-last="" class="page_speed_2102744375 col" style="display: block;">
                            <li><a href="/formations/formations-100-a-distance"><span class="page_speed_958159431">Formations à distance</span></a></li>
                            <li><a href="/formations/les-nouveautes?year=2022"><span class="page_speed_1493065953">Nouveautés 2022</span></a></li>
                            <li><a href="/formations/formations-eligibles-au-cpf">Formations éligibles CPF</a></li>
                            <li><a href="/formations/formations-best">Formations Best</a></li>
                            <li><a href="/formations/cycles-certifiants">Cycles certifiants</a></li>
                            <li><a href="/solutions/formations-diplomantes">Formations diplômantes</a></li>
                            <li><a href="/formations/formations-pme-2">Formations PME</a></li>
                        </div>
                    </ul>
                </li>
                <li class="has-children can-open"><a href="/solutions"><span>Solutions</span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <div class="col">
                            <li><a href="/formations"> Formation inter </a></li>
                            <li><a href="/solutions/formation-intra-packagee"> Formation intra entreprise </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/solutions/formation-sur-mesure"> Formation sur-mesure </a></li>
                            <li><a href="/solutions/formations-diplomantes"> Formation diplômante </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/solutions/digital-learning"> Digital Learning &amp; Innovation </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/formations-e-learning"> Formations e-Learning </a></li>
                        </div>
                    </ul>
                </li>
                <li class="has-children can-open"><a href="#"><span>Vous êtes</span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <div class="col">
                            <li><a href="/services/services-entreprises"> Une entreprise </a></li>
                            <li><a href="/services/etablissements-publics"> Un établissement public </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/formations/formations-pme-2"> Une PME </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/services/cegos-pour-les-particuliers"> Un particulier </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/services/services-stagiaires"> Un participant </a></li>
                        </div>
                    </ul>
                </li>
                <li class="has-children can-open"><a href="/toutes-les-solutions-de-financements"><span>CPF | Financements</span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <div class="col">
                            <li><a href="/toutes-les-solutions-de-financements/le-cpf"> Compte Formation - CPF </a></li>
                            <li><a href="/services/services-entreprises/adherent-opco"> Financements OPCO </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/actualites/news/fne-crise-sanitaire-financement-des-formations-des-entreprises-impactees"> FNE Formation </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/toutes-les-solutions-de-financements/transitions-collectives-un-dispositif-pour-accompagner-les-reconversions-externes"> Transitions Collectives </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/toutes-les-solutions-de-financements/pro-a"> Pro-A </a></li>
                        </div>
                    </ul>
                </li>
                <li class="has-children can-open"><a href="/ressources"><span>Ressources</span></a>
                    <ul data-custom-scrollbar="" data-subitems-columns="" class="secondary-nav is--hidden">
                        <div class="go-back"><a href="#"><span class="back-label">Retour</span></a></div>
                        <div class="col">
                            <li><a href="/ressources/news"> Le fil d'actu Cegos </a></li>
                            <li><a href="/ressources/enquetes"> Enquêtes &amp; Baromètres </a></li>
                            <li><a href="/ressources/faq-reglementation-formation-professionnelle"> Règlementation de la formation </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/ressources/mag"> Le Mag </a></li>
                            <li><a href="/ressources/experts-et-communautes"> Nos experts &amp; communautés </a></li>
                            <li><a href="/fiches-metiers"> Fiches métiers </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/ressources/webinars-et-evenements"> Webinars et événements Cegos </a></li>
                            <li><a href="/solutions/references-clients"> Références clients </a></li>
                            <li><a href="/ressources/catalogues-pdf"> Catalogues PDF </a></li>
                        </div>
                        <div class="col">
                            <li><a href="/faq"> FAQ </a></li>
                            <li><a href="https://learninghub.cegos.com/login/index.php"> LearningHub </a></li>
                        </div>
                    </ul>
                </li>
                <li class="has-button-style"><a href="/ressources/mag"><span>Le Mag</span></a></li>
                <ul class="sidebar-nav__social list list--center list--horizontal">
                    <li><a href="https://www.facebook.com/cegos.formation" target="_blank" rel="nofollow noopener" class="social-link"><i class="icon icon--facebook"></i><span class="social-name">Facebook</span></a></li>
                    <li><a href="https://twitter.com/cegos" target="_blank" rel="nofollow noopener" class="social-link"><i class="icon icon--twitter"></i><span class="social-name">Twitter</span></a></li>
                    <li><a href="https://www.youtube.com/user/Cegosformation" target="_blank" rel="nofollow noopener" class="social-link"><i class="icon icon--youtube"></i><span class="social-name">YouTube</span></a></li>
                    <li><a href="https://www.linkedin.com/company/11745" target="_blank" rel="nofollow noopener" class="social-link"><i class="icon icon--linkedin"></i><span class="social-name">Linkedin</span></a></li>
                </ul>
            </ul>
        </nav>
    </div>
</header>
<header data-sticky="" class="page-header page-header--sticky">
    <div class="page-header__content">
        <div class="page-header__button-link"><button data-toggle-nav="" type="button" class="bt-menu" aria-label="Afficher/Masquer la navigation"><span class="bar"></span><span class="bar"></span><span class="bar"></span></button></div>
        <div class="page-header__branding"><a href="https://www.cegos.fr"><img alt="Logo Cegos" src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/logo.png" loading="lazy"></a></div>
        <form class="page-header__search" action="/search">
            <div class="input-layout"><input type="search" placeholder="Rechercher une formation" name="q" class="form-control inputsearch js-autocomplete-demo js-search-panel-open" autocomplete="off"><button type="submit" class="bt-search" aria-label="Rechercher" value="Rechercher"></button></div>
        </form>
        <ul class="page-header__content-right">
            <li class="contact"><a href="/contact"><i class="icon"></i><span class="menu-label">Nous contacter</span></a></li>
            <li class="client has-chidren " id="accountWrapper-sticky" data-url-forgot="https://www.cegos.fr/espace-client/oubli-mot-passe"><a href="#"><i class="icon"></i><span class="menu-label">Espace client</span></a>
                <div class="page-header__account page-header__account--login has-error is-visible">
                    <div class="page-header__account-header"><span><strong>Identifiez-vous</strong></span></div>
                    <form class="page-header__account-body p-10" data-bitwarden-watching="1">
                        <div class="page-header__account-form"><input type="email" name="login" placeholder="Saisissez votre email" class="form-control"></div>
                        <div class="page-header__account-form"><input type="password" name="password" placeholder="Saisissez votre mot de passe" class="form-control"></div>
                        <div class="error-login-message none"><span>L'adresse mail et le mot de passe ne correspondent pas, veuillez réessayer</span></div>
                        <div class="loadingAccountConnection" data-img="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif"><img src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif" height="20" width="20"></div>
                        <div class="page-header__account-form"><button data-header-login="" type="submit" class="cta-primary red" onclick="return false;">Se connecter</button></div>
                    </form>
                    <div class="page-header__account-footer">
                        <ul>
                            <li class="motdepasseoublie"><a href="/espace-client/oubli-mot-passe">Mot de passe oublié ?</a></li>
                            <li class="creeruncompte"><a href="/espace-client/creation-compte">Créer un compte</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="selection"><a href="#" data-wishlist=""><i class="icon"></i><i class="count"><span data-count="">0</span></i></a></li>
        </ul>
        <ul class="page-header__nav-mobile">
            <li class="contact"><a href="tel:0155009595" aria-label="0155009595"><i class="icon"></i><span class="menu-label"></span></a></li>
            <li class="pencil"><a href="/contact"><i class="icon"></i><span class="menu-label"></span></a></li>
            <li class="search"><a href="#" data-open-search-mobile="" aria-label="Rechercher"><i class="icon"></i></a></li>
            <li class="client"><a href="/espace-client/identification" aria-label="Espace client"><i class="icon"></i></a></li>
            <li class="selection"><a href="/espace-client/ma-selection" data-wishlist="" aria-label="Voir mon caddie"><i class="icon"></i><i class="count"><span data-count=""></span></i></a></li>
        </ul>
    </div>
    <form data-search-mobile="" class="page-header__search-mobile" action=" /search">
        <div class="input-layout"><input id="inputsearch1" type="search" placeholder="Rechercher une formation" name="q" class="form-control js-autocomplete-demo" autocomplete="off"><button type="submit" class="bt-search" aria-label="Rechercher" value="Rechercher"></button></div>
    </form>
</header>
<header data-sticky="" class="page-header page-header--sticky">
    <div class="page-header__content">
        <div class="page-header__button-link"><button data-toggle-nav="" type="button" class="bt-menu" aria-label="Afficher/Masquer la navigation"><span class="bar"></span><span class="bar"></span><span class="bar"></span></button></div>
        <div class="page-header__branding"><a href="https://www.cegos.fr"><img alt="Logo Cegos" src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/logo.png" loading="lazy"></a></div>
        <form class="page-header__search" action="/search">
            <div class="input-layout"><input type="search" placeholder="Rechercher une formation" name="q" class="form-control inputsearch js-autocomplete-demo js-search-panel-open" autocomplete="off"><button type="submit" class="bt-search" aria-label="Rechercher" value="Rechercher"></button></div>
        </form>
        <ul class="page-header__content-right">
            <li class="contact"><a href="/contact"><i class="icon"></i><span class="menu-label">Nous contacter</span></a></li>
            <li class="client has-chidren " id="accountWrapper-sticky" data-url-forgot="https://www.cegos.fr/espace-client/oubli-mot-passe"><a href="#"><i class="icon"></i><span class="menu-label">Espace client</span></a>
                <div class="page-header__account page-header__account--login has-error is-visible">
                    <div class="page-header__account-header"><span><strong>Identifiez-vous</strong></span></div>
                    <form class="page-header__account-body p-10" data-bitwarden-watching="1">
                        <div class="page-header__account-form"><input type="email" name="login" placeholder="Saisissez votre email" class="form-control"></div>
                        <div class="page-header__account-form"><input type="password" name="password" placeholder="Saisissez votre mot de passe" class="form-control"></div>
                        <div class="error-login-message none"><span>L'adresse mail et le mot de passe ne correspondent pas, veuillez réessayer</span></div>
                        <div class="loadingAccountConnection" data-img="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif"><img src="https://www.cegos.fr/vendor/laravel-theme-inter/dirAssets60128e8/media/img/loading-v5.gif" height="20" width="20"></div>
                        <div class="page-header__account-form"><button data-header-login="" type="submit" class="cta-primary red" onclick="return false;">Se connecter</button></div>
                    </form>
                    <div class="page-header__account-footer">
                        <ul>
                            <li class="motdepasseoublie"><a href="/espace-client/oubli-mot-passe">Mot de passe oublié ?</a></li>
                            <li class="creeruncompte"><a href="/espace-client/creation-compte">Créer un compte</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="selection"><a href="#" data-wishlist=""><i class="icon"></i><i class="count"><span data-count="">0</span></i></a></li>
        </ul>
        <ul class="page-header__nav-mobile">
            <li class="contact"><a href="tel:0155009595" aria-label="0155009595"><i class="icon"></i><span class="menu-label"></span></a></li>
            <li class="pencil"><a href="/contact"><i class="icon"></i><span class="menu-label"></span></a></li>
            <li class="search"><a href="#" data-open-search-mobile="" aria-label="Rechercher"><i class="icon"></i></a></li>
            <li class="client"><a href="/espace-client/identification" aria-label="Espace client"><i class="icon"></i></a></li>
            <li class="selection"><a href="/espace-client/ma-selection" data-wishlist="" aria-label="Voir mon caddie"><i class="icon"></i><i class="count"><span data-count=""></span></i></a></li>
        </ul>
    </div>
    <form data-search-mobile="" class="page-header__search-mobile" action=" /search">
        <div class="input-layout"><input id="inputsearch1" type="search" placeholder="Rechercher une formation" name="q" class="form-control js-autocomplete-demo" autocomplete="off"><button type="submit" class="bt-search" aria-label="Rechercher" value="Rechercher"></button></div>
    </form>
</header>