<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- <link rel="stylesheet" href="src/output.css" /> -->
  </head>

  <body>
    <header class="bg-white container mx-auto w-full">
      <nav class="flex justify-between items-center">
        <div>
          <img
            class="w-16 cursor-pointer"
            src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png"
            alt="..."
          />
        </div>
        <div class="flex items-center space-x-5">
          <button class="text-black px-5 py-2 rounded-full" ><a href="{{route('register')}}">S'inscrire</a> </button>
          <button
            class="bg-white text-indigo-600 px-5 py-2 rounded-full border-2 border-indigot-600 hover:bg-white hover:text-indigo-600 hover:border-indigo-600"
          > <a href="{{route('login')}}"> Se connecter</a>
        
          </button>
        </div>
      </nav>
    </header>
    <div
      id="accueil"
      class="text-center pt-40 pb-56 sm:pb-80 md:pt-20 container mx-auto"
    >
      <h3
        class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
      >
        <span class="block xl:inline text-indigo-600"
          >Une plateforme unique</span
        ><br />
        <span class="block text-black xl:inline"
          >pour la gestion de vos cryptos
        </span>
      </h3>
      <p
        class="mt-3 max-w-sm mx-auto text-gray-700 sm:text-lg md:mt-5 md:text-xl md:max-w-2xl lg:max-w-3xl"
      >
        Ouvrez un compte gratuit en quelques minutes depuis votre téléphone et
        gérer votre argent.
      </p>
      <div
        class="max-w-md mx-auto flex flex-col items-center mt-8 space-y-5 sm:space-y-0 sm:flex-row"
      >
        <div class="flex max-w-md space-x-4">
          <label for="email-address" class="sr-only">Email </label>
          <input
            id="email-address"
            name="email"
            type="email"
            autocomplete="email"
            required
            class="flex-auto rounded-md border w-96 bg-white bg-opacity-5 px-5 py-3 text-lg text-black shadow-sm focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-base sm:leading-6"
            placeholder="Enter your email"
          />
          <button
            type="submit"
            class="rounded-md bg-indigo-500 px-8 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus-visible:ring focus-visible:ring-indigo-500 focus-visible:ring-opacity-50"
          >
            Démarrez
          </button>
        </div>
      </div>
      <br />

      <div class="flex justify-center items-center">
      <img src="{{ asset('trad.png') }}" alt="">

      </div>

      <div class="flex items-center md:flex-nowrap justify-between px-8 mt-14">
        <div>
          <img class="w-40" src="btc_logo.svg" />
        </div>
        <div>
          <img class="w-40" src="bitmex logo.svg" />
        </div>
        <div>
          <img class="w-40" src="binance logo.svg" />
        </div>
        <div>
          <img class="w-40" src="coinbase_logo.svg" />
        </div>
        <div>
          <img class="w-40" src="tether_logo.svg" />
        </div>
      </div>
      <div class="bg-violet py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44 millions</dd>
              <dt class="text-base leading-7 text-gray-600">de personnes nous ont rejoins </dt>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">50k</dd>
              <dt class="text-base leading-7 text-gray-600">Utilisateurs VVIP </dt>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
              <dt class="text-base leading-7 text-gray-600">New users annually</dt>
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">46,000</dd>
            </div>
          </dl>
        </div>
      
    </div>
    
    <div class="flex container ml-auto space-x-28">
      <div class="flex-1 mt-10 p-18 box-border">
        <h1 class="text-neutral-950 text-5xl font-bold">
          Gerez vos crypto-<br />mmoanies de façon <br />
          plus fiables
        </h1>
        <ul class="mt-16 flex flex-col space-y-6">
          <li class="flex space-x-6 border-b pb-10">
            <span class="text-[#D0DBFF] text-3xl font-bold">01.</span>
            <div class="flex flex-col space-y-2">
              <h1 class="font-bold text-2xl">Synchronisation entre les plateformes</h1>
              <p class="text-neutral-500">
                Que vous utilisiez notre interface web ou notre application
                mobile, vos données sont toujours synchronisées. Un seul compte
                pour tous nos services.
              </p>
            </div>
          </li>
          <li class="flex space-x-6 border-b pb-10">
            <span class="text-[#D0DBFF] text-3xl font-bold">02.</span>
            <div class="flex flex-col space-y-2">
              <h1 class="font-bold text-2xl">Plus de concentration, moins de désordre</h1>
              <p class="text-neutral-500">
                Pas de publicité, juste les crypto-monnaies et le contenu que vous aimez.
              </p>
            </div>
          </li>
          <li class="flex space-x-6 border-b pb-10">
            <span class="text-[#D0DBFF] text-3xl font-bold">03.</span>
            <div class="flex flex-col space-y-2">
              <h1 class="font-bold text-2xl">Sécurité par défaut</h1>
              <p class="text-neutral-500">
                Activez le mode de confidentialité et le verrouillage des applications pour protéger vos données.
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="flex-1">
        <img src="/img2.png" alt="" width="100%" />
      </div>
    </div>
    <div class="flex">
      <div class="flex-1">
        <img src="img2.png" alt="" width="100%" />
      </div>
      <div class="flex-1 mt-10 p-36 box-border">
        <h1 class="text-neutral-950 text-5xl font-bold">
          Créer un portefeuille aujourd'hui
        </h1>
        <p class="mt-7 text-2xl">
            Que vous utilisiez notre interface web ou notre application mobile,
            vos données sont toujours synchronisées. Un seul compte pour tous
            nos services.
        </p>
      </div>
    </div>
    <div class="flex container ml-auto space-x-28">
      <div class="flex-1 mt-10 p-18 box-border">
        <h1 class="text-neutral-950 text-5xl font-bold">
          Des échanges de crypto-monnaies rapide comme l'éclair
        </h1>
      <p class="mt-10"> La bourse prend en charge le dollar, l'euro et la livre sterling. Investissez lentement dans les crypto-monnaies en programmant des achats quotidiens, hebdomadaires ou mensuels.</p>
      </div>
      <div class="flex-1">
        <img src="img2.png" alt="" width="100%" />
      </div>
    </div>
    <div class="flex">
      <div class="flex-1">
        <img src="img2.png" alt="" width="100%" />
      </div>
      <div class="flex-1 mt-10 p-36 box-border">
        <h1 class="text-neutral-950 text-5xl font-bold">
          La sécurité dès le premier jour 
        </h1>
        <p class="mt-7 text-2xl">
          Sûreté, sécurité et conformité. Achetez et vendez les monnaies numériques les plus courantes et suivez leur évolution en un seul endroit.
        </p>
      </div>
    </div>

   
    <div
      class="max-w-md mx-auto flex flex-col items-center mt-8 space-y-5 sm:space-y-0 sm:flex-row"
    >
      
    </div>
    <br />
    <div class="text-center max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
      <h1 class="text-5xl font-extrabold text-gray-900">Démarrez en quelques minutes</h1>
     
      <p class="mt-5 text-xl text-black-800">
        Il présente de nombreuses caractéristiques qui en font le meilleur endroit pour commencer à négocier.
      </p>

      <div
        class="mt-8 flex flex-wrap justify-center items-center flex-col space-x-0 md:space-x-10 md:flex-row"
      >
        <div
          class="flex flex-col max-w-sm min-h-[450px] shadow-md  ring-1 ring-zinc-300 w-72 h-full border border-gray-200 rounded-lg mt-5 px-6 py-4 text-left"
        >
          <div class="mb-5">
          
          
            <img
            src="Frame 219.svg"
            alt="check icone"
            class="flex-shrink-0 h-50 w-50"
          />
           
          </div>

              <span class="text-2xl text-gray-800 mx-auto font-bold w-96"
                >S'inscrire</span
              >
        

            <p>Achetez des bitcoins ou des ethereums, stockez-les en toute sécurité dans votre portefeuille ou envoyez-les facilement à vos amis. </p>
          
        </div>
        <div
        class="flex flex-col max-w-sm min-h-[450px] shadow-md  ring-1 ring-zinc-300 w-72 h-full border border-gray-200 rounded-lg mt-5 px-6 py-4 text-left"
      >
        <div class="mb-5">
        
        
          <img
          src="Frame 220.svg"
          alt="check icone"
          class="flex-shrink-0 h-50 w-50"
        />
         
        </div>

            <span class="text-2xl text-gray-800 mx-auto font-bold w-96"
              >Fonds</span
            >
      

          <p>Choisissez la méthode de paiement que vous préférez, comme le virement bancaire ou la carte de crédit, pour recharger votre porte-monnaie.  </p>
        
      </div>

      <div class="flex flex-col max-w-lg min-h-[450px] shadow-md ring-1 ring-zinc-300 w-72 h-full border border-gray-200 rounded-lg mt-5 px-6 py-4 text-left">

      <div class="mb-5">
      
      
        <img
        src="Frame 221.svg"
        alt="check icone"
        class="flex-shrink-0 h-50 w-50"
      />
       
      </div>

          <span class="text-2xl text-gray-800 mx-auto font-bold w-96"
            >Achetez <br>des crypto-monnaies</span
          >
    

        <p>Achetez des bitcoins ou des ethereums, stockez-les en toute sécurité dans votre portefeuille ou envoyez-les facilement à vos amis. </p>
      
    </div>

      </div>
    </div>
    
  </body>
</html>
