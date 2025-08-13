import styles from './button.module.css'
import React, {useState} from 'react';
function Button(){

    const [age, setAge] = useState(0);
    const handleClick = (e) => e.target.textContent = "click registered";
    const count = (e) => {
        setAge(prevAge => prevAge + 1);
         e.target.textContent = `${age} years old`;}

    return(
        <button className={styles.button} onDoubleClick={handleClick} onClick={count}>Click me</button>
    );
}
export default Button