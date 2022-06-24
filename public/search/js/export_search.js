export class search{
    //pasamos la url, el id del input, el id de la lista donde se van a mostrar las peliculas
    constructor(myurlp, mysearchp, ul_add_lip) {
        this.url = myurlp;
        this.mysearch = mysearchp;
        this.ul_add_li = ul_add_lip;
        this.idli = "mylist";
        this.pcantidad = document.querySelector("#pcantidad");
    }

    //Aquí dentro va a ir toda la lógica para la muestra de las películas
    InputSearch() {
        this.mysearch.addEventListener("input", (e) =>{
            e.preventDefault();
            try {
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute("context");
                let minimo_letras = 0;
                let valor = this.mysearch.value;
                console.log(valor) ;                
            } catch (error) {
                
            }
        })
    }
       
}