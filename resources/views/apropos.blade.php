<!doctype html>
<html>
<x-head/>

<body>

    <div id="conteneur">
<x-header/>
        <!-- Début contenu -->
        <div id="contenu">

                <h1>A PROPOS DE MOI</h1>
                <!-- Début section -->
                <section class="section-propos">
                    <article class="article1">
                        <h2>CV</h2>
                        <img src="{{asset('img/cv.png')}}" alt="" width="400" height="600"/>
                        
                    </article>

                    <article class="article2">
                        <h2>Diplômes</h2>
                        <img src="{{asset('img/page_diplomes.png')}}" alt="" width="400" height="600"/> 
                    </article>
                    
                    <article class="article3">
                        <h2>Références</h2>                        
                        <img src="{{asset('img/secret.png')}}" alt="" width="400" height="600" id="im3"/>
                    </article>
                </section>
                <!-- Fin section -->                


            </div>
        <!-- Fin contenu --> 

    <!-- Début Footer -->
   <x-footer/>
    <!-- Fin Footer -->

    </div>
    <!-- Fin conteneur -->    
</body>

</html>