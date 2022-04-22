

<main id="app">
    
        <ul v-for="album in albums">
            <li>
                <img :src="album.album_cover" :alt="album.title">
            </li>
            <li>
                {{album.title}}
            </li>
            <li>
                {{album.author}}
            </li>
            <li>
                {{album.year }}
            </li>
        </ul>
    
</main>