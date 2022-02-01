import React from "react"

function Voiture({Voiture}) {
    return (
        <div className="col-4 my-2">
            <div className="card">
                <img src="#" className="card-img-top" alt="sary"/>
                <div className="card-body">
                    <h5 className="card-title">{Voiture.Marque}</h5>
                    <p>Models: {Voiture.models}</p>
                    <p className="card-text">{Voiture.description}</p>
                    <a href={Voiture.slug} className="btn btn-primary">Afficher</a>
                </div>
            </div>
        </div>
    )
}
export default Voiture