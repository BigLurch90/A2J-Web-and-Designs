<?php // Template Name: Home ?>

<?php get_header(); ?>

        <!-- Hero section -->
        <section class="flex flex-col lg:flex-row my-20 lg:my-0 px-8 h-full lg:h-screen text-center lg:text-start justify-between items-center gap-6 md:gap-10 lg:gap-16 max-w-screen-2xl">
            <div class="mt-12 lg:mt-0">
                <h1 class="text-4xl sm:text-6xl font-inconsolata font-semibold leading-[48px] sm:leading-[80px] mb-8">A2J Din Webbyrå<br> I Stockholm</h1>
                <p class="mb-12">Jag hjälper dig att skapa en webbsida som är snygg, funktionell och som konverterar besökare till kunder..</p>
                <div class="flex w-full gap-8 flex-wrap justify-center lg:justify-start">
                    <a href="portfolio.html"><button class="button-dark font-inconsolata text-xl">Mitt Portfolio</button></a>
                    <button class="open-form button-border-two font-inconsolata text-xl">Få en gratis offert</button>
                </div>
            </div>

            <figure >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.png" alt="Vector illustration of two peaples, working on a website" class="h-5/6">
            </figure>
        </section>

        <!-- Process section -->
        <section data-aos="fade-up" class="flex w-full justify-center items-center bg-gradient-to-tl from-light-green to-dark-green">
            <div class="flex flex-col xl:flex-row py-20 px-8 justify-between items-center gap-4 xl:gap-16 max-w-screen-2xl">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-image.png" alt="Image of a person working on a big display">
                </figure>
    
                <div class="text-light-yellow text-center xl:text-start">
                    <h4 class="text-2xl font-inconsolata mb-6">Min process:</h4>
                    <ol class="list-none xl:list-decimal ml-6 mb-12">
                        <li><span class="font-bold">Förståelse:</span> Jag börjar med att lära oss mer om din verksamhet, dina mål och din målgrupp.</li>
                        <li><span class="font-bold">Planering:</span> Jag samarbetar med dig för att skapa en detaljerad plan för din webbplats, inklusive design, funktionalitet och innehåll.</li>
                        <li><span class="font-bold">Design:</span> Jag skapar en vacker och modern design som återspeglar din varumärkesidentitet.</li>
                        <li><span class="font-bold">Utveckling:</span> Jag bygger din webbplats med den senaste tekniken och säkerställer att den är snabb, responsiv och säker.</li>
                        <li><span class="font-bold">Lansering:</span> Jag lanserar din webbplats och ger dig den utbildning du behöver för att hantera den på egen hand.</li>
                        <li><span class="font-bold">Underhåll:</span> Jag erbjuder löpande underhåll och support för att säkerställa att din webbplats alltid är uppdaterad och fungerar som den ska.</li>
                    </ol>
    
                    <h4 class="text-2xl font-inconsolata mb-6">Mina tjänster:</h4>
                    <ul class="list-none xl:list-disc ml-6 mb-12">
                        <li><span class="font-bold">Webbdesign:</span> Jag skapar skräddarsydda webbdesigner som är både snygga och funktionella.</li>
                        <li><span class="font-bold">Webbutveckling:</span> Jag bygger webbplatser med den senaste tekniken och säkerställer att de är snabba, responsiva och säkra.</li>
                        <li><span class="font-bold">SEO:</span> Jag hjälper dig att optimera din webbplats för sökmotorer så att du kan rankas högre i sökresultaten.</li>
                        <li><span class="font-bold">Digital marknadsföring:</span> Jag hjälper dig att skapa och implementera effektiva digitala marknadsföringskampanjer.</li>
                    </ul>
    
                    <h4 class="text-2xl font-inconsolata mb-6">Kontakta oss idag för en gratis konsultation!</h4>
                    <button class="open-form button-border font-inconsolata text-xl">Kontakta oss</button>
                </div>
            </div>
        </section>

        <!-- Expertess section -->
        <section data-aos="fade-up" id="services" class="flex flex-col items-center text-center my-20 px-8 max-w-screen-2xl">
            <h2 class="text-3xl sm:text-5xl font-inconsolata font-semibold mb-6 max-w-[1440px]">Expertis inom WordPress, Woocommerce och anpassad webbutveckling</h2>
            <p class="mb-12 max-w-[900px]">På A2J är jag specialiserade på en rad tekniker och plattformar, inklusive WordPress, Woocommerce och anpassad webbutveckling. Vårt team av experter har kunskapen och erfarenheten för att skapa högkvalitativa webbplatser som möter dina unika behov. Oavsett om du behöver en enkel WordPress-sajt eller en komplex e-handelsplattform har vi kompetensen att leverera exceptionella resultat.</p>
            
            <div class="flex flex-wrap justify-center gap-x-16 gap-y-12">
                <div class="flex flex-col max-w-[338px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/wordpress.svg" alt="WordPress logo" class="h-20 w-auto">
                    <h4>WordPress utvecklingstjänster</h4>
                    <p>Jag erbjuder professionella WordPress-utvecklingstjänster för att hjälpa dig bygga en kraftfull onlinenärvaro. Vårt team av skickliga utvecklare kan skapa anpassade WordPress-teman och plugins, optimera din webbplats för hastighet och prestanda, och ge löpande support och underhåll.</p>
                </div>
                <div class="flex flex-col max-w-[338px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/custom.svg" alt="Logo of a computer screen" class="h-20 w-auto">
                    <h4>Anpassad webbutveckling</h4>
                    <p>Om du har unika krav som inte kan tillgodoses med färdiga lösningar, är våra anpassade webbutvecklingstjänster den perfekta passformen. Vårt team kommer att arbeta nära dig för att förstå dina behov och skapa en skräddarsydd webbplats som speglar ditt varumärke och levererar exceptionell användarupplevelse.</p>
                </div>
            </div>
        
        </section>

        <!-- Call to action section -->
        <section data-aos="fade-up" class="flex w-full flex-col relative py-20 px-8 justify-between items-center text-center bg-gradient-to-tl from-light-green to-dark-green overflow-hidden max-2xl:text-shadow">
            <h2 class="font-inconsolata text-light-yellow text-4xl sm:text-5xl mb-6 z-10">Starta din digitala resa idag!</h2>
            <p class="text-light-yellow mb-12 z-10">Kontakta oss idag för en gratis konsultation och se hur vi kan hjälpa dig att ta dina idéer till nästa nivå!</p>
            <button class="open-form button-border font-inconsolata text-xl z-10">Kontakta oss</button>
            
            <img data-aos="fade-right" data-aos-delay="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-image-computor.svg" alt="Vector illustration of a laptop" class="absolute top-0 left-0">

            <img data-aos="fade-left" data-aos-delay="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-image-mobile.svg" alt="Vector illustration of a mobile" class="absolute bottom-0 right-0">

        </section>

        <!-- Tools section -->
        <section data-aos="fade-up" class="flex flex-col my-20 px-8 justify-between items-center gap-12 max-w-screen-2xl">
            <h4 class="font-inconsolata text-2xl text-center">Genomskinlighet i fokus: Vad vi använder för att skapar dina drömhemsidor.</h4>
            <div class="flex flex-wrap justify-center gap-8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/css3.svg" alt="Css logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/figma.svg" alt="Figma logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/framer.svg" alt="Framer logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/html5.svg" alt="Html logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/illustrator.svg" alt="Adobe illustrator logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/photoshop.svg" alt="Adobe photoshop logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/php.svg" alt="Php logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/react.svg" alt="React logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/sass.svg" alt="Sass/Scss logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tailwindcss.svg" alt="TailwindCSS logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/wordpress2.svg" alt="Wordpress logo">
            </div>
        </section>

        <!-- QNA section -->
        <section data-aos="fade-up" class="flex flex-col relative py-16 px-8 lg:px-36 mx-0 md:mx-8 my-4 justify-between items-center bg-gradient-to-tl from-light-green to-dark-green text-center">
            <h2 class="font-inconsolata text-light-yellow text-4xl sm:text-5xl mb-6">Har du några frågor eller funderingar?</h2>
            <p class="text-light-yellow mb-12">Tveka inte att höra av dig! Jag finns här om du har har frågor som vill ha svar.</p>
            <button class="open-form button-border font-inconsolata text-xl">Ställ din fråga</button>
        </section>

        <!-- About us section -->
        <section data-aos="fade-up" id="about" class="flex flex-col my-20 px-8 justify-between items-center">
            
            <div class="flex flex-col lg:flex-row justify-center items-center gap-4 lg:gap-16">
                <div class="flex flex-row lg:flex-col justify-center gap-8 flex-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jonas-profile.webp" alt="Image of Jonas Johansson" class="h-[316px] min-w-[269px] object-cover object-left-top">
                        <div class="bg-dark-green">
                            <p class="font-inconsolata text-xl text-center text-light-yellow">Jonas Johansson</p>
                        </div>
                    </div>
                </div>
                <div class="max-w-[600px] text-center lg:text-start">
                    <h2 class="font-inconsolata text-4xl sm:text-5xl mb-12">Vilka är A2J web & designs?</h2>
                    <h4 class="text-2xl font-inconsolata mb-4">Vision:</h4>
                    <p class="mb-12">Att bli den ledande webbyrån som, genom en kombination av kreativitet och teknik, skräddarsyr unika och engagerande digitala upplevelser som överträffar våra kunders förväntningar och skapar verkligt värde.</p>
                    <h4 class="text-2xl font-inconsolata mb-4">Mission:</h4>
                    <p class="mb-12">Att hjälpa företag att nå sin fulla potential online genom att skapa skräddarsydda, engagerande och resultatinriktade digitala lösningar.</p>
                    <h4 class="text-2xl font-inconsolata mb-4">Värderingar:</h4>
                    <ul class="list-none lg:list-disc ml-6">
                        <li><span class="font-bold">Kundfokus:</span> Jag sätter alltid våra kunders behov och mål i första hand.</li>
                        <li><span class="font-bold">Kreativitet:</span> Jag strävar ständigt efter innovativa och effektiva lösningar.</li>
                        <li><span class="font-bold">Kvalitet:</span> Jag levererar högkvalitativa resultat som överträffar förväntningar.</li>
                        <li><span class="font-bold">Samarbete:</span> Jag arbetar nära våra kunder för att skapa framgångsrika partnerskap.</li>
                        <li><span class="font-bold">Passion:</span> Jag har en passion för digitala lösningar och älskar att se våra kunder lyckas.</li>
                    </ul>
                </div>
            </div>
        </section>

<?php get_footer(); ?>