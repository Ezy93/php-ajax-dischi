const app = new Vue(
    {
        el: '#app',
        data:{
            albums:[]
        },
        created(){
            axios.get('http://localhost:80/php-ajax-dischi-/server/controller.php').then(
                (result) => {
                    this.albums = result.data.results;
                }
            ).catch(
                (error) => {
                    console.warn(error)
                }
            )
        }
    }
) 