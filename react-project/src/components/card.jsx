import Monster from '../assets/Monster.png'

function Card(props){
    const styles = {
  maxWidth: "50%",
  height: "auto",
}

{/*use propTypes for debugging, issue will be in console, but programme runs
    PropTypes were deprecated in April 2017 (v15.5.0).

In React 19, we’re removing the propType checks from the React package, and using them will be silently ignored. 
If you’re using propTypes, we recommend migrating to TypeScript or another type-checking solution.

We’re also removing defaultProps from function components in place of ES6 default parameters. Class components 
will continue to support defaultProps since there is no ES6 alternative.
    */}
return(
    <div className="card">
        <img src={Monster} alt="Image Not Found" className='image' style={styles}></img>
        <h2 className='title'>{props.title}</h2>
        <p>in stock? {props.instock ? "Yes" : "No"}</p>
        <p className='description'>10 calories, zero sugar, and a full load of our Monster Energy blend to keep the good times rolling.</p>
    </div>
);
}
export default Card