
/*

new Vue ({
    el: "#app",
    data: {
        albumList: []
    },
    mounted(){
        axios.get("../partials/db.php")
        .then((resp) => {
            this.albumList = resp.data.response;
        })
        .catch((er) => {
            alert("Errore nel caricamento dei dati")
            console.error(er);
        })
    }


})

*/