import { right } from "@popperjs/core"

function Header(){
return (
    <header>
        <h1>
            test react       
        </h1>
        <nav>
            <ul style={{ listStyleType: 'none', display: 'inline-flex', listStyle: 'none', padding: 0, margin: 0  }}>
                <li style={{marginRight: '10px'}}> <a href="#"> Home </a></li>
                <li style={{marginRight: '10px'}}> <a href="#"> About </a></li>
                <li style={{marginRight: '10px'}}> <a href="#"> Services </a></li>
                <li style={{marginRight: '10px'}}> <a href="#"> Contact </a></li>
            </ul>
        </nav>

    </header>
);
}
export default Header