
new Vue ({
    el: "#app",
    data: {
        albumList: []
    },
    mounted(){
        axios.get("http://localhost/php-ajax-dischi/partials/server.php")
        .then((resp) => {
            this.albumList = resp.data;
        })

        
        .catch((er) => {
            alert("Errore nel caricamento dei dati")
            console.error(er);
        })
        
    }


})
