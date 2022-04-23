

<main id="app" >
    <div class="my-container d-flex flex-wrap mt-3">
        <div class="card flex-shrink-0 m-2" v-for="album in albums" >
            <img :src="album.album_cover" class="card-img-top p-3" :alt="album.title">
            <div class="card-body text-center pb-1">
                <h4 class="card-title text-white mb-4 fw-bold text-uppercase">{{album.title}}</h4>
                <p class="card-text my-text-card mb-0">{{album.author}}</p>
                <p class="card-text my-text-card">{{album.year }}</p>
            </div>
        </div>
    </div>
    
</main>