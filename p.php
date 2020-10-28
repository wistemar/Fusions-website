<?php

$lang = "sv";

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
}

if ($lang == "sv") {
  $language = array("UTSTALLARE" => "Utställare",
                    "KONTAKT" => "Kontakt",
                    "FORFORETAG" => "För företag",
                    "MAIN1" => "Den största satsningen på Fysiksektionens arbetsmarknadsdag någonsin.",
                    "MAIN2" => "Här byggs värdefulla relationer mellan KTHs vassaste studenter och framtidens företag. ",
                    "VALKOMMEN" => " Välkommen till Fusion",
                    "DATUM" => "23 januari 2020",
                    "VAD" => "Vad är Fusion?",
                    "VAD2" => "Fusion är en unik mässa där studenter och företag med intresse för ",
                    "TMF" => "teknik, matematik och fysik",
                    "VAD3" => " får chansen att knyta viktiga kontakter inför framtiden. I samband med Fusion anordnas även andra event såsom lunchföreläsningar och pubar, vilka annonseras på vår",
                    "FB" => "facebooksida",
                    "." => ".",
                    "VAD4" => "Mässan anordnas av Fysiksektionen på Kungliga Tekniska Högskolan och är ett mycket uppskattat event av såväl studenter som företag.",
                    "PLATS" => "Plats: Nymble, Drottning Kristinas väg 15-19",
                    "TID" => "Tid: ",
                    "TID2" => "23 januari 2020",
                    "TID3" => "kl 10.00 – 16.00",
                    "VIFINNS" => "Vi finns även här",
                    "HITTA" => "Hitta till Fusion",
                    "NYMBLE" => "Nymble",
                    "ADRESS" => "Drottning Kristinas väg 15-19",
                    "ORT" => "114 28 Stockholm",
                    "PROJEKTLEDARE" => "Projektledare",
                    "FORETAGSKONTAKT" => "Företagskontakt",
                    "LANKAR" => "Länkar",
                    "VARADEL" => "Vill ni vara en del av Fusion 2020?",
                    "SKICKA" => "Skicka in en intresseanmälan så hör vi av oss!",
                    "TILLANMALAN" => "Till anmälan",
                    "UTSTALLARE2019" => "Utställare Fusion 2019",
                    "UTSTALLARE2020" => "Utställare Fusion 2020",
                    "KONTAKTAFUSION" => "Kontakta Fusion",
                    "PROJEKTANSVARIG" => "Projektansvarig",
                    "PROJEKTGRUPP" => "Projektgruppen Fusion 2020",
                    "MARKNAD" => "Marknadsförings- och designsansvarig",
                    "FORETAGSANSVARIG" => "Företagsansvarig",
                    "LOGISTIKANSVARIG" => "Logistikansvarig",
                    "EKONOMIANSVARIG" => "Ekonomiansvarig",
                    "EVENTANSVARIG" => "Eventansvarig",
                    "SITTNINGSANSVARIG" => "Sittningsansvarig",
                    "CL" => "CL-representant",
                    "VILLVARAMED" => "Vill ni vara med på Fusion?",
                    "SKICKAMEDDELANDE" => "Skicka ett meddelande till ",
                    "SAHORVI" => " så hör vi av oss med mer information.",
                    "VARAPAKET" => "Våra paket",
                    "MASSPAKET" => "Mässpaket",
                    "EVENTPAKET" => "Eventpaket",
                    "HUVUDSPONSOR" => "Huvudsponsor",
                    "MONTER" => "Monter",
                    "FORETAGSVARD" => "Företagsvärd",
                    "SIDORIBROSCHYR" => "Sidor i Fusions broschyr",
                    "LUNCHBILJETTER" => "Lunchbiljetter",
                    "TILLSAMTLIGA" => "Till samtliga representanter",
                    "LUNCHFOREL" => "Lunchföreläsning, pub etc.",
                    "BANKETTBILJETTER" => "Bankettbiljetter",
                    "PREMIUMPARTNERSKAP" => "Premiumpartnerskap",
                    "PREMIUMTEXT" => "(*) Premiumpartnerskap innefattar företagets logga på mässkarta, fotovägg under mässa och bankett, i sektionslokalen under januari, på tröja för projektgrupp och värdar samt på bankettbiljetter. Även en egen sida i bankettens sångblad.",
                    "UTVECKLAD" => "Hemsidan utvecklades av Oskar Söderberg",
                    "BROSCHYR" => "Broschyr 2020"
                    );
}
else {
  $language = array("UTSTALLARE" => "Exhibitors",
                    "KONTAKT" => "Contact",
                    "FORFORETAG" => "For exhibitors",
                    "MAIN1" => "With the intention to become the greatest career fair of the Physics Section yet.",
                    "MAIN2" => "Building valuable networks between KTH's sharpest minds and companies of the future.",
                    "VALKOMMEN" => "Welcome to Fusion the",
                    "DATUM" => "23rd of January 2020",
                    "VAD" => "What is Fusion?",
                    "VAD2" => "Fusion is a unique fair where students and companies with an interest for",
                    "TMF" => "technology, mathematics and physics",
                    "VAD3" => " gets the chance to make valuable contacts. In connection with Fusion other events are arranged, including lunch lectures and pubs, which are announced on our",
                    "FB" => "facebook page",
                    "." => ".",
                    "VAD4" => "The fair is organized by the Physics Section of the Royal Institute of Technology and is a much appreciated event by students as well as companies.",
                    "PLATS" => "Location: Nymble, Drottning Kristinas väg 15-19",
                    "TID" => "Time: ",
                    "TID2" => "23 januari 2020",
                    "TID3" => "10.00 – 16.00",
                    "VIFINNS" => "You can also find us here:",
                    "HITTA" => "Find your way to Fusion",
                    "NYMBLE" => "Nymble",
                    "ADRESS" => "Drottning Kristinas väg 15-19",
                    "ORT" => "114 28 Stockholm",
                    "PROJEKTLEDARE" => "Project manager:",
                    "FORETAGSKONTAKT" => "Exhibitor contact",
                    "LANKAR" => "Links",
                    "VARADEL" => "Do you want to be a part of Fusion 2020?",
                    "SKICKA" => "Send us a message and we will come back to you!",
                    "TILLANMALAN" => "To exhibitor page",
                    "UTSTALLARE2019" => "Exhibitors of Fusion 2019",
                    "UTSTALLARE2020" => "Exhibitors of Fusion 2020",
                    "KONTAKTAFUSION" => "Contact Fusion",
                    "PROJEKTANSVARIG" => "Project manager",
                    "PROJEKTGRUPP" => "The project group of Fusion 2020",
                    "MARKNAD" => "Marketing and design responsible",
                    "FORETAGSANSVARIG" => "Exhibiton responsible",
                    "LOGISTIKANSVARIG" => "Head of logistics",
                    "EKONOMIANSVARIG" => "Head of economics",
                    "EVENTANSVARIG" => "Event responsible",
                    "SITTNINGSANSVARIG" => "Dinner responsible",
                    "CL" => "CL-representative",
                    "VILLVARAMED" => "Do you want to exhibit at Fusion?",
                    "SKICKAMEDDELANDE" => "Send a message to ",
                    "SAHORVI" => " and we will come back to you with more information",
                    "VARAPAKET" => "Our packages",
                    "MASSPAKET" => "Fair package",
                    "EVENTPAKET" => "Event package",
                    "HUVUDSPONSOR" => "Main sponsor",
                    "MONTER" => "Booth",
                    "FORETAGSVARD" => "Exhibitor host",
                    "SIDORIBROSCHYR" => "Pages in Fusion's brochure",
                    "LUNCHBILJETTER" => "Lunch tickets",
                    "TILLSAMTLIGA" => "For all representatives",
                    "LUNCHFOREL" => "Lunch lecture, pub, etc.",
                    "BANKETTBILJETTER" => "Banquet tickets",
                    "PREMIUMPARTNERSKAP" => "Premuim partnership",
                    "PREMIUMTEXT" => "(*) Premium partnership includes having your logo on the following: the fair map, a photo wall during the fair and banquet, in the section hall during January, on t-shirts for the project group and on banquet tickets. Also includes a page in the song booklet for the dinner.",
                    "UTVECKLAD" => "A website developed by Oskar Söderberg",
                    "BROSCHYR" => "Brochure 2020"
                    );
}

?>