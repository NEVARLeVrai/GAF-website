<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:site_name" content="GameAssetFactory 3D Creation">
    <meta property="og:title" content="GameAssetFactory">
    <meta property="og:description" content="Build worlds, piece by piece">
    <meta property="og:url" content="https://gameassetfactory.com/">
    <meta property="og:image" content="https://gameassetfactory-website-gaf.vercel.app/img/GameAssetFactoryLogo1024.webp">
    <link rel="icon" href="https://gameassetfactory-website-gaf.vercel.app/img/GameAssetFactoryLogopetit.ico">
    <?php
      $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
      $meta_title = 'GameAssetFactory - Build worlds, piece by piece';
      $meta_description = 'Game Asset Factory: 3D assets, environments, materials, and custom work.';
      switch ($current_page) {
        case 'products':
          $meta_title = 'Products - GameAssetFactory';
          $meta_description = 'Discover our ready-to-use 3D packs, custom solutions, and services.';
          break;
        case 'gallery':
          $meta_title = 'Gallery - GameAssetFactory';
          $meta_description = 'Explore our gallery of 3D environments, props, and materials.';
          break;
        case 'jobs':
          $meta_title = 'Jobs - GameAssetFactory';
          $meta_description = 'Join Game Asset Factory: remote freelance opportunities for 3D artists.';
          break;
        case 'contact':
          $meta_title = 'Contact - GameAssetFactory';
          $meta_description = 'Contact Game Asset Factory via Discord or email for inquiries.';
          break;
        case 'mention':
          $meta_title = 'Legal Mentions - GameAssetFactory';
          $meta_description = 'Legal mentions and terms for Game Asset Factory website.';
          break;
      }
      $canonical = '/';
      if ($current_page && $current_page !== 'home') { $canonical = '/' . $current_page . '/'; }
    ?>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES); ?>" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>" />
    <meta name="robots" content="index,follow" />
    <title><?php echo htmlspecialchars($meta_title, ENT_QUOTES); ?></title>
    
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/newcss.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"

      
    />
  </head>



  <header class="header" id="header">
    <nav class="nav container">
        <div class="nav-background"></div>
        <div class=nav__icon></div>
          <!-- Bouton de changement de thème -->
          <img src="../img/GameAssetFactoryLogo1024.webp" alt="logo" class="nav__img" width="64" height="64" />
        </div>
        </div>

        <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="/home/" class="nav__link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>">
                    <i class="uil uil-estate nav__icon"></i>Home
                </a>
            </li>
            <li class="nav__item">
                <a href="/products/" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'active' : ''; ?>">
                    <i class="uil uil-box nav__icon"></i>Products
                </a>
            </li>
            <li class="nav__item">
                <a href="/gallery/" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'gallery') ? 'active' : ''; ?>">
                    <i class="uil uil-images nav__icon"></i>Gallery
                </a>
            </li>
            <li class="nav__item">
                <a href="/jobs/" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'jobs') ? 'active' : ''; ?>">
                    <i class="uil uil-briefcase-alt nav__icon"></i>Jobs
                </a>
            </li>
            <li class="nav__item">
                <a href="/contact/" class="nav__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'contact') ? 'active' : ''; ?>">
                    <i class="uil uil-envelope nav__icon"></i>Contact
                </a>
            </li>
        </ul>
        <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__btns">
        <i class="uil uil-moon change-theme" id="theme-button"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
        <i class="uil uil-apps"></i>
        </div>
    </nav>
  </header>


<body>
    <div id="loader-wrapper">
        <img src="../img/GameAssetFactoryLogo1024.webp" id="loader-logo" alt="Logo" width="128" height="128">
    </div>
    <?php
        $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
        
        switch($current_page) {
            case 'products':
                $page_title = "Products - GameAssetFactory";
                include __DIR__ . '/products.php';
                break;
            case 'gallery':
                $page_title = "Gallery - GameAssetFactory";
                include __DIR__ . '/gallery.php'; 
                break;
            case 'jobs':
                $page_title = "Jobs - GameAssetFactory";
                include __DIR__ . '/jobs.php';
                break;
            case 'contact':
                $page_title = "Contact - GameAssetFactory";
                include __DIR__ . '/contact.php';
                break;
            case 'mention':
                $page_title = "Legal Mentions - GameAssetFactory";
                include __DIR__ . '/mention.php';
                break;
            default:
                $page_title = "GameAssetFactory - Build worlds, piece by piece";
                include __DIR__ . '/home.php';
                break; 
        }
    ?>



    <script>
      window.si = window.si || function () { (window.siq = window.siq || []).push(arguments); };
    </script>
    <script defer src="/_vercel/speed-insights/script.js"></script>


    <script>
      window.va = window.va || function () { (window.vaq = window.vaq || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    </body>




  <script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
  <script src="../js/ptj.js"></script>




  <!--================== Footer ===============-->
  <footer class="footer">
    <div class="footer__bg">
      <div class="footer__container container grid">
        <div class="footer__content">
          <h3 class="footer__title">GameAssetFactory</h3>
          <p class="footer__description">
            Build worlds, piece by piece
          </p>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Social</h3>

          <div class="footer__social-icons">

            <a href="https://www.fab.com/sellers/GameAssetFactory" target="_blank" rel="noopener" class="footer__social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" class="footer__icon">
                  <path fill="currentColor" d="M3.537 0C2.165 0 1.66.506 1.66 1.879V18.44a4.262 4.262 0 0 0 .02.433c.031.3.037.59.316.92c.027.033.311.245.311.245c.153.075.258.13.43.2l8.335 3.491c.433.199.614.276.928.27h.002c.314.006.495-.071.928-.27l8.335-3.492c.172-.07.277-.124.43-.2c0 0 .284-.211.311-.243c.28-.33.285-.621.316-.92a4.261 4.261 0 0 0 .02-.434V1.879c0-1.373-.506-1.88-1.878-1.88zm13.366 3.11h.68c1.138 0 1.688.553 1.688 1.696v1.88h-1.374v-1.8c0-.369-.17-.54-.523-.54h-.235c-.367 0-.537.17-.537.539v5.81c0 .369.17.54.537.54h.262c.353 0 .523-.171.523-.54V8.619h1.373v2.143c0 1.144-.562 1.71-1.7 1.71h-.694c-1.138 0-1.7-.566-1.7-1.71V4.82c0-1.144.562-1.709 1.7-1.709zm-12.186.08h3.114v1.274H6.117v2.603h1.648v1.275H6.117v2.774h1.74v1.275h-3.14zm3.816 0h2.198c1.138 0 1.7.564 1.7 1.708v2.445c0 1.144-.562 1.71-1.7 1.71h-.799v3.338h-1.4zm4.53 0h1.4v9.201h-1.4zm-3.13 1.235v3.392h.575c.354 0 .523-.171.523-.54V4.965c0-.368-.17-.54-.523-.54zm-3.74 10.147a1.708 1.708 0 0 1 .591.108a1.745 1.745 0 0 1 .49.299l-.452.546a1.247 1.247 0 0 0-.308-.195a.91.91 0 0 0-.363-.068a.658.658 0 0 0-.28.06a.703.703 0 0 0-.224.163a.783.783 0 0 0-.151.243a.799.799 0 0 0-.056.299v.008a.852.852 0 0 0 .056.31a.7.7 0 0 0 .157.245a.736.736 0 0 0 .238.16a.774.774 0 0 0 .303.058a.79.79 0 0 0 .445-.116v-.339h-.548v-.565H7.37v1.255a2.019 2.019 0 0 1-.524.307a1.789 1.789 0 0 1-.683.123a1.642 1.642 0 0 1-.602-.107a1.46 1.46 0 0 1-.478-.3a1.371 1.371 0 0 1-.318-.455a1.438 1.438 0 0 1-.115-.58v-.008a1.426 1.426 0 0 1 .113-.57a1.449 1.449 0 0 1 .312-.46a1.418 1.418 0 0 1 .474-.309a1.58 1.58 0 0 1 .598-.111a1.708 1.708 0 0 1 .045 0zm11.963.008a2.006 2.006 0 0 1 .612.094a1.61 1.61 0 0 1 .507.277l-.386.546a1.562 1.562 0 0 0-.39-.205a1.178 1.178 0 0 0-.388-.07a.347.347 0 0 0-.208.052a.154.154 0 0 0-.07.127v.008a.158.158 0 0 0 .022.084a.198.198 0 0 0 .076.066a.831.831 0 0 0 .147.06c.062.02.14.04.236.061a3.389 3.389 0 0 1 .43.122a1.292 1.292 0 0 1 .328.17a.678.678 0 0 1 .207.24a.739.739 0 0 1 .071.337v.008a.865.865 0 0 1-.081.382a.82.82 0 0 1-.229.285a1.032 1.032 0 0 1-.353.18a1.606 1.606 0 0 1-.46.061a2.16 2.16 0 0 1-.71-.116a1.718 1.718 0 0 1-.593-.346l.43-.514c.277.223.578.335.9.335a.457.457 0 0 0 .236-.05a.157.157 0 0 0 .082-.142v-.008a.15.15 0 0 0-.02-.077a.204.204 0 0 0-.073-.066a.753.753 0 0 0-.143-.062a2.45 2.45 0 0 0-.233-.062a5.036 5.036 0 0 1-.413-.113a1.26 1.26 0 0 1-.331-.16a.72.72 0 0 1-.222-.243a.73.73 0 0 1-.082-.36v-.008a.863.863 0 0 1 .074-.359a.794.794 0 0 1 .214-.283a1.007 1.007 0 0 1 .34-.185a1.423 1.423 0 0 1 .448-.066a2.006 2.006 0 0 1 .025 0zm-9.358.025h.742l1.183 2.81h-.825l-.203-.499H8.623l-.198.498h-.81zm2.197.02h.814l.663 1.08l.663-1.08h.814v2.79h-.766v-1.602l-.711 1.091h-.016l-.707-1.083v1.593h-.754zm3.469 0h2.235v.658h-1.473v.422h1.334v.61h-1.334v.442h1.493v.658h-2.255zm-5.3.897l-.315.793h.624zm-1.145 5.19h8.014l-4.09 1.348z"/>
              </svg>
            </a>

            <a href="https://discord.gg/tsywd9BwCn" target="_blank" rel="noopener" class="footer__social-link">
              <svg class="footer__icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011a.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0a8.258 8.258 0 0 0-.412-.833a.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02a.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059a.051.051 0 0 0-.018-.011a8.875 8.875 0 0 1-1.248-.595a.05.05 0 0 1-.02-.066a.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085a8.254 8.254 0 0 1-1.249.594a.05.05 0 0 0-.03.03a.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019a13.235 13.235 0 0 0 4.001-2.02a.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612c0-.889.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613c0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612c0-.889.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613c0 .888-.631 1.612-1.438 1.612Z"/>
              </svg>
            </a>

            <a href="https://www.youtube.com/@Unreal3D" target="_blank" rel="noopener" class="footer__social-link">
                <svg class="footer__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                </svg>
            </a>
            <a href="https://github.com/GameAssetFactory/GAF-website" target="_blank" rel="noopener" class="footer__social-link">
                <svg class="footer__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="footer__copy">
        <p>© 2025 GameAssetFactory. All rights reserved.</p>
        <p>This website uses MiSans Fonts under the MiSans Fonts Intellectual Property License Agreement from Xiaomi Inc.</p>
        <p>Some portions of the underlying codebase are open-source and remain the property of their respective authors.</p>
        <p>Created with ❤️ by NEVAR</p>
        <br>
        <p><a href="/mention/" class="footer__link <?php echo (isset($_GET['page']) && $_GET['page'] == 'mention') ? 'active' : ''; ?>">
            <i class="uil uil-info-circle"></i> View the legal notices
        </a></p>

        <br>
      </div>
    </div>
  </footer>

<!-- Ajouter ce script avant la fermeture de body -->
<script>
    // Supprimer le hashtag de l'URL si présent
    if (window.location.hash) {
        history.replaceState(null, null, window.location.pathname + window.location.search);
    }
</script>
</html>

