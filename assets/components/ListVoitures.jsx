import React, {useEffect, useState} from "react";
import ReactDOM from "react-dom";
import {toast, ToastContainer} from "react-toastify";
import 'react-toastify/dist/ReactToastify.css';
import Voiture from "./Voiture";

const fetchApi = async(url, options)=>{
    try {
        let response = await fetch(url, options);
        if(response.ok){
            return await response.json()
        }
    }catch (e) {
        console.log("Misy olona azafady:" + e.message);
    }
}

const CallApi = (url, methods, data) => {

    let myHeaders = new Headers({"accept": "application/json"});
    let options = {
        method: methods,
        headers: myHeaders,
        body: data?data:null
    }
    return fetchApi(url, options);
}

function ListVoires() {
    const [Cars, setCars] = useState([])
    const urlGet = window.location + "api/voitures"
    //const notify = () => toast.error("Ops!!! il a y un erreur")

    useEffect(()=>{
       let response = CallApi(urlGet, "GET");
        response.then((result)=>{
            setCars(result);
        });
    },[Cars])

    return (
        <React.StrictMode>
            <div className="row mt-4">
                <h1 className="text-center text-danger">Lists des Voitures</h1>
                {Cars.map((Car)=> (<Voiture Voiture={Car} key={Car.id}/>))}
                <ToastContainer />
            </div>
        </React.StrictMode>
    )
}
const elem = document.getElementById("listVoitures");
ReactDOM.render(<ListVoires/>, elem)

