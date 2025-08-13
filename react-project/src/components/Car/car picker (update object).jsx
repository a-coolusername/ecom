
import styles from './car.module.css'
import React, {useState} from "react";
function Car(){

            const [car, setCar] = useState({year: 2024, 
                                        make: "mazda",
                                        model: "miata"})


            function handleYearChange(event){
                setCar(c => ({...c, year: event.target.value}))
            }
            
            function handleModelChange(event){
                setCar(c => ({...c, model: event.target.value}))
            }
            
            function handleMakeChange(event){
                setCar(c => ({...c, make: event.target.value}))
            }

    return(
        <div className={styles.carCard}>
            <h2>picked car is a: <br /> {car.year} {car.make} {car.model}</h2>
            <h3>to change it:</h3> 
            <div className={styles.changeAspect}>
            <label htmlFor="yearChange">Year</label>
            <input type="number" value={car.year} onChange={handleYearChange} name="yearChange"/>
            </div>
            <div className={styles.changeAspect}>
            <label htmlFor="makeChange">Make</label>
            <input type="text" value={car.make} onChange={handleMakeChange} name="makeChange"/>
            </div>
            <div className={styles.changeAspect}>
            <label htmlFor="modelChange">Model</label>
            <input type="text" value={car.model} onChange={handleModelChange} name="modelChange"/>
            </div>
        </div>
    );
}
export default Car