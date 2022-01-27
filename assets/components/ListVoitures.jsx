import React, {useState, useEffect} from "react"
import ReactDOM from "react-dom"

function ListVoires() {
    const [Cars, setCars] = useState([])
    const urlGet = window.location + "api/voitures"
    /**
     * Pérmet d'avoir la donnée de l'API
     *
     * @param url
     * @returns {Promise<void>}
     */
    const getData = async (url) =>{
        let response = await fetch(url)
        if(response.ok){
            let Data = await response.json()
            setCars(Data)
        }
    }
    useEffect(()=>{
        getData(urlGet);
        console.log(Cars)
    },[])
    return (
        <div className="row">
            <div className="col-12">
                <h1 className="text-center text-danger">Lists des Voitures</h1>
            </div>
        </div>
    )
}
const elem = document.getElementById("listVoitures");
ReactDOM.render(<ListVoires/>, elem)

