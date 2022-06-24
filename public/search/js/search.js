import {search} from "./export_search.js";

//Creamos las variables que recibimos como parámetro para el constructor.
const mysearchp = document.querySelector("#mysearch");
const ul_add_lip = document.querySelector("#showlist");
const myurlp = "/myurl";

const searchPeli = new search(myurlp, mysearchp, ul_add_lip);
searchPeli.InputSearch();
