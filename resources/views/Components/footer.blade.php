
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="info_logo">
                    <a class="navbar-brand" href="/">
                        <span>
                            Abic Manpower
                        </span>
                        <a class="navbar-brand" href="/">
                            <img src="images/logo-removebg-preview.png" alt="Logo"
                                style="height: 100px; margin-right: 10px;">
                            
                        </a>

                    </a>
                    <p>

                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info_links">
                    <h5>
                        Useful Link
                    </h5>
                    <ul>
                        <li>
                            <a href="about">
                               ABOUT THE COMPANY
                            </a>
                        </li>
                        <li>
                            <a href="https://clients.ncr.dole.gov.ph/clientsearch/search/pages/consubcon.php">
                              Department Of Labor and Employment
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info_info">
                    <h5>
                        Contact Us
                    </h5>
                </div>
                <div class="info_contact">
                    <a href="https://maps.app.goo.gl/bTTnNxiMSqZHaS6EA" class="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        403 CAMPOS RUEDA BLDG. URBAN AVENUE BRGY. PIO DEL PILAR, MAKATI, PHILIPPINES, 1224
                        </span>
                    </a>
                    <a href="" class="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            Call: 0906-938-1261
                            <br>
                            (02)8240 5150
                        </span>
                    </a>
                    <a href="" class="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                            abic.talentteams@gmail.com
                        </span>
                    </a>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="info_form ">
                   <h5>
                        Social Links
                    </h5>
                    {{-- <form action="#">
                        <input type="email" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form>  --}}
                    <div class="social_box">
                        <a href="https://www.facebook.com/profile.php?id=100090318514723">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<footer class="container-fluid footer_section">
    {{-- <p>
        &copy; <span id="currentYear"></span> All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
    </p> --}}
</footer>
<script>
    var botman = botmanInit();
    function botmanInit() {
        return BotMan.create({
            baseUrl: '/botman',
            introMessage: 'Hello! How can I assist you?',
            chatServer: '/botman',
            title: 'ChatBot',
            mainColor: '#408EAF',
        });
    }
</script>
<script src='/js/widget.js'></script>
<script>
    var botmanWidget = {
        aboutText: "You're currently engaging with an AI",
        introMessage: "Hello, how can I help you?",
        title: "ABIC MANPOWER SERVICE CORP!",
        mainColor: "#575757",
        bubbleAvatarUrl: "{{ asset('chatQA2.png') }}",
        headerTextColor: "#ffffff"
    };
</script>
{{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
<script src="js/element.js"></script>
<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: 'en', // Change this to your website's primary language code
      includedLanguages: 'af,sq,am,ar,hy,az,eu,be,bn,bs,bg,ca,ceb,ny,zh-CN,zh-TW,co,hr,cs,da,nl,en,eo,et,tl,fi,fr,fy,gl,ka,de,el,gu,ht,ha,haw,iw,hi,hmn,hu,is,ig,id,ga,it,ja,jw,kn,kk,km,ko,ku,ky,lo,la,lv,lt,lb,mk,mg,ms,ml,mt,mi,mr,mn,my,ne,no,or,ps,fa,pl,pt,pa,ro,ru,sm,gd,sr,st,sn,sd,si,sk,sl,so,es,su,sw,sv,tg,ta,tt,te,th,tr,tk,uk,ur,ug,uz,vi,cy,xh,yi,yo,zu', // List of languages to include
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE, // Layout style
      autoDisplay: false, // Prevent auto-display of the widget
    },
    'google_translate_element' // ID of the HTML element to attach the widget to
  );
}
</script>
