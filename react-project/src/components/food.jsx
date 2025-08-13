function Food(){
 var food1 = "orange";
 var food2 = "banana"
    return(
        <ul>
            <li>{food1}</li>
            <li>{food2.toUpperCase()}</li>
        </ul>
 );
}
export default Food